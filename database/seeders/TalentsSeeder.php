<?php

namespace Database\Seeders;

use App\Models\Talents;
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
        for($x=1;$x<=10;$x++){
            Talents::factory(1)->create();
        }   
    }
}
