<?php

namespace Database\Seeders;

use App\Models\Talents;
use App\Models\TalentTypeHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalentTypeHelperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $talents = Talents::all();

        foreach($talents as $talent){
            TalentTypeHelper::factory(4)->create([
                'talents_id' => $talent->id,
                'users_id' => $talent->users_id
            ]);

        }
    }
}
