<?php

namespace Database\Seeders;

use App\Models\JobsLanguages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsLanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x<=10;$x++){
            JobsLanguages::factory(1)->create();
        }   
    }
}
