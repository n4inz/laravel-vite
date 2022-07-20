<?php

namespace App\Repositories;

use App\Models\Jobs;
use App\Models\JobsAvailabiltyDays;
use App\Models\JobsLanguages;
use App\Models\JobsMatchTalent;
use App\Models\JobsSubCategorys;

class JobboardRepository 
{
    public function created($request)
    {
        $jobs = Jobs::create([
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
            JobsMatchTalent::create([
                'jobs_sub_category' => $request->subcategory[$keySub], 
                'jobs_id' => $jobs->id, 
                'users_id' => auth()->user()->id
            ]);

        }

  

        foreach ($request->language as $keys => $lang) {
            JobsLanguages::create([
                'language' => $request->language[$keys],
                'jobs_id' => $jobs->id,
            ]);
        }

        JobsAvailabiltyDays::create([
            'monday' => $request->monday,
            'tuesday' => $request->tuesday,
            'wednesday' => $request->wednesday,
            'thursday' => $request->thursday,
            'friday' => $request->friday,
            'saturday' => $request->saturday,
            'sunday' => $request->sunday,
            'jobs_id' => $jobs->id,
        ]);
    }
}