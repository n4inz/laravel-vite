<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\JobModels;
use App\Models\SettingJobModelsStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = User::with('client')->get();

        // JobModels::factory(1)->create();
        // foreach($users as $user){
        //     foreach($user->client as $client){

                
        //         SettingJobModelsStatus::all()->map(function($res) use($user , $client){
        //             JobModels::factory(1)->create([
        //             'users_id' =>  $user->id,
        //             'clients_id' => $client->id,
        //             'stafs_id' => $user->id,
        //             'set_job_status_id' => $res->id
        //             ]);

        //         });              
        //     }
            

        // }
        
        User::with('client')->get()->map(function($users){
            SettingJobModelsStatus::all()->map(function($res) use($users){
                JobModels::factory(1)->create([
                'users_id' =>  $users->id,
                'clients_id' => $users->client[rand(0,99)]->id,
                'stafs_id' => $users->id,
                'set_job_status_id' => $res->id
                ]);

            }); 
        });

        // Client::all()->map(function($res_clinet){
        //     SettingJobModelsStatus::all()->map(function($res) use($res_clinet){
        //         JobModels::factory(1)->create([
        //         'users_id' =>  $res_clinet->users_id,
        //         'clients_id' => $res_clinet->id,
        //         'stafs_id' => $res_clinet->users_id,
        //         'set_job_status_id' => $res->id
        //         ]);

        //     }); 
        // });
    }
}
