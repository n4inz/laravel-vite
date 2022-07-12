<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SettingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_setting_view()
    {
        $response = $this->get('/setting');

        $response->assertSeeText('General');
        $response->assertSeeText('Avatar');
        $response->assertSeeText('Details');
        $response->assertSeeText('Maternity Care');
        $response->assertSeeText('Send Notification');
        $response->assertSeeText('Choose a color theme');

        $response->assertStatus(200);
  
    }
}
