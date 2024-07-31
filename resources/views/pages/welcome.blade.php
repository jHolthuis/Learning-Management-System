{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')
    {{-- current page for main menu --}}
    <?php
    $currentPage = 'home';
    ?>

    {{-- mainline of text --}}
    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Welkom <x-name> </x-name> </h1>

    {{-- missie van hacklab --}}
    <p class="text-gray-50 font-display ml-4">Mensen positief activeren om kennis en zingeving te vergroten.</p>
@endsection
