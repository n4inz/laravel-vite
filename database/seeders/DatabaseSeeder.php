<?php

namespace Database\Seeders;

use App\Models\JobModelsMatchTalent;
use App\Models\JobsSubCategorys;
use App\Models\SettingJobModelsStatus;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Models\User;
use Database\Seeders\JobModelsAvailabiltyDaysSeeder as SeedersJobModelsAvailabiltyDaysSeeder;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Multitenancy\Models\Tenant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user =  Tenant::create([
        //     'name' =>'test@mail.com',
        //     'domain' => 'nain.agency.test',
        //     'database' => 'nain'
        // ]);

        // $user->user()->create([
        //     'email' => 'test@mail.com',
        //     'password' => Hash::make(123456),
        // ]);


        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            ClientSeeder::class,
            TalentsSeeder::class,
            TalentLanguageSeeder::class,
            TalentTypeHelperSeeder::class,
            // JobSeeder::class,

            // SeedersJobModelsAvailabiltyDaysSeeder::class,
            // JobModelsLanguagesSeeder::class,
            // JobModelsMatchTalentSeeder::class,

            StafSeeder::class,
            TemplateEmailSeeder::class

            
            // AllSeeder::class,
            // TenantsSeeder::class,
            
            
            
            
           
            // JobsSubCategorysSeeder::class,
        ]);
        

    }
}
