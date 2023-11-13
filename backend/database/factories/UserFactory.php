<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salt = Str::random(10);
        return [
            'username' => fake()->userName(),
            'full_name' => fake()->name(),
            'salt' => $salt,
            'password' => Hash::make("test123" . $salt), // password
            'email' => fake()->unique()->safeEmail(),
            'birth_date' => fake()->date(),
            'phone_num' => fake()->e164PhoneNumber(),
            // 'prov' => fake()->state(),
            // 'city' => fake()->city(),
            'school' => 'SMAN 1 Tangerang',
            'major' => fake()->randomElement(['Saintek', 'Soshum']),
            'grad_date' => fake()->year('+3 years'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
