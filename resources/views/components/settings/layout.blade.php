<div class="flex items-start max-md:flex-col">
    <div class="mr-10 w-full pb-4 md:w-[220px]">
        <flux:navlist>
            <flux:navlist.item :href="route('settings.profile')">{{ __('Profile') }}</flux:navlist.item>
            @if (auth()->user()->hasRole('buyer'))
                <flux:navlist.item :href="route('settings.orders')">{{ __('Orders') }}</flux:navlist.item>
                <flux:navlist.item :href="route('settings.addresses')" wire:navigate>{{ __('Addresses') }}</flux:navlist.item>
            @endif
            <flux:navlist.item :href="route('settings.password')">{{ __('Password') }}</flux:navlist.item>
            <flux:navlist.item :href="route('settings.appearance')" wire:navigate>{{ __('Appearance') }}</flux:navlist.item>
        </flux:navlist>
    </div>

    <flux:separator class="md:hidden" />

    <div class="flex-1 self-stretch max-md:pt-6">
        <flux:heading>{{ $heading ?? '' }}</flux:heading>
        <flux:subheading>{{ $subheading ?? '' }}</flux:subheading>

        <div class="w-full">
            {{ $slot }}
        </div>
    </div>
</div>
