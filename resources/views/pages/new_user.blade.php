{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- current page for main menu --}}
    <?php
    $currentPage = 'create_user';
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

    {{-- headline text --}}
    <h1 class="text-hacklab_green font-bold font-display text-2xl mt-10 ml-4 mb-6">Hacklab nieuwe account</h1>

    {{-- form method and route --}}
    <form class="bg-gray-900/50 ml-4 border-none block w-5/12 h-6/6 pb-1" name="create_user_form" method="POST"
        autocomplete="off" action="{{ route('store_user') }}">

        {{-- description for form --}}
        <h2 class="text-white text-3xl pl-4 pt-10">Gebruiker toevoegen</h2><br>
        @csrf

        {{-- role component --}}
        <x-role_selector :roles="$roles">
        </x-role_selector>

        {{-- name input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-10 block w-96 ml-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="text" name="name" id="name" placeholder="Naam" string required>


        {{-- email input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="email" name="email" id="email" placeholder="E-mailadres" string required>

        {{-- password input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-10 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="password" name="password" id="Password" placeholder="Wachtwoord" required>

        {{-- phone number input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-12 mb-6 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="tel" name="phone_number" id="phone_number" placeholder="Telefoon nummer">

        {{-- date of birth input field --}}
        <label class="text-white ml-4 mb-0">Geboorte Datum
            <input
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green"
                type="date" name="date_of_birth" id="date_of_birth" required>
        </label>

        {{-- hometown input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-6 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="text" name="hometown" id="hometown" placeholder="Woonplaats" required>

        {{-- start date input field --}}
        <label class="text-white ml-4 mb-0">Start datum
            <input
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-6 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green"
                type="date" name="start_date" id="start_date" required>
        </label>

        {{-- loan laptop checkbox --}}
        <input type="hidden" name="loan_laptop" value="0">
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none ml-4 mb-6
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="checkbox" name="loan_laptop" id="yes" value="1">
        <label for="loan_Equipment" class="text-white ml-4 mb-6">Heeft een laptop nodig</label>

        {{-- submit button --}}
        <button
            class="bg-hacklab_green border-none rounded-lg w-40 py-3 ml-52 mb-8 block tranistion ease-in-out
            delay-150 duration-200 hover:bg-sky-400 hover:text-white"
            type="submit">Registreer</button>
    </form>
@endsection
