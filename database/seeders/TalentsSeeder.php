<?php

namespace Database\Seeders;

use App\Models\Talents;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalentsSeeder extends Seeder
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
            Talents::factory(100)->create([
                'users_id' => $user->id,
                'create_by' => $user->id,
            ]);
        }
        
        
    }
}
