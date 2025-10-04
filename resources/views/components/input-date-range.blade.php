@props(['start_date', 'end_date', 'disabled' => false])

@php($sharedClasses = 'w-full border rounded-lg block disabled:shadow-none dark:shadow-none appearance-none text-base sm:text-sm py-2 h-10 leading-[1.375rem] pl-3 pr-3 bg-white dark:bg-white/10 dark:disabled:bg-white/[7%] text-zinc-700 disabled:text-zinc-500 placeholder-zinc-400 disabled:placeholder-zinc-400/70 dark:text-zinc-300 dark:disabled:text-zinc-400 dark:placeholder-zinc-400 dark:disabled:placeholder-zinc-500 shadow-xs border-zinc-200 border-b-zinc-300/80 disabled:border-b-zinc-200 dark:border-white/10 dark:disabled:border-white/5')

<style>
    /*
    .pika-label {

        background-color: #d81717;
    }

    .pika-single {

        background: #fff;

    }*/
</style>


<div x-data="pikaDateRange($wire)" {{ $attributes }}>
    <div class="flex flex-col md:flex-row gap-2">
        <input {{ $disabled ? 'disabled' : '' }} x-ref="start" type="text"
            placeholder="{{ trans('billing.ph.start-date') }}"
            {{ $start_date->attributes->merge(['class' => $sharedClasses]) }}>

        <input {{ $disabled ? 'disabled' : '' }} x-ref="end" type="text"
            placeholder="{{ trans('billing.ph.end-date') }}"
            {{ $end_date->attributes->merge(['class' => $sharedClasses]) }}>
    </div>
</div>

@push('scripts')
    <script data-navigate-once>
        function pikaDateRange(wire) {
            return {
                init() {
                    let wireModelStart = this.$refs.start.getAttribute('wire:model');
                    let wireModelEnd = this.$refs.end.getAttribute('wire:model');
                    let start_date = new Pikaday({
                        ...{
                            field: this.$refs.start,
                            onSelect: function() {
                                // set the end_date to one day after start_date
                                end_date.config({
                                    minDate: window.moment(this.getDate()).toDate(),
                                });
                                wire.set(wireModelStart, start_date.toString(), true)
                            },
                        },
                        ...myPikadayConfig()
                    });
                    let end_date = new Pikaday({
                        ...{
                            field: this.$refs.end,
                            minDate: window.moment().toDate(), // not before today
                            //maxDate: window.moment().endOf('month').toDate(),
                            //maxDate: window.moment(start_date, "DD-MM-YYYY").add(5, 'days'),
                            onSelect: () => wire.set(wireModelEnd, end_date.toString(), true),
                        },
                        ...myPikadayConfig()
                    });
                    start_date.config({
                        //minDate: window.moment().toDate(), // not before today
                        minDate: window.moment().startOf('month').toDate(), // not before today
                        maxDate: window.moment().endOf('month').toDate(),
                        // minDate: window.moment([2024, 11, 1]).toDate(),
                        // maxDate: window.moment([2024, 11, 31]).toDate(),
                    });
                }
            }
        }

        function myPikadayConfig() {
            return {
                toString(date) {
                    return window.moment(date).format('ddd, MMM D, YYYY')
                }
            }
        }
    </script>
@endpush
