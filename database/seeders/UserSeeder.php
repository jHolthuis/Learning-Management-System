<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Admin',
            'email' => 'admin@admin.nl',
            'password' => Hash::make('Admin123'),
            'phone_number' => '0612345678',
            'date_of_birth' => '2000-01-01',
            'home_town' => 'Leeuwarden',
            'start_date' => '2024-06-18',
            'role_id' => '4',
            'loan_laptop' => '0']
        ];

        User::insert($users);
    }
}
