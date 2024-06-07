<form class="bg-gray-900/50 ml-16 border-none block w-5/12 h-6/6 pb-1" name="change_schedule_form" method="POST"
    action="{{ route('store_schedule') }}">
    <h2 class="text-white text-3xl pl-4 pt-10">Change Schedule</h2><br>

    @csrf

    <label class="text-white ml-4 mb-0">Subject
        <select id="subject_id" name="subject_id"
            class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
        border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
        outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green">
            <?php foreach($subjects as $subject): ?>
            <option value="{{ $subject['id'] }}">
                {{ $subject['name'] }}
            </option>
            <?php endforeach;?>
        </select>
    </label>

    <input
        class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-10 block w-96 ml-4
border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
        type="time" name="start_time" id="start_time_id" placeholder="Start time" time required>

    <input
        class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 my-12 block w-96 m-4
border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green"
        type="time" name="end_time" id="end_time_id" placeholder="End time" time required>

    <button
        class="bg-hacklab_green border-none rounded-lg w-40 py-3 ml-52 mb-8 block tranistion ease-in-out
delay-150 duration-200 hover:bg-sky-400 hover:text-white"
        type="submit">Apply Changes</button>
</form>
