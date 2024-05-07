@extends('layout.app')
@section('content')
    <?php
    $currentPage = 'account_info';
    ?>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Account information for {{ $user->name }}</h1>

    <div class="bg-gray-900/50 text-gray-50 border-none block p-8 ml-4 w-5/12 h-6/6">
        <p class="text-lg leading-8">
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
            <button
                class="bg-hacklab_green border-none rounded-lg w-40 py-3 mt-6 mb-6 block tranistion ease-in-out
            delay-150 duration-200 hover:bg-sky-400 hover:text-white"
                href="www.editprofile.nl">Edit profile
            </button>
        </p>
    </div>
