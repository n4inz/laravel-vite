<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $payment = array('cash','check', 'online_payment' , 'any');
        $payment_rand = $payment[rand(0, count($payment) - 1)];
        $status = array("completed", "interviewing", "trialing", "potential_clients");
        $status_rand = $status[rand(0, count($status) - 1)];
        $type = array("active", "archived");
        $type_rand = $type[rand(0, count($type) - 1)];

        

        return [
            'family' => $this->faker->name,
            'title' => $this->faker->userName(mt_rand(3,5)),
            'description' => $this->faker->sentence(mt_rand(10,25)),
            'id_unique' =>  mt_rand(1000,9999),
            'location' => $this->faker->address,
            'category' => $this->faker->sentence(mt_srand(1,7)),
            'part_time' => $this->faker->word(mt_rand(3,7)),
            'desired_living' => $this->faker->word(mt_rand(3,7)),
            'english_level' => $this->faker->word(mt_rand(3,7)),

           'comfortable_with_pets' => (bool)rand(0,1),
           'has_transportation' => (bool)rand(0,1),
           'has_driver_license' => (bool)rand(0,1),

            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'duration' => mt_rand(1,12).'Month',

            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'asap' => (bool)rand(0,1),
            'tbd' => (bool)rand(0,1),

            'salary_type' => $this->faker->sentence(mt_rand(3,5)),
            'rate' => mt_rand(3,100).' USD',
            'pay_frequency' => $this->faker->sentence(mt_rand(3,5)),
            'pay_with' => $payment_rand,
            'rate_negotiable' => (bool)rand(0,1),
            'status' => $status_rand,
            'type' => $type_rand,
            'users_id' =>  $this->faker->randomDigit(1,100),
        ];
    }
}
