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
            @foreach ($timeSlots as $timeSlot)
                <tr class="text-white">
                    <td class='p-3 m-4 text-center'>{{ $timeSlot }}</td>
                    @foreach ($days as $index => $day)
                        <td class='p-3 m-4 text-center'>
                            @if ($lesson)
                                {{ $lesson->name }}
                                {{ $lesson->user->name }}
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
