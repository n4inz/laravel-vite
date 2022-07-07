<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_jobboard_view()
    {
        $response = $this->get('/jobboard');

        $response->assertSeeText('Potential Clients');
        $response->assertSeeText('Interviewing');
        $response->assertSeeText('Trialing');
        $response->assertSeeText('Completed');


        $response->assertStatus(200);
    }
}
