<?php

namespace Tests\Feature;

use Faker\Factory;
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

    public function test_client_create()
    {
        $faker = Factory::create();
        $this->withoutExceptionHandling();

        $response = $this->post('/user-client-store',[
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'languages' => $faker->country,
            'note' => $faker->text,
            'attached_file' => $faker->sentence,
            'users_id' => 1,
        ]);

        // $this->assertDatabaseHas('clients', [
        //     'first_name' => $faker->firstName,
        //     'last_name' => $faker->lastName,
        //     'email' => $faker->email,
        //     'phone' => $faker->phoneNumber,
        //     'address' => $faker->address,
        //     'languages' => $faker->country,
        //     'note' => $faker->text,
        //     'attached_file' => $faker->sentence,
        //     'users_id' => 1,
        // ]);

        $response->assertRedirect(route('user_client.client'));

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
