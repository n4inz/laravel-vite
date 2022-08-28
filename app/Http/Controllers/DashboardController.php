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
        // Get Description
        
        // $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
        // $responses = $this->getWithParams($load->token, 'https://api.calendly.com/scheduled_events',[
        //     'organization' => $load->current_organization,
        //     'status' => 'active',

        // ]);

        // $response = json_decode($responses);

        // // return $response->collection;
  
        // foreach($response->collection as $valCalendly){
        //     $idJobStatus = SettingJobModelsStatus::where([
        //         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //         'status_key' => 'potential_client',
        //         ])->first('id');
        //     $exits = JobModels::where('uri_api', $valCalendly->uri)->first('id');
           
            
        //      // Get Description
        //     $getQuestionPerEvents = $this->getWithParams($load->token, $valCalendly->uri.'/invitees');
        //     $questionDetail = json_decode($getQuestionPerEvents);
        //     $descriptionString = '';
        //      foreach($questionDetail->collection as $valAnswerDetail) {
        //         $question = '';
        //         foreach ($valAnswerDetail->questions_and_answers as $val_question) {
        //             $question .= ''.$val_question->question.' : '.$val_question->answer.'<br />';
        //         }
        //         // $descriptionString .= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, asperiores? <br /><br />​​​​​​​<br /></p><p><strong>Name :</strong>&nbsp; '.$valAnswerDetail->name.' '.$valAnswerDetail->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail->payment->external_id).';<br />provider : '.isset($valAnswerDetail->payment->provider).'<br />amount : '.isset($valAnswerDetail->payment->amount).'<br />currency : '.isset($valAnswerDetail->payment->currency).'<br />terms: '.isset($valAnswerDetail->payment->terms).'&nbsp;</p>';
        //         $descriptionString .= '<p>​​​​​​<strong>Name :</strong>&nbsp; '.$valAnswerDetail->name.' '.$valAnswerDetail->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<strong>Payment&nbsp;:</strong><br />external_id :&nbsp;'.isset($valAnswerDetail->payment->external_id).'<br />provider : '.isset($valAnswerDetail->payment->provider).'<br />amount : '.isset($valAnswerDetail->payment->amount).'<br />currency : '.isset($valAnswerDetail->payment->currency).'<br />terms: &nbsp; '.isset($valAnswerDetail->payment->terms).'</p>';
        //      }
        //      //  Get URL calendly
        //      $eventCalendlys = $this->getWithParams($load->token, $valCalendly->event_type);
        //      $eventCalendly = json_decode($eventCalendlys);
        //      $jobsIdUnique = JobModels::get('id');
        //      if(!$exits){
        //          $jobs = JobModels::create([
        //              'title' => $valCalendly->name,
        //              'id_unique' => $jobsIdUnique->count()+1,
        //              'description' => '<p>'.$eventCalendly->resource->description_plain.'</p>'.$descriptionString,
        //              'url_calendly' => $eventCalendly->resource->scheduling_url,
        //              'uri_api' => $valCalendly->uri,
        //              'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
        //              'set_job_status_id' => $idJobStatus->id
        //          ]);

        //      }else{
        //         $jobs = JobModels::where('uri_api' ,$valCalendly->uri)->update([
        //             'title' => $valCalendly->name,
        //             'description' => '<p>'.$eventCalendly->resource->description_plain.'</p>'.$descriptionString,

        //         ]);
        //      }


        // }

        // return 'ok';
        $result = JobModels::with(['availability','languages','match_talent'])->where('id' , 16)->firstOrFail();
        $talentNeed = [];
             // Match Talent
        foreach ($result->match_talent as $match) {
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }
        return view('email.jobboards.sendJobDescription' , compact('result','talentNeed'));

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
