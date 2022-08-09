<?php

namespace Database\Factories;

use App\Models\User;
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
        $users_id = User::inRandomOrder()->first()->id;
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
            'file_documents' => 'dummy.pdf',
            // 'users_id' => $users_id,
            // 'create_by' => $users_id,
        ];
    }
}
