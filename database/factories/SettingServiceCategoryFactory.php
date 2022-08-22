<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SettingServiceCategory>
 */
class SettingServiceCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $subcategory =  [
        'Nanny',
        'Sister',
        'Au Pair',
        'Maternity Care',
        'At Home Daycare',
        'Infant',

        'Young Baby',
        'Toddler',
        'Press Schooler',
        'Grade Schooler',
        'Assist Bathing',
        
        // Senior care
        'Companion',
        'Personal Full Care',
        'Laundry',
        'Prep Meal',
        'Cook Meal',
        'Run Errands',
        'Special Needs',
        'Simple Housework',
        'Assist Feeding',
        'Hour Help',
        'Remind Medicine', 


        // Home Care
        'Companion Elders',
        'Private Home Kitchen',
        'Meal Prepation Coking',
        'House Cleaning',
        'Provide Transportation',
        
        // Other
        'Tutor',
        'Pick Up Drop Off',
        'Other Professional Services'];
        $typeNameRand = $subcategory[Rand(0, count($subcategory) - 1)];
        return [
            //
        ];
    }
}
