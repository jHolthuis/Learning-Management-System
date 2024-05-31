<x-mail::panel>
    <x-mail::message>
        # New account

        Welkom bij Hacklab.
        <br>
        Je account is aangemaakt, vanaf nu kan je inloggen met de volgende gegevens:
        <br>
        email: {{ $user->email }}
        <br>
        wachtwoord: {{ $user->password }}


        <x-mail::button :url="$home" color="success">
            Login hier
        </x-mail::button>

        Bedankt,<br>
        {{ config('app.name') }}
    </x-mail::message>
</x-mail::panel>
