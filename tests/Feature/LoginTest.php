<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logic_login()
    {
        $this->withoutExceptionHandling();

        $this->post('/register-store',[
            'sub_domain' => 'test',
            'email' => 'test@mail.com',
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $response = $this->post('/login-store',[
            'email' => 'test@mail.com',
            'password' => 'test123',
        ]);

        $this->assertAuthenticated();

        $response->assertRedirect('https://test.'.env('DOMAIN'));
    }
}
