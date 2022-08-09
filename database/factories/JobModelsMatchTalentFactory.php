<?php

namespace Database\Factories;

use App\Models\JobModels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsSubCategorys>
 */
class JobModelsMatchTalentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subcategory =  ['nanny',
        'sister',
        'au_pair',
        'maternity_care',
        'at_home_daycare',
        'infant',

        'young_baby',
        'toddler',
        'press_schooler',
        'grade_schooler',
        'assist_bathing',
        
        // Senior care
        'companion',
        'personal_full_care',
        'laundry',
        'prep_meal',
        'cook_meal',
        'run_errands',
        'special_needs',
        'simple_housework',
        'assist_feeding',
        'hour_help',
        'remind_medicine', 


        // Home Care
        'companion_elders',
        'private_home_kitchen',
        'meal_prepation_coking',
        'house_cleaning',
        'provide_transportation',
        
        // Other
        'tutor',
        'pick_up_frop_off',
        'other_professional_services'];
        $typeNameRand = $subcategory[Rand(0, count($subcategory) - 1)];
        return [
            'jobs_sub_category' => $typeNameRand,
            // 'job_models_id' => JobModels::inRandomOrder()->first()->id,
            // 'users_id' => JobModels::inRandomOrder()->first()->users_id,
        ];
    }
}
