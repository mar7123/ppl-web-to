<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_articles()
    {
        // Make the GET request to the API endpoint
        $response = $this->get('api/articles');


        // Assert the response structure and data
        $response->assertJsonStructure([
            'status',
            'data' => [
                'current_page',
                'data' => [
                    '*' => [
                        'article_id',
                        'author',
                        'published_at',
                        'article_title',
                        'article_desc',
                        'article_img',
                    ]
                ]
            ]
        ]);

        // Assert the status code is 200 (or any other expected code)
        $response->assertStatus(200);
    }

    public function test_retrieve_article_by_id()
    {
        // Retrieve an article from the database, assuming you have an article with ID 1
        $articleId = 1;
        $response = $this->get("api/articles/{$articleId}");
        /* dd($response); */
        
        // Assert the response structure and data
        $response->assertJsonStructure([
            'status',
            'data' => [
                'article_id',
                'author',
                'published_at',
                'article_title',
                'article_desc',
                'article_img',
            ],
        ]);

        // Assert the retrieved article's ID matches the expected ID
        $response->assertJsonFragment(['article_id' => $articleId]);

        // Assert the status code is 200 (or any other expected code)
        $response->assertStatus(200);
    }
}
