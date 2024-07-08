<?php

namespace Database\Seeders;

use App\Models\DayOfTheWeek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DayOfTheWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     // put all the days of the week in the table
    public function run(): void
    {
        $dayofweeks = [
            ['name' => 'Monday'],
            ['name' => 'Tuesday'],
            ['name' => 'Wednesday'],
            ['name' => 'Thursday'],
            ['name' => 'Friday'],
        ];

        DayOfTheWeek::insert($dayofweeks);
    }
}
