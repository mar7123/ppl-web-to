<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();
        $salt = Str::random(10);
        \App\Models\User::first()->update([
            "username" => "admin123",
            "full_name" => "Admin admin",
            'salt' => $salt,
            "password" => Hash::make("admin123" . $salt),
            "email" => "admin123@email.com",
            "birth_date" => "2002-08-18",
            "phone_num" => "+6281888888888",
            "school" => "SMAN 1 Bandung",
            "major" => "Saintek",
            "grad_date" => "2024"
        ]);
    }
}
