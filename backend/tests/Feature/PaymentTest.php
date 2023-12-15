<?php

namespace Tests\Feature;

use App\Http\Controllers\PaymentController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Payment;
use App\Models\User;
use Xendit\Invoice\InvoiceApi;
use Tests\TestCase;
use Mockery;

class PaymentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_method()
    {
        $loginResponse = $this->post('api/auth/login',[
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123'
        ]);
        // echo var_dump($loginResponse);

        $token = $loginResponse->json('token');
        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/payments', [
            'payer_email' => 'mhsmhs123@mail.com',
        ]);

        echo var_dump($response);
        $response->assertStatus(201);
        
    }

    

}
