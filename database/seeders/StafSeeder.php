<?php

namespace Database\Seeders;

use App\Models\Staf;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $agencys = User::whereHas(
            'roles', function($q){
                $q->where('name', 'agency');
            }
        )->get();
       
        foreach($agencys as $staf){
            for($x=1;$x<=3;$x++){
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
                $stafrole = User::create([
                    'full_name' => $faker->name,
                    'email' => fake()->safeEmail(),
                    'email_verified_at' => now(),
                    'password' => Hash::make(123456),
                    'tenants_id' =>  $staf->tenants_id,
                    'remember_token' => Str::random(10),
                    'color' => $color_rand
                ]);
                $stafrole->assignRole('staf');

                Staf::create([
                    'type' => 'staf',
                    // 'avatar' => 'dummy.png',
                    'users_id' => $stafrole->id,
                    'users_agency_id' => $staf->id
                ]);
            }


        }
    }
}
