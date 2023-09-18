<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TryoutPKG extends Model
{
    use HasFactory, HasUuids;

    protected $table = "tryout_pkgs";
    protected $primaryKey = "tryout_id";
    protected $keyType = "string";
    protected $fillable = [
        "title",
        "start_date",
        "end_date",
        "desc_to"
    ];
    public $incrementing = false;
}
