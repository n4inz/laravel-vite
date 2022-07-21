<?php

namespace App\Repositories;

use App\Jobs\SendMail;
use App\Models\JobModels;
use App\Models\JobModelsAvailabiltyDays;
use App\Models\JobModelsLanguages;
use App\Models\JobModelsMatchTalent;
use App\Models\JobModelsSubCategorys;

class JobboardRepository 
{
    public function created($request)
    {
        $jobs = JobModels::create([
            'family' => $request->family,
            'title' => $request->title,
            'description' => $request->description,
            'id_unique' => $request->id_unique,

            'location' => $request->location,
            'category' => $request->category,
            'part_time' => $request->part_time,
            'desired_living' => $request->desired_living,
            'english_level' => $request->english_level,

            'comfortable_with_pets' => $request->comfortable_with_pets,
            'has_transportation' => $request->has_transportation,
            'has_driver_license' => $request->has_driver_license,

            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'duration' => $request->duration,

            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'asap' => $request->asap,
            'tbd' => $request->tbd,

            'salary_type' => $request->salary_type,
            'rate' => $request->rate,
            'pay_frequency' => $request->pay_frequency,
            'pay_with' => $request->pay_with,
            'rate_negotiable' => $request->rate_negotiable,

            'status' => $request->status,
            // 'type' => $request->type,
            'type' => $request->onlyOneStatus,

            'users_id' => auth()->user()->id,
        ]);

        foreach($request->subcategory as $keySub => $category){
            JobModelsMatchTalent::create([
                'jobs_sub_category' => $request->subcategory[$keySub], 
                'job_models_id' => $jobs->id, 
                'users_id' => auth()->user()->id
            ]);

        }

  

        foreach ($request->language as $keys => $lang) {
            JobModelsLanguages::create([
                'language' => $request->language[$keys],
                'job_models_id' => $jobs->id,
            ]);
        }

        JobModelsAvailabiltyDays::create([
            'monday' => $request->monday,
            'tuesday' => $request->tuesday,
            'wednesday' => $request->wednesday,
            'thursday' => $request->thursday,
            'friday' => $request->friday,
            'saturday' => $request->saturday,
            'sunday' => $request->sunday,
            'job_models_id' => $jobs->id,
        ]);
    }

    public function email($request)
    {
        foreach($request->talent_name as $key =>$val){
            $details = ['email' => $request->talent_name[$key]];
            SendMail::dispatch($details);
        }

    }
}