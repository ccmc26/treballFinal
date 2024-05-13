<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder{

    public function run(){
        $password = 'admin';
        $hashedPassword = Hash::make("$password");
        \App\Models\User::factory()->create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> $hashedPassword,
            'email_verified_at' => now(),
            'is_admin' => true
        ]);
    }
}
