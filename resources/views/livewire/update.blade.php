<div>
    <flux:heading>Update to Version {{ \App\Livewire\Update::NEW_VERSION }}</flux:heading>
    <flux:text>Version application installed <flux:badge color="orange">{{ env('APP_VERSION') }}</flux:badge>
    </flux:text>
    <flux:text class="mt-2">
        <div class="font-semibold">News in version 2.0.2</div>
        <ul class="list-disc">
            <li>Perbaikan Bugs</li>
            <li>change the appearance of the customer view page</li>
            <li>add select all of the customer view page</li>
            <li>add select all of the customer paket view page</li>
            <li>add select all of the billing view page</li>
        </ul>
    </flux:text>
    <flux:text class="mt-2">
        <div class="font-semibold">News in version 2.0.1</div>
        <ul class="list-disc">
            <li>Perbaikan Bugs</li>
            <li>Data yang terhapus masih tersimpan di database, anda dapat memulihkan data max.30 Hari</li>
        </ul>
    </flux:text>

    <flux:separator class="mt-2 mb-2" />
    <div class="flex items-center justify-end gap-2">
        @if(version_compare(env('APP_VERSION'), self::NEW_VERSION, '<'))
        <flux:button wire:click="update" variant="primary" icon="arrow-up">
            {{ __('Update') }}
        </flux:button>
        @endif
    </div>
</div>
