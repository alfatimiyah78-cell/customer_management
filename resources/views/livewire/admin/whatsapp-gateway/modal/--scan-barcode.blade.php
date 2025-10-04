<div>
    @if ($scanBarcodeModal)
    <flux:modal class="md:w-120" wire:model="scanBarcodeModal" :dismissible="false" @close="$js.reloadPage">
        <flux:error name="status_error" />

        <div class="grid auto-rows-min gap-2 md:grid-cols-2 px-3 py-8">
            <div>
                <flux:heading size="lg">
                    {{ trans('device.heading.whatsapp-account') }}
                </flux:heading>
                <flux:heading>{{ $number }} </flux:heading>
                <flux:subheading>{{ trans('device.heading.dont-leave-phone') }}
                </flux:subheading>
            </div>

            <div>
                <div
                    class="barcode-image items-center justify-center flex rounded-lg border-2 border-neutral-200 dark:border-neutral-700">
                    <div class="py-15">
                        <flux:icon.loading class="size-20" />

                    </div>
                </div>

                <div class="status-connection items-center justify-center flex mt-2 ">
                    <flux:badge color="green" variant="solid" icon="loading">
                        <span id="status-connection" class="text-wrap">{{
                            trans('device.connecting-whatsapp-server') }}</span>
                    </flux:badge>
                </div>


            </div>
        </div>

    </flux:modal>


    @script
    <script wire-navigate-once>
        $wire.on('get-whatsapp-barcode', (data) => {
                    console.log(data[0]);
                    let cache_data = data;
                    $.ajax({
                        url: data[0].url_qrcode,
                        headers: {
                            'Authorization': data[0].token
                        },
                        type: "GET",
                        data: {
                             api_key: data[0].apikey,
                              device: data[0].device
                        },
                        dataType: 'json',
                        success: function(result_server) {
                            console.log(result_server);
                            if (result_server.status == 'processing') {
                                $('#status-connection').text(result_server.message)
                                if (result_server.status.includes('processing')) {
                                    // count 5 second
                                    let count = 5;
                                    //set interval
                                    let interval = setInterval(() => {
                                        //if count is 0
                                        if (count == 0) {
                                            //clear interval
                                            clearInterval(interval);
                                            //reload page
                                           // location.reload();
                                           $wire.dispatch('get-whatsapp-barcode',cache_data);
                                        }
                                        //change text
                                        console.log(result_server.message+'('+count+')');
                                        $('#status-connection').text(result_server.message+'('+count+')')
                                        //count down
                                        count--;
                                    }, 1000);

                                }
                            } else {
                                $('.barcode-image').html(` <img src="${result_server.qrcode}">`)
                                $('#status-connection').text(result_server.message)
                            }

                        },
                        error: function(xhr, status, error) {
                            console.log('error');
                        }
                    });
                    //console.log(url);
                   /* $.each(url, function(key, value) {
                        console.log(value);
                        $('.barcode-image').html(` <img src="${value}">`)
                            });
        */


                        })
    </script>
    @endscript
    @endif
</div>