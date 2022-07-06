<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dashboard_view()
    {
        $response = $this->get('/');
        $response->assertSeeText('Your Agency');
        $response->assertSeeText('Agency Revenue');

        $response->assertStatus(200);
    }
}
