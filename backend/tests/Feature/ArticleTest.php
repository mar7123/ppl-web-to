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
//     public function test_take_article(): void
//     {
//         /* $response = $this->get('/');

//         $response->assertStatus(200); */
//         /* $article = Article::factory()->create();
//         //dd($cek);

//         $response = $this->getJson(route('/articles/{id}',$this->$article->article_id));

//         $response->assertOk(); */

//         // Buat beberapa artikel palsu untuk diuji
//         Article::factory()->count(5)->create();

//         // Lakukan permintaan ke endpoint API /api/articles
//         $response = $this->getJson('/api/articles');

//         /* // Lakukan assertions terhadap respons
//         $response->assertStatus(200)
//             ->assertJsonStructure([
//                 '*' => [
//                     'article_id',
//                     'author',
//                     'published_at',
//                     'article_title',
//                     'article_desc',
//                     'article_img',
//                     'created_at',
//                     'updated_at',
//                 ]
//             ]);
//  */
//          // Lakukan assertions terhadap respons
//          $response->assertStatus(200)
//          ->assertJsonStructure([
//              '*' => [
//                  'author',
//                  'published_at',
//                  'article_title',
//                  'article_desc',
//                  'article_img'
//              ]
//          ]);


//     }

    /**
     * A basic feature test example.
     */
    public function test_get_articles()
    {
        // Buat beberapa data artikel palsu menggunakan factory
        /* Article::factory()->count(3)->create(); */

        /* $userData = Article::where('author', 'Priscilla Runte')->first();
        dd($userData); */

        // Lakukan permintaan ke endpoint /articles
        /* $response = $this->get('api/articles');
        dd($response->json()); */

        // Lakukan assertions terhadap respons
        /* $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'data' => [
                    '*' => [
                        'article_id',
                        'author',
                        'published_at',
                        'article_title',
                        'article_desc',
                        'article_img',
                        'created_at',
                        'updated_at',
                    ]
                ]
            ]);
            dd($response);*/

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
    
    /* public function test_retrieve_article_by_id()
    {
        // Retrieve an article from the database, assuming you have an article with ID 1
        $articleId = 1;
        $response = $this->get("api/articles/{id}");


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
                ],
                'first_page_url',
                'from',
                'next_page_url',
                'path',
                'per_page',
                'prev_page_url',
                'to',
            ]
        ]);

        // Assert the retrieved article's ID matches the expected ID
        $response->assertJsonFragment(['article_id' => $articleId]);

        // Assert the status code is 200 (or any other expected code)
        $response->assertStatus(200);
    } */

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
