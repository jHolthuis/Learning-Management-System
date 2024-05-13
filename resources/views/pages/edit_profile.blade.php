@extends('layout.app')
@section('content')
    <?php
    $currentPage = '';
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
    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Edit account information for {{ $user->name }}</h1>
