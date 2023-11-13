<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TryoutQuestion extends Model
{
    use HasFactory;

    protected $table = "tryout_questions";
    protected $primaryKey = "question_id";
    protected $keyType = "integer";
    protected $fillable = [
        "tryout_sub_id",
        "question_desc",
        "question_img",
        "question_type",
        "question_weight"
    ];
    protected $hidden = [
        "tryout_sub_id",
        "question_weight",
        "true_count",
        "created_at",
        "updated_at",
    ];
    protected $appends = [
        "true_count",
    ];
    public $incrementing = true;

    // many to many
    public function user_pkgs(): BelongsToMany
    {
        return $this->belongsToMany(UserPKG::class, "user_pkg_quests", "question_id", "user_pkg_id")
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
    public function question_choices(): HasMany
    {
        return $this->hasMany(QuestionChoice::class, 'question_id', 'question_id');
    }
    public function user_pkg_questions(): HasMany
    {
        return $this->hasMany(UserPKGQuest::class, 'question_id', 'question_id');
    }

    // many to one
    public function tryout_subs(): BelongsTo
    {
        return $this->belongsTo(TryoutSub::class, 'tryout_sub_id', 'tryout_sub_id');
    }

    // appended attribute
    public function getTrueCountAttribute(): float
    {
        $count = $this->question_choices()->where('true_answer', 1)->count();
        return $count;
    }

    // method
    public function weight_question(): void
    {
        $user_q_ans = $this->user_pkg_questions()->get();
        if ($user_q_ans->first() == null) {
            return;
        }
        $count = 0;
        $tr_count = 0;
        foreach ($user_q_ans as $i) {
            $count = $count + 1;
            if ($i->question_true == true) {
                $tr_count = $tr_count + 1;
            }
        }
        $result = 1 - (floatval($tr_count) / floatval($count));
        if ($result == 0) {
            $result = 0.01;
        } else if ($result == 1) {
            $result = 0.99;
        }
        if ($this->question_weight != $result) {
            $this->update(['question_weight' => $result]);
        }
        return;
    }
}
