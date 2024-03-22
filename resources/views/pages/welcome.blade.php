{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')
    <?php
    $currentPage = 'home';
    ?>
    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Welcome {{ $name }} </h1>

    <p class="text-gray-50 font-display ml-4">This is the welcome page, only for people who have logged in</p>
@endsection
