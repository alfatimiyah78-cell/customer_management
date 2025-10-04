<?php

namespace App\Livewire\Admin\Customers\Modal\CustomerPaket;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\DB;
use App\Services\GeneralLogServices;
use Illuminate\Support\Facades\Auth;
use App\Services\CustomerPaketService;
use App\Models\Customers\CustomerPaket;
use App\Http\Requests\CurrentPasswordRequest;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DeleteCustomerPaket extends Component
{
    public $deleteCustomerPaketModal = false;
    public $customerPaket;
    public $input = [];

    private $customerPaketService;
    public function boot(CustomerPaketService $customerPaketService)
    {
        $this->customerPaketService = $customerPaketService;
    }


    #[On('delete-customer-paket-modal')]
    public function showDeleteCustomerModal(CustomerPaket $customerPaket)
    {
        $this->deleteCustomerPaketModal = true;
       // $this->input['deleteOnMikrotik'] = false;
        $this->customerPaket = $customerPaket;
    }

    public function deleteCustomerPaket(CurrentPasswordRequest $request, GeneralLogServices $generalLogServices)
    {
        $this->resetErrorBag();
        $request->validate($this->input);

        $delete =  $this->customerPaketService->deleteCustomerPaket($this->customerPaket);
        if ($delete['success']) $generalLogServices->admin_action($generalLogServices::DELETE_CUSTOMER_PAKET, "Delete " . $this->customerPaket->user->full_name, Auth::user()->full_name);

        $this->notification($delete['title'], $delete['message'], $delete['success'] ? 'success' : 'error');

        $this->closeModal();
    }

    public function closeModal()
    {
        $this->deleteCustomerPaketModal = false;
        $this->dispatch('refresh-customer-paket-list');
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
        return view('livewire.admin.customers.modal.customer-paket.delete-customer-paket');
    }
}
