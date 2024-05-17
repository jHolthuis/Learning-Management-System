<label class="text-white ml-4 mb-0">Select teacher
    <select id="teacher_id" name="teacher_select"
        class="bg-gray-500/50 text-white focus:ring-1 focus:outline-none p-3 mt-0 mb-12 block w-96 m-4
    border-2 border-gray-400 focus:border-none rounded-sm focus:ring-hacklab_green focus:outline-1
    outline-hacklab_green placeholder-gray-400 focus:placeholder-hacklab_green">
        <?php foreach($teachers as $teacher): ?>
        <option value="{{ $teacher['id'] }}">
            {{ $teacher['name'] }}
        </option>
        <?php endforeach;?>
    </select>
</label>