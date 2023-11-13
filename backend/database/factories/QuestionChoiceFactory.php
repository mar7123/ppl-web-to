<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuestionChoice>
 */
class QuestionChoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "choice_img" => fake()->imageUrl(640, 480, null, true),
            "choice_desc" => fake()->realText(100, 2),
            "explanation" => fake()->realText(100, 2)
        ];
    }
}
