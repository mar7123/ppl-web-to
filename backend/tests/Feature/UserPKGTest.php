<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UserPKGTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_tryout(): void
    {
        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123',
        ]);
        /* echo var_dump($loginResponse); */
        $token = $loginResponse->json('token');

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('/api/user/tryout');
        /* echo $response->content(); */

        //print response
        $resultArray = json_decode($response->content(),true);

        print_r($resultArray);
        /* $response->assertJsonStructure([
            'status',
            'data' => [
                1 => [
                    '*' => [
                        'tryout_id',
                        'title',
                        'start_time',
                        'end_time',
                        'desc_to',
                    ]
                ]
            ]
        ]); */
        $response->assertStatus(200);
        /* dd($response); */
        /* $user = User::factory()->create([
            'full_name' => 'Dr. Mallie Jenkins',
            'subscribed_at' => now(), // Assuming this attribute indicates a subscription
        ]); */

        // Generate Sanctum token for the user
        /* $token = $user->createToken('test-token')->plainTextToken; */

        // Simulate authentication with Sanctum
        /* $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get('/api/user/tryout'); */ // Ensure the correct endpoint path
        /* dd($response); */
        // Assertion checks for a successful response status
        // Inspect the response for clues if it's unexpected
    
        // Perform assertions based on the received response or status code

    //     $loginResponse = $this->postJson('/api/auth/login', [
    //         'email' => 'mhsmhs123@mail.com',
    //         'password' => 'mhs123',
    //     ]);
    //     /* dd($loginResponse); */

    //     /* $loginResponse->assertStatus(201); // Assert login was successful */

    //     // Extract the token from the login response
    //     $token = $loginResponse->json('token');
    //     /* dd($token); */
    //     $response = $this->withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //     ])->get("api/user/tryout");

    //     $response->assertJsonStructure([
    //         'status',
    //         'data' => [
    //             'current_page',
    //             'data' => [
    //                 '*' => [
    //                     'article_id',
    //                     'author',
    //                     'published_at',
    //                     'article_title',
    //                     'article_desc',
    //                     'article_img',
    //                 ]
    //             ]
    //         ]
    //     ]);

    //     dd($response);
    //     /* $response->assertJsonStructure([
    //         'status',
    //         'data' => [
    //             'article_id',
    //             'author',
    //             'published_at',
    //             'article_title',
    //             'article_desc',
    //             'article_img',
    //         ],
    //     ]); */
    }

    public function test_get_user_tryout_history()
    {
        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123',
        ]);
        /* echo var_dump($loginResponse); */
        $token = $loginResponse->json('token');

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('/api/user/tryout/history');
        /* echo $response->content(); */

        //print response
        /* $resultArray = json_decode($response->content(),true);

        var_export($resultArray); */
        
        $response->assertStatus(200);
    }

    public function test_get_user_tryout_upcoming()
    {
        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123',
        ]);
        /* echo var_dump($loginResponse); */
        $token = $loginResponse->json('token');

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('/api/user/tryout/upcoming');
        /* echo var_dump($response); */
        /* echo $response->content(); */

        //print response
        /* $resultArray = json_decode($response->content(),true);

        var_export($resultArray); */
        
        $response->assertStatus(200);
    }

    public function test_get_user_tryout_not_purchased()
    {
        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123',
        ]);
        /* echo var_dump($loginResponse); */
        $token = $loginResponse->json('token');

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('/api/user/tryout/notpurchased');
        /* echo var_dump($response); */
        /* echo $response->content(); */

        //print response
        /* $resultArray = json_decode($response->content(),true);

        var_export($resultArray); */
        
        $response->assertStatus(200);
    }

    public function test_start_user_tryout()
    {
        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123',
        ]);
        /* echo var_dump($loginResponse); */
        $token = $loginResponse->json('token');

        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/user/tryout/start', [
            'user_pkg_id' => '9ad9eef9-3fa5-4033-b11c-110ace88253f',
        ]);
       /*  echo var_dump($response); */
        
       
        /* echo $response->content(); */

        //print response
        /* $resultArray = json_decode($response->content(),true);

        var_export($resultArray); */
        
        $response->assertStatus(200);
    }
    

}
