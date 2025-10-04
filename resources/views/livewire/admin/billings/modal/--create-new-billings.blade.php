<div>
    @if ($createNewBillingsModal)
        <flux:modal class="md:w-120" wire:model="createNewBillingsModal" :dismissible="false">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">
                        {!! trans('billing.label.periode', ['periode' => \Carbon\Carbon::parse($periodeNow)->format('F Y')]) !!}
                    </flux:heading>
                </div>


                <form wire:submit='createNewBill'>
                    <div class="md:flex gap-6 flex-col">
                        <flux:subheading>
                            {{ trans('billing.label.active-paket') }}:
                            {{ trans('billing.content.info-active-paket', ['paket_active' => count(\App\Models\Customers\CustomerPaket::whereStatus('active')->get()), 'paket_total' => count(\App\Models\Customers\CustomerPaket::all())]) }}
                        </flux:subheading>

                        <flux:subheading>
                            {{ trans('billing.label.paket-unbilling') }}:
                            {{ trans('billing.content.info-unbilling-paket', ['paket_unbilling' => count($customer_paket_unbilling), 'periode' => \Carbon\Carbon::parse($periodeNow)->format('F Y')]) }}
                        </flux:subheading>
                        @if (count($customer_paket_unbilling) > 0)
                            <flux:input wire:model="input.current_password" :label="__('user.label.confirm-password')"
                                type="password" name="current_password" placeholder="{{ __('Input your password') }}" />
                        @endif

                        <div class="flex gap-2">
                            <flux:spacer />
                            <flux:button style="cursor: pointer;" variant="ghost" size="sm"
                                wire:click="$set('createNewBillingsModal', false)">
                                {{ trans('billing.button.cancel') }}
                            </flux:button>
                            @if (count($customer_paket_unbilling) > 0)
                                <flux:button type="submit" variant="primary" icon="check" style="cursor: pointer;"
                                    size="sm">
                                    {{ __('billing.button.create') }}
                                </flux:button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </flux:modal>
    @endif
</div>
