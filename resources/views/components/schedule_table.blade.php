<!DOCTYPE html>

{{-- header --}}
<h1 class="text-hacklab_green font-bold font-display text-2xl ml-4 mt-10 mb-6">Week rooster</h1>
{{-- order by classroom and print location --}}
@foreach ($classrooms as $classroom)
    <h2 class="text-white ml-4 mt-8 mb-2">{{ $classroom->location }}</h2>
    {{-- table class --}}
    <table class="border-hacklab_green border-2 ml-4">
        {{-- table headers --}}
        <thead>
            <tr class="text-gray-100 ">
                <th class='p-3 m-4 text-center border-hacklab_green border-dashed border-2'>Tijd</th>
                @foreach ($days as $day)
                    <th class='p-3 m-4 text-center'>
                        {{ $day->name }}
                    </th>
                @endforeach
        </thead>
        <tbody class="border-hacklab_green border-2">
            {{-- order by timeslots --}}
            @foreach ($timeslots as $timeslot)
                @php
                    $lessons = $classroom->lessons->get($timeslot);
                @endphp
                <tr class=" text-gray-100 border-hacklab_green border-dashed border-2">
                    <td class='p-3 m-4 text-center border-hacklab_green border-dashed border-2'>{{ $timeslot }}</td>
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
