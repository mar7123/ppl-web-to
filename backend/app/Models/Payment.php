<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = "payments";
    protected $primaryKey = "id";
    protected $keyType = "integer";
    protected $fillable = [
        'checkout_link',
        'external_id',
        'status',
    ];
    public $incrementing = true;
}
