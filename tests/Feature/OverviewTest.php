<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OverviewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_overview_view()
    {
        $response = $this->get('/overview');

        $response->assertSeeText('Job Detail');
        $response->assertSeeText('Responsibilities');
        $response->assertSeeText('Task');
        $response->assertSeeText('Matched Talent');
        $response->assertSeeText('Attachments File');
        $response->assertSeeText('Activities');

        $response->assertStatus(200);
    }
}
