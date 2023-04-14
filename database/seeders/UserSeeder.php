<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Hafidh Syahputra',
            'email' => 'hafidhsp123@gmail.com',
            'level' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'name' => 'Hafidh',
            'email' => 'hafidh@gmail.com',
            'level' => 'user',
            'password' => Hash::make('user'),
        ]);
    }
}
