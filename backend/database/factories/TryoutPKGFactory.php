<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TryoutPKG>
 */
class TryoutPKGFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'desc_to' => fake()->realText(100, 2)
        ];
    }
}
