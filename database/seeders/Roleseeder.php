<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */


     // input all the different roles in the roles table
    public function run(): void
    {
        $roles = [
            ['name' => 'Student'],
            ['name' => 'Teacher'],
            ['name' => 'Board member'],
            ['name' => 'Admin'],
        ];

        Role::insert($roles);
    }
}
