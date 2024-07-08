<!DOCTYPE html>

<h1 class="text-hacklab_green font-bold">Weekly Schedule</h1>
@foreach ($classrooms as $classroom)
    <h2 class="text-white mt-8">{{ $classroom->location }}</h2>
    <table class="border-hacklab_green border-2">
        <thead class="border-hacklab_green border-2">
            <tr class="text-white">
                <th class='p-3 m-4 text-center'>Time</th>
                @foreach ($days as $day)
                    <th class='p-3 m-4 text-center'>
                        {{ $day->name }}
                    </th>
                @endforeach
        </thead>
        <tbody>
            @foreach ($timeslots as $timeslot)
                @php
                    $lessons = $classroom->lessons->get($timeslot);
                @endphp
                <tr class="text-white">
                    <td class='p-3 m-4 text-center'>{{ $timeslot }}</td>
                    @for ($i = 1; $i <= 5; $i++)
                        <td class='p-3 m-4 text-center'>
                            @php
                                $lesson = $lessons ? $lessons->firstWhere('day_of_week_id', '=', $i) : null;
                            @endphp
                            @if ($lesson == null)
                                {{ 'Room available' }}
                            @else
                                {{ $lesson->subject->name }} <br>
                                @if ($lesson->user == null)
                                    {{ '' }}
                                @else
                                    {{ $lesson->user->name }}
                                @endif
                            @endif
                        </td>
                    @endfor
                </tr>
            @endforeach
        </tbody>
    </table>
@endforeach
