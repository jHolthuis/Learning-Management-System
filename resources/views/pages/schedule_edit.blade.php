@extends('layout.app')
@section('content')
    <?php
    $currentPage = 'schedule_edit';
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

    <x-schedule_form :subjects='$subjects' :weekdays='$weekdays' :teachers='$teachers' :classrooms='$classrooms'> </x-schedule_form>

@endsection
