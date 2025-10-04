<?php

namespace App\Livewire\Admin\Customers\Modal;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Services\GeneralLogServices;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CurrentPasswordRequest;
use App\Services\CustomerPaketService;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DeleteCustomerPermanently extends Component
{

    public $deleteCustomerPermanentlyModal = false;
    public $user;
    public $input = [];


    #[On('delete-customer-permanently-modal')]
    public function showDeleteCustomerPermanentlyModal($userId)
    {
        $this->user = User::withTrashed()->findOrFail($userId);
        $this->input['deleteOnMikrotik'] = false;
        $this->deleteCustomerPermanentlyModal = true;
    }

    public function deleteCustomerPermanently(CurrentPasswordRequest $request, GeneralLogServices $generalLogServices, CustomerPaketService $customerPaketService)
    {
        $this->resetErrorBag();
        $request->validate($this->input);
        DB::beginTransaction();
        try {
            $customerName = $this->user->full_name;

            if($this->input['deleteOnMikrotik']){
                foreach($this->user->customer_pakets()->whereNotNull('activation_date')->withTrashed()->get() as $customerPaket){
                    $customerPaketService->delete_user_on_mikrotik($customerPaket);
                }
            }
           $this->user->forceDelete();
            //Add log
            $generalLogServices->admin_action($generalLogServices::DELETE_CUSTOMER, "Delete permanently " . $customerName, Auth::user()->full_name);
            DB::commit();
            $this->notification(trans('customer.alert.success'), trans('customer.alert.customer-delete-detail', ['customer' => $customerName]), 'success');
        } catch (\Exception $e) {
             DB::rollBack();
            $this->notification(trans('customer.alert.failed'), $e->getMessage(), 'error');
        }
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->deleteCustomerPermanentlyModal = false;
        $this->dispatch('refresh-deleted-customer-list');
    }

    public function notification($title, $text, $status)
    {
        LivewireAlert::title($title)
            ->text($text)
            ->position('top-end')
            ->toast()
            ->status($status)
            ->show();
    }

    public function render()
    {
        return view('livewire.admin.customers.modal.delete-customer-permanently');
    }
}
