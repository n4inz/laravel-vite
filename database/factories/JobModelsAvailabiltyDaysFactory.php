<?php

namespace Database\Factories;

use App\Models\JobModels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsAvailabiltyDays>
 */
class JobModelsAvailabiltyDaysFactory extends Factory
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
            // 'job_models_id' => JobModels::inRandomOrder()->first()->id
        ];
    }
}
