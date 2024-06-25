<!DOCTYPE html>

<?php
use Carbon\Carbon;
?>

<h2 class="text-white">Weekly Schedule</h2>
@foreach ($classrooms as $classroom)
    <h2 class="text-white">{{ $classroom->location }}</h2>
    @php
        $groupedByDay = $classroom->lessons->groupBy('dayOfTheWeek.name');
        $groupedByStartTime = $classroom->lessons->groupBy('start_time');
    @endphp
    <table>
        <thead>
            <tr class="text-white">
                <th class='p-3 m-4 text-center'>Time</th>
                @foreach ($groupedByDay as $key => $day)
                    <th class='p-3 m-4 text-center'>
                        {{ $key }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($groupedByStartTime as $startTime => $lessons)
                <tr class="text-white">
                    <td class='p-3 m-4 text-center'>
                        {{ Carbon::parse($startTime)->format('H:i') }} <br>
                        {{ Carbon::parse($lessons->first()->end_time)->format('H:i') }}
                    </td>
                    @foreach ($lessons as $lesson)
                        <td class='p-3 m-4 text-center'>
                            {{ $lesson->subject->name }} <br>
                            {{ $lesson->user->name }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach
