<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsAvailabiltyDays>
 */
class JobsAvailabiltyDaysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'monday' => (bool)rand(0,1), 
            'tuesday' => (bool)rand(0,1), 
            'wednesday' => (bool)rand(0,1), 
            'thursday' => (bool)rand(0,1), 
            'friday' => (bool)rand(0,1),   
            'saturday' => (bool)rand(0,1), 
            'sunday' => (bool)rand(0,1),
            'jobs_id' => mt_rand(1,10)
        ];
    }
}
