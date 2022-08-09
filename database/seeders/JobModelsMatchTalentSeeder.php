<?php

namespace Database\Seeders;

use App\Models\JobModels;
use App\Models\JobModelsMatchTalent;
use App\Models\JobsSubCategorys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobModelsMatchTalentSeeder extends Seeder
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
            JobModelsMatchTalent::factory(7)->create([
                'job_models_id' => $job->id,
                'users_id' => $job->users_id
            ]);

        }


    }
}
