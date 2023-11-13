<?php

namespace App\Http\Controllers;

use App\Models\TryoutPKG;
use App\Models\TryoutQuestion;
use App\Models\User;
use App\Models\UserPKG;
use DOMDocument;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class TryoutPKGController extends Controller
{
    public function evalTryout(Request $request): Response
    {
        try {
            if ($request->user()->email != 'admin123@email.com') {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $to = TryoutPKG::where('tryout_id', $request->tryout_id)->first();
            if ($to == null) {
                return Response([
                    'status' => false,
                    'message' => 'Tryout not found',
                ], 401);
            }
            $q_weight = $to->tryout_questions()->get();
            foreach ($q_weight as $q) {
                $q->weight_question();
            }
            $result = $to->user_pkgs()->whereNotNull('user_end')->get();
            foreach ($result as $rs) {
                $rs->score_user();
                $rs->makeVisible(['score', 'sub_to_score']);
            }
            return Response([
                'status' => true,
                'data' => $result,
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function getTryoutSub(Request $request): Response
    {
        try {
            $toauth = $request->user()
                ->user_pkgs()
                ->whereNotNull('user_start')
                ->where('user_pkg_id', $request->user_pkg_id)
                ->first();
            if ($toauth == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $result = $request->user()
                ->user_pkgs()
                ->where('user_pkg_id', $request->user_pkg_id)
                ->first()
                ->tryouts()
                ->first()
                ->tryout_subs()
                ->orderBy('sub_order', 'asc')
                ->get();
            return Response([
                'status' => true,
                'data' => $result,
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function assignTryout(Request $request): Response
    {
        try {
            $usr = $request->user();
            if ($request->user()->email == 'admin123@email.com' && $request->user_id != null) {
                $usr = User::where('user_id', $request->user_id)->first();
            }
            $result = TryoutPKG::whereDoesntHave('users', function (Builder $query) use ($usr) {
                $query->where('users.user_id', $usr->user_id);
            })->where('tryout_id', $request->tryout_id)->first();
            if ($result == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $usr->tryouts()->attach([$result->tryout_id => ['shuffle_seed' => fake()->numberBetween(1, 100)]]);
            return Response([
                'status' => true,
                'message' => 'tryout assigned',
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function parseSoal(Request $request): Response
    {
        try {
            $usr = $request->user();
            if ($request->user()->email == 'admin123@email.com' && $request->user_id != null) {
                $usr = User::where('user_id', $request->user_id)->first();
            }
            $title = "Try Out 8 SNBT 2023 Cornell";
            $doc = new DOMDocument();
            $doc->loadHTMLFile(__DIR__ . "/Soal//" . $title . "/Skolastik.htm");
            $sk_img = $doc->getElementsByTagName('img');
            foreach ($sk_img as $img) {
                $img_attr = $img->getAttribute('src');
                $img->setAttribute("src", "https://code.tryoutx.com/" . str_replace(" ", "%20", $title) . "/" . $img_attr);
            }
            $tds = $doc->getElementsByTagName('td');
            $myfile = fopen(__DIR__ . "/Soal//" . $title . "/Question.php", "w");
            $question_ch = fopen(__DIR__ . "/Soal//" . $title . "/Choice.php", "w");
            fwrite($myfile, '<?php' . "\n" . '$tryoutQuestionPKG = array(' . "\n");
            fwrite($question_ch, '<?php' . "\n" . '$tryoutChoicesPKG = array(' . "\n");
            $count = 0;
            $subto = '';
            foreach ($tds as $td) {
                if ($count < 10) {
                    $subto = 'Penalaran Umum Penalaran Induktif';
                } else if ($count < 20) {
                    $subto = 'Penalaran Umum Penalaran Deduktif';
                } else if ($count < 30) {
                    $subto = 'Penalaran Umum Penalaran Kuantitatif';
                } else if ($count < 50) {
                    $subto = 'Pengetahuan dan Pemahaman Umum';
                } else if ($count < 70) {
                    $subto = 'Kemampuan Memahami Bacaan dan Menulis';
                } else if ($count < 85) {
                    $subto = 'Pengetahuan Kuantitatif';
                } else if ($count < 99) {
                    $subto = 'Literasi dalam Bahasa Indonesia';
                }
                $td_attr = $td->getAttribute('width');
                if ($td_attr != "411") {
                    continue;
                }
                fwrite($myfile, 'array(\'sub_title\' => \'' . $subto . '\',' . "\n" . '\'question_desc\' => \'');
                $td_child = $td->childNodes;
                foreach ($td_child as $td_ch) {
                    if ($td_ch->nodeType != XML_ELEMENT_NODE) {
                        continue;
                    }
                    $domElementXml = $td_ch->ownerDocument->saveXML($td_ch);
                    if (
                        str_contains($domElementXml, "(A)") ||
                        str_contains($domElementXml, "(B)") ||
                        str_contains($domElementXml, "(C)") ||
                        str_contains($domElementXml, "(D)") ||
                        str_contains($domElementXml, "(E)")
                    ) {
                        $truth = 'false';
                        fwrite($question_ch, 'array(\'choice_img\' => \'\',' . "\n" . '\'explanation\' => \'\',' . "\n" . '\'choice_desc\' => \'');
                        $p_child = $td_ch->childNodes;
                        foreach ($p_child as $p_ch) {
                            $domElementP = $p_ch->ownerDocument->saveXML($p_ch);
                            if (str_contains($domElementP, "background:yellow") || str_contains($domElementP, "trueans")) {
                                $truth = 'true';
                            }
                            if (
                                str_contains($domElementP, "(A)") ||
                                str_contains($domElementP, "(B)") ||
                                str_contains($domElementP, "(C)") ||
                                str_contains($domElementP, "(D)") ||
                                str_contains($domElementP, "(E)") ||
                                str_contains($domElementP, "trueans")
                            ) {
                                continue;
                            }
                            $domElementP = $p_ch->ownerDocument->saveXML($p_ch);
                            $domElementP = str_replace("background:yellow", "background:none", $domElementP);
                            fwrite($question_ch, $domElementP);
                        }
                        fwrite($question_ch, "'," . "\n" . "'true_answer' => " . $truth . ")," . "\n");
                    } else {
                        fwrite($myfile, $domElementXml);
                    }
                }
                fwrite($myfile, "')," . "\n");
                $count = $count + 1;
            }
            fwrite($myfile, ');');
            fwrite($question_ch, ');');
            fclose($myfile);
            fclose($question_ch);
            require_once(__DIR__ . '/Soal//' . $title . '/TOnSUB.php');
            require_once(__DIR__ . '/Soal//' . $title . '/Choice.php');
            require_once(__DIR__ . '/Soal//' . $title . '/Question.php');
            $to_check = TryoutPKG::where('title', 'like', $title . '%')->get();
            $series = $to_check->count() + 1;
            \App\Models\TryoutPKG::factory(count($tryoutPKG))
                ->sequence(
                    fn ($sequence) => [
                        'title' => $tryoutPKG[$sequence->index % 1]['title'] . " " . $series,
                        'start_time' => $tryoutPKG[$sequence->index % 1]['start_time'],
                        'end_time' => $tryoutPKG[$sequence->index % 1]['end_time'],
                        'desc_to' => $tryoutPKG[$sequence->index % 1]['desc_to'],
                    ]
                )
                ->has(
                    \App\Models\TryoutSub::factory(count($tryoutSubPKG))
                        ->sequence(
                            fn ($sequence) => [
                                'sub_title' => $tryoutSubPKG[$sequence->index % 9]['sub_title'],
                                'sub_duration' => $tryoutSubPKG[$sequence->index % 9]['sub_duration'],
                                'sub_order' => $tryoutSubPKG[$sequence->index % 9]['sub_order'],
                                'mean_val' => $tryoutSubPKG[$sequence->index % 9]['mean_val'],
                                'std_val' => $tryoutSubPKG[$sequence->index % 9]['std_val'],
                            ]
                        ),
                    'tryout_subs'
                )
                ->create();
            $to_check = TryoutPKG::where('title', $title . " " . $series)->first();
            \App\Models\TryoutQuestion::factory(count($tryoutQuestionPKG))
                ->sequence(
                    fn ($sequence) => [
                        'tryout_sub_id' => function ($var) use ($sequence, $to_check, $tryoutQuestionPKG) {
                            $result = $to_check->tryout_subs()->where('sub_title', $tryoutQuestionPKG[($sequence->index - 1) % count($tryoutQuestionPKG)]['sub_title'])->first();
                            return $result->tryout_sub_id;
                        },
                        'question_desc' => $tryoutQuestionPKG[($sequence->index) % count($tryoutQuestionPKG)]['question_desc'],
                        'question_type' => function ($var) use ($sequence, $tryoutQuestionPKG) {
                            if (array_key_exists('question_type', $tryoutQuestionPKG[($sequence->index) % count($tryoutQuestionPKG)])) {
                                return $tryoutQuestionPKG[($sequence->index) % count($tryoutQuestionPKG)]['question_type'];
                            }
                            return 0;
                        },
                    ]
                )
                ->has(
                    \App\Models\QuestionChoice::factory(count($tryoutChoicesPKG) / count($tryoutQuestionPKG))
                        ->sequence(
                            fn ($sequence) => [
                                'choice_img' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['choice_img'],
                                'explanation' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['explanation'],
                                'choice_desc' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['choice_desc'],
                                'true_answer' => $tryoutChoicesPKG[($sequence->index) % count($tryoutChoicesPKG)]['true_answer'],
                            ]
                        ),
                    'question_choices'
                )
                ->create();
            return Response([
                'status' => true,
                'message' => 'parsed',
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
