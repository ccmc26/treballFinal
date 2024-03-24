<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $password = 'admin';
        $hashedPassword = Hash::make("$password");
        \App\Models\User::factory()->create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> $hashedPassword
        ]);
        $this->call([
            UserSeeder::class
        ]);
    }
}
