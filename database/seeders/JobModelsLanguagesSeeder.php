<?php

namespace Database\Seeders;

use App\Models\JobModels;
use App\Models\JobModelsLanguages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobModelsLanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = JobModels::all();
        foreach($jobs as $job){
            JobModelsLanguages::factory(4)->create([
                'job_models_id' => $job->id
            ]);

        }


    }
}
