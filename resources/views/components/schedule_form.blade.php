<h1 class="text-hacklab_green text-2xl font-display font-bold mt-10 ml-4 mb-6">Verander rooster</h1><br>
{{-- form to change the schedule --}}
<form class="bg-gray-900/50 ml-4 border-none block w-5/12 h-6/6 pb-1" name="change_schedule_form" method="POST"
    action="{{ route('store_or_update_schedule') }}">

    {{-- header 2 --}}
    <h2 class="text-white text-3xl pl-4 pt-10 pb-6">Nieuwe les</h2>

    @csrf

    {{-- select the subject to be filled in --}}
    <label class="text-white ml-4 mb-0">Onderwerp
        <select id="subject_id" name="subject"
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green"
            required>
            @foreach ($subjects as $subject)
                :
                <option value="{{ $subject['id'] }}">
                    {{ $subject['name'] }}
                </option>
            @endforeach;
        </select>
    </label>

    {{-- select the teacher for this subject(if there is one) --}}
    <label class="text-white ml-4 mb-0">Leraar
        <select id="teacher_id" name="teacher"
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green">
            <option value="">Selecteer een leraar (optioneel)</option>
            @foreach ($teachers as $teacher)
                :
                <option value="{{ $teacher['id'] }}">
                    {{ $teacher['name'] }}
                </option>
            @endforeach;
        </select>
    </label>

    {{-- select the day of the week this takes place --}}
    <label class="text-white ml-4 mb-0">Dag van de week
        <select id="Day_of_the_week_id" name="day_of_the_week"
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green"
            required>
            @foreach ($weekdays as $weekday)
                :
                <option value="{{ $weekday['id'] }}">
                    {{ $weekday['name'] }}
                </option>
            @endforeach
        </select>
    </label>

    {{-- put in the start time of the lesson --}}
    <label class="text-white ml-4 mb-0">Start tijd
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green"
            type="time" name="start_time" id="start_time_id" placeholder="Start time" time required>
    </label>

    {{-- put in the end time of the lesson --}}
    <label class="text-white ml-4 mb-0">Eind tijd
        <input
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green"
            type="time" name="end_time" id="end_time_id" placeholder="End time" time required>
    </label>

    {{-- select the classroom where the lesson takes place --}}
    <label class="text-white ml-4 mb-0">Lokaal
        <select id="classroom_id" name="classroom"
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
            border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
            outline-hacklab_green"
            required>
            @foreach ($classrooms as $classroom)
                :
                <option value="{{ $classroom['id'] }}">
                    {{ $classroom['location'] }}
                </option>
            @endforeach;
        </select>
    </label>

    {{-- the submit button --}}
    <button
        class="bg-hacklab_green border-none rounded-lg w-40 py-3 ml-52 mb-8 block tranistion ease-in-out
        delay-150 duration-200 hover:bg-sky-400 hover:text-white"
        type="submit">Registreer</button>
</form>
