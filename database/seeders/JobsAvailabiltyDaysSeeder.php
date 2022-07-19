<?php

namespace Database\Seeders;

use App\Models\JobsAvailabiltyDays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsAvailabiltyDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=1;$x<=10;$x++){
            JobsAvailabiltyDays::factory(1)->create();
        }   
    }
}
