<x-newuser>

    <select id="role" name="role[]">
        <?php foreach($roles as $role): ?>
        <option value="<?php echo $role['id']; ?>">
            <?php echo $role['name']; ?>
        </option>
        <?php endforeach;?>
    </select>

</x-newuser>
