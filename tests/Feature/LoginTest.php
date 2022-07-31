<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logic_login(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/register-store',[
            'sub_domain' => 'test',
            'email' => 'test@mail.com',
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        // $this->assertDatabaseHas('credensials', [
        //     'email' => 'test@mail.com',
        //     'credensial' => 'test123'
        // ]);

        $response = $this->post('/login-store',[
            'email' => 'test@mail.com',
            'password' => 'test123',
        ]);

   

        // $this->post('/register-store',[
        //     'sub_domain' => 'test',
        //     'email' => 'test@mail.com',
        //     'password' => 'test123',
        //     'password_confirmation' => 'test123'
        // ]);

        // $response = $this->post('/login-store',[
        //     'email' => 'test@mail.com',
        //     'password' => 'test123',
        // ]);

        $this->assertAuthenticated();

        // $response->assertRedirect('https://nain.'.env('DOMAIN').'/dashboard');
    }

    public function test_staf_login()
    {
        
        $this->withoutExceptionHandling();
        $response = $this->post('/login-staf',[
            'email' => 'nainzs@mail.com',
            'password' => 'qwerty',
        ]);

        $this->assertAuthenticated('staf');
        $response->assertSeeText('is_logins');
        $response->assertStatus(200);

    }
}
