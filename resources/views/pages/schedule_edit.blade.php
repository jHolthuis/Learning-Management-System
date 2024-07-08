{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- current page for main menu --}}
    <?php
    $currentPage = 'schedule_edit';
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
    <x-schedule_form :subjects='$subjects' :weekdays='$weekdays' :teachers='$teachers' :classrooms='$classrooms'> </x-schedule_form>

@endsection
