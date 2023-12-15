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
        
        $response->assertStatus(200);
       
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
    

}
