<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            ['location' => 'Lokaal 1'],
            ['location' => 'Lokaal 2'],
        ];
    
        Classroom::insert($classrooms);
    }
}

