<?php

namespace Database\Seeders;

use App\Models\TryoutPKG;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Throwable;

class TryoutPKGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\TryoutPKG::create([
        //     'title' => 'Soal TO SNBT Pa Asep',
        //     'start_time' => '2023-01-01 01:00:00',
        //     'end_time' => '2023-12-30 23:59:59',
        //     'duration_min' => 90,
        //     'desc_to' => 'Soal TO'
        // ]);
        require_once('TryoutSeed.php');
        $multiplier = 2;
        \App\Models\TryoutPKG::factory(count($tryoutPKG) * $multiplier)
            ->sequence(
                fn ($sequence) => [
                    'title' => $tryoutPKG[$sequence->index % 1]['title'] . ($sequence->index + 1),
                    'start_time' => $tryoutPKG[$sequence->index % 1]['start_time'],
                    'end_time' => $tryoutPKG[$sequence->index % 1]['end_time'],
                    'desc_to' => $tryoutPKG[$sequence->index % 1]['desc_to'],
                ]
            )
            ->has(
                \App\Models\TryoutSub::factory(count($tryoutSubPKG))
                    ->sequence(
                        fn ($sequence) => [
                            'sub_title' => $tryoutSubPKG[$sequence->index % count($tryoutSubPKG)]['sub_title'],
                            'sub_duration' => $tryoutSubPKG[$sequence->index % count($tryoutSubPKG)]['sub_duration'],
                            'sub_order' => $tryoutSubPKG[$sequence->index % count($tryoutSubPKG)]['sub_order'],
                            'mean_val' => $tryoutSubPKG[$sequence->index % count($tryoutSubPKG)]['mean_val'],
                            'std_val' => $tryoutSubPKG[$sequence->index % count($tryoutSubPKG)]['std_val'],
                        ]
                    ),
                'tryout_subs'
            )
            ->create();
        $created_to = TryoutPKG::get();
        $count_to = 0;
        foreach ($created_to as $ct) {
            $to_sub = $ct->tryout_subs()->get();
            \App\Models\TryoutQuestion::factory(count($tryoutQuestionPKG))
                ->sequence(
                    fn ($sequence) => [
                        'tryout_sub_id' => function ($var) use ($sequence, $to_sub, $tryoutQuestionPKG) {
                            $result = $to_sub->where('sub_title', $tryoutQuestionPKG[($sequence->index - 1) % count($tryoutQuestionPKG)]['sub_title'])->first();
                            return $result->tryout_sub_id;
                        },
                        'question_desc' => function () use ($sequence, $tryoutQuestionPKG) {
                            return $tryoutQuestionPKG[($sequence->index - 1) % count($tryoutQuestionPKG)]['question_desc'];
                        },
                        'question_type' => function () use ($sequence, $tryoutQuestionPKG) {
                            if (array_key_exists('question_type', $tryoutQuestionPKG[($sequence->index - 1) % count($tryoutQuestionPKG)])) {
                                return $tryoutQuestionPKG[($sequence->index - 1) % count($tryoutQuestionPKG)]['question_type'];
                            } else {
                                return 0;
                            }
                        },
                    ]
                )
                ->create();
            \App\Models\QuestionChoice::factory(count($tryoutChoicesPKG))
                ->sequence(
                    fn ($sequence) => [
                        'question_id' => ($tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['qnum']) + (count($tryoutQuestionPKG) * $count_to),
                        'choice_img' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['choice_img'],
                        'explanation' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['explanation'],
                        'choice_desc' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['choice_desc'],
                        'true_answer' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['true_answer'],
                        'choice_val' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['choice_val'],
                    ]
                )->create();
            $count_to = $count_to + 1;
        }
        // $sub_count = 3;
        // \App\Models\TryoutPKG::factory(5)
        //     ->has(
        //         \App\Models\TryoutSub::factory($sub_count)
        //             // ->state(new Sequence(
        //             //     fn ($sequence) => [
        //             //         'sub_order' => function ($tryoutpkg) use ($sequence, $sub_count) {
        //             //             return $sequence->index % $sub_count;
        //             //         }
        //             //     ]
        //             // ))
        //             ->has(
        //                 \App\Models\TryoutQuestion::factory(5)
        //                     ->has(
        //                         \App\Models\QuestionChoice::factory(4)
        //                             ->state(new Sequence(
        //                                 ['true_answer' => true],
        //                                 ['true_answer' => false],
        //                                 ['true_answer' => false],
        //                                 ['true_answer' => false]
        //                             )),
        //                         'question_choices'
        //                     ),
        //                 'tryout_questions'
        //             ),
        //         'tryout_subs'
        //     )
        //     ->create();
    }
}
