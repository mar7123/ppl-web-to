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
            'email' => 'admin123@email.com',
            'password' => 'admin123'
        ]);
        // echo var_dump($loginResponse);

        $token = $loginResponse->json('token');
        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/payments', [
            'payer_email' => 'mhsmhs123@mail.com',
        ]);

        /* echo var_dump($response); */
        $response->assertStatus(201);
        // echo var_dump($response);
        
        // /* $response = $this->post('/api/payments', [
        //     'payer_email' => 'mhsmhs123@mail.com',
        //     'token' => $token,
        //     // Include other required payment data
        // ]); */

        // $response->assertStatus(201);

        // Simulate a request to the payment endpoint
       
        // Assert the response status
        /* $response->assertStatus(201); */

        /* // Assuming you have a user registered from previous tests
        $user = User::where('email', 'mhsmhs123@mail.com')->first();
        
        // Mimic authentication by acting as the user
        $this->actingAs($user); */
        

        // $token = $loginResponse->json('token');

        // Make a POST request to the payment endpoint
        /* $response = $this->post('api/payment', [
            // Include payment data here
            
        ]);
        $response->assertStatus(201); */

        // // Assert the response status
        // $response->assertStatus(201); // Adjust as per your expected response

        // Add more assertions as needed to validate payment creation
        // For instance, check if payment data is correctly stored in the database
    }

    

}
