<?php

namespace Database\Seeders;

use App\Models\JobsSubCategorys;
use App\Models\SettingJobModelsStatus;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $status = array(
            [
                'status_name' => 'Outside Application',
                'status_key' => 'outside_application',
                'users_id' => 1
            ],
            [
                'status_name' => 'Agency Interview',
                'status_key' => 'agency_interview',
                'users_id' => 1
            ],
            [
                'status_name' => 'Present to Family',
                'status_key' => 'present_to_family',
                'users_id' => 1
            ],
            [
                'status_name' => 'Family Interview',
                'status_key' => 'family_interview',
                'users_id' => 1
            ],
        );

        SettingJobModelsStatus::insert($status);

        // $this->call([
        //     RoleSeeder::class,
        //     // AllSeeder::class,
        //     // TenantsSeeder::class,
        //     // UserSeeder::class,

        //     // ClientSeeder::class,
        //     // TalentsSeeder::class,
        //     // TalentLanguageSeeder::class,
        //     // TalentTypeHelperSeeder::class,
        //     // JobsSeeder::class,
        //     // JobsAvailabiltyDaysSeeder::class,
        //     // JobsLanguagesSeeder::class,
        //     // JobsSubCategorysSeeder::class,
        // ]);
        

    }
}
