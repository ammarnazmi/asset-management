<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Azizi Yaacob',
                'email' => 'AziziYaacob@test.com',
                'password' => Hash::make('password_123'),
            ],
            [
                'name' => 'Azizi Yaacob',
                'email' => 'ammar@test.com',
                'password' => Hash::make('1234'),
            ],
        ]);
    }
}
