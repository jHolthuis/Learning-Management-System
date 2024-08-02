{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- current page for main menu --}}
    <?php
    use Carbon\Carbon;
    
    $currentPage = 'account_info';
    ?>

    {{-- if any errors --}}
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- headline for the page --}}
    <h1 class="text-hacklab_green font-bold font-display mt-10 ml-4 text-2xl mb-6">{{ __('Gebruikers informatie voor') }}
        {{ $user->name }}</h1>

    {{-- background layout --}}
    <div class="bg-gray-900/50 text-gray-50 border-none block p-8 ml-4 w-5/12 h-6/6">
        <p class="text-lg leading-8">

            {{-- profile picture --}}
            @if ($user->profile_picture)
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile"
                    style="width: 100px; height: 120px; position:relative; left:-1cm; top:1cm; float:right;">
            @endif

            {{-- personal information --}}
            {{ __('Naam') }}: {{ $user->name }}
            <br>
            {{ __('E-mailadres') }}: {{ $user->email }}
            <br>
            {{ __('Telefoon nummer') }}: {{ 0 . $user->phone_number }}
            <br>
            {{ __('Geboorte datum') }}: {{ Carbon::parse($user->date_of_birth)->format('d-m-Y') }}
            <br>
            {{ __('Woonplaats') }}: {{ $user->home_town }}
            <br>
            {{ __('Start datum') }}: {{ Carbon::parse($user->start_date)->format('d-m-Y') }}
            <br>
            {{ __('Leen laptop') }}: {{ __($user->loan_laptop == 1 ? 'Ja' : 'Nee') }}

            {{-- change profile button --}}
            @can('viewButton', App\Models\Role::class)
                <a class="bg-hacklab_green border-none rounded-lg w-40 py-3 mt-6 mb-6 block tranistion ease-in-out
            delay-150 duration-200 hover:bg-sky-400 hover:text-white text-center"
                    href="{{ route('edit_profile') }}">{{ __('Verander gegevens') }}
                </a>
            @endcan
        </p>
    </div>
@endsection
