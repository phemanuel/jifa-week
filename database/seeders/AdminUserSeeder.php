<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'JifaAdmin',
            'email' => 'jifaweek@gmail.com', // change as needed
            'password' => Hash::make('password123'), // change to secure password
            'role' => 'admin', // make sure your User model has a role column
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Admin user created successfully.');
    }
}