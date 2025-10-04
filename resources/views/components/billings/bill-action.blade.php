@props(['billing'])
<div class="flex gap-2 justify-end flex-col">
    <div class="flex justify-end">
        <flux:button.group>
            @if (
                $billing->periode === $billing->customer_paket->invoices()->orderBy('periode', 'desc')->first()->periode &&
                    $billing->payments->count())
                <flux:tooltip content="{{ __('billing.button.unpay') }}">
                    <flux:button size="xs"
                        wire:click="$dispatch('billing-unpayment-modal', {invoice: '{{ $billing->id }}'})"
                        style="cursor: pointer;" variant="danger"
                        icon="x-circle">
                        {{ __('billing.button.unpay') }}
                    </flux:button>
                </flux:tooltip>
            @endif

            @if (
                $billing->status != 'paid' &&
                    $billing->periode ===
                        $billing->customer_paket->invoices()->where('status', '!=', 'paid')->orderBy('periode', 'asc')->first()->periode)
                <flux:tooltip content="{{ __('billing.button.pay') }}">
                    <flux:button size="xs"
                        wire:click="$dispatch('billing-payment-modal', {invoice: '{{ $billing->id }}'})"
                        style="cursor: pointer;" variant="success" icon="check">
                        {{ __('billing.button.pay') }}
                    </flux:button>
                </flux:tooltip>
            @endif
        </flux:button.group>
    </div>
    <div class="flex justify-end">
        <flux:button.group>
            @if ($billing->status != 'paid')

                <flux:tooltip content="{{ __('billing.button.download-invoice') }}">
                    <flux:button size="xs" wire:click="download_customer_invoice('{{ $billing->id }}')"
                        style="cursor: pointer;" variant="primary" icon="printer" />
                </flux:tooltip>

                <flux:tooltip content="{{ __('billing.button.add-discount') }}">
                    <flux:button size="xs"
                        wire:click="$dispatch('add-discount-modal', {invoice: '{{ $billing->id }}'})"
                        style="cursor: pointer;" variant="primary" icon="plus-circle" />
                </flux:tooltip>

                <flux:tooltip content="{{ __('billing.button.delete-billing') }}">
                    <flux:button size="xs"
                        wire:click="$dispatch('billing-delete-modal', {invoice: '{{ $billing->slug }}'})"
                        style="cursor: pointer;" variant="danger" icon="trash" disabled />
                </flux:tooltip>
            @else
                @if ($billing->amount - $billing->discount > 0)
                    <flux:button size="xs"
                        wire:click="$dispatch('download-billing-modal', {billing: '{{ $billing->id }}'})"
                        title=" {{ __('billing.button.receipt') }}" style="cursor: pointer;" variant="primary"
                        icon="printer" disabled />
                @endif
            @endif
        </flux:button.group>
    </div>
</div>
