<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /* use DatabaseMigrations; */
    /* use RefreshDatabase; */

    public function test_create_new_user()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('api/auth/register',[
            'username' => 'mahasiswa',
            'full_name' => 'mahasiswaA',
            'password' => 'mhs123',
            'email' => 'mhsmhs123@mail.com',
            'birth_date' => '2002-08-17',
            'phone_num' => '+6281111111111',
            'school' => 'SMAN 1 Bandung',
            'major' => 'Saintek',
            'grad_date' => '2024'
        ]);
        $response->assertCreated();
    }

    public function test_login_user()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('api/auth/login',[
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123'
        ]);
        $response->assertCreated();
    }

    public function tes()
    {
        $response = $this->get("api/user");
        dd($response);
    }

    public function test_update_user_full_name()
    {
        // Create a user with an active subscription
        $user = User::factory()->create([
            'full_name' => 'Dr. Mallie Jenkins',
            'subscribed_at' => now(), // Assuming this attribute indicates a subscription
        ]);

        // Generate Sanctum token for the user
        $token = $user->createToken('test-token')->plainTextToken;

        // Simulate authentication with Sanctum
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->postJson('/api/user/update', [
            'full_name' => 'testa',
        ]);

        // Assert that the response indicates a successful profile update
        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'profile updated',
            ]);

       /*  // Retrieve the updated user record from the database
        $updatedUser = User::find($user->id);

        // Assertions to ensure the user's full_name was updated
        $this->assertEquals('testa', $updatedUser->full_name); */
    }

    public function test_logout_user()
    {
        // Login user to get the token
        $loginResponse = $this->postJson('/api/auth/login', [
            'email' => 'mhsmhs123@mail.com',
            'password' => 'mhs123',
        ]);

        $loginResponse->assertStatus(201); // Assert login was successful

        // Extract the token from the login response
        $token = $loginResponse->json('token');

        // Logout using the obtained token
        $logoutResponse = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/logout');

        $logoutResponse->assertStatus(200)
            ->assertJson([
                'data' => 'User Logout successfully.',
            ]);
    }

    



    // public function testUpdateUserNameWithAuthSanctum()
    // {
    //     // Find the user with the full_name 'mahasiswA'
    //     $user = User::where('full_name', 'mahasiswA')->first();
    //     dd($user);

    //     // // Generate Sanctum token for the user
    //     // $token = $user->createToken('test-token')->plainTextToken;

    //     // // Simulate authentication with Sanctum
    //     // $response = $this->withHeaders([
    //     //     'Authorization' => 'Bearer ' . $token,
    //     //     'Accept' => 'application/json',
    //     // ])->postJson('/api/user/update', [
    //     //     'full_name' => 'testa',
    //     // ]);

    //     // // Check response status and content
    //     // $response->assertStatus(200)
    //     //     ->assertJson([
    //     //         'status' => true,
    //     //         'message' => 'profile updated',
    //     //     ]);

    //     // // Retrieve the updated user record from the database
    //     // $updatedUser = User::find($user->id);

    //     // // Assertions to ensure the user's full_name was updated
    //     // $this->assertEquals('testa', $updatedUser->full_name);
    // }

    // public function testUpdateUserFullName()
    // {
    //     /* // Create a user with the full_name 'mahasiswA'
    //     User::factory()->create(['full_name' => 'mahasiswA']); */

    //     // Fetch the user with the full_name 'mahasiswA'
    //     $user = User::where('full_name', 'mahasiswA')->first();

    //     // Simulate authentication for the user
    //     $this->actingAs($user);

    //     // Simulate a request to update the user's full_name to 'neo'
    //     $response = $this->postJson('/api/user/update', ['full_name' => 'neo']);

    //     // Check the response status and content
    //     $response->assertStatus(200)
    //         ->assertJson([
    //             'status' => true,
    //             'message' => 'profile updated',
    //         ]);

    //     // Retrieve the updated user record from the database
    //     $updatedUser = User::find($user->id);

    //     // Assertions to ensure the user's full_name was updated
    //     $this->assertEquals('neo', $updatedUser->full_name);
    // }
}
