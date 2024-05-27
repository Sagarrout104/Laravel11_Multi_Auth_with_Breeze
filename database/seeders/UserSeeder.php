<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'admin'
            ],
            [
                'name' => 'vender',
                'email' => 'vender@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'vender'
            ],
            [
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('1234'),
                'role' => 'customer'
            ]
        ]);
    }
}
