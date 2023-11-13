<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class TryoutSub extends Model
{
    use HasFactory;

    protected $table = "tryout_subs";
    protected $primaryKey = "tryout_sub_id";
    protected $keyType = "integer";
    protected $fillable = [
        "tryout_id",
        "sub_title",
        "sub_duration",
        "sub_order",
        "mean_val",
        "std_val",
    ];
    protected $hidden = [
        "tryout_id",
        "mean_val",
        "std_val",
        "sum_score",
        "created_at",
        "updated_at",
    ];
    protected $appends = [
        "sum_score",
    ];
    public $incrementing = true;

    // one to many
    public function user_pkgs(): HasMany
    {
        return $this->hasMany(UserPKG::class, 'tryout_sub_id', 'tryout_sub_id');
    }
    public function tryout_questions(): HasMany
    {
        return $this->hasMany(TryoutQuestion::class, 'tryout_sub_id', 'tryout_sub_id');
    }

    // many to one
    public function tryouts(): BelongsTo
    {
        return $this->belongsTo(TryoutPKG::class, 'tryout_id', 'tryout_id');
    }

    // appended attribut
    public function getSumScoreAttribute(): float
    {
        return $this->tryout_questions()->get()->sum('question_weight');
    }
}
