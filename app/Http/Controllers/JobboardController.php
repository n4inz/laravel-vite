<?php

namespace App\Http\Controllers;

use App\Events\Actifity;
use App\Events\Comments;
use App\Events\ReplyComment;
use App\Http\Requests\JobsStoreRequest;
use App\Http\Requests\NewAplicantsRequest;
use App\Http\Traits\Actifity as TraitsActifity;
use App\Http\Traits\Event;
use App\Http\Traits\ImageUpload;
use App\Models\Actifity as ModelsActifity;
use App\Models\Client;
use App\Models\JobModels;
use App\Models\JobModelsComment;
use App\Models\JobModelsCommentsReply;
use App\Models\JobModelsFile;
use App\Models\JobModelsMatchTalent;
use App\Models\JobModelsMatchTalentAdd;
use App\Models\JobModelsNewApplicant;
use App\Models\JobModelsTalentStatus;
use App\Models\JobModelsTask;
use App\Models\Notification;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingServiceSubcategory;
use App\Models\SettingStatusTalent;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Repositories\JobboardRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JobboardController extends Controller
{
    use ImageUpload , TraitsActifity , Event;
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }

    public function index()
    {

        $status = SettingJobModelsStatus::with(['job_models' => function($query){
            $query->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id);
        }])->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => true])->get();
        

        // return $status;
        $client = Client::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $json = [];
        foreach ($client as $value) {
            array_push($json, [
                'value' => $value->id,
                'name' => $value->first_name,
                'avatar' => $value->avatar ?? 'dummy.png',
                'email' => $value->email,
            ]);
        }

        $status_key = '';
        foreach($status as $key => $sts_key){
            $status_key .= '#'.$sts_key->id.',';
        }



        $category = SettingServiceCategory::with(['service_subcategorys'])->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $user_location = SettingServiceLocationFee::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first('location');
        return view('jobboard.jobboard', [
            "category" => $category,
            "json" => $json,
            'user_location' => $user_location,
            'status' => $status,
            'status_key' => rtrim($status_key, ',')
        ]);
    }

    public function get_subcategory_ajax(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

       $subCategory = SettingServiceSubcategory::where('service_categories_id', $request->id)->where('users_id', auth()->user()->id)->get();
        

       return response()->json([
            'sub_categorys' => $subCategory
       ]);
    }

    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required'
        ]);

        $data = JobModels::where('id' , $request->id)->update([
            'status' => $request->status,
            'set_job_status_id' => $request->status
        ]);

        $status_count = SettingJobModelsStatus::with(['job_models' => function ($query) use($request){
            $query->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id]);
        }])->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => 1])->get();

        return response()->json([
            'id' => $request->id,
            'status' => $request->status,
            'status_count' =>  $status_count
        ]);

    }

    public function search_job(Request $request)
    {
        return response()->json([
            'status' => SettingJobModelsStatus::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'status' => true])->get(['id']),
            'value' => $this->jobboardRepository->search_job($request),
        ]);
    }

    public function jobs_store(JobsStoreRequest $request)
    {  
        // return $request;
        $this->jobboardRepository->created($request);
        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function overview($uid)
    {
        $talentNeed = [];

        $result = JobModels::with(['comment' => function ($query){
            $query->with('job_models_comments_reply');
        },'match_talent', 'languages', 'availability', 'task', 'client' => function($query){
            $query->with('attached_file');
        }, 'file' => function ($query) {
            $query->limit(5);
        },'actifities' => function ($query) {
            $query->limit(6)->orderBy('id', 'desc');
        }, 'talent_status' , 'setting_status' , 'match_talents_add' => function($query){
            $query->with('talent');
        }])->where('uid', $uid)->firstOrFail();

        // Match Talent
        foreach ($result->match_talent as $match) {
            $talent = TalentTypeHelper::orderBy('id', 'desc')->where(['code_helper' => $match->jobs_sub_category , 'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id])->with(['talent'])->get();
            if ($talent->count() > 0) {
                foreach ($talent as $val) {
                    JobModelsMatchTalentAdd::updateOrCreate(['talents_id' => $val->talent->id , 'job_models_id' => $result->id],[
                        'talents_id' => $val->talent->id,
                        'job_models_id' => $result->id
                    ]);
                }
            }
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }

        // all talent
        $talents = Talents::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        $status_talent = SettingStatusTalent::where(['users_id'  => auth()->user()->staf->users_agency_id ?? auth()->user()->id ])->get(['id', 'status_name', 'status_key']);

        $matchTalents = JobModelsMatchTalentAdd::with('talent')->where(['job_models_id' => $result->id])->orderBy('id' , 'desc')->get();


        $actifity = ModelsActifity::where('type' , 'TASK')->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        return view('jobboard.detail_job_overview', compact('result', 'talentNeed', 'actifity' ,'status_talent' , 'talents' , 'matchTalents'));
    }

    public function edit_description(Request $request)
    {
        $request->validate([
            'edit_description' => 'required|min:10',
            'uid' => 'required'
        ]);
        JobModels::where(['uid' => $request->uid , 'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id])->update([
            'description' => $request->edit_description
        ]);

        return redirect()->back();
    }

    public function talent_status(Request $request)
    {

        JobModelsMatchTalentAdd::updateOrCreate(['talents_id' => $request->talent_id , 'job_models_id' => $request->job_models_id,],[
            'status' => $request->status,
            'talents_id' => $request->talent_id,
            'job_models_id' => $request->job_models_id,
            
        ]);

        return response(200);
    }

    public function detail_match_talent($id)
    {
        $talent = Talents::where('id', $id)->first();
        return view('modal.jobboard.detail_talent', compact('talent'));
    }

    public function upload_file(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,zip,rar,doc|max:10000',
            'job_models_id' => 'required',
        ]);

        $name = $this->uploadImageStore($request->file('file'), 'Jobs attached file');
        JobModelsFile::create([
            'file' => $name,
            'job_models_id' => $request->job_models_id,
        ]);
        return response()->json([
            'status' => 'Success',
        ], 200);
    }

    public function download_file($file)
    {
        
        return response()
            ->download(storage_path('app/public/Jobs attached file/' . $file));
    }

    public function add_task(Request $request)
    {
       
        $data = $this->jobboardRepository->add_task($request);
        return response()->json([
            'status' => 200,
            'data' => $data,
        ], 200);

    }

    public function search_task(Request $request)
    {                          
        return $this->jobboardRepository->search_task($request);    
    }

    public function send_email(Request $request)
    {
        $request->validate([
            'talent_name' => 'required',
            'email_client' => 'required',
            'job_models_id' => 'required'
        ]);
        $this->jobboardRepository->email($request);
        $actifity = $this->actifity('Matched Email has sent to Client' , 'ACTIVITIES');
        Actifity::dispatch($actifity);
        return redirect()->back()->with('success', 'Send email to talent Succesfuly');
    }

    public function comment(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'job_models_id' => 'required|numeric'
        ]);
        $this->comment_event($request, $this->jobboardRepository->comment_created($request));
        $this->notify($request,auth()->user()->full_name.' has commented on job' ?? 'Your agency' . ' has commented on job');

        return response()->json([
            'status' => 'success'
        ],200);
    }

    public function reply(Request $request)
    {
        $request->validate([
            'reply_comment' => 'required',
            'job_comments_id' => 'required',
            'job_models_id' => 'required|numeric'
        ]);

        $this->reply_comment_event($request, $this->jobboardRepository->comment_reaply_created($request));
        $this->notify($request, auth()->user()->full_name.' has reply your comment on job' ?? 'Your agency' . ' has reply your comment on job');
 

        return response()->json([
            'status' => 'success'
        ],200);
    }

    public function send($uid)
    {
        $job = JobModels::where('uid' , $uid)->firstOrFail();

        return view('jobboard.send' , compact('job'));
    }

    public function apply($uid)
    {
        
        return view('jobboard.apply' , compact('uid'));
    }

    public function new_aplicant_store(NewAplicantsRequest $request)
    {
        // return $request->uid;
        $idModels = JobModels::where('uid' , $request->uid)->firstOrFail('id');
        
        JobModelsNewApplicant::create([
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'description' => $request->description,
           'status' => 'new',
           'job_models_id' =>  $idModels->id,
           'users_id' =>  auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);

        return redirect()->back()->with('success' , 'success apply');
    }

    public function modal_add_match_talent(Request $request)
    {
        $request->validate([
            'job_models_id' => 'required',
            'id_talent_match' => 'required'
        ]);
        foreach($request->id_talent_match as $key => $val){
            JobModelsMatchTalentAdd::create([
                'talents_id' => $request->id_talent_match[$key],
                'job_models_id' => $request->job_models_id,
                
            ]);
        }

        return redirect()->back();
    }

    public function change_status_all_match_talent(Request $request)
    {
        foreach($request->talent_name as $key => $val){
            JobModelsMatchTalentAdd::updateOrCreate(['job_models_id' => $request->job_models_id, 'talents_id' =>  $request->talent_name[$key],],[
                'status' => $request->status_name_match,
            ]);
        }
      return response(200);
    }
}
