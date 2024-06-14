{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- current page for main menu --}}
    <?php
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
    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Account information for {{ $user->name }}</h1>

    {{-- background layout --}}
    <div class="bg-gray-900/50 text-gray-50 border-none block p-8 ml-4 w-5/12 h-6/6">
        <p class="text-lg leading-8">

            {{-- profile picture --}}
            @if ($user->profile_picture)
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile"
                    style="width: 100px; height: 120px; position:relative; left:-1cm; top:1cm; float:right;">
            @endif

            {{-- personal information --}}
            Name: {{ $user->name }}
            <br>
            Email: {{ $user->email }}
            <br>
            Phone: {{ 0 . $user->phone_number }}
            <br>
            Date of birth: {{ $user->date_of_birth }}
            <br>
            Home town: {{ $user->home_town }}
            <br>
            Start date: {{ $user->start_date }}
            <br>
            Loan laptop: {{ $user->loan_laptop == 1 ? 'Yes' : 'No' }}

            {{-- change profile button --}}
            <a class="bg-hacklab_green border-none rounded-lg w-40 py-3 mt-6 mb-6 block tranistion ease-in-out
            delay-150 duration-200 hover:bg-sky-400 hover:text-white text-center"
                href="edit_profile">Edit profile
            </a>
        </p>
    </div>
