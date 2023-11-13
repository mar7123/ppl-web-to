<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserPKGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::get();
        $to = \App\Models\TryoutPKG::take(5)->get();
        foreach ($user as $u) {
            foreach ($to as $t) {
                \App\Models\UserPKG::factory(1)
                    ->withIDs($u->user_id, $t->tryout_id)
                    ->create();
            }
        }
    }
}
