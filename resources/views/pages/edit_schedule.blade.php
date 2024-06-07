@extends('layout.app')
@section('content')
    <?php
    $currentPage = 'edit_schedule';
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
    <x-schedule_form :subjects='$subjects'>

    </x-schedule_form>

@endsection
