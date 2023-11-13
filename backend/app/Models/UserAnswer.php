<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserAnswer extends Pivot
{
    use HasFactory;

    protected $table = "user_answers";
    protected $primaryKey = "user_answer_id";
    protected $keyType = "integer";
    protected $fillable = [
        "user_pkg_quest_id",
        "choice_id",
        "choice_val"
    ];
    protected $hidden = [
        "user_answer_id",
        "user_pkg_quest_id",
        "created_at",
        "updated_at",
    ];
    public $incrementing = true;

    // many to one
    public function question_choices(): BelongsTo
    {
        return $this->belongsTo(QuestionChoice::class, 'choice_id', 'choice_id');
    }
    public function user_pkg_quests(): BelongsTo
    {
        return $this->belongsTo(UserPKGQuest::class, 'user_pkg_quest_id', 'user_pkg_quest_id');
    }
}
