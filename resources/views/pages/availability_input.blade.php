{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- current page for main menu --}}
    <?php
    $currentPage = 'availability';
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
    <h1 class="text-hacklab_green font-display font-bold mt-10 ml-4 text-2xl mb-6">Availability for <x-name> </x-name></h1>

    {{-- form to input the availability for the user --}}
    <form class="bg-gray-900/50 text-gray-50 border-none block p-8 ml-4 w-5/12 h-6/6 text-lg"
        action="{{ route('availability_store') }}" method="POST">
        @csrf

        {{-- select the date --}}
        <div class="form-group">
            <label for="date">Date</label>
            <input
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green form-control"
                type="date" id="date" name="date" required>
        </div>
        {{-- start time input --}}
        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" id="start_time" name="start_time"
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green form-control"
                required>
        </div>
        {{-- end time input --}}
        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" id="end_time" name="end_time"
                class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-6 block w-96 ml-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green form-control"
                required>
        </div>
        {{-- submit button --}}
        <button type="submit"
            class="btn btn-primary bg-hacklab_green border-none rounded-lg w-40 py-3 ml-52 mb-8 block tranistion ease-in-out
            delay-150 duration-200 hover:bg-sky-400 hover:text-white">Bevestig</button>
    </form>

@endsection
