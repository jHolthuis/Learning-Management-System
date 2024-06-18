<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            Roleseeder::class,
            ClassroomSeeder::class,
            SubjectSeeder::class,
            UserSeeder::class
        ]);
    }
}
