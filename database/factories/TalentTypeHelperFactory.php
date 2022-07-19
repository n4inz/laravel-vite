<?php

namespace Database\Factories;

use App\Models\TalentTypeHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TalentTypeHelperFactory extends Factory
{
    // protected $model = TalentTypeHelper::class;
 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       $typeCode = [
        'companion_elders',
        'hour_help',
        'cook_meal',
        'remind_medicine',
        'run_errands',
        'simple_housework',
        'provide_transportation',
        'assist_feeding',
        'laundry',
        'special_needs',
        'prep_meal',
        'assist_bathing',
        'nanny',
        'sister',
        'maternity_care',
        'at_home_daycare',
        'infant',
        'young_baby',
        'toddler',
        'press_schooler',
        'grade_schooler',
        ];

        $typeName = [
            'Companion Elders',
            'Hour Help',
            'Cook Meal',
            'Remind Medicine',
            'Run Errands',
            'Simple Housework',
            'Provide Transportation',
            'Assist Feeding',
            'Laundry',
            'Special Needs',
            'Prep Meal',
            'Assist Bathing',
            'Nanny',
            'Sister',
            'Maternity Care',
            'At Home Daycare',
            'Infant',
            'Young Baby',
            'tToddler',
            'Press Schooler',
            'Grade Schooler',
            ];

        $typeCodeRand = $typeCode[Rand(0, count($typeCode) - 1)];
        $typeNameRand = $typeName[Rand(0, count($typeName) - 1)];

        return [
           'name_type_helper' => $typeNameRand,
           'code_helper' => $typeCodeRand,

            'talents_id' => mt_rand(1,10),
            'users_id' => mt_rand(1,10),

        ];
    }


}
