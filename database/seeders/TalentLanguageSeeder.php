<?php

namespace Database\Seeders;

use App\Models\TalentLanguage;
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
        for($x=1;$x<=10;$x++){
            TalentLanguage::factory(1)->create();
        }   
    }
}
