<?php

namespace App\Livewire\Admin\Customers\Modal;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Services\GeneralLogServices;
use Illuminate\Support\Facades\Auth;
use App\Services\CustomerPaketService;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class RestoreCustomer extends Component
{

    public $restoreCustomerModal = false;
    public $user;
    public $input = [];

    #[On('restore-customer-modal')]
    public function showRestoreCustomerModal($user)
    {
        $this->reset();
        $this->user = User::withTrashed()->findOrFail($user);
        $this->restoreCustomerModal = true;
    }

    public function restoredCustomer(CustomerPaketService $customerPaketService, GeneralLogServices $generalLogServices)
    {

        //dd($this->user->login_histories->withTrashed());
        DB::beginTransaction();
        //dd($this->user->customer_pakets()->whereNotNull('activation_date')->withTrashed()->get());
        try {
            foreach ($this->user->customer_pakets()->whereNotNull('activation_date')->withTrashed()->get() as $customerPaket) {
              // dd($customerPaket);
                $customerPaketService->disableCustomerPaketOnMikrotik($customerPaket, 'false');
                $generalLogServices->admin_action($generalLogServices::RESTORE_CUSTOMER, "Restore customer " . $this->user->full_name, Auth::user()->full_name);
            }
            $this->user->restore();
            DB::commit();

            LivewireAlert::title('Restore Success!')
                ->text('Restore customer successfully')
                ->position('top-end')
                ->toast()
                ->status('success')
                ->show();

            $this->dispatch('refresh-deleted-customer-list');
        } catch (\Exception $e) {
            DB::rollBack();
            LivewireAlert::title('Restore Failed!')
                ->text($e->getMessage())
                ->position('top-end')
                ->toast()
                ->status('error')
                ->show();
        }
        //$this->user->customer_pakets->restore();
        //$this->user->login_histories->restore();
        //$this->user->user_boot_message->restore();

        $this->restoreCustomerModal = false;
    }

    public function render()
    {
        return view('livewire.admin.customers.modal.restore-customer');
    }
}
