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

        $password2 = 'user';
        $hashedPassword2 = Hash::make("$password2");
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => $hashedPassword2
        ]);
        $this->call([
            UserSeeder::class,
            ArticuloSeeder::class
        ]);
    }
}
