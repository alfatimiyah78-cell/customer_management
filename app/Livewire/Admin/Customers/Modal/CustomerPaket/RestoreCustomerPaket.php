<?php

namespace App\Livewire\Admin\Customers\Modal\CustomerPaket;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Services\GeneralLogServices;
use Illuminate\Support\Facades\Auth;
use App\Services\CustomerPaketService;
use App\Models\Customers\CustomerPaket;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class RestoreCustomerPaket extends Component
{
    public $restoreCustomerPaketModal = false;
    public $customerPaket;

    #[On('restore-customer-paket-modal')]
    public function showRestoreCustomerPaketModal($customerPaketId)
    {
        $this->reset();
        $this->customerPaket = CustomerPaket::withTrashed()->findOrFail($customerPaketId);

        $this->restoreCustomerPaketModal = true;
    }

    public function restoredCustomerPaket(CustomerPaketService $customerPaketService, GeneralLogServices $generalLogServices)
    {
        DB::beginTransaction();
        try {
             $customerPaketService->disableCustomerPaketOnMikrotik($this->customerPaket, 'false');
            $this->customerPaket->restore();
            $generalLogServices->admin_action($generalLogServices::RESTORE_CUSTOMER_PAKET, "Restore customer paket " .$this->customerPaket->paket->name.'-'.$this->customerPaket->paket->mikrotik->name.' '. $this->customerPaket->user->full_name, Auth::user()->full_name);
            DB::commit();

            LivewireAlert::title('Restore Success!')
                ->text('Restore customer paket successfully')
                ->position('top-end')
                ->toast()
                ->status('success')
                ->show();

            $this->dispatch('refresh-deleted-customer-paket-list');
        } catch (\Exception $e) {
            DB::rollBack();
            LivewireAlert::title('Restore Failed!')
                ->text($e->getMessage())
                ->position('top-end')
                ->toast()
                ->status('error')
                ->show();
        }
        $this->restoreCustomerPaketModal = false;
    }


    public function render()
    {
        return view('livewire.admin.customers.modal.customer-paket.restore-customer-paket');
    }
}
