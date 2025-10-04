<?php

namespace App\Livewire\Admin\Pakets\Modal;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Pakets\Paket;
use App\Livewire\Actions\Pakets\PaketAction;
use App\Http\Requests\CurrentPasswordRequest;
use App\Http\Requests\Paket\DeletePaketRequest;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class DeletePaketModal extends Component
{
    public $deletePaketModal = false;
    public $paketSelect = null;
    public $input = [];
    public $contentCheckbox;

    /**
     * Delete paketk function
     * Show delete confirmation modal
     */
    #[On('show-delete-paket-modal')]
    public function showDeleteModal(Paket $paket)
    {
        $this->paketSelect = $paket;
        $this->input['checkbox_permanent_delete'] = false;
        $this->input['checkbox_delete_on_mikrotik'] = true;
        $this->contentCheckbox = trans('paket.alert.move-to-trash');
        $this->deletePaketModal = true;
    }

    /**
     * Deleted paket after validate user
     */
    public function deletePaket(DeletePaketRequest $request, PaketAction $paketAction)
    {
        $this->resetErrorBag();
        $request->validate($this->input);
        $paketName = $this->paketSelect->name;
        $checkBoxDeletePermanent = $this->input['checkbox_permanent_delete'] ?? false;
        if ($checkBoxDeletePermanent) {
            $response = $paketAction->delete_paket($this->paketSelect, $this->input);
        } else {
            $response = $paketAction->trash_paket($this->paketSelect, $this->input);
        }

        if ($response == 'success') {
            $title =  trans('paket.alert.delete-paket', ['paket' => $paketName]);
            $message = trans('paket.alert.delete-paket-successfully', ['paket' => $paketName]);
            $this->notification($title, $message, 'success');
            $this->closeDeletePaketModal();
        } else {
            $title =  trans('paket.alert.failed');
            $message = $response->getMessage();
            $this->notification($title, $message, 'error');
        }
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
    /**
     * Clode confirmation modal
     */
    public function closeDeletePaketModal()
    {
        //$this->mikrotik = '';
        $this->dispatch('refresh-paket-list');
        $this->deletePaketModal = false;

        $this->reset();
    }

    public function updatedInputCheckboxConfirmation($value)
    {
        if ($value) {
            $this->contentCheckbox = trans('paket.alert.delete-permanently');
        } else {
            $this->contentCheckbox = trans('paket.alert.move-to-trash');
        }
    }

    public function render()
    {
        return view('livewire.admin.pakets.modal.delete-paket-modal');
    }
}
