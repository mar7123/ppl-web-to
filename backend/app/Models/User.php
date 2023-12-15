<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = "users";
    protected $primaryKey = "user_id";
    protected $keyType = "string";
    protected $fillable = [
        'username',
        'full_name',
        'email',
        'birth_date',
        'phone_num',
        // 'prov',
        // 'city',
        'school',
        'major',
        'grad_date',
        'subscribed_at'
    ];
    protected $guarded = [
        'salt',
        'password',
        'remember_token',
        'subscribed_at'
    ];
    protected $hidden = [
        'user_id',
        'salt',
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'subscribed_at' => 'datetime',
        'password' => 'hashed',
    ];

    public $incrementing = false;
    public $timestamps = false;

    public function tryouts(): BelongsToMany
    {
        return $this->belongsToMany(TryoutPKG::class, 'user_pkgs', 'user_id', 'tryout_id')
            ->using(UserPKG::class)
            ->withPivot(['user_pkg_id', 'tryout_sub_id', 'sub_start', 'user_start', 'user_end', 'score', 'sub_to_score', 'shuffle_seed'])
            ->withTimestamps();
    }
    public function user_pkgs(): HasMany
    {
        return $this->hasMany(UserPKG::class, 'user_id', 'user_id');
    }
}
