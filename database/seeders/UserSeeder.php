<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Multitenancy\Models\Tenant;
use Illuminate\Support\Str;
use Faker\Factory;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Factory::create();
        for($x=1;$x<=10;$x++){
            $tenant =  Tenant::create([
                'name' => $faker->name,
                'domain' => $faker->lastName.'.agency.test',
                'database' => $faker->userName(4)
            ]);

            $user = User::create([
                'full_name' => $faker->name,
                'email' => fake()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make(123456),
                'tenants_id' =>  $tenant->id,
                'remember_token' => Str::random(10),
            ]);

            $user->assignRole('agency');

          
        }
    }
}
