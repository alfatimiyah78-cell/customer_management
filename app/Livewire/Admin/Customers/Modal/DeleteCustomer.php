<?php

namespace App\Livewire\Admin\Customers\Modal;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Services\GeneralLogServices;
use Illuminate\Support\Facades\Auth;
use App\Services\CustomerPaketService;
use App\Http\Requests\CurrentPasswordRequest;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DeleteCustomer extends Component
{

    public $deleteCustomerModal = false;
    public $user;
    public $input = [];
    private CustomerPaketService $customerPaketService;
    public function boot(CustomerPaketService $customerPaketService)
    {
        $this->customerPaketService = $customerPaketService;
    }

    #[On('delete-customer-modal')]
    public function showDeleteCustomerModal(User $user)
    {
        $this->deleteCustomerModal = true;
       // $this->input['deleteOnMikrotik'] = false;
        $this->user = $user;
    }

    public function deleteCustomer(CurrentPasswordRequest $request, GeneralLogServices $generalLogServices)
    {
        $this->resetErrorBag();
        $userName = $this->user->full_name;
        $request->validate($this->input);

        //$delete =  $this->customerPaketService->deleteCustomer($this->user, $this->input['deleteOnMikrotik']);
        $delete =  $this->customerPaketService->deleteCustomer($this->user);
        //Add log
        if ($delete['success']) $generalLogServices->admin_action($generalLogServices::DELETE_CUSTOMER, "Delete " . $userName, Auth::user()->full_name);

        $this->notification($delete['success'] ?trans('customer.alert.success'):trans('customer.alert.failed'), $delete['message'], $delete['success'] ? 'success' : 'error');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->deleteCustomerModal = false;
        $this->dispatch('refresh-customer-list');
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
        return view('livewire.admin.customers.modal.delete-customer');
    }
}
