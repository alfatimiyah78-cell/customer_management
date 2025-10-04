<?php

namespace App\Livewire\Admin\Customers\Modal\CustomerPaket;

use Livewire\Component;
use App\Models\Websystem;
use Livewire\Attributes\On;
use Illuminate\Support\Carbon;
use App\Models\Customers\CustomerPaket;
use App\Services\Billings\BillingService;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class BulkEditActivation extends Component
{
    public $bulkEditActivationModal = false;
    public $customerPakets;
    public $input = [];

    #[On('bulk-edit-activation-paket-modal')]
    public function showBulkEditActivationModal($customerPaketSelected)
    {
        $this->reset();
        $this->bulkEditActivationModal = true;
        $customerPakets = CustomerPaket::query()
            ->whereIn('id', $customerPaketSelected)
            ->get();
        $this->customerPakets = $customerPakets;
        $customerPaketSelected = [];
    }

    public function edit_bulk_activation_paket(BillingService $billingService)
    {
        /*
        if (Websystem::first()->subscription_mode == 'pascabayar') {

            $lastBill = Carbon::parse($this->input['activation_date'])->format('d');
            $lastBill = Carbon::parse($lastBill . Carbon::now()->format('-m-Y'))->startOfDay();
        } else {
            $lastBill = Carbon::parse($this->input['activation_date'])->subDays(7)->format('d');
            $lastBill = Carbon::parse($lastBill . Carbon::now()->format('-m-Y'))->startOfDay();
        }

        foreach ($this->customerPakets as $customerPaket) {
            $activationDate = Carbon::parse($this->input['activation_date'])->format('d');
            $expiredDate = Carbon::parse($activationDate . Carbon::now()->format('-m-Y'))->startOfDay();
            if (Carbon::now()->gte($expiredDate)) $expiredDate = Carbon::parse($activationDate . Carbon::now()->format('-m-Y'))->add($customerPaket->getRenewalPeriod())->startOfDay();
            $startDate = Carbon::parse($expiredDate)->sub($customerPaket->getRenewalPeriod());

            $customerPaket->forceFill([
                'start_date' => $startDate,
                'activation_date' => $this->input['activation_date'] ?? $customerPaket->activation_date,
                'expired_date' => $expiredDate,
                'last_billed_at' => $lastBill
            ])->save();
        }*/
        $subscribtionMode = Websystem::first()->subscription_mode;
        $activationDate = Carbon::parse($this->input['activation_date'])->format('d');
        foreach ($this->customerPakets as $customerPaket) {
            $expiredDate = Carbon::now()->setDay((int)$activationDate)->add($customerPaket->getRenewalPeriod())->startOfDay();
            $startDate = Carbon::parse($expiredDate)->sub($customerPaket->getRenewalPeriod());

            switch ($subscribtionMode) {
                case 'pascabayar':
                    $lastBill = Carbon::now()->setDay((int)$activationDate)->startOfDay();
                    break;
                default:
                    $intervalDateInvoice = 7;

                    $lastPeriodeInvoice = $customerPaket->invoices()->orderBy('periode', 'desc')->first();
                    $lastPeriodeInvoice = Carbon::parse($lastPeriodeInvoice->periode);
                    $nextPeriodeInvoice = $lastPeriodeInvoice->add($customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->startOfDay();
                    if ($nextPeriodeInvoice->isPast()) {
                        //Invoice on this periode not found
                        $lastBill =  $lastPeriodeInvoice->sub($customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->startOfDay();
                    } else {
                        //Invoice on this periode found
                        $lastBill =  $lastPeriodeInvoice->sub($customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->subDay()->startOfDay();
                    }
                    $lastBill = $lastBill->subDays($intervalDateInvoice);
            }

            $customerPaket->forceFill([
                'start_date' => $startDate,
                'activation_date' => $this->input['activation_date'] ?? $customerPaket->activation_date,
                'expired_date' => $expiredDate->subDay(),
                'last_billed_at' => $lastBill
            ])->save();

            if ($customerPaket->needsBilling()) {
                $billingService->generateInvoice($customerPaket);
            }
        }



        $this->dispatch('refresh-customer-paket-list');
        $this->dispatch('refresh-selected-customer-pakets');
        $this->bulkEditActivationModal = false;
        LivewireAlert::title('Success')
            ->text(trans('customer.paket.alert.edit-activation-paket-succesfully'))
            ->position('top-end')
            ->toast()
            ->status('success')
            ->show();
    }

    public function render()
    {
        return view('livewire.admin.customers.modal.customer-paket.bulk-edit-activation');
    }
}
