<?php

namespace Database\Seeders;

use App\Models\SettingDetail;
use App\Models\SettingGeneral;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingServiceSubcategory;
use App\Models\SettingStatusTalent;
use App\Models\TalentStatusColor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();



        User::all()->map(function($users) use($faker){
          $settingGeneral =  SettingGeneral::create([
                'agency_name' => $faker->userName,
                'url_ending_legal' => $faker->url,
                'company_description' => $faker->sentence(10),
                'users_id' => $users->id
            ]);

            $status = [
                [
                    'name' => 'Potential Client',
                    'key' => 'potential_client',
                    'color' => '#FFFF'
                ],

                [
                    'name' => 'Internal Matched',
                    'key' => 'internal_matched',
                    'color' => '#34A1EB',
                ],
                [
                    'name' =>  'Agency Interview',
                    'key' => 'agency_interview',
                    'color' => '#5FCFFF'
                ],
                [
                    'name' => 'Present to Family',
                    'key' => 'present_to_family',
                    'color' => '#3BD7CF'
                ],
                [
                    'name' => 'Family Interview',
                    'key' => 'family_interview',
                    'color' => '#5FCFFF'
                ],
                [
                    'name' => 'Family Trialing',
                    'key' => 'family_trialing',
                    'color' => '#2F2CA6'
                ],
                [
                    'name' => 'Rejected',
                    'key' => 'rejected',
                    'color' => '#E32222'
                ],
                [
                    'name' => 'Withdrawn',
                    'key' => 'withdrawn',
                    'color' => '#FA9D6B'
                ],
                [
                    'name' => 'Family Offer',
                    'key' => 'family_offer',
                    'color' => '#3FBF5F'
                ]
            ];
           
            foreach($status as $val_status){
                SettingJobModelsStatus::create([
                    'status_name' => $val_status['name'],
                    'status_key' => str_replace(' ', '_', strtolower($val_status['name'])),
                    'status' => (bool)rand(0,1),
                    'users_id' => $users->id
                ]);

                if($val_status['name'] != 'Potential Client'){
                    SettingStatusTalent::create([
                        'status_name' => $val_status['name'],
                        'status_key' => str_replace(' ', '_', strtolower($val_status['name'])),
                        'color' => $val_status['color'],
                        'users_id' => $users->id
                    ]);
                }

                // TalentStatusColor::create([
                //     'status' => $val_status['name'],
                //     'status_key' => str_replace(' ', '_', strtolower($val_status['name'])),
                //     'color' => $val_status['color'],
                // ]);
            }

            $subcategory_child = [
                'Nanny/ Sitter',
                // 'Sister',
                'Au Pair',
                'Maternity Care',
                'At Home Daycare',
                'Infant',
                'Young Baby',
                'Toddler',
                'Press Schooler',
                'Grade Schooler',
                'Assist Bathing',
            ];

            $subcategory_senior = [
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
            ];
            $subcategory_home = [
                'Companion Elders',
                'Private Home Kitchen',
                'Meal Prepation Coking',
                'House Cleaning',
                'Provide Transportation',
            ];

            $subcategory_other = [
                'Tutor',
                'Pick Up Drop Off',
                'Other Professional Services'
            ];

            // Child
            $child = SettingServiceCategory::create([
                'category_name' => 'Child Care',
                'category_key' => str_replace(' ', '_', strtolower('Child Care')),
                'users_id' => $users->id
            ]);

            foreach($subcategory_child as $val_sub_child){
                SettingServiceSubcategory::create([
                    'category' => 'Child Care',
                    'sub_category_name' => $val_sub_child,
                    'sub_category_key' => str_replace(' ', '_', strtolower($val_sub_child)),
                    'status' => 'NOTCOSTUM',
                    'checkbox' => true,
                    'users_id' => $users->id,
                    'service_categories_id' => $child->id
                ]);
            }

            // Senior
            $senior = SettingServiceCategory::create([
                'category_name' => 'Senior Care',
                'category_key' => str_replace(' ', '_', strtolower('Senior Care')),
                'users_id' => $users->id
            ]);

            foreach($subcategory_senior as $val_sub_senior){
                SettingServiceSubcategory::create([
                    'category' => 'Senior Care',
                    'sub_category_name' => $val_sub_senior,
                    'sub_category_key' => str_replace(' ', '_', strtolower($val_sub_senior)),
                    'status' => 'NOTCOSTUM',
                    'checkbox' => true,
                    'users_id' => $users->id,
                    'service_categories_id' => $senior->id
                ]);
            }

            // Home
            $home = SettingServiceCategory::create([
                'category_name' => 'Home Care',
                'category_key' => str_replace(' ', '_', strtolower('Home Care')),
                'users_id' => $users->id
            ]);

            foreach($subcategory_home as $val_sub_home){
                SettingServiceSubcategory::create([
                    'category' => 'Home Care',
                    'sub_category_name' => $val_sub_home,
                    'sub_category_key' => str_replace(' ', '_', strtolower($val_sub_home)),
                    'status' => 'NOTCOSTUM',
                    'checkbox' => true,
                    'users_id' => $users->id,
                    'service_categories_id' => $home->id
                ]);
            }


            $other = SettingServiceCategory::create([
                'category_name' => 'Home Care',
                'category_key' => str_replace(' ', '_', strtolower('Home Care')),
                'users_id' => $users->id
            ]);

            foreach($subcategory_other as $val_sub_other){
                SettingServiceSubcategory::create([
                    'category' => 'Other services',
                    'sub_category_name' => $val_sub_other,
                    'sub_category_key' => str_replace(' ', '_', strtolower($val_sub_other)),
                    'status' => 'NOTCOSTUM',
                    'checkbox' => true,
                    'users_id' => $users->id,
                    'service_categories_id' => $other->id
                ]);
            }
            

           $settingDetail = SettingDetail::create([
                'service_type' => 'Placement',
                'users_id' => $users->id
            ]);

            SettingServiceLocationFee::create([
                'location' => $faker->address,
                'send_notifcation' => (bool)rand(0,1),
                'aplication_fee_check' => 1,
                'placement_fee_check' => 1,
                'hourly_rate_check' => 1,
                'setting_details_id' => $settingDetail->id,
                'users_id' => $users->id
            ]);
        });
    }
}
