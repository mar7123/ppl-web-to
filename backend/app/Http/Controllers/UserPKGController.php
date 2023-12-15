<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessTryout;
use App\Models\QuestionChoice;
use App\Models\TryoutPKG;
use App\Models\TryoutSub;
use App\Models\UserAnswer;
use App\Models\UserPKG;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class UserPKGController extends Controller
{
    public function getUserTryouts(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $result = $request->user()
                ->tryouts()
                ->where([['tryout_pkgs.end_time', '>=',  $timenow], ['tryout_pkgs.start_time', '<=',  $timenow]])
                ->orderBy('tryout_pkgs.start_time', 'asc')
                ->wherePivotNull('user_end')
                ->get()
                ->groupBy('tryout_id');
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
    public function getUserTryoutHistories(Request $request): Response
    {
        try {
            $result = $request->user()
                ->tryouts()
                ->wherePivotNotNull('user_end')
                ->orderByPivot('user_end', 'desc')
                ->get()->each(function ($item, $key) {
                    $item->pivot->makeVisible(['score', 'sub_to_score', 'sum_true', 'sum_false']);
                });
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
    public function getUserTryoutUpcoming(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $result = $request->user()
                ->tryouts()
                ->where('tryout_pkgs.start_time', '>',  $timenow)
                ->orderBy('tryout_pkgs.start_time', 'asc')
                ->wherePivotNull('user_end')
                ->get()
                ->groupBy('tryout_id');
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
    public function getUserTryoutNotPurchased(Request $request): Response
    {
        try {
            $result = TryoutPKG::whereDoesntHave('users', function (Builder $query) use ($request) {
                $query->where('users.user_id', $request->user()->user_id);
            })->get();
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
    public function startUserTryout(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $toauth = $request->user()
                ->tryouts()
                ->where([['tryout_pkgs.end_time', '>=',  $timenow], ['tryout_pkgs.start_time', '<=',  $timenow]])
                ->wherePivotNull('user_end')
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first();
            $ongoing = $request->user()
                ->user_pkgs()
                ->whereNull('user_end')
                ->whereNotNull('user_start')
                ->count();
            if ($toauth == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            } else if ($toauth->pivot->user_start != null) {
                return Response([
                    'status' => true,
                    'message' => 'Tryout continued'
                ], 200);
            } else if ($ongoing >= 1) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $qid = $request->user()
                ->tryouts()
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first()
                ->tryout_questions()
                // ->inRandomOrder($toauth->pivot->shuffle_seed)
                ->pluck('question_id');
            $subto = $request->user()
                ->tryouts()
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first()
                ->tryout_subs()
                ->orderBy('sub_order', 'asc')
                ->first();
            UserPKG::where('user_pkg_id', $request->user_pkg_id)->first()->tryout_questions()->attach($qid);
            $request->user()->user_pkgs()
                ->where('user_pkg_id', $request->user_pkg_id)
                ->update(['sub_start' => $timenow, 'user_start' => $timenow, 'tryout_sub_id' => $subto->tryout_sub_id]);
            ProcessTryout::dispatch($request->user_pkg_id, $timenow, $subto->sub_duration, 0)
                ->delay(now()->addMinutes($subto->sub_duration));
            return Response([
                'status' => true,
                'message' => 'instance created'
            ], 201);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function nextUserTryout(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $toauth = $request->user()
                ->tryouts()
                ->where([['tryout_pkgs.end_time', '>=',  $timenow], ['tryout_pkgs.start_time', '<=',  $timenow]])
                ->wherePivotNull('user_end')
                ->wherePivotNotNull('user_start')
                ->wherePivotNotNull('tryout_sub_id')
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first();
            if ($toauth == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $usr_pkg = UserPKG::where('user_pkg_id', $request->user_pkg_id)
                ->first();
            $sub_to = $usr_pkg->tryouts()
                ->first()
                ->tryout_subs()
                ->orderBy('sub_order', 'asc')
                ->get();
            $sub_idx = $sub_to->search(function ($sb) use ($usr_pkg) {
                return $sb->tryout_sub_id === $usr_pkg->tryout_sub_id;
            });
            $next_to = $sub_to->get($sub_idx + 1);
            if ($next_to == null) {
                return $this->endUserTryout($request);
            }
            $msg = 'continue';
            $last_to = $sub_to->get($sub_idx + 2);
            if ($last_to == null) {
                $msg = 'last';
            }
            $usr_pkg->update(['sub_start' => $timenow, 'tryout_sub_id' => $next_to->tryout_sub_id]);
            ProcessTryout::dispatch($usr_pkg->user_pkg_id, $timenow, $next_to->sub_duration, $sub_idx + 1)
                ->delay(now()->addMinutes($next_to->sub_duration));
            return Response([
                'status' => true,
                'message' => $msg
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function checkUserTryout(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $toauth = $request->user()
                ->tryouts()
                ->where([['tryout_pkgs.end_time', '>=',  $timenow], ['tryout_pkgs.start_time', '<=',  $timenow]])
                ->wherePivotNull('user_end')
                ->wherePivotNotNull('user_start')
                ->wherePivotNotNull('tryout_sub_id')
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first();
            if ($toauth == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $usr_pkg = UserPKG::where('user_pkg_id', $request->user_pkg_id)
                ->first()
                ->tryout_subs()
                ->first();
            $user_time = new DateTime($toauth->pivot->sub_start);
            $user_time->modify("+" . $usr_pkg->sub_duration . " minutes");
            $user_time_format = $user_time->format('Y-m-d H:i:s');
            if ($timenow > $user_time_format) {
                return Response([
                    'status' => false,
                    'message' => 'Out of time',
                ], 401);
            }
            return Response([
                'status' => true,
                'message' => $user_time_format
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function endUserTryout(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $toauth = $request->user()
                ->tryouts()
                ->where([['tryout_pkgs.end_time', '>=',  $timenow], ['tryout_pkgs.start_time', '<=',  $timenow]])
                ->wherePivotNull('user_end')
                ->wherePivotNotNull('user_start')
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first();
            if ($toauth == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $usr_pkg = $request->user()
                ->user_pkgs()
                ->where('user_pkg_id', $request->user_pkg_id)
                ->first();
            $sub_to = $usr_pkg->tryouts()
                ->first()
                ->tryout_subs()
                ->orderBy('sub_order', 'desc')
                ->first();
            $usr_pkg->update(['user_end' => $timenow, 'tryout_sub_id' => $sub_to->tryout_sub_id]);
            return Response([
                'status' => true,
                'message' => 'Tryout ended'
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function getUserTryoutQuestions(Request $request): Response
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
            $sub_id = $request->tryout_sub_id;
            if ($toauth->user_end == null) {
                $sub_id = $toauth->tryout_sub_id;
            }
            if ($sub_id == null) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $result = $request->user()
                ->user_pkgs()
                ->where('user_pkg_id', $request->user_pkg_id)
                ->first()
                ->tryout_questions()
                ->where('tryout_sub_id', $sub_id)
                // ->inRandomOrder($toauth->shuffle_seed)
                ->get()
                ->each(function ($item, $key) {
                    $item->pivot->user_answers;
                })
                ->load([
                    'question_choices'
                    // => function ($query) use ($toauth) {
                    //     $query->inRandomOrder($toauth->shuffle_seed);
                    // }
                ]);
            $to_sub = TryoutSub::where('tryout_sub_id', $sub_id)->first();
            if ($toauth->user_end != null) {
                foreach ($result as $rs) {
                    $rs->question_choices->makeVisible(['true_answer', 'explanation', 'choice_val']);
                    $rs->pivot->makeVisible(['question_true']);
                }
            }
            return Response([
                'status' => true,
                'data' => $result,
                'tryout_sub' => $to_sub
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function answerUserTryout(Request $request): Response
    {
        try {
            $time = new DateTime();
            $timenow = $time->format('Y-m-d H:i:s');
            $usr_pkg = $request->user()
                ->user_pkgs()
                ->where('user_pkg_id', $request->user_pkg_id)
                ->first();
            $toauth = $request->user()
                ->tryouts()
                ->where([['tryout_pkgs.end_time', '>=',  $timenow], ['tryout_pkgs.start_time', '<=',  $timenow]])
                ->wherePivotNull('user_end')
                ->wherePivotNotNull('user_start')
                ->wherePivot('user_pkg_id', $request->user_pkg_id)
                ->first()
                ->tryout_subs()
                ->where('tryout_sub_id', $usr_pkg->tryout_sub_id)
                ->first()
                ->tryout_questions()
                ->where('question_id', $request->question_id)
                ->first()
                // ->question_choices()
                // ->whereIn('choice_id', $request->choice_id)
                // ->first()
            ;
            if ($toauth == null || count($request->choice_id) != count($request->choice_val)) {
                return Response([
                    'status' => false,
                    'message' => 'Unauthorized',
                ], 401);
            }
            $pkg_quest = $usr_pkg->user_pkg_questions()
                ->where('question_id', $request->question_id)
                ->first();
            if (empty($request->choice_id) || $request->choice_id[0] == null) {
                $pkg_quest->update(['flag_question' => $request->flag_question]);
                $pkg_quest->question_choices()->detach();
                return Response([
                    'status' => true,
                    'message' => 'Answer state stored'
                ], 200);
            }
            foreach ($request->choice_id as $ch) {
                if (
                    $toauth->question_choices()
                    ->where('choice_id', $ch)
                    ->first() == null
                ) {
                    return Response([
                        'status' => false,
                        'message' => 'Unauthorized',
                    ], 401);
                }
            }
            // $user_ans = $pkg_quest->user_answers()
            //     ->where('choice_id', $request->choice_id)
            //     ->first();
            // if ($user_ans == null) {
            //     $pkg_quest->question_choices()->attach($request->choice_id);
            // } else {
            //     $pkg_quest->question_choices()->detach($request->choice_id);
            //     return Response([
            //         'status' => true,
            //         'message' => 'Answer detached'
            //     ], 200);
            // }
            $ans = array();
            $q_type = $toauth->question_type;
            for ($i = 0; $i < count($request->choice_id); $i++) {
                $cval = $request->choice_val[$i];
                if ($q_type < 2) {
                    $cval = null;
                }
                $ans[$request->choice_id[$i]] = ['choice_val' => $cval];
            }
            $pkg_quest->question_choices()->detach();
            $pkg_quest->question_choices()->attach($ans);
            $pkg_quest->update(['flag_question' => $request->flag_question]);
            return Response([
                'status' => true,
                'message' => 'Answer state stored'
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
