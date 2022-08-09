<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach($users as $user){
            Client::factory(100)->create([
                'users_id' => $user->id,
                'create_by' => $user->id
            ]);
        }
   
    }
}
