<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Multitenancy\Models\Tenant;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
 

        for($x=1;$x<=10;$x++){
            $user =  Tenant::create([
                'name' => $faker->name,
                'domain' => $faker->userName.'.agency.test',
                'database' => $faker->userName
            ]);
        }
    }
}
