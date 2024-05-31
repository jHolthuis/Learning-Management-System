<x-mail::panel>
    <x-mail::message>
        # New account

        Welkom bij Hacklab.

        Je account is aangemaakt, vanaf nu kan je inloggen met de volgende gegevens:

        email: {{ $user->email }}

        wachtwoord: {{ $user->password }}


        <x-mail::button url="http://localhost" color="success">
            Login hier
        </x-mail::button>

        Succes,
        {{ config('app.name') }}
    </x-mail::message>
</x-mail::panel>
