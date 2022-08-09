<?php

namespace Database\Seeders;

use App\Models\TalentLanguage;
use App\Models\Talents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalentLanguageSeeder extends Seeder
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
            TalentLanguage::factory(4)->create([
                'talents_id' => $talent->id,
                'users_id' => $talent->users_id
            ]);
        }
     
    }
}
