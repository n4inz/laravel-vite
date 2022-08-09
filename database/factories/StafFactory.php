<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staf>
 */
class StafFactory extends Factory
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
            'type' => 'staf',
            'avatar' => 'dummy.png',
            'users_id' => $users_id,
            'users_agency_id' => $users_id
        ];
    }
}
