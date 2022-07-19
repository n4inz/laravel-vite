<?php

namespace Database\Seeders;

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
        for($x=1;$x<=10;$x++){
            TalentTypeHelper::factory(1)->create();
        }
       
    }
}
