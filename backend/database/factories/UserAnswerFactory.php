<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAnswer>
 */
class UserAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $tryout_id = fake()->randomElement(UserPKG::whereNotNull('user_end')->pluck('tryout_id'));
        // $tryout = TryoutPKG::where('tryout_id', $tryout_id)->first();
        // $tryout_questions = $tryout->tryout_questions()->get()->load(['question_choices']);
        // $cid = array();
        // foreach ($tryout_questions as $tq) {
        //     foreach ($tq->question_choices as $qc) {
        //         $qc->makeVisible(['choice_id']);
        //         array_push($cid, $qc->choice_id);
        //     }
        // }
        // $user_pkg_id = fake()->randomElement($tryout->user_pkg()->pluck('user_pkg_id'));
        // $choice_id = fake()->randomElement($cid);
        return [
            // 'user_pkg_id' => $user_pkg_id,
            // 'choice_id' => $choice_id,
        ];
    }
}
