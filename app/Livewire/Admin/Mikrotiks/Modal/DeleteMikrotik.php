<?php

namespace App\Livewire\Admin\Mikrotiks\Modal;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Servers\Mikrotik;
use App\Services\CustomerPaketService;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DeleteMikrotik extends Component
{
    public $deleteMikrotikModal = false;
    public $input = [];
    public $mikrotik;
    public $countSecret = 0;

    #[On('show-delete-mikrotik-modal')]
    public function showAddPaketModal(Mikrotik $mikrotik)
    {
        $this->deleteMikrotikModal = true;
        $this->input['checkbox_delete_secret_on_mikrotik'] = false;
        $this->mikrotik = $mikrotik;
        $this->countSecret = $mikrotik->customer_pakets->count();
    }

    public function delete(CustomerPaketService $customerPaketService)
    {
        Validator::make($this->input, [
            'current_password' => ['required', 'string', 'current_password:web'],
        ])->validate();

        // if ($this->input['checkbox_delete_secret_on_mikrotik']) {
        $customerPakets = $this->mikrotik->customer_pakets;
        foreach ($customerPakets as $customerPaket) {
            $user = $customerPaket->user;
            $customerPaketService->deleteCustomer($user, $this->input['checkbox_delete_secret_on_mikrotik']);
        }
        //  $title =  trans('mikrotik.alert.failed');
        //  $message = 'Delete data on mikrotik not available now. Please uncheck to continue delete!';
        //  LivewireAlert::title($title)
        //     ->text($message)
        //     ->position('center')
        //    ->status('error')
        //    ->show();
        // } else {
        //dd($this->mikrotik->customer_paket->customer_ppp_paket);
        // foreach($this->mikrotik->customer_pakets as $customerpaket){
        //   $customerpaket->customer_ppp_paket()->delete();
        //  }
        //  foreach($this->mikrotik->customer_pakets as $customerpaket){
        //    $customerpaket->customer_static_paket()->delete();
        // }
        //  $this->mikrotik->customer_pakets()->delete();
        //  $this->mikrotik->pakets()->delete();
        $this->mikrotik->delete();
        $title =  trans('mikrotik.alert.success');
        $message = trans('mikrotik.alert.success-deleted', ['mikrotik' => $this->mikrotik->name]);
        $this->notification($title, $message, 'success');
        //}


        $this->closeDeleteModal();
    }

    public function closeDeleteModal()
    {
        //$this->mikrotik = '';
        $this->dispatch('refresh-mikrotik-list');
        $this->deleteMikrotikModal = false;
        $this->reset();
    }

    public function notification($title, $message, $status)
    {
        LivewireAlert::title($title)
            ->text($message)
            ->position('top-end')
            ->toast()
            ->status($status)
            ->show();
    }
    public function render()
    {
        return view('livewire.admin.mikrotiks.modal.delete-mikrotik');
    }
}
