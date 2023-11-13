<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";
    protected $primaryKey = "article_id";
    protected $keyType = "integer";
    protected $fillable = [
        "author",
        "published_at",
        "article_title",
        "article_desc",
        "article_img",
    ];
    protected $hidden = [
        "created_at",
        "updated_at",
    ];
    public $incrementing = true;
}
