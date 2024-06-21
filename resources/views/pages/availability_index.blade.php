{{-- start the section for content(see the layout app.blade) --}}
@extends('layout.app')
@section('content')

    {{-- format for date and time to use and current page for main menu --}}
    <?php
    use Carbon\Carbon;
    $currentPage = 'availability_index';
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

    {{-- headline for the page --}}
    <h1 class="text-gray-50 font-display mt-10 ml-4 text-2xl mb-6">Availability for <x-name> </x-name></h1>

    <table class=" table bg-gray-900/50 text-gray-50 border-2 border-hacklab_green p-8 ml-4 w-5/12 h-6/6 text-lg">
        <thead>
            <tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($availabilities as $availability)
                <tr class="border-2 border-hacklab_green">
                    <td class="text-center">{{ Carbon::parse($availability->date)->format('d-m-Y') }}</td>
                    <td class="text-center">{{ Carbon::parse($availability->start_time)->format('H:i') }}</td>
                    <td class="text-center">{{ Carbon::parse($availability->end_time)->format('H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
