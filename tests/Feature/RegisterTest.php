<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logic_register()
    {

        $this->withoutExceptionHandling();

        $response = $this->post('/register-store',[
            'sub_domain' => 'test',
            'email' => 'test@mail.com',
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect('https://test.'.env('DOMAIN'));
    }
}
