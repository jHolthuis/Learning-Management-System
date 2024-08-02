{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- set the current page for the main menu --}}
    <?php
    $currentPage = 'login';
    ?>

    {{-- headline text --}}
    <h1 class="text-white text-7xl pl-16 pb-14 pt-6">Hacklab</h1>

    {{-- form route and method --}}
    <form class="bg-gray-900/50 ml-16 border-none block w-4/12 h-4/6" method="POST" action="{{ route('login') }}">
        <h2 class="text-white text-3xl pl-4 pt-10">{{ __('Inloggen') }}</h2><br>
        @csrf

        {{-- email input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-10 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="email" name="email" id="email" placeholder="{{ __('E-mailadres') }}" required>

        {{-- password input field --}}
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="password" name="password" id="password" placeholder="{{ __('Wachtwoord') }}" required>

        {{-- if there are any errors show this --}}
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class=" text-red-600 z-50 ">*{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- submit button --}}
        <button
            class="bg-hacklab_green border-none rounded-lg w-40 py-3 block m-4 tranistion ease-in-out delay-150
            duration-200 hover:bg-sky-400 hover:text-white"
            type="submit">{{ __('Inloggen') }}</button>

        <div class="text-hacklab_green ml-4">{{ __('Opzoek naar de hacklab website?') }}<br>
            <a class="text-hacklab_blue" href="https://hacklab.frl"> {{ __('klik hier!') }}</a>
        </div>
    </form>
@endsection
