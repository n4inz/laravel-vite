<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logic_register()
    {

        $this->withoutExceptionHandling();

        $response = $this->post('register-store',[
            'name' => 'test',
            'email' => 'test@mail.com',
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $this->assertAuthenticated();
        $response->assertSeeText('ok');
        $response->assertStatus(200);
    }
}
