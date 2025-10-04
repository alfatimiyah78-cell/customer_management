<?php

namespace App\Livewire\Admin\Customers\Modal\CustomerPaket;

use Livewire\Component;
use App\Models\Websystem;
use Livewire\Attributes\On;
use Illuminate\Support\Carbon;
use App\Models\Customers\CustomerPaket;
use App\Services\Billings\BillingService;
use Pest\Mutate\Mutators\Logical\FalseToTrue;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class EditActivation extends Component
{
    public $editActivationCustomerPaketModal = false;
    public $customerPaket;
    public $input = [];

    #[On('edit-activation-customer-paket-modal')]
    public function showEditActivationCustomerPaketModal(CustomerPaket $customerPaket)
    {
        $this->resetErrorBag();
        $this->editActivationCustomerPaketModal = true;
        $this->customerPaket = $customerPaket;
        $this->input['activation_date'] = Carbon::parse($this->customerPaket->activation_date)->format('Y-m-d');
    }

    public function edit_activation_paket(BillingService $billingService)
    {
        $nowDate = Carbon::now();
        $activationDate = Carbon::parse($this->input['activation_date'])->format('d');
        //$expiredDate = Carbon::now($activationDate . Carbon::now()->format('-m-Y'))->startOfDay();
        //if ($nowDate->gte($expiredDate)) $expiredDate = Carbon::parse($activationDate . Carbon::now()->format('-m-Y'))->add($this->customerPaket->getRenewalPeriod())->startOfDay();
        // $expiredDate = $nowDate->setDay((int)$activationDate)->startOfDay();
        // if ($nowDate->gte($expiredDate)) $expiredDate = $nowDate->setDay((int)$activationDate)->add($this->customerPaket->getRenewalPeriod())->startOfDay();
        $expiredDate = $nowDate->setDay((int)$activationDate)->add($this->customerPaket->getRenewalPeriod())->startOfDay();
        $startDate = Carbon::parse($expiredDate)->sub($this->customerPaket->getRenewalPeriod());

        /*
        if (Websystem::first()->subscription_mode == 'pascabayar') {

            $lastBill = Carbon::parse($this->input['activation_date'])->format('d');
            $lastBill = Carbon::parse($lastBill . Carbon::now()->format('-m-Y'))->startOfDay();
        } else {

            $intervalDateInvoice = 7;
            $month = Carbon::now()->addDays($intervalDateInvoice)->format('m');
            $deadline = Carbon::now()->setMonth((int)$month)->setDay((int)$activationDate);
            $lastBill = $deadline->subDays($intervalDateInvoice)->startOfDay();

            if ($this->customerPaket->needsBilling()) {
                $billingService->generateInvoice($this->customerPaket);
            }

            // $lastBill = Carbon::parse($this->input['activation_date'])->subDays(7)->format('d');
            // $lastBill = Carbon::parse($lastBill.Carbon::now()->format('-m-Y'))->startOfDay();
        }
*/
        switch (Websystem::first()->subscription_mode) {
            case 'pascabayar':
                $lastBill = Carbon::now()->setDay((int)$activationDate)->startOfDay();
                break;
            default:
                $intervalDateInvoice = 7;

                $lastPeriodeInvoice = $this->customerPaket->invoices()->orderBy('periode', 'desc')->first();
                if ($lastPeriodeInvoice) {
                    $lastPeriodeInvoice = Carbon::parse($lastPeriodeInvoice->periode);
                    $nextPeriodeInvoice = $lastPeriodeInvoice->add($this->customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->startOfDay();

                    if ($nextPeriodeInvoice->isPast()) {
                        //Invoice on this periode not found
                        $lastBill =  $lastPeriodeInvoice->sub($this->customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->startOfDay();
                    } else {
                        //Invoice on this periode found
                        $lastBill =  $lastPeriodeInvoice->sub($this->customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->subDay()->startOfDay();
                    }
                    $lastBill = $lastBill->subDays($intervalDateInvoice);
                } else {
                    $lastBill =  Carbon::now()->sub($this->customerPaket->getRenewalPeriod())->setDay((int)$activationDate)->startOfDay();
                }
                //  if ($lastPeriodeInvoice->isPast()) {
                //      $month = Carbon::now()->addDays($intervalDateInvoice)->format('m');
                //  } else {
                //     $month = Carbon::now()->addDays($intervalDateInvoice)->subMonth()->format('m');
                // }


                //  $deadline = Carbon::now()->setMonth((int)$month)->setDay((int)$activationDate);
                //   $lastBill = $deadline->subDays($intervalDateInvoice)->startOfDay();
        }

        $this->customerPaket->forceFill([
            'start_date' => $startDate,
            'activation_date' => $this->input['activation_date'] ?? $this->customerPaket->activation_date,
            'expired_date' => $expiredDate->subDay(),
            'last_billed_at' => $lastBill
        ])->save();

        if ($this->customerPaket->needsBilling()) {
            $billingService->generateInvoice($this->customerPaket);
        }

        $this->dispatch('refresh-customer-paket-list');
        $this->editActivationCustomerPaketModal = false;
        LivewireAlert::title('Success')
            ->text(trans('customer.paket.alert.edit-activation-paket-succesfully'))
            ->position('top-end')
            ->toast()
            ->status('success')
            ->show();
    }
    public function render()
    {
        return view('livewire.admin.customers.modal.customer-paket.edit-activation');
    }
}
