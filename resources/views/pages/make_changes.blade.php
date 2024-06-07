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

    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Change schedule</h1>
    <a class="bg-hacklab_green border-none rounded-lg w-52 p-3 my-6 ml-4 block tranistion ease-in-out
    delay-150 duration-200 hover:bg-sky-400 hover:text-white font-bold text-center"
        href="update_schedule">Change Schedule here
    </a>
