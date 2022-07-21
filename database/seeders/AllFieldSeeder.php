<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClientAttachedFile;
use App\Models\JobModels;
use App\Models\JobModelsAvailabiltyDays;
use App\Models\JobModelsLanguages;
use App\Models\JobModelsMatchTalent;
use App\Models\Jobs;
use App\Models\JobsAvailabiltyDays;
use App\Models\JobsLanguages;
use App\Models\JobsMatchTalent;
use App\Models\JobsSubCategorys;
use App\Models\TalentLanguage;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AllFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $idUsers = User::all();
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
        foreach($idUsers as $value ){
            $payment = array('cash','check', 'online_payment' , 'any');
            $payment_rand = $payment[rand(0, count($payment) - 1)];
            $status = array("completed", "interviewing", "trialing", "potential_clients");
            $status_rand = $status[rand(0, count($status) - 1)];
            $type = array("active", "archived");
            $type_rand = $type[rand(0, count($type) - 1)];

            $random = [0,1,0];
            $randTrue = $random[rand(0, count($random) - 1)];

            $client = Client::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email'  =>  Str::random(10).'@mail.com',
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'languages' => $faker->country,
                'note' => $faker->sentence(mt_rand(15,30)),
                'users_id' => $value->id,
            ]);

            ClientAttachedFile::create([
                'attached_file' => 'dummy.zip',
                'clients_id' => $client->id,
                'users_id' =>  $value->id,
                
            ]);

           $talent = Talents::create([
                'avatar' => 'dummy.png',
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'day_of_birthday' => $faker->date,
                'experience' => $faker->randomNumber(2,false),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,

                'address' => $faker->address,
                'about_talent' => $faker->sentence,
                'file_documents' => 'dummy',
                'users_id' => $value->id,
            ]);

            TalentLanguage::create([
                'languages' => $faker->country,
                'talents_id' => $talent->id,
                'users_id' => $value->id,
            ]);

            for($th=1;$th<=5;$th++){
                $typeCodeRand = $typeCode[Rand(0, count($typeCode) - 1)];
                $typeNameRand = $typeName[Rand(0, count($typeName) - 1)];
                TalentTypeHelper::create([
                    'name_type_helper' => $typeNameRand,
                    'code_helper' => $typeCodeRand,
                    'talents_id' => $talent->id,
                    'users_id' => $value->id,
                ]);

            }


            $jobs =  JobModels::create([
                'family' => $faker->name,
                'title' => $faker->userName(mt_rand(3,5)),
                'description' => $faker->sentence(mt_rand(10,25)),
                'id_unique' =>  mt_rand(1000,9999),
                'location' => $faker->address,
                'category' => $faker->sentence(mt_srand(1,7)),
                'part_time' => $faker->word(mt_rand(3,7)),
                'desired_living' => $faker->word(mt_rand(3,7)),
                'english_level' => $faker->word(mt_rand(3,7)),

                'comfortable_with_pets' => (bool)rand(0,1),
                'has_transportation' => (bool)rand(0,1),
                'has_driver_license' => (bool)rand(0,1),

                'start_time' => $faker->time,
                'end_time' => $faker->time,
                'duration' => mt_rand(1,12).'Month',

                'start_date' => $faker->date,
                'end_date' => $faker->date,
                'asap' => (bool)rand(0,1),
                'tbd' => (bool)rand(0,1),

                'salary_type' => $faker->sentence(mt_rand(3,5)),
                'rate' => mt_rand(3,100).' USD',
                'pay_frequency' => $faker->sentence(mt_rand(3,5)),
                'pay_with' => $payment_rand,
                'rate_negotiable' => (bool)rand(0,1),
                'status' => $status_rand,
                'type' => $type_rand,
                'users_id' => $value->id,
            ]);

            JobModelsAvailabiltyDays::create([
                'monday' => (bool)rand(0,1), 
                'tuesday' => (bool)rand(0,1), 
                'wednesday' => (bool)rand(0,1), 
                'thursday' => (bool)rand(0,1), 
                'friday' => (bool)rand(0,1),   
                'saturday' => (bool)rand(0,1), 
                'sunday' => (bool)rand(0,1),
                'job_models_id' => $jobs->id
            ]);

            JobModelsLanguages::create([
                'language' => $faker->country,       
                'job_models_id' => $jobs->id,
            ]);
      
            for($th=1;$th<=7;$th++){
                $typeCodeRand = $typeCode[Rand(0, count($typeCode) - 1)];
                JobModelsMatchTalent::create([
                    'jobs_sub_category' => $typeCodeRand,
                    'job_models_id' => $jobs->id,
                    'users_id' => $value->id,
                ]);

            }
        };
    }
}
