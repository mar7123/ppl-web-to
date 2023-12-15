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
        $resultArray = json_decode($response->content(), true);

        /* print_r($resultArray); */
        $userPkgId = null; // Variable to store the 'user_pkg_id'
        $found = false; // Flag to track if 'user_pkg_id' is found

        foreach ($resultArray['data'] as $tryouts) {
            foreach ($tryouts as $tryout) {
                if (!$found && isset($tryout['pivot']['user_pkg_id'])) {
                    $userPkgId = $tryout['pivot']['user_pkg_id'];
                    $found = true; // Set the flag to stop further iteration
                    break; // Exit the inner foreach loop
                }
            }
            if ($found) {
                break; // Exit the outer foreach loop if 'user_pkg_id' is found
            }
        }

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

    // public function test_start_user_tryout()
    // {
    //     $loginResponse = $this->postJson('/api/auth/login', [
    //         'email' => 'mhsmhs123@mail.com',
    //         'password' => 'mhs123',
    //     ]);
    //     /* echo var_dump($loginResponse); */
    //     $token = $loginResponse->json('token');

    //     $responsetry = $this->withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //     ])->get('/api/user/tryout');
        
    //     //print response
    //     $resultArray = json_decode($responsetry->content(), true);
    //     /* print_r($resultArray); */

    //     /* print_r($resultArray); */
    //     $userPkgId = null; // Variable to store the 'user_pkg_id'
    //     $found = false; // Flag to track if 'user_pkg_id' is found

    //     foreach ($resultArray['data'] as $tryouts) {
    //         foreach ($tryouts as $tryout) {
    //             if (!$found && isset($tryout['pivot']['user_pkg_id'])) {
    //                 $userPkgId = $tryout['pivot']['user_pkg_id'];
    //                 $found = true; // Set the flag to stop further iteration
    //                 break; // Exit the inner foreach loop
    //             }
    //         }
    //         if ($found) {
    //             break; // Exit the outer foreach loop if 'user_pkg_id' is found
    //         }
    //     }
    //     $response = $this->withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //     ])->postJson('/api/user/tryout/start', [
    //         'user_pkg_id' => $userPkgId,
    //     ]);
    //     /*  echo var_dump($response); */


    //     /* echo $response->content(); */

    //     //print response
    //     /* $resultArray = json_decode($response->content(),true);

    //     var_export($resultArray); */

    //     $response->assertStatus(201);
    // }

    // public function test_end_user_tryout()
    // {
    //     $loginResponse = $this->postJson('/api/auth/login', [
    //         'email' => 'mhsmhs123@mail.com',
    //         'password' => 'mhs123',
    //     ]);
    //     /* echo var_dump($loginResponse); */
    //     $token = $loginResponse->json('token');
    //     $responsetry = $this->withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //     ])->get('/api/user/tryout');
        
    //     //print response
    //     $resultArray = json_decode($responsetry->content(), true);
    //     print_r($responsetry->collect());
    //     /* print_r($resultArray); */

    //     /* print_r($resultArray); */
    //     $userPkgId = null; // Variable to store the 'user_pkg_id'
    //     $found = false; // Flag to track if 'user_pkg_id' is found

    //     foreach ($resultArray['data'] as $tryouts) {
    //         foreach ($tryouts as $tryout) {
    //             if (!$found && isset($tryout['pivot']['user_pkg_id'])) {
    //                 $userPkgId = $tryout['pivot']['user_pkg_id'];
    //                 $found = true; // Set the flag to stop further iteration
    //                 break; // Exit the inner foreach loop
    //             }
    //         }
    //         if ($found) {
    //             break; // Exit the outer foreach loop if 'user_pkg_id' is found
    //         }
    //     }        $responsetry = $this->withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //     ])->postJson('/api/user/tryout/end', [
    //         'user_pkg_id' => $userPkgId,
    //     ]);
    //     $responsetry->assertStatus(200);

    // }


}
