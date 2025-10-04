<div>
    @if ($disconnectDeviceModal)
    <flux:modal class="md:min-w-sm" wire:model="disconnectDeviceModal" :dismissible="false">

        <div class="flex mt-4">
            <div class="pp-image items-center justify-center flex">
                <flux:icon.loading class="size-20" />
            </div>
            <div class="p-2">
                <flux:error name="status_error" />

                <flux:heading size="lg">
                    {{ trans('device.heading.whatsapp-account') }}
                </flux:heading>
                <flux:heading>{{ $number }} </flux:heading>
                <flux:subheading>{{ trans('device.heading.disconnect-device') }}
                </flux:subheading>
            </div>

        </div>

        <flux:separator class="mt-2 mb-2" />
        <flux:error name="status_error" />

        <div id="loading" class="items-center justify-center flex">
            <div class="py-15">
                <flux:icon.loading class="size-20" />
            </div>
        </div>


        <div id="content" class="hidden auto-rows-min gap-2 px-3 py-4">
            <div class="md:flex gap-2">
                <flux:heading> {{ trans('device.label.device-name') }}:</flux:heading>
                <flux:subheading>
                    <span id="device-name" class="text-wrap">
                        <flux:icon.loading />
                    </span>
                </flux:subheading>
            </div>

            <div class="md:flex gap-2">
                <flux:heading>
                    {{ trans('device.label.device-number') }}:
                </flux:heading>
                <flux:subheading>
                    <span id="device-number" class="text-wrap">
                        <flux:icon.loading />
                    </span>
                </flux:subheading>
            </div>
            <div class="md:flex gap-2">
                <flux:heading>
                    {{ trans('device.label.device-device') }}:
                </flux:heading>
                <flux:subheading>
                    <span id="device-device" class="text-wrap">
                        <flux:icon.loading />
                    </span>
                </flux:subheading>
            </div>


            <div class="items-center justify-center flex mt-2 ">
                <div id="connection-status" class="hidden">
                    <flux:badge color="rose" icon="loading">
                        <span class="text-wrap text-status-connection"></span>
                    </flux:badge>
                </div>
                <div id="disconnection-button" class="gap-4 flex">
                    <flux:button variant="filled" size="sm" icon="arrow-left-circle" style="cursor: pointer;"
                        wire:click="$set('disconnectDeviceModal', false)" wire:loading.attr="disabled">
                        {{ trans('device.button.cancel') }}
                    </flux:button>
                    <flux:button variant="danger" size="sm" icon="arrow-right-circle" style="cursor: pointer;"
                        wire:click="$js.logout('{{ $number }}')">
                        {{ trans('device.button.disconnect') }}
                    </flux:button>
                </div>
            </div>
        </div>

    </flux:modal>
</div>



@script
<script wire-navigate-once>
    $wire.on('get-connection-status', (number) => {
                    // console.log('start script');
                    const device = number[0];
                    let socket = new io('{{ env('WA_URL_SERVER') }}', {
                        transports: ['websocket', 'polling', 'flashsocket']
                    });
                    socket.emit('StartConnection', number[0])
                    socket.on('connection-open', ({
                        token,
                        user,
                        ppUrl
                    }) => {
                        // console.log('connection open');
                        if (token == device) {
                            $('.pp-image').html(` <img src="${ppUrl}" height="300px" alt="${token}">`)
                            $('#device-name').html(user.name ?? 'undefined')
                            $('#device-number').html(user.id)
                            $('#device-device').html(token)
                            $('#loading').addClass('hidden');
                            $('#content').removeClass('hidden');
                           // $('#disconnection-button').addClass('flex');
                        }
                    })

                    socket.on('message', ({
                        token,
                        message
                    }) => {
                        if (token == device) {
                            $('#connection-status').removeClass('hidden');
                            $('#disconnection-button').addClass('hidden');
                            $('#connection-status .text-status-connection').text(message);
                            if (message.includes('Connection closed')) {
                                let count = 5;
                                let interval = setInterval(() => {
                                    if (count == 0) {
                                        clearInterval(interval);
                                        $wire.dispatch('close-disconnect-device-modal');
                                    }
                                    $('#connection-status .text-status-connection').text(`${message} in ${count} second`);
                                    count--;
                                }, 1000);

                            }
                        }
                    });

                    $js('logout', (device) => {
                        // console.log('logout')
                        socket.emit('LogoutDevice', device)
                    })
                })
</script>
@endscript
@endif

</div>
