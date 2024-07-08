<!DOCTYPE html>

{{-- header --}}
<h1 class="text-hacklab_green font-bold">Weekly Schedule</h1>
{{-- order by classroom and print location --}}
@foreach ($classrooms as $classroom)
    <h2 class="text-white mt-8">{{ $classroom->location }}</h2>
    {{-- table class --}}
    <table class="border-hacklab_green border-2">
        {{-- table headers --}}
        <thead class="border-hacklab_green border-2">
            <tr class="text-gray-100">
                <th class='p-3 m-4 text-center'>Time</th>
                @foreach ($days as $day)
                    <th class='p-3 m-4 text-center'>
                        {{ $day->name }}
                    </th>
                @endforeach
        </thead>
        <tbody>
            {{-- order by timeslots --}}
            @foreach ($timeslots as $timeslot)
                @php
                    $lessons = $classroom->lessons->get($timeslot);
                @endphp
                <tr class=" text-gray-100">
                    <td class='p-3 m-4 text-center'>{{ $timeslot }}</td>
                    {{-- get the day of the week for every lesson --}}
                    @for ($i = 1; $i <= 5; $i++)
                        <td class='p-3 m-4 text-center'>
                            @php
                                $lesson = $lessons ? $lessons->firstWhere('day_of_week_id', '=', $i) : null;
                            @endphp
                            {{-- if lesson is empty print this --}}
                            @if ($lesson == null)
                                {{ 'Room available' }}
                                {{-- else print the lessen --}}
                            @else
                                {{ $lesson->subject->name }} <br>
                                {{-- if there is no teacher print nothing --}}
                                @if ($lesson->user == null)
                                    {{ '' }}
                                    {{-- else print teacher name --}}
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
