<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPKG extends Pivot
{
    use HasFactory, HasUuids;

    protected $table = "user_pkgs";
    protected $primaryKey = "user_pkg_id";
    protected $keyType = "string";
    protected $fillable = [
        "user_id",
        "tryout_id",
        "tryout_sub_id",
        "sub_start",
        "user_start",
        "user_end",
        "score",
        "sub_to_score",
        "shuffle_seed"
    ];
    protected $hidden = [
        "user_id",
        "tryout_id",
        "tryout_sub_id",
        "score",
        "sub_to_score",
        "shuffle_seed",
        "sum_true",
        "sum_false",
        "created_at",
        "updated_at"
    ];
    protected $appends = [
        "sum_true",
        "sum_false",
    ];
    protected $casts = [
        "sub_to_score" => "array"
    ];
    public $incrementing = false;

    // many to many
    public function tryout_questions(): BelongsToMany
    {
        return $this->belongsToMany(TryoutQuestion::class, "user_pkg_quests", "user_pkg_id", "question_id")
            ->using(UserPKGQuest::class)
            ->withPivot([
                "user_pkg_quest_id",
                "user_pkg_id",
                "question_id",
                "flag_question"
            ])
            ->orderByPivot("user_pkg_quest_id", "asc")
            ->withTimestamps();
    }

    // one to many
    public function user_pkg_questions(): HasMany
    {
        return $this->hasMany(UserPKGQuest::class, 'user_pkg_id', 'user_pkg_id');
    }

    // many to one
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function tryouts(): BelongsTo
    {
        return $this->belongsTo(TryoutPKG::class, 'tryout_id', 'tryout_id');
    }
    public function tryout_subs(): BelongsTo
    {
        return $this->belongsTo(TryoutSub::class, 'tryout_sub_id', 'tryout_sub_id');
    }

    // appended attribute
    public function getSumTrueAttribute(): int
    {
        $pkg_quest = $this->user_pkg_questions()->get();
        $trusum = 0;
        foreach ($pkg_quest as $pq) {
            if ($pq->question_true == true) {
                $trusum = $trusum + 1;
            }
        }
        return $trusum;
    }
    public function getSumFalseAttribute(): int
    {
        $pkg_quest = $this->user_pkg_questions()->get();
        $falsum = 0;
        foreach ($pkg_quest as $pq) {
            if ($pq->question_true == false) {
                $falsum = $falsum + 1;
            }
        }
        return $falsum;
    }

    // method
    public function score_user(): void
    {
        $sub_to = $this->tryouts()
            ->first()
            ->tryout_subs()
            ->orderBy('sub_order', 'asc')
            ->get();
        $to_score = 0;
        $sub_score = new Collection();
        foreach ($sub_to as $st) {
            $temp_score = 0;
            $pkg_quest = $this->tryout_questions()
                ->where('tryout_sub_id', $st->tryout_sub_id)
                ->get();

            foreach ($pkg_quest as $pq) {
                $temp_score = $temp_score + $pq->pivot->question_score;
            }
            $result = round(500 + (100 * (((floatval($temp_score) / floatval($st->sum_score)) * 1000) - $st->mean_val) / $st->std_val), 2);
            if ($result < 0) {
                $result = 0;
            }
            $to_score = $to_score + $result;
            $subarr = (object)[
                'tryout_sub_id' => $st->tryout_sub_id,
                'sub_title' => $st->sub_title,
                'sub_score' => $result
            ];
            $sub_score = $sub_score->push($subarr);
        }
        $to_score = floatval($to_score) / floatval(count($sub_score));
        if ($this->score != $to_score) {
            $this->update(['score' => $to_score, 'sub_to_score' => $sub_score]);
        }
        return;
    }
    // public function getDecodedSubTO(): array|null
    // {
    //     if ($this->sub_to_score != null) {
    //         return json_decode($this->sub_to_score);
    //     }
    //     return null;
    // }
}
