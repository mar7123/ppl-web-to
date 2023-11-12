<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use DatabaseMigrations;
    use RefreshDatabase;

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
        $response->assertOk();
        /* $response = $this->get('/');

        $response->assertStatus(200); */
    }

    public function test_login_user()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('api/auth/login',[
            'password' => 'mhs123',
            'email' => 'mhsmhs123@mail.com',
        ]);
        $response->assertOk();
    }
}
