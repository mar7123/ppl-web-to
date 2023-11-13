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
        $past = fake()->dateTimeInInterval('-5 days', '+3 days');
        $current = fake()->dateTimeInInterval('-5 hours', '+3 hours');
        $future = fake()->dateTimeInInterval('+5 days', '-3 days');
        $rnd = fake()->randomElement([$past, $current, $future]);
        $start_time = $rnd->getTimestamp();
        $end_time = rand($start_time + 18000, $start_time + 28800);
        return [
            'title' => fake()->company(),
            'start_time' => date('Y-m-d H:i:s', $start_time),
            'end_time' => date('Y-m-d H:i:s', $end_time),
            'desc_to' => fake()->realText(100, 2)
        ];
    }
}
