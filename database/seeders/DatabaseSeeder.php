<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     // all seeders to run
    public function run(): void
    {

        $this->call([
            Roleseeder::class,
            ClassroomSeeder::class,
            SubjectSeeder::class,
            UserSeeder::class,
            DayOfTheWeekSeeder::class
        ]);
    }
}
