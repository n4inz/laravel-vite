<?php

namespace Database\Seeders;

use App\Models\JobModels;
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
        $users = User::with('client')->get();

        
        foreach($users as $user){
            foreach($user->client as $client){
                JobModels::factory(1)->create([
                'users_id' =>  $user->id,
                'clients_id' => $client->id,
                'stafs_id' => $user->id,
                ]);
            }
            

        }

        // for($x=1;$x<=10;$x++){
        //     Jobs::factory()->create();
        // }   
    }
}
