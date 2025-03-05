<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Make sure to import the User model
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
{
    User::create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
        'role' => 'admin', // Set role to 'admin'
    ]);

    User::create([
        'name' => 'Regular User',
        'email' => 'user@example.com',
        'password' => Hash::make('password'),
        'role' => 'user', // Set role to 'user'
    ]);
}

}
