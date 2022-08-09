<?php

namespace Database\Factories;

use App\Models\JobModels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsLanguages>
 */
class JobModelsLanguagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'language' => $this->faker->country,       
            // 'job_models_id' => JobModels::inRandomOrder()->first()->id,

        ];
    }
}
