<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TryoutSub>
 */
class TryoutSubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "sub_title" => fake()->company(),
            "sub_duration" => fake()->numberBetween(10, 25),
            "sub_order" => fake()->numberBetween(1, 20)
        ];
    }
}
