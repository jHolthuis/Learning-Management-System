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


     // put some users in the table/DB to have something to start with, and the teachers for schedule input
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
            'loan_laptop' => '0'],

            ['name' => 'Sybren',
            'email' => 'Sybren@hacklab.frl',
            'password' => Hash::make('Sybren123'),
            'phone_number' => '0612345679',
            'date_of_birth' => '1984-01-01',
            'home_town' => 'Sneek',
            'start_date' => '2021-01-01',
            'role_id' => '2',
            'loan_laptop' => '0'],

            ['name' => 'Glenn',
            'email' => 'Glenn@hacklab.frl',
            'password' => Hash::make('Glenn123'),
            'phone_number' => '0612345671',
            'date_of_birth' => '1980-01-01',
            'home_town' => 'Reduzum',
            'start_date' => '2023-10-01',
            'role_id' => '2',
            'loan_laptop' => '0'],

            ['name' => 'Jelly',
            'email' => 'Jelly@hacklab.frl',
            'password' => Hash::make('Jelly123'),
            'phone_number' => '0612345672',
            'date_of_birth' => '1978-01-01',
            'home_town' => 'Drachten',
            'start_date' => '2018-01-01',
            'role_id' => '3',
            'loan_laptop' => '0'],

            ['name' => 'Jauke',
            'email' => 'Jauke@student.nl',
            'password' => Hash::make('Jauke123'),
            'phone_number' => '0612345675',
            'date_of_birth' => '1991-09-02',
            'home_town' => 'Leeuwarden',
            'start_date' => '2022-07-01',
            'role_id' => '1',
            'loan_laptop' => '0'],

            ['name' => 'Conré',
            'email' => 'Corné@hacklab.frl',
            'password' => Hash::make('Corne123'),
            'phone_number' => '0612345620',
            'date_of_birth' => '1983-01-01',
            'home_town' => 'Leeuwarden',
            'start_date' => '2023-01-01',
            'role_id' => '2',
            'loan_laptop' => '0'],

            ['name' => 'Melle',
            'email' => 'Melle@hacklab.frl',
            'password' => Hash::make('Melle123'),
            'phone_number' => '0612345630',
            'date_of_birth' => '1986-01-01',
            'home_town' => 'Leeuwarden',
            'start_date' => '2020-01-01',
            'role_id' => '2',
            'loan_laptop' => '0'],

            ['name' => 'Martin',
            'email' => 'Martin@hacklab.frl',
            'password' => Hash::make('Martin123'),
            'phone_number' => '0612345640',
            'date_of_birth' => '1988-01-01',
            'home_town' => 'Leeuwarden',
            'start_date' => '2022-01-01',
            'role_id' => '2',
            'loan_laptop' => '0'],
        ];

        User::insert($users);
    }
}
