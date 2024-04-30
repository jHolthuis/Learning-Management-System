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
