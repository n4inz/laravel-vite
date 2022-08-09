<?php

namespace Database\Factories;

use App\Models\Talents;
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
        // $talents = Talents::inRandomOrder()->first();
        return [
            'name_type_helper' => str_replace('_', ' ', ucfirst($typeNameRand)),
            'code_helper' => $typeNameRand,
            // 'talents_id' => $talents->id,
            // 'users_id' => $talents->users_id
        ];
    }


}
