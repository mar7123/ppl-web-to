<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithConsoleEvents;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TryoutPKGTest extends TestCase
{
    use WithConsoleEvents;

    /**
     * A basic feature test example.
     */
    // public function test_parse_soal(): void
    // {
    //     $loginResponse = $this->postJson('/api/auth/login', [
    //         'email' => 'mhsmhs123@mail.com',
    //         'password' => 'mhs123',
    //     ]);
    //     $token = $loginResponse->json('token');

    //     $response = $this->withHeaders([
    //         'Authorization' => 'Bearer ' . $token,
    //     ])->get('/api/parseSoal');

    //     $resArr = json_decode($response->content());

    //     print_r($resArr);

    //     $response->assertStatus(200);


    // }

    
}
