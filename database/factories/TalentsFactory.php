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
        $users_id = User::inRandomOrder()->first()->id;
        return [
            // 'avatar' => 'dummy.png',
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'day_of_birthday' => $this->faker->date,
            'experience' => $this->faker->randomNumber(2,false),
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'color' => $color_rand,
            'address' => $this->faker->address,
            'about_talent' => $this->faker->sentence,
            'file_documents' => 'dummy.pdf',
            // 'users_id' => $users_id,
            // 'create_by' => $users_id,
        ];
    }
}
