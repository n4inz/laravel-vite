<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $color = [
            '#EB5757',
            '#F2994A',
            '#27AE60',
            '#6AEAE3',
            '#56CCF2',
            '#BB6BD9',
            '#F2C94C',
        ];
        $color_rand = $color[rand(0, count($color) - 1)];

       
        return [
           'first_name' => $this->faker->firstName,
           'last_name' => $this->faker->lastName,
           'email'  =>  $this->faker->unique()->email,
           'phone' => $this->faker->phoneNumber,
           'address' => $this->faker->address,
           'languages' => $this->faker->country,
           'color' => $color_rand,
           'note' => $this->faker->sentence(mt_rand(15,30)),
        //    'avatar' => 'dummy.png',
        //    'users_id' => $users_id,
        //    'create_by' => $users_id
        ];
    }
}
