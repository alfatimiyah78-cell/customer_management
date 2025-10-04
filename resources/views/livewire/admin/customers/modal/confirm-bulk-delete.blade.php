<div>
    @if ($bulkDeleteCustomerModal)
        <flux:modal class="md:w-120" wire:model="bulkDeleteCustomerModal" :dismissible="false"
            @close="$dispatch('close-modal')">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">
                        {{ trans('customer.alert.header-bulk-delete-customer', ['count' => $users->count()]) }}
                    </flux:heading>

                    <flux:text class="mt-2">
                        {!!trans('customer.alert.content-bulk-delete-customer', ['count' => $users->count()]) !!}
                    </flux:text>
                </div>
                <form wire:submit='bulkDeleteCustomer' class="flex flex-col gap-6">
                    <flux:input wire:model="input.current_password" :label="__('user.label.confirm-password')"
                        type="password" name="current_password" placeholder="{{ __('Input your password') }}" />

                    <div class="flex gap-2">
                        <flux:spacer />
                        <flux:modal.close>
                            <flux:button style="cursor: pointer;" variant="ghost"
                                wire:click="$set('bulkDeleteCustomerModal', false)">
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
