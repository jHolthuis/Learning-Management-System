@extends('layout.app')
@section('content')
    <?php
    $currentPage = 'create_user';
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
    <h1 class="text-white text-7xl pl-16 pb-14 pt-6">Hacklab</h1>
    <form class="bg-gray-900/50 ml-16 border-none block w-5/12 h-6/6" name="create_user_form" method="POST"
        action="{{ route('store_user') }}">
        <h2 class="text-white text-3xl pl-4 pt-10">Add new user</h2><br>
        @csrf
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-10 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="text" name="name" id="name" placeholder="Name" string required>

        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="email" name="email" id="email" placeholder="E-mailadres" string required>

        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-10 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="password" name="password" id="Password" placeholder="Password" required>

        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-12 mb-6 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="tel" name="phone_number" id="phone_number" placeholder="Phone number">

        <label class="text-white ml-4 mb-0">Date of Birth
            <input
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
                type="date" name="date_of_birth" id="date_of_birth" placeholder="Date of birth" required>
        </label>

        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-6 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
            type="text" name="hometown" id="hometown" placeholder="Home town" required>

        <label class="text-white ml-4 mb-0">Start date
            <input
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
                type="date" name="start_date" id="start_date" placeholder="Start date" required>
        </label>

        <button
            class="bg-hacklab_green border-none rounded-lg w-40 py-3 ml-52 block tranistion ease-in-out
            delay-150 duration-200 hover:bg-sky-400 hover:text-white"
            type="submit">Register</button>
    </form>

@endsection
