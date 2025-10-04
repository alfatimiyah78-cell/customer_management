<div>
    <form wire:submit="update_general" class="max-w-md mt-3">
        <div class="flex flex-col gap-2">
            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.company') }}</flux:input.group.prefix>
                <flux:input wire:model="input.title" type="text" name="title" autocomplete="title"
                    placeholder="{{ __('websystem.label.company') }}" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.app-url') }}</flux:input.group.prefix>
                <flux:input wire:model="input.app_url" type="text"
                    name="app_url" autocomplete="app_url"
                    placeholder="{{ __('websystem.placeholder.app-url') }}" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.email') }}</flux:input.group.prefix>
                <flux:input wire:model="input.email" type="text"
                    name="email" autocomplete="email"
                    placeholder="{{ __('websystem.placeholder.email') }}" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.address') }}</flux:input.group.prefix>
                <flux:input wire:model="input.address" type="text"
                    name="address" autocomplete="address"
                    placeholder="{{ __('websystem.placeholder.address') }}" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.city') }}</flux:input.group.prefix>
                <flux:input wire:model="input.city" type="text"
                    name="city" autocomplete="city"
                    placeholder="{{ __('websystem.placeholder.city') }}" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.postal_code') }}</flux:input.group.prefix>
                <flux:input wire:model="input.postal_code" type="text"
                    name="postal_code" autocomplete="postal_code"
                    placeholder="{{ __('websystem.placeholder.postal_code') }}" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.phone') }}</flux:input.group.prefix>
                <flux:input wire:model="input.phone" type="text"
                    name="phone" autocomplete="phone"
                    placeholder="{{ __('websystem.placeholder.phone') }}" />
            </flux:input.group>

            <div>
            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.tax-rate') }}</flux:input.group.prefix>
                <flux:input wire:model="input.tax_rate" type="text"
                    name="tax_rate" autocomplete="tax_rate"
                    placeholder="{{ __('websystem.placeholder.tax-rate') }}" />
                <flux:input.group.suffix>%</flux:input.group.suffix>
            </flux:input.group>
                <span class="text-gray-500">{{ __('websystem.info.tax-rate') }}</span>
            </div>

            <div class="flex items-center justify-end gap-2">
                <flux:button type="submit" variant="primary" iconTrailing="arrow-right">
                    {{ __('customer.button.save') }}
                </flux:button>
            </div>
        </div>
    </form>
</div>
