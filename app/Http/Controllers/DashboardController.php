<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Traits\HttpGuzzle;
use App\Models\Actifity;
use App\Models\Client;
use App\Models\JobModels;
use App\Models\JobModelsMatchTalent;
use App\Models\JobModelsPotentialClient;
use App\Models\JobModelsRange;
use App\Models\JobModelsTask;
use App\Models\SettingCalendlyApi;
use App\Models\SettingJobModelsStatus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\classHasAttribute;

class DashboardController extends Controller
{
    use HttpGuzzle;

    public function index(Request $request)
    {
        // // Get Description
        // $responseSchedulings = $this->getWithParams($load->token, 'https://api.calendly.com/scheduled_events',[
        //     'organization' => $load->current_organization,
        //     'status' => 'active',

        // ]);

        
        // $arrayAnswerDetail = [];
        // $responseScheduling = json_decode($responseSchedulings);
        // foreach($responseScheduling->collection as $value_scheduling){
        //     if($value_scheduling->event_type == 'https://api.calendly.com/event_types/0dfdb4dd-f4d4-4bbd-8c08-6af927282a0a'){
        //         // array_push($arrayScheduling,$value_scheduling->uri);
                
        //         $getQuestionPerEvents = $this->getWithParams($load->token, $value_scheduling->uri.'/invitees');
        //         $getQuestionPerEvent = json_decode($getQuestionPerEvents);
        //         array_push($arrayAnswerDetail, $getQuestionPerEvent->collection);
        //     }
        // }

        // $description = [];
        // $descriptionString = '';
        // foreach($arrayAnswerDetail as $valAnswerDetail){
        //     $question = '';
        //     foreach ($valAnswerDetail[0]->questions_and_answers as $val_question) {
        //         $question .= ''.$val_question->question.' : '.$val_question->answer.'<br />';
        //     }
        //     $descriptionString .= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam facilis ab quia voluptas quidem esse<br /><br />​​​​​​​<br /></p><p><strong>Name :</strong>&nbsp; '.$valAnswerDetail[0]->name.' '.$valAnswerDetail[0]->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail[0]->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail[0]->payment->external_id).';<br />provider : '.isset($valAnswerDetail[0]->payment->provider).'<br />amount : '.isset($valAnswerDetail[0]->payment->amount).'<br />currency : '.isset($valAnswerDetail[0]->payment->currency).'<br />terms: '.isset($valAnswerDetail[0]->payment->terms).'<br /><br />--------------------------------------------------------------------------------------------------------------------------------------<br /><br />&nbsp;</p>';

        //     // $descriptionString .= $valAnswerDetail[0]->name.' '.$valAnswerDetail[0]->first_name.$valAnswerDetail[0]->email.' '.$question.' '.isset($valAnswerDetail[0]->payment->external_id).' '.isset($valAnswerDetail[0]->payment->provider).' '.isset($valAnswerDetail[0]->payment->amount).' '.isset($valAnswerDetail[0]->payment->currency).' '.isset($valAnswerDetail[0]->payment->terms);
           
        //     // array_push($description,[
        //     //     'desc' => '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam facilis ab quia voluptas quidem esse<br /><br />​​​​​​​<br /></strong><p><strong>Name :&nbsp; '.$valAnswerDetail[0]->name.' '.$valAnswerDetail[0]->first_name.'<br />email :&nbsp;'.$valAnswerDetail[0]->email.'</strong><br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail[0]->payment->external_id).';<br />provider : '.isset($valAnswerDetail[0]->payment->provider).'<br />amount : '.isset($valAnswerDetail[0]->payment->amount).'<br />currency : '.isset($valAnswerDetail[0]->payment->currency).'<br />terms: '.isset($valAnswerDetail[0]->payment->terms).'<br /><br />--------------------------------------------------------------------------------------------------------------------------------------<br /><br />&nbsp;</p>',

        //     // ]);
        // }
        // array_push($description,[
        //     'desc' => $descriptionString
        // ]);
        

        // return $description;

        // return $arrayAnswerDetail;
        // return $responseScheduling->collection;

        // $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
        // $responses = $this->getWithParams($load->token, 'https://api.calendly.com/event_types',[
        //     'organization' => $load->current_organization,
        //     'status' => 'active',

        // ]);

        // $response = json_decode($responses);
  
        // foreach($response->collection as $valCalendly){
        //     $idJobStatus = SettingJobModelsStatus::where([
        //         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //         'status_key' => 'potential_client',
        //         ])->first('id');
        //     $exits = JobModels::where('uri_api', $valCalendly->uri)->first('id');
        //     $jobsIdUnique = JobModels::get('id');
        //      // Get Description
        //      $responseSchedulings = $this->getWithParams($load->token, 'https://api.calendly.com/scheduled_events',[
        //         'organization' => $load->current_organization,
        //         'status' => 'active',

        //     ]);

        //     $arrayAnswerDetail = [];
        //     $responseScheduling = json_decode($responseSchedulings);
        //     foreach($responseScheduling->collection as $value_scheduling){
        //         if($value_scheduling->event_type == $valCalendly->uri){
        //             $getQuestionPerEvents = $this->getWithParams($load->token, $value_scheduling->uri.'/invitees');
        //             $getQuestionPerEvent = json_decode($getQuestionPerEvents);
        //             array_push($arrayAnswerDetail, $getQuestionPerEvent->collection);
        //         }
        //     }

        //     $description = [];
        //     $descriptionString = '';
        //     foreach($arrayAnswerDetail as $valAnswerDetail){
        //         $question = '';
        //         foreach ($valAnswerDetail[0]->questions_and_answers as $val_question) {
        //             $question .= ''.$val_question->question.' : '.$val_question->answer.'<br />';
        //         }
        //         $descriptionString .= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam facilis ab quia voluptas quidem esse<br /><br />​​​​​​​<br /></p><p><strong>Name :</strong>&nbsp; '.$valAnswerDetail[0]->name.' '.$valAnswerDetail[0]->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail[0]->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail[0]->payment->external_id).';<br />provider : '.isset($valAnswerDetail[0]->payment->provider).'<br />amount : '.isset($valAnswerDetail[0]->payment->amount).'<br />currency : '.isset($valAnswerDetail[0]->payment->currency).'<br />terms: '.isset($valAnswerDetail[0]->payment->terms).'<br /><br />--------------------------------------------------------------------------------------------------------------------------------------<br /><br />&nbsp;</p>';
        //     }

        //     if(!$exits){
                
        //         $jobs = JobModels::create([
        //             'title' => $valCalendly->name,
        //             'id_unique' => $jobsIdUnique->count()+1,
        //             'description' => $descriptionString,
        //             'url_calendly' => $valCalendly->scheduling_url,
        //             'uri_api' => $valCalendly->uri,
        //             'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //             'set_job_status_id' => $idJobStatus->id
        //         ]);
        //     }

        //     // Filter subcategory form multi_select type
        //     foreach($valCalendly->custom_questions as $subcategory){
        //         if($subcategory->type == 'multi_select'){

        //             // Update Subcategory 
        //             if(count($subcategory->answer_choices) > 0){
        //                 $jobsUpdate = JobModels::updateOrCreate(['uri_api' => $valCalendly->uri],[
        //                     'title' => $valCalendly->name,
        //                     'description' => $descriptionString,
        //                     'url_calendly' => $valCalendly->scheduling_url,
        //                     'uri_api' => $valCalendly->uri,
        //                     'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //                     // 'set_job_status_id' => $idJobStatus->id
        //                 ]);

        //                 JobModelsMatchTalent::where(['job_models_id' => $jobsUpdate->id])->delete();
        //                 foreach($subcategory->answer_choices as $keySub => $category){
        //                     JobModelsMatchTalent::create([
        //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
        //                         'job_models_id' => $jobsUpdate->id, 
        //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //                     ]);
        //                 }
        //             }
                   
        //             // Create subcategory if subcategory exist
        //             if(!$exits){
        //                 foreach($subcategory->answer_choices as $keySub => $category){
        //                     JobModelsMatchTalent::updateOrCreate([
        //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
        //                         'job_models_id' => $jobs->id, 
        //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //                     ]);
        //                 }
        //             }
        //         }

        //     }
        // }

        // return 'ok';

        // Past due
       $getTask = JobModelsTask::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 'DONE'])->orderBy('updated_at', 'desc')->limit(5)->get();
        $array = [];
        foreach($getTask as $val){
            $pastDue =  now()->diffInDays($val->updated_at);
            if($pastDue >= 1){
               array_push($array , [
                    'title' => 'Quote accept by'.' '.$val->name,
                    'body' => 'Due '.$pastDue.' day ago ',
                    'name' => $val->name
               ]);
            }
        }

       $TotalJob = JobModels::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get('id');
        
       
       $statusJob = SettingJobModelsStatus::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 1])->with('job_models' , function($query){
        $query->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id);
       })->withCount('job_models')->get();

       $average = JobModelsRange::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
       
       $taskFolowUp  = Actifity::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'type' => 'TASK CREATED'])->whereDay('created_at', date('d'))->get();
       return view('dashboard.dashboard', compact('TotalJob' , 'statusJob','taskFolowUp' , 'array','average'));
    }

    public function calendlyApi(Request $request)
    {
        $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
        $response = $this->getWithParams($load->token, 'https://api.calendly.com/scheduled_events',[
            'organization' => $load->current_organization,
            'status' => 'active',
            // 'count' => 3,
            'min_start_time' => now()->toDateTimeString()
        ]);

        $res = json_decode($response);

        $array = [
            
        ];
        foreach($res->collection as $val){
            // $invites = Http::withToken($load->token)->get($val->uri.'/invitees');
            $invites = $this->getWithParams($load->token, $val->uri.'/invitees');

            $invite = json_decode($invites);
            array_push($array, [
                'start_time' => Carbon::parse($val->start_time)->format('d/m/Y').' '.Carbon::parse($val->start_time)->format('g:i A'),
                // 'start_time' => $val->start_time,
                'end_time' => $val->end_time,
                'location_meet' => $val->location,
                'type' => $val->location->type,
                'event' => $val->name,
                'first_name' => $invite->collection[0]->first_name,
                'last_name' => $invite->collection[0]->last_name,
                'name' => $invite->collection[0]->name,
                'email_talent' => $invite->collection[0]->email,
                'created_at' => Carbon::parse($invite->collection[0]->created_at)->format('d F Y'),
                'time_zone' => $invite->collection[0]->timezone,
                'cancel_url' =>  $invite->collection[0]->cancel_url,
                'reschedule_url' =>  $invite->collection[0]->reschedule_url,
                'questions_and_answers' => $invite->collection[0]->questions_and_answers,
            ]);

        }

        $session = 'calendly'.auth()->user()->id;
        $request->session()->put($session , $array);
        return view('modal.dashboard.calendly', compact('array'));

        return response()->json([
            'res' => $array
        ]);
    }

    public function detailCalendlyApi(Request $request)
    {
        $session = 'calendly'.auth()->user()->id;
        $calendly = $request->session()->get($session);

        return view('modal.dashboard.detailCalendly', [
            'val' => $calendly[$request->id]
        ]);
    }
}
