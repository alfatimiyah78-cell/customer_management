<div>
    @if ($deleteCustomerPaketModal)
        <flux:modal class="md:w-120" wire:model="deleteCustomerPaketModal" :dismissible="false"
            @close="$dispatch('close-modal')">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">
                        {{ trans('customer.paket.alert.header-delete-customer-paket', ['customer' => $customerPaket->user->full_name, 'paket'=>$customerPaket->paket->name]) }}
                    </flux:heading>

                    <flux:text class="mt-2">
                        {!!trans('customer.paket.alert.content-delete-customer-paket1', ['customer' => $customerPaket->full_name, 'paket'=>$customerPaket->paket->name]) !!}
                    </flux:text>


                </div>
                <form wire:submit='deleteCustomerPaket' class="flex flex-col gap-6">

                    <flux:input wire:model="input.current_password" :label="__('user.label.confirm-password')"
                        type="password" name="current_password" placeholder="{{ __('customer.ph.input-your-password') }}" />

                    <div class="flex gap-2">
                        <flux:spacer />
                        <flux:modal.close>
                            <flux:button style="cursor: pointer;" variant="ghost"
                                wire:click="$set('deleteCustomerPaketModal', false)">
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
