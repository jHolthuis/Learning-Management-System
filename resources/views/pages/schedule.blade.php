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

    @foreach ($lessons as $lesson)
        <div class="lesson">
            <h4>{{ $lesson->subject->name }}</h4>
            <p>Teacher: {{ $lesson->user->name }}</p>
            <p>Classroom: {{ $lesson->classroom->location }}</p>
            <p>Time: {{ $lesson->start_time }} - {{ $lesson->end_time }}</p>
        </div>
    @endforeach
