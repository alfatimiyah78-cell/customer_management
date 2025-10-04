<div>
    <form wire:submit="update_env" class="max-w-md mt-3">
        <div class="flex flex-col gap-2">
            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.app-env') }}</flux:input.group.prefix>
                <flux:select wire:model="input.app_env">
                    <flux:select.option value="local">Local</flux:select.option>
                    <flux:select.option value="production">Production</flux:select.option>
                </flux:select>
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.app-debug') }}</flux:input.group.prefix>
                <flux:select wire:model="input.app_debug">
                    <flux:select.option value="true">True</flux:select.option>
                    <flux:select.option value="false">False</flux:select.option>
                </flux:select>
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.session-driver') }}
                </flux:input.group.prefix>
                <flux:select wire:model="input.session_driver">
                    <flux:select.option value="database">Database</flux:select.option>
                    <flux:select.option value="file">File</flux:select.option>
                </flux:select>
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.cache-store') }}
                </flux:input.group.prefix>
                <flux:select wire:model="input.cache_store">
                    <flux:select.option value="database">Database</flux:select.option>
                    <flux:select.option value="file">File</flux:select.option>
                </flux:select>
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.queue-connection') }}
                </flux:input.group.prefix>
                <flux:select wire:model="input.queue_connection">
                    <flux:select.option value="database">Database</flux:select.option>
                    <flux:select.option value="sync">Sync</flux:select.option>
                </flux:select>
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.app-timezone') }}
                </flux:input.group.prefix>
                <flux:input wire:model="input.app_timezone" type="text" name="app_timezone"
                    autocomplete="app_timezone" placeholder="ex: Asia/Jakarta" />
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.isolir-driver') }}
                </flux:input.group.prefix>
                <flux:select wire:model="input.isolir_driver" name="isolir_driver">
                    <flux:select.option value="mikrotik">Mikrotik</flux:select.option>
                    <flux:select.option value="server">Server</flux:select.option>
                </flux:select>
            </flux:input.group>

            <flux:input.group>
                <flux:input.group.prefix class="w-1/2">{{ __('websystem.label.subscription-type') }}
                </flux:input.group.prefix>
                <flux:select wire:model="input.subscription_type" name="subscription_type">
                    <flux:select.option value="prabayar">Pra Bayar</flux:select.option>
                    <flux:select.option value="pascabayar">Pasca Bayar</flux:select.option>
                </flux:select>
            </flux:input.group>

            <div class="flex items-center justify-end gap-2">
                 <flux:button wire:click="link_storage" variant="primary" iconTrailing="folder">
            {{ __('websystem.button.link-storage') }}
        </flux:button>
        <flux:button wire:click="optimize" variant="primary" iconTrailing="rocket-launch">
            {{ __('websystem.button.optimize') }}
        </flux:button>
                <flux:button type="submit" variant="primary" iconTrailing="arrow-right">
                    {{ __('customer.button.save') }}
                </flux:button>
            </div>
        </div>
    </form>

    <div class="flex items-center justify-end gap-2">
       
    </div>
</div>
