<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Factory;
class JobboardTest extends TestCase
{
    // use RefreshDatabase;
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

    public function test_create_job_store()
    {

        $faker = Factory::create();
        $this->withoutExceptionHandling();

        $rand = rand(10000, 99999);

        $status = array("potential_clients", "interviewing", "trialing", "completed");
        $status_rand = $status[Rand(0, count($status) - 1)];
        $type = array("active", "archived");
        $type_rand = $type[Rand(0, count($type) - 1)];
        $payment = array('cash','check', 'online_payment');
        $payment_rand = $payment[Rand(0, count($payment) - 1)];

        $this->post('/register-store',[
            'sub_domain' => $faker->userName(),
            'email' => $faker->email,
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $subcategories = [
            $faker->text,
            $faker->text,
            $faker->text,
            $faker->text,
            $faker->text,
        ];

        $languages = [
            $faker->country,
            $faker->country,
            $faker->country,
            $faker->country,
            $faker->country,
        ];
        // $days = [
        //     $faker->dayOfWeek,
        //      $faker->dayOfWeek,
        //      $faker->dayOfWeek,
        //      $faker->dayOfWeek,
        //      $faker->dayOfWeek,
        // ];

        $response = $this->post('/job-store',[
            'family' => $faker->name,
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'id_unique' => $rand,
            'location' => $faker->address(),

            'category' => $faker->words(3, true),
            'part_time' => $faker->words(3, true),
            'desired_living' => $faker->words(3, true),
            'english_level' => $faker->words(3, true),

            'comfortable_with_pets' => $faker->boolean(true),
            'has_transportation' => $faker->boolean(true),
            'has_driver_license' => $faker->boolean(true),

            'start_time' => $faker->time,
            'end_time' => $faker->time,
            'duration' => $faker->text,

            'start_date' => $faker->date,
            'end_date' => $faker->date,
            'asap' => $faker->boolean(false),
            'tbd' => $faker->boolean(false),

            'salary_type' => $faker->text,
            'rate' => $faker->randomDigitNotNull,
            'pay_frequency' => $faker->randomDigitNotNull,
            'pay_with' => $payment_rand,
            'rate_negotiable' => $faker->boolean(true),

            'subcategories' => $subcategories,
            'language' => $languages,
            // 'days' => $days,

            'monday' => (bool)rand(0,1), 
            'tuesday' => (bool)rand(0,1), 
            'wednesday' => (bool)rand(0,1), 
            'thursday' => (bool)rand(0,1), 
            'friday' => (bool)rand(0,1),   
            'saturday' => (bool)rand(0,1), 
            'sunday' => (bool)rand(0,1), 

            'companion_elders' => (bool)rand(0,1),
            'hour_help' =>  (bool)rand(0,1), 
            'cook_meal' =>  (bool)rand(0,1), 
            'remind_medicine' =>  (bool)rand(0,1), 
            'run_errands' =>  (bool)rand(0,1), 
            'simple_housework' =>  (bool)rand(0,1), 
            'provide_transportation' =>  (bool)rand(0,1), 
            'assist_feeding' =>  (bool)rand(0,1), 
            'laundry' =>  (bool)rand(0,1), 
            'special_needs' =>  (bool)rand(0,1), 
            'prep_meal' =>  (bool)rand(0,1), 
            'assist_bathing' =>  (bool)rand(0,1), 
 
            'nanny' =>  (bool)rand(0,1), 
            'sister' =>  (bool)rand(0,1), 
            'maternity_care' =>  (bool)rand(0,1), 
            'at_home_daycare' =>  (bool)rand(0,1), 
            'infant' =>  (bool)rand(0,1), 
            'young_baby' =>  (bool)rand(0,1), 
            'toddler' =>  (bool)rand(0,1), 
            'press_schooler' =>  (bool)rand(0,1), 
            'grade_Schooler' =>  (bool)rand(0,1), 

            'status' => $status_rand,
            'type' =>  $type_rand,
        ]);

        $response->assertSeeText('ok');

    }
}
