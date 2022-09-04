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
        $tenant =  Tenant::create([
            'name' => 'test',
            'domain' => 'test.'.config('app.domain'),
            'database' => $faker->userName(4)
        ]);
        $color = [
            '#EB5757',
            '#F2994A',
            '#27AE60',
            '#6AEAE3',
            '#56CCF2',
            '#BB6BD9',
            '#F2C94C',
        ];
        $color_rand = $color[rand(0, count($color) - 1)];
        $user_test = User::create([
            'full_name' => $faker->name,
            'email' => 'test@mail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456),
            'tenants_id' =>  $tenant->id,
            'color' => $color_rand,
            'remember_token' => Str::random(10),
        ]);

        $user_test->assignRole('agency');

        for($x=1;$x<=2;$x++){
            $color1 = [
                '#EB5757',
                '#F2994A',
                '#27AE60',
                '#6AEAE3',
                '#56CCF2',
                '#BB6BD9',
                '#F2C94C',
            ];
            $color1_rand = $color1[rand(0, count($color1) - 1)];
            $tenant =  Tenant::create([
                'name' => $faker->name,
                'domain' => $faker->lastName.'.'.config('app.domain'),
                'database' => $faker->userName(4)
            ]);

            $user = User::create([
                'full_name' => $faker->name,
                'email' => fake()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make(123456),
                'color' => $color1_rand,
                'tenants_id' =>  $tenant->id,
                'remember_token' => Str::random(10),
            ]);

            

            $user->assignRole('agency');

          
        }
    }
}
