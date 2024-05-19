<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed a normal user
        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'andrewrafat91@gmail.com',
            'password' => Hash::make('password'),
            'UserName' => 'Test User',
            'PhoneNumber' => '01200126619'
        ]);

        // Seed an admin user
        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminpassword'),
            'UserName' => 'Admin User',
            'PhoneNumber' => '01200126620',
            'is_admin' => '1' // Set is_admin to true for admin user
        ]);
    }
}
