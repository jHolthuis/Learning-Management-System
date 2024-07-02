@extends('layout.app')
@section('content')
    <?php
    $currentPage = 'schedule';
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

    <x-schedule_table :lessons='$lessons' :classrooms='$classrooms' :days='$days' :timeSlots='$timeSlots'> </x-schedule_table>
