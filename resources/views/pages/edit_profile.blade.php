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

    {{-- headline text --}}
    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Edit account information for {{ $user->name }}</h1>

    {{-- form method and route --}}
    <form class="bg-gray-900/50 text-gray-50 border-none block p-8 ml-4 w-5/12 h-6/6 text-lg" method="POST"
        action="{{ route('update_profile') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- name input field --}}
        <label class="ml-4" for="name">Name</label>
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="text" name="name" value="{{ $user->name }}" required><br>

        {{-- email input field --}}
        <label class="ml-4" for="email">Email</label>
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="email" name="email" value="{{ $user->email }}" required><br>

        {{-- phone number input field --}}
        <label class="ml-4" for="phone_number">Phone number</label>
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="tel" name="phone_number" value="{{ 0 . $user->phone_number }}" required><br>

        {{-- date of birth input field --}}
        <label class="ml-4" for="date_of_birth">Date of Birth</label>
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="date" name="date_of_birth" value="{{ $user->date_of_birth }}" required><br>

        {{-- home town input field --}}
        <label class="ml-4" for="home_town">Home town</label>
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="text" name="home_town" value="{{ $user->home_town }}" required><br>

        {{-- profile picture link input --}}
        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture" id="profile_picture"><br>

        {{-- submit button --}}
        <button
            class="bg-hacklab_green border-none rounded-lg w-40 py-3 my-6 ml-4 block tranistion ease-in-out
        delay-150 duration-200 hover:bg-sky-400 hover:text-white"
            type="submit">Update</button>
    </form>
    </body>

    </html>
@endsection
