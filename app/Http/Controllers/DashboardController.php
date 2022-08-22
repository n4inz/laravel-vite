<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Traits\HttpGuzzle;
use App\Models\Actifity;
use App\Models\Client;
use App\Models\JobModels;
use App\Models\JobModelsTask;
use App\Models\SettingCalendlyApi;
use App\Models\SettingJobModelsStatus;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    use HttpGuzzle;

    public function index(Request $request)
    {

        Search::addMany[

        ];
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
       })->get();
    // return $statusJob->job_models[0];
       $taskFolowUp  = Actifity::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'type' => 'TASK CREATED'])->whereDay('created_at', date('d'))->get();
       return view('dashboard.dashboard', compact('TotalJob' , 'statusJob','taskFolowUp' , 'array'));
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
