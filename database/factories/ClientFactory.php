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
        $users_id = User::inRandomOrder()->first()->id;
        return [
           'first_name' => $this->faker->firstName,
           'last_name' => $this->faker->lastName,
           'email'  =>  $this->faker->unique()->email,
           'phone' => $this->faker->phoneNumber,
           'address' => $this->faker->address,
           'languages' => $this->faker->country,
           'note' => $this->faker->sentence(mt_rand(15,30)),
           'avatar' => 'dummy.png',
        //    'users_id' => $users_id,
        //    'create_by' => $users_id
        ];
    }
}
