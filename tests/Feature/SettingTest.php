<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class SettingTest extends TestCase
{
    use RefreshDatabase;
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

    public function test_setting_store()
    {
        $faker = Factory::create();
        $avatar = UploadedFile::fake()->image($faker->userName().'.png');
        $this->withoutExceptionHandling();


        $this->post('/register-store',[
            'sub_domain' => $faker->userName(),
            'email' => $faker->email,
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $response = $this->post('/setting-store',[
            // Setting General
            'agency_name' => $faker->name,
            'url_ending_legal' => $faker->url(), 
            'company_description' => $faker->company(),
            'avatar' => $avatar,

            // Setting Detail
            'service_type' => $faker->text,

            'chile_care' => $faker->boolean(true),
            'nanny_sister' => $faker->boolean(true),
            'au_pair' => $faker->boolean(true),
            'maternity_care' => $faker->boolean(true),
            'at_home_daycare' => $faker->boolean(true),
            'senior_care' => $faker->boolean(true),
            'companion' => $faker->boolean(true),
            'personal_full_care' => $faker->boolean(true),
            'home_care' => $faker->boolean(true),
            'meal_prepation_coking' => $faker->boolean(true),
            'house_cleaning' => $faker->boolean(true),
            'private_home_kitchen' => $faker->boolean(true),
            'other' => $faker->sentence,

            'location' => $faker->address,
            'send_notifcation' => $faker->boolean(false),
            'aplication_fee' => $faker->randomDigit,
            'placement_fee' => $faker->randomDigit,
            'hourly_rate' => $faker->randomDigit,

            // Setting Users
            'client' => $faker->boolean(true),
            'caregives' => $faker->boolean(true),
            'interested_public_pool' => $faker->boolean(true),

            // Setting additionals
            'notification_email' => $faker->boolean(true),
            'dashboard_color_theme' => $faker->colorName,

            'body' =>$faker->text
        ]);

        $response->assertSeeText('ok');
    }
}
