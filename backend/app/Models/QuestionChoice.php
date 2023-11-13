<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionChoice extends Model
{
    use HasFactory;

    protected $table = "question_choices";
    protected $primaryKey = "choice_id";
    protected $keyType = "integer";
    protected $fillable = [
        "question_id",
        "choice_img",
        "choice_desc",
        "choice_val",
        "true_answer",
        "explanation"
    ];
    protected $hidden = [
        "question_id",
        "choice_val",
        "true_answer",
        "explanation",
        "choice_weight",
        "created_at",
        "updated_at",
    ];
    protected $appends = [
        "choice_weight"
    ];
    public $incrementing = true;

    // many to many
    public function question_choices(): BelongsToMany
    {
        return $this->belongsToMany(UserPKGQuest::class, "user_answers", "choice_id", "user_pkg_quest_id")
            ->using(UserAnswer::class)
            ->withPivot(['user_answer_id'])
            ->withTimestamps();
    }

    // one to many
    public function user_answers(): HasMany
    {
        return $this->hasMany(UserAnswer::class, "choice_id", "choice_id");
    }

    // many to one
    public function questions(): BelongsTo
    {
        return $this->belongsTo(TryoutQuestion::class, 'question_id', 'question_id');
    }

    // appended attribute
    public function getChoiceWeightAttribute(): float
    {
        $parent = $this->questions()->first();
        $weight = $parent->question_weight;
        $count = $parent->true_count;
        if ($this->true_answer == 0 || $count == null) {
            return 0;
        }
        return floatval($weight) / floatval($count);
    }
}
