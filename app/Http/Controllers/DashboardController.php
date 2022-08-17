<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Events\Nofication;
use App\Http\Traits\HttpGuzzle;
use App\Models\Actifity;
use App\Models\JobModels;
use App\Models\JobModelsTask;
use App\Models\Notification;
use App\Models\NotificationStatus;
use App\Models\SettingCalendlyApi;
use App\Models\SettingJobModelsStatus;
use App\Models\Staf;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    use HttpGuzzle;

    public function index()
    {

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
        
       $statusJob = SettingJobModelsStatus::with('job_models')->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => true])->get();
        
       $taskFolowUp  = Actifity::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'type' => 'TASK CREATED'])->whereDay('created_at', date('d'))->get();
       return view('dashboard.dashboard', compact('TotalJob' , 'statusJob','taskFolowUp' , 'array'));
    }

    public function calendlyApi()
    {
        $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
        $response = $this->getWithParams($load->token, 'https://api.calendly.com/scheduled_events',[
            'organization' => $load->current_organization,
            'status' => 'active',
            'count' => 3,
            'min_start_time' => now()->toDateTimeString()
        ]);

        $res = json_decode($response);

        $array = [];
        foreach($res->collection as $val){
            // $invites = Http::withToken($load->token)->get($val->uri.'/invitees');
            $invites = $this->getWithParams($load->token, $val->uri.'/invitees');

            $invite = json_decode($invites);
            array_push($array, [
                'start_time' => Carbon::parse($val->start_time)->format('d/m/Y').' '.Carbon::parse($val->start_time)->format('g:i A'),
                'end_time' => $val->end_time,
                'location_meet' => $val->location,
                'type' => $val->location->type,
                'first_name' => $invite->collection[0]->first_name,
                'last_name' => $invite->collection[0]->last_name,
                'name' => $invite->collection[0]->name
            ]);

        }

        return response()->json([
            'res' => $array
        ]);
    }
}
