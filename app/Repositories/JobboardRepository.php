<?php

namespace App\Repositories;

use App\Events\Actifity as EventsActifity;
use App\Http\Traits\Actifity;
use App\Jobs\SendMail;
use App\Models\JobModels;
use App\Models\JobModelsAvailabiltyDays;
use App\Models\JobModelsChile;
use App\Models\JobModelsLanguages;
use App\Models\JobModelsMatchTalent;
// use App\Models\JobModelsSubCategorys;
use App\Models\JobModelsTask;
use App\Models\SettingJobModelsStatus;
use App\Models\Talents;
use Illuminate\Support\Facades\DB;

class JobboardRepository 
{
    use Actifity;
    public function created($request)
    {
        $jobs = JobModels::get();

        DB::beginTransaction();
        try{
            $value = json_decode($request->family);
            $jobs = JobModels::create([
             'family' => $value[0]->name,
             'title' => $request->title,
             'description' => $request->description,
             'id_unique' => $jobs->count()+1,
 
             'location' => $request->address,
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
             'clients_id' => $value[0]->value,
             'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
             'stafs_id' => auth()->user()->staf->users_id ?? 0
         ]);
 
            foreach($request->subcategory as $keySub => $category){
                JobModelsMatchTalent::create([
                    'jobs_sub_category' => $request->subcategory[$keySub], 
                    'job_models_id' => $jobs->id, 
                    'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                ]);
    
            }
    
            if(isset($request->language)){
                foreach ($request->language as $keys => $lang) {
                    JobModelsLanguages::create([
                        'language' => $request->language[$keys],
                        'job_models_id' => $jobs->id,
                    ]);
                }
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

            if(isset($request->name_chile)){
                foreach ($request->name_chile as $keys => $lang) {
                    if($request->name_chile[$keys] != null AND $request->chile_gender[$keys] != null AND $request->age_type[$keys] != null AND $request->age[$keys] != null ){
                        JobModelsChile::create([
                            'name' => $request->name_chile[$keys],
                            'gender' =>$request->chile_gender[$keys],
                            'age_type' =>$request->age_type[$keys],
                            'age' =>$request->age[$keys],
                            'job_models_id' => $jobs->id,
                            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                        ]);
                    }
                }
            }
            DB::commit();
        }catch(\Exception $e ){
            DB::rollback();
        }
       
    }

    public function email($request)
    {
        $talent = [];
        foreach($request->talent_name as $key =>$val){
            array_push($talent, $request->talent_name[$key]);
        }

        // return $talent;
        $match_talent =  Talents::whereIn('id', $talent)->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        SendMail::dispatch($request->email_client, $match_talent);

        
    }

    public function add_task($request)
    {

        switch ($request->sts){
            case 'created';

                $request->validate([
                    'val' => 'required'
                ]);
                $data = JobModelsTask::create([
                    'task' => $request->val,
                    'assignee' => 'Dummy data',
                    'status' => 'Inprogress',
                    'job_models_id' => $request->id,
                    'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                    'stafs_id' => auth()->user()->staf->users_id ?? 0
                ]);

                return $data;
            break;

            case 'updated';
                $data = JobModelsTask::where('id',$request->id)->update([
                    'status' => 'Done'
                ]);
                $load = JobModelsTask::where('id', $request->id)->first();

                $actifity = $this->actifity('Quote accept', 'TASK');
                EventsActifity::dispatch($actifity);
                return $load;
            break;
       }
    }

    public function search_job($request)
    {
        // return SettingJobModelsStatus::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        //                             ->with(['job_models' => function ($query) use ($request) {
        //                                 $query->orWhere('status', 'like', "%" . $request->search . "%")
        //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        //                                 ->orWhere('id_unique', 'like', "%" . $request->search . "%")
        //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        //                                 ->orWhere('description', 'like', "%" . $request->search . "%")
        //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        //                                 ->orWhere('title', 'like', "%" . $request->search . "%")
        //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        //                                 ->get();
        //                             }])->get();
        return JobModels::with(['setting_status' => function($query){
                            $query->get('status_name');
                        }])->orWhere('status', 'like', "%" . $request->search . "%")
                        ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                        ->orWhere('id_unique', 'like', "%" . $request->search . "%")
                        ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                        ->orWhere('description', 'like', "%" . $request->search . "%")
                        ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                        ->orWhere('title', 'like', "%" . $request->search . "%")
                        ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                        ->get();

        // if(isset($request->search)){
        //     $search = JobModels::orWhere('status', 'like', "%" . $request->search . "%")
        //     ->where('users_id', auth()->guard('web')->user()->id )
        //     ->orWhere('id_unique', 'like', "%" . $request->search . "%")
        //     ->where('users_id', auth()->user()->id )
        //     ->orWhere('description', 'like', "%" . $request->search . "%")
        //     ->where('users_id', auth()->user()->id )
        //     ->orWhere('title', 'like', "%" . $request->search . "%")
        //     ->where('users_id', auth()->user()->id )
        //     ->get();
    
        //     return $search;
        // }else{
        //     $search = JobModels::where('users_id', auth()->user()->id)->get();
        //     return $search;
        // }
    }

    public function search_task($request)
    {
        return JobModelsTask::orWhere('task' , 'like', "%" . $request->search_task . "%")
        ->where([
            ['users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id], 
            ['job_models_id' , $request->job_models_id],
        ])
        ->orWhere('status' , 'like', "%" . $request->search_task . "%")
        ->where([
            ['users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id], 
            ['job_models_id' , $request->job_models_id],
        ])
        ->orWhere('assignee' , 'like', "%" . $request->search_task . "%")
        ->where([
            ['users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id], 
            ['job_models_id' , $request->job_models_id],
        ])
        ->get();   
    }
}