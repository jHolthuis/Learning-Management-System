{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- show the current page for the menu --}}
    <?php
    $currentPage = 'schedule';
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

    {{-- x-link to component page --}}
    <x-schedule_table :classrooms='$classrooms' :days='$days' :timeslots='$timeslots'>
    </x-schedule_table>

@endsection
