<x-layouts.app.header :title="$title ?? null" :mikrotik="$mikrotik">
    <flux:main container>
        @include('partials.show-mikrotik-heading')
        <div class="flex max-md:flex-col items-start">
            <div class="w-full md:w-[220px] pb-4 mr-10">
                <flux:navlist>
                    <flux:navlist.item wire:navigate
                        href="{{ route('managements.mikrotik.dashboard', $mikrotik->slug) }}"
                        :current="request()->routeIs('managements.mikrotik.dashboard')">Dashboard
                    </flux:navlist.item>
                    <flux:navlist.item wire:navigate
                        href="{{ route('managements.mikrotik.dashboard', $mikrotik->slug) }}"
                        :current="request()->routeIs('managements.mikrotik.dashboard')">Dashboard
                    </flux:navlist.item>
                </flux:navlist>
            </div>
            <flux:separator class="md:hidden" />
            <div class="flex-1 self-stretch max-md:pt-6">
                <flux:heading>{{ $heading ?? '' }}</flux:heading>
                <flux:subheading>{{ $subheading ?? '' }}</flux:subheading>
                 <div class="mt-5 w-full max-w-screen">
                    {{ $slot }}
                 </div>
            </div>
        </div>
    </flux:main>
    <!--Custom Script-->
    @livewireChartsScripts
    @stack('scripts')
</x-layouts.app.header>
