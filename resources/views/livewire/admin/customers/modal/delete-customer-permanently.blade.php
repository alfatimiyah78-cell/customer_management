<div>
    @if ($deleteCustomerPermanentlyModal)
        <flux:modal class="md:w-120" wire:model="deleteCustomerPermanentlyModal" :dismissible="false"
            @close="$dispatch('close-modal')">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">
                        {!! trans('customer.alert.delete-permanently') !!}
                    </flux:heading>

                    <flux:text class="mt-2">
                        {!!trans('customer.alert.user-delete-permanently') !!}
                    </flux:text>
                </div>
                <form wire:submit='deleteCustomerPermanently' class="flex flex-col gap-6">
                    @if($user->customer_pakets()->whereNotNull('activation_date')->withTrashed()->count())
                    <flux:field variant="inline">
                        <flux:checkbox wire:model.live="input.deleteOnMikrotik" />
                            <flux:label>
                                {{ trans('whatsapp-gateway.label.delete-on-mikrotik') }}
                            </flux:label>
                    </flux:field>
                    @endif
                    <flux:input wire:model="input.current_password" :label="__('user.label.confirm-password')"
                        type="password" name="current_password" placeholder="{{ __('Input your password') }}" />

                    <div class="flex gap-2">
                        <flux:spacer />
                        <flux:modal.close>
                            <flux:button style="cursor: pointer;" variant="ghost"
                                wire:click="$set('deleteCustomerPermanentlyModal', false)">
                                {{ trans('user.button.cancel') }}</flux:button>
                        </flux:modal.close>
                        <flux:button type="submit" variant="danger" icon="trash">
                            {{ trans('customer.button.delete')}}
                        </flux:button>
                    </div>
                </form>
            </div>
        </flux:modal>
    @endif
</div>
