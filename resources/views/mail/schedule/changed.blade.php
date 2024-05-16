<x-mail::panel>
    <x-mail::message>
        #schedule changed

        Your schedule has been changed.

        <x-mail::button :url="$schedule" color="success">
            View schedule
        </x-mail::button>

        Thanks,<br>
        {{ config('app.name') }}
    </x-mail::message>
</x-mail::panel>
