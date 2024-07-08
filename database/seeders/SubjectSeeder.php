<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     // get all the different subjects in the table
    public function run(): void
    {
       $subjects = [
            ['name' => 'NetAcad'],
            ['name' => 'Frontend'],
            ['name' => 'Backend php'],
            ['name' => 'Java'],
            ['name' => 'Ethical hacking'],
            ['name' => 'Begeleid werken'],
            ['name' => 'Zelfstandig werken'],
            ['name' => 'Intro EH'],
            ['name' => 'Intro SD'],
        ];
    
        Subject::insert($subjects);
    }
}
