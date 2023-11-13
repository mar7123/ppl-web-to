<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class TryoutPKG extends Model
{
    use HasFactory;

    protected $table = "tryout_pkgs";
    protected $primaryKey = "tryout_id";
    protected $keyType = "integer";
    protected $fillable = [
        "title",
        "start_time",
        "end_time",
        "desc_to"
    ];
    protected $hidden = [
        "sum_score",
        "created_at",
        "updated_at",
    ];
    protected $appends = [
        "sum_duration",
        "question_count",
        "sum_score",
    ];
    public $incrementing = true;

    // many to many
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_pkgs", "tryout_id", "user_id")
            ->using(UserPKG::class)
            ->withPivot(['user_pkg_id', 'tryout_sub_id', 'sub_start', 'user_start', 'user_end', 'score', 'sub_to_score', 'shuffle_seed'])
            ->withTimestamps();
    }

    // one to many
    public function user_pkgs(): HasMany
    {
        return $this->hasMany(UserPKG::class, 'tryout_id', 'tryout_id');
    }
    public function tryout_subs(): HasMany
    {
        return $this->hasMany(TryoutSub::class, 'tryout_id', 'tryout_id');
    }

    public function tryout_questions(): HasManyThrough
    {
        return $this->hasManyThrough(TryoutQuestion::class, TryoutSub::class, 'tryout_id', 'tryout_sub_id', 'tryout_id', 'tryout_sub_id');
    }

    // appended attribute
    public function getSumDurationAttribute(): int
    {
        return $this->tryout_subs()->get()->sum('sub_duration');
    }
    public function getQuestionCountAttribute(): int
    {
        return $this->tryout_questions()->get()->count();
    }
    public function getSumScoreAttribute(): float
    {
        $tryout_sub = $this->tryout_subs()->get();
        if ($tryout_sub->first() == null) {
            return 0;
        }
        $score_sum = 0;
        foreach ($tryout_sub as $ts) {
            $score_sum = $score_sum + $ts->sum_score;
        }
        return $score_sum;
    }
}
