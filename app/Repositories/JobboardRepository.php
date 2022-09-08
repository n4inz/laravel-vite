<?php

namespace App\Repositories;

use App\Events\Actifity as EventsActifity;
use App\Http\Traits\Actifity;
use App\Jobs\SendEmailToTalent;
use App\Jobs\SendMail;
use App\Models\JobModels;
use App\Models\JobModelsAvailabiltyDays;
use App\Models\JobModelsChile;
use App\Models\JobModelsComment;
use App\Models\JobModelsCommentsReply;
use App\Models\JobModelsLanguages;
use App\Models\JobModelsMatchTalent;
use App\Models\JobModelsStripe;
// use App\Models\JobModelsSubCategorys;
use App\Models\JobModelsTask;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingJobModelsStatus;
use App\Models\Talents;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class JobboardRepository 
{
    
    use Actifity;
    public function created($request)
    {
        $jobsIdUnique = JobModels::get();
        // $task_setting = SettingDefinedCheckList::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get(['body' , 'day' , 'order']);
        $status_job = SettingJobModelsStatus::where(['users_id' =>  auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 1])->get('id' , 'status_name');

        // Make product Stripe
        // $rate = $request->rate;
        $stripe = new \Stripe\StripeClient(config('app.sk_stripe'));
        $productStripe =  $stripe->products->create(  [
            'name' => $request->title,
            'default_price_data' => ['unit_amount' => $request->rate.'00', 'currency' => 'usd'],
            'expand' => ['default_price'],
        ]);

        $day = 0;
        if($request->monday){
            $day++;
        }
        if($request->tuesday){
            $day++;
        }
        if($request->wednesday){
            $day++;
        }
        if($request->thursday){
            $day++;
        }
        if($request->friday){
            $day++;
        }
        if($request->saturday){
            $day++;
        }
        if($request->sunday){
            $day++;
        }

        $categoryDesc = '';

        foreach($request->subcategory as $keySub => $category){
            $categoryDesc .=  str_replace('_',' ',ucfirst($request->subcategory[$keySub])).' ';
        }

        $langDesc = '';
        if($request->language ){
            foreach ($request->language as $keys => $lang) {
                $langDesc .= $request->language[$keys].' ';
            }
            
            $description = 'Hi! We are looking for a '.$categoryDesc.' for our family. This position
            is in '.$request->address.', '.$request->desired_living.' '.$day.' Days per week, rate $'.$request->rate.' Per '.$request->pay_frequency.', '.$request->part_time.'.
            The ideal candidate needs to speak '.$langDesc.'.
            Please apply for this job if you feel you can do this job</br></br>'.$request->description;
        }else{
            $description = 'Hi! We are looking for a '.$categoryDesc.' for our family. This position
            is in '.$request->address.', '.$request->desired_living.' '.$day.' Days per week, rate $'.$request->rate.' Per '.$request->pay_frequency.', '.$request->part_time.'.
            Please apply for this job if you feel you can do this job</br></br>'.$request->description; 
        }

       
        $value = json_decode($request->family);
        DB::beginTransaction();
        try{
            
            if($request->job_models_uid){
               
                $jobs = JobModels::updateOrCreate(['uid' => $request->job_models_uid],[
                    'family' => $value[0]->first_name,
                    'title' => $request->title,
                    'description' => $description,
                    'id_unique' => $jobsIdUnique->count()+1,
        
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
        
                   
                    // 'type' => $request->type,
                    'type' => $request->onlyOneStatus,
                    'clients_id' => $value[0]->value,
                    'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                    'stafs_id' => auth()->user()->staf->users_id ?? 0,
                    'status_calendly' => 0,
                    'set_job_status_id' => $status_job[1]->id
                ]);

                

            
                    SettingDefinedCheckList::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get()->map(function($res) use($jobs){
                        JobModelsTask::create([
                            'task' => $res->body,
                            'order' => $res->order,
                            'assignee' => auth()->user()->full_name ?? 'Your Agency',
                            'day' => $res->day,
                            'job_models_id' => $jobs->id,
                            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                            'name' => auth()->user()->full_name
                        ]);
                    });
                

            }else{
                $jobs = JobModels::create([
                 'family' => $value[0]->first_name,
                 'title' => $request->title,
                 'description' => $description,
                 'id_unique' => $jobsIdUnique->count()+1,
     
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
     
                //  'start_date' => $request->start_date,
                //  'end_date' => $request->end_date,
                'start_date' =>  Carbon::parse($request->start_date),
                'end_date' => Carbon::parse($request->end_date),
                 'asap' => $request->asap,
                 'tbd' => $request->tbd,
     
                 'salary_type' => $request->salary_type,
                 'rate' => $request->rate,
                 'pay_frequency' => $request->pay_frequency,
                 'pay_with' => $request->pay_with,
                 'rate_negotiable' => $request->rate_negotiable,
     
                 'status' => $status_job[1]->status_name,
                 // 'type' => $request->type,
                 'type' => $request->onlyOneStatus,
                 'clients_id' => $value[0]->value,
                 'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                 'stafs_id' => auth()->user()->staf->users_id ?? 0,
                 'status_calendly' => 0,
                 'set_job_status_id' => $status_job[1]->id
                 ]);

                //  if(isset($task_setting)){
                //     foreach($task_setting as $tasks){
                //         JobModelsTask::create([
                //             'task' => $tasks->body,
                //             'order' => $tasks->order,
                //             'assignee' => auth()->user()->full_name ?? 'Your Agency',
                //             'day' => $tasks->day,
                //             'job_models_id' => $jobs->id,
                //             'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //             'name' => auth()->user()->full_name
                //         ]);
                //     }
                // }

                SettingDefinedCheckList::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get()->map(function($res) use($jobs){
                    JobModelsTask::create([
                        'task' => $res->body,
                        'order' => $res->order,
                        'assignee' => auth()->user()->full_name ?? 'Your Agency',
                        'day' => $res->day,
                        'job_models_id' => $jobs->id,
                        'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                        'name' => auth()->user()->full_name
                    ]);
                });

            }
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



            
            $jobs->stripe()->create([
                'prod_id' => $productStripe->id,
                'price_id' => $productStripe->default_price->id,
                'currency' => $productStripe->default_price->currency,
                'unit_amount' => $productStripe->default_price->unit_amount,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id
            ]);
            DB::commit();
        }catch(\Exception $e ){
          
            DB::rollback();
        }

        // Send email to client
        if($request->email_replace){
            SendEmailToTalent::dispatch($value[0]->email, $request->subject  ,$request->email_replace);
        }
       
    }

    public function email($request)
    {
        $talent = [];
        $filter = array_unique($request->talent_name);
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

                $order = JobModelsTask::where('job_models_id', $request->id)->get('id');
                $data = JobModelsTask::create([
                    'task' => $request->val,
                    'order' => $order->count(),
                    'assignee' => 'Dummy data',
                    'status' => 'Inprogress',
                    'job_models_id' => $request->id,
                    'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                    'name' => auth()->user()->full_name
                ]);

                $actifity = $this->actifity('Create Task', 'TASK CREATED');
                EventsActifity::dispatch($actifity);
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

    // public function search_job($request)
    // {
    //     // return SettingJobModelsStatus::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //     //                             ->with(['job_models' => function ($query) use ($request) {
    //     //                                 $query->orWhere('status', 'like', "%" . $request->search . "%")
    //     //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //     //                                 ->orWhere('id_unique', 'like', "%" . $request->search . "%")
    //     //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //     //                                 ->orWhere('description', 'like', "%" . $request->search . "%")
    //     //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //     //                                 ->orWhere('title', 'like', "%" . $request->search . "%")
    //     //                                 ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //     //                                 ->get();
    //     //                             }])->get();

    //     return JobModels::whereHas('setting_status', function($query) use($request){
    //                         $query->where('status_name','like', "%" . $request->search . "%");
    //                     })->orWhere('status', 'like', "%" . $request->search . "%")
    //                     ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //                     ->orWhere('id_unique', 'like', "%" . $request->search . "%")
    //                     ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //                     ->orWhere('description', 'like', "%" . $request->search . "%")
    //                     ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //                     ->orWhere('title', 'like', "%" . $request->search . "%")
    //                     ->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)
    //                     ->with('setting_status')->get();

    //     // if(isset($request->search)){
    //     //     $search = JobModels::orWhere('status', 'like', "%" . $request->search . "%")
    //     //     ->where('users_id', auth()->guard('web')->user()->id )
    //     //     ->orWhere('id_unique', 'like', "%" . $request->search . "%")
    //     //     ->where('users_id', auth()->user()->id )
    //     //     ->orWhere('description', 'like', "%" . $request->search . "%")
    //     //     ->where('users_id', auth()->user()->id )
    //     //     ->orWhere('title', 'like', "%" . $request->search . "%")
    //     //     ->where('users_id', auth()->user()->id )
    //     //     ->get();
    
    //     //     return $search;
    //     // }else{
    //     //     $search = JobModels::where('users_id', auth()->user()->id)->get();
    //     //     return $search;
    //     // }


    // }

    // public function search_task($request)
    // {
    //     return JobModelsTask::orWhere('task' , 'like', "%" . $request->search_task . "%")
    //     ->where([
    //         ['users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id], 
    //         ['job_models_id' , $request->job_models_id],
    //     ])
    //     ->orWhere('status' , 'like', "%" . $request->search_task . "%")
    //     ->where([
    //         ['users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id], 
    //         ['job_models_id' , $request->job_models_id],
    //     ])
    //     ->orWhere('assignee' , 'like', "%" . $request->search_task . "%")
    //     ->where([
    //         ['users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id], 
    //         ['job_models_id' , $request->job_models_id],
    //     ])
    //     ->get();   
    // }

    public function comment_created($request)
    {
        return JobModelsComment::create([
            'name' =>  auth()->user()->full_name ?? 'Your agency',
            'comment' => $request->comment,
            'avatar' => auth()->user()->staf->avatar ?? auth()->user()->avatar->avatar ?? null,
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);
    }

    public function comment_reaply_created($request)
    {   
        return JobModelsCommentsReply::create([
            'name' =>  auth()->user()->full_name ?? 'Your agency',
            'comment' => $request->reply_comment,
            'avatar' => auth()->user()->staf->avatar ?? auth()->user()->avatar->avatar ?? null,
            'job_models_comments_id' => $request->job_comments_id,
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);

    }
}