<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        require_once(__DIR__ . '/Article/Article.php');
        \App\Models\Article::factory(3)
            ->sequence(
                fn ($sequence) => [
                    "author" => $articles[$sequence->index]["author"],
                    "published_at" => $articles[$sequence->index]["published_at"],
                    "article_title" => $articles[$sequence->index]["article_title"],
                    "article_desc" => $articles[$sequence->index]["article_desc"],
                    "article_img" => $articles[$sequence->index]["article_img"],
                ]
            )->create();
    }
}
