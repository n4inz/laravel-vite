<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsSubCategorys>
 */
class JobsSubCategorysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'companion_elders' => (bool)rand(0,1),
            'hour_help' =>  (bool)rand(0,1), 
            'cook_meal' =>  (bool)rand(0,1), 
            'remind_medicine' =>  (bool)rand(0,1), 
            'run_errands' =>  (bool)rand(0,1), 
            'simple_housework' =>  (bool)rand(0,1), 
            'provide_transportation' =>  (bool)rand(0,1), 
            'assist_feeding' =>  (bool)rand(0,1), 
            'laundry' =>  (bool)rand(0,1), 
            'special_needs' =>  (bool)rand(0,1), 
            'prep_meal' =>  (bool)rand(0,1), 
            'assist_bathing' =>  (bool)rand(0,1), 
 
            'nanny' =>  (bool)rand(0,1), 
            'sister' =>  (bool)rand(0,1), 
            'maternity_care' =>  (bool)rand(0,1), 
            'at_home_daycare' =>  (bool)rand(0,1), 
            'infant' =>  (bool)rand(0,1), 
            'young_baby' =>  (bool)rand(0,1), 
            'toddler' =>  (bool)rand(0,1), 
            'press_schooler' =>  (bool)rand(0,1), 
            'grade_Schooler' =>  (bool)rand(0,1),
            'jobs_id' => mt_rand(1,10)
        ];
    }
}
