<div>
    @if ($deletePaketModal)

    <flux:modal class="md:w-120" wire:model="deletePaketModal" :dismissible="false" @close="$dispatch('close-modal')">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">
                    {{ trans('paket.alert.header-delete', ['paket' => $paketSelect->name]) }}
                </flux:heading>
                <flux:subheading>
                    {{ trans('paket.alert.content-delete', ['paket' => $paketSelect->name, 'mikrotik' =>
                    $paketSelect->mikrotik->name]) }}
                </flux:subheading>
            </div>

            <flux:checkbox wire:model.live="input.checkbox_delete_on_mikrotik" disabled
                label="{{ trans('paket.helper.delete-on-mikrotik') }}" />

            <flux:checkbox wire:model.live="input.checkbox_permanent_delete"
                label="{{ $input['checkbox_permanent_delete'] ? trans('paket.helper.if-check-delete-permanent'):trans('paket.helper.if-uncheck-delete-permanent') }}" />


            <flux:field>
                <flux:select wire:model="input.selectedPaket" :label="__('paket.ph.select-action')">
                    <flux:select.option value=""> {{ trans('paket.ph.select-action') }}
                    </flux:select.option>
                    <flux:select.option value="{{ $paketSelect->id }}">
                        {{ trans('paket.ph.delete-all-client', [
                        'paket' => $paketSelect->name,
                        'count_client' => count($paketSelect->customer_pakets),
                        ]) }}
                    </flux:select.option>
                    @foreach (\App\Models\Pakets\Paket::whereNot('id', $paketSelect->id)->where('disabled',
                    false)->orderBy('name', 'asc')->get() as $paket)
                    <flux:select.option value="{{ $paket->id }}">
                        {{ trans('paket.ph.move-to', [
                        'count_client' => count($paketSelect->customer_pakets),
                        ]) }}
                        {{ $paket->name }}
                    </flux:select.option>
                    @endforeach
                </flux:select>
                <flux:error name="selectedPaket" />
                @if ($input['checkbox_permanent_delete'])
                <p class="ms-auto mt-2 text-xs text-gray-500 dark:text-gray-400">
                    {!! trans('paket.helper.option-delete-permanent', [
                    'paket' => $paketSelect->name,
                    'count_client' => count($paketSelect->customer_pakets),
                    ]) !!}</span>
                </p>
                @else
                <p class="ms-auto mt-2 text-xs text-gray-500 dark:text-gray-400">
                    {!! trans('paket.helper.option-delete', [
                    'paket' => $paketSelect->name,
                    'count_client' => count($paketSelect->customer_pakets),
                    ]) !!}</span>
                </p>
                @endif

            </flux:field>

            <flux:input wire:model="input.current_password" :label="__('user.label.confirm-password')" type="password"
                name="current_password" autofocus autocomplete="current_password" placeholder="{{ __('Password') }}" />



            <div class="flex items-center justify-end">
                <flux:button wire:click="$set('deletePaketModal', false)" class="me-2">
                    {{ trans('user.button.nevermind') }}
                </flux:button>
                <flux:button wire:click="deletePaket" variant="danger" icon="trash">
                    {{ trans('user.button.delete') }}
                </flux:button>
            </div>

        </div>

    </flux:modal>
    @endif
</div>
