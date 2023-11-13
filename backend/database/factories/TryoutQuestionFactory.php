<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TryoutQuestion>
 */
class TryoutQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "question_desc" => fake()->realText(100, 2),
            "question_img" => fake()->imageUrl(640, 480, null, true),
        ];
    }
}
