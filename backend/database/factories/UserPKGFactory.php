<?php

namespace Database\Factories;

use App\Models\TryoutPKG;
use App\Models\User;
use App\Models\UserPKG;
use App\Models\UserPKGQuest;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPKG>
 */
class UserPKGFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $timenow = new DateTime();
        // $user_id = fake()->randomElement(User::pluck('user_id'));
        // $tryout_id = fake()->randomElement(TryoutPKG::pluck('tryout_id'));
        // $query_time = TryoutPKG::where('tryout_id', $tryout_id)->first();
        // $to_sub = $query_time->tryout_subs()
        //     ->orderBy('sub_order', 'desc')
        //     ->first();;
        // $duration_min = $query_time->sum_duration;
        // $user_start = rand(strtotime($query_time->start_time), strtotime($query_time->end_time));
        // $user_end = rand($user_start, $user_start + ($duration_min * 60));
        // $to_sub_id = $to_sub->tryout_sub_id;
        // if ($user_end > strtotime($query_time->end_time)) {
        //     $user_end = strtotime($query_time->end_time);
        // }
        // $user_start = date('Y-m-d H:i:s', $user_start);
        // $user_end = date('Y-m-d H:i:s', $user_end);


        // if (!($timenow->format('Y-m-d H:i:s') >= $user_end)) {
        //     $user_start = null;
        //     $user_end = null;
        //     $to_sub_id = null;
        // }
        return [
            // 'user_id' => $user_id,
            // 'tryout_id' => $tryout_id,
            // 'tryout_sub_id' => $to_sub_id,
            // 'user_start' => $user_start,
            // 'user_end' => $user_end,
            // 'shuffle_seed' => fake()->numberBetween(1, 100)
        ];
    }
    public function withIDs($usr_id, $to_id)
    {
        $timenow = new DateTime();
        $user_id = $usr_id;
        $tryout_id = $to_id;
        $query_time = TryoutPKG::where('tryout_id', $tryout_id)->first();
        $to_sub = $query_time->tryout_subs()
            ->orderBy('sub_order', 'desc')
            ->first();;
        $duration_min = $query_time->sum_duration;
        $user_start = rand(strtotime($query_time->start_time), strtotime($query_time->end_time));
        $user_end = rand($user_start, $user_start + ($duration_min * 60));
        $to_sub_id = $to_sub->tryout_sub_id;
        if ($user_end > strtotime($query_time->end_time)) {
            $user_end = strtotime($query_time->end_time);
        }
        $user_start = date('Y-m-d H:i:s', $user_start);
        $user_end = date('Y-m-d H:i:s', $user_end);


        if (!($timenow->format('Y-m-d H:i:s') >= $user_end)) {
            $user_start = null;
            $user_end = null;
            $to_sub_id = null;
        }
        return $this->state([
            'user_id' => $user_id,
            'tryout_id' => $tryout_id,
            'tryout_sub_id' => $to_sub_id,
            'user_start' => $user_start,
            'user_end' => $user_end,
            'shuffle_seed' => fake()->numberBetween(1, 100)
        ]);
    }
    public function configure(): static
    {
        return $this->afterCreating(function (UserPKG $user_pkg) {
            if ($user_pkg->user_end == null) {
                return;
            }
            $qs_id = \App\Models\UserPKG::where('user_pkg_id', $user_pkg->user_pkg_id)
                ->first()
                ->tryouts()
                ->first()
                ->tryout_questions()
                ->pluck('question_id');
            UserPKGQuest::factory(count($qs_id))
                ->state(new Sequence(
                    fn ($sequence) => [
                        'question_id' => function ($var) use ($sequence, $qs_id) {
                            return $qs_id->get(($sequence->index - 1) % count($qs_id));
                        },
                        'user_pkg_id' => $user_pkg->user_pkg_id
                    ]
                ))
                ->has(
                    \App\Models\UserAnswer::factory(1)
                        ->state(new Sequence(
                            fn ($sequence) => [
                                'choice_id' => function ($userpkgquest) use ($sequence) {
                                    $rnd = fake()->boolean(65);
                                    $qs_id = \App\Models\UserPKGQuest::where('user_pkg_quest_id', $userpkgquest['user_pkg_quest_id'])
                                        ->first()
                                        ->tryout_questions()
                                        ->first()
                                        ->question_choices()
                                        ->where('true_answer', $rnd)
                                        ->pluck('choice_id');
                                    return $qs_id->get(($sequence->index - 1) % 1);
                                }
                            ]
                        )),
                    'user_answers'
                )
                ->create();
        });
    }
}
