<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserPKGQuest extends Pivot
{
    use HasFactory;

    protected $table = "user_pkg_quests";
    protected $primaryKey = "user_pkg_quest_id";
    protected $keyType = "integer";
    protected $fillable = [
        "user_pkg_id",
        "question_id",
        "flag_question"
    ];
    protected $hidden = [
        "user_pkg_quest_id",
        "user_pkg_id",
        "question_id",
        "question_score",
        "question_true",
        "created_at",
        "updated_at",
    ];
    protected $appends = [
        "question_score",
        "question_true"
    ];
    public $incrementing = true;

    // many to many
    public function question_choices(): BelongsToMany
    {
        return $this->belongsToMany(QuestionChoice::class, "user_answers", "user_pkg_quest_id", "choice_id")
            ->using(UserAnswer::class)
            ->withPivot(['user_answer_id'])
            ->withTimestamps();
    }

    // one to many
    public function user_answers(): HasMany
    {
        return $this->hasMany(UserAnswer::class, 'user_pkg_quest_id', 'user_pkg_quest_id');
    }

    // many to one
    public function user_pkgs(): BelongsTo
    {
        return $this->belongsTo(UserPKG::class, 'user_pkg_id', 'user_pkg_id');
    }
    public function tryout_questions(): BelongsTo
    {
        return $this->belongsTo(TryoutQuestion::class, 'question_id', 'question_id');
    }

    // appended attribute
    public function getQuestionScoreAttribute(): float
    {
        $userans = $this->user_answers()->get();
        if ($userans->first() == null) {
            return 0;
        }
        $score = 0;
        foreach ($userans as $ua) {
            $score = $score + $ua->question_choices()->first()->choice_weight;
            if (
                $ua->question_choices()->first()->true_answer == false ||
                $ua->choice_val != $ua->question_choices()->first()->choice_val
            ) {
                return 0;
                break;
            }
        }
        return $score;
    }
    public function getQuestionTrueAttribute(): bool
    {
        if ($this->question_score == 0) {
            return false;
        }
        return true;
    }
}
