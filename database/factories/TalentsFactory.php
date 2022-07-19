<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Talents>
 */
class TalentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'avatar' => 'dummy.png',
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'day_of_birthday' => $this->faker->date,
            'experience' => $this->faker->randomNumber(2,false),
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,

            'address' => $this->faker->address,
            'about_talent' => $this->faker->sentence,
            'file_documents' => 'dummy',
            'users_id' => mt_rand(1,10),
        ];
    }
}
