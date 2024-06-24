<!DOCTYPE html>

<?php
use Carbon\Carbon;
?>

<h2 class="text-white">Weekly Schedule</h2>
<table>
    <tr class="text-white">
        <th class='p-3 m-4 text-center'>Time</th>
        <th class='p-3 m-4 text-center'>Monday</th>
        <th class='p-3 m-4 text-center'>Tuesday</th>
        <th class='p-3 m-4 text-center'>Wednesday</th>
        <th class='p-3 m-4 text-center'>Thursday</th>
        <th class='p-3 m-4 text-center'>Friday</th>
    </tr>
    @foreach ($lessons as $lesson)
        <tr class="text-white">
            <td class='p-3 m-4 text-center'>{{ Carbon::parse($lesson->start_time)->format('H:i') }}</td>
            <td class='p-3 m-4 text-center'>
                @if ($lesson->day_of_week == '1')
                    {{ $lesson->subject->name }}
                @endif
            </td>
            <td class='p-3 m-4 text-center'>
                @if ($lesson->day_of_week == '2')
                    {{ $lesson->subject->name }}
                @endif
            </td>
            <td class='p-3 m-4 text-center'>
                @if ($lesson->day_of_week == '3')
                    {{ $lesson->subject->name }}
                @endif
            </td>
            <td class='p-3 m-4 text-center'>
                @if ($lesson->day_of_week == '4')
                    {{ $lesson->subject->name }}
                @endif
            </td>
            <td class='p-3 m-4 text-center'>
                @if ($lesson->day_of_week == '5')
                    {{ $lesson->subject->name }}
                @endif
            </td>
        </tr>
    @endforeach
</table>
