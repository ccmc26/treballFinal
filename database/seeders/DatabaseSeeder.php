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
        // $password2 = 'user';
        // $hashedPassword2 = Hash::make("$password2");
        // \App\Models\User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => $hashedPassword2
        // ]);
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            ArticuloSeeder::class
        ]);
    }
}
