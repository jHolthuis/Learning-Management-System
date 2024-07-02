<!DOCTYPE html>

<h2 class="text-white">Weekly Schedule</h2>
@foreach ($classrooms as $classroom)
    <h2 class="text-white">{{ $classroom->location }}</h2>
    <table>
        <thead>
            <tr class="text-white">
                <th class='p-3 m-4 text-center'>Time</th>
                @foreach ($days as $day)
                    <th class='p-3 m-4 text-center'>
                        {{ $day->name }}
                    </th>
                @endforeach
        </thead>
        <tbody>
            @foreach ($timeSlots as $timeSlot)
                <tr>
                    <td>{{ $timeSlot }}</td>
                    @foreach ($days as $index => $day)
                        @php
                            [$lessons->start_time, $lessons->end_time] = explode(' - ', $timeSlot);

                            $lesson = $lessons->first(function ($lesson) use ($index, $startTime, $endTime) {
                                return $lesson->day_of_the_week_id == $index + 1 &&
                                    $lesson->start_time == $startTime &&
                                    $lesson->end_time == $endTime;
                            });
                        @endphp
                        <td>
                            @if ($lesson)
                                {{ $lesson->name }}
                            @else
                                {{ 'Room available' }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach
