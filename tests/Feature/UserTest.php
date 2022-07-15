<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_client_view()
    {
        $response = $this->get('/user/client');

        $response->assertSeeText('Create Client');
        $response->assertSeeText('Attached file');
        $response->assertSeeText('First Name');
        $response->assertSeeText('Phone');
        $response->assertSeeText('Address');
        $response->assertSeeText('Note');

        $response->assertStatus(200);
    }
    public function test_user_talent_view()
    {
        $response = $this->get('/user/talent');

        $response->assertSeeText('Talents');
        $response->assertSeeText('Jean-Paul Kueny');
        $response->assertSeeText('+ Create');


        $response->assertStatus(200);
    }
}
