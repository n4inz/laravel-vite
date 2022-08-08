<?php

namespace App\Http\Controllers;

use App\Events\Actifity;
use App\Events\Comments;
use App\Events\ReplyComment;
use App\Http\Requests\JobsStoreRequest;
use App\Http\Traits\Actifity as TraitsActifity;
use App\Http\Traits\ImageUpload;
use App\Models\Actifity as ModelsActifity;
use App\Models\Client;
use App\Models\JobModels;
use App\Models\JobModelsComment;
use App\Models\JobModelsCommentsReply;
use App\Models\JobModelsFile;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingServiceSubcategory;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Repositories\JobboardRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobboardController extends Controller
{
    use ImageUpload , TraitsActifity;
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }

    public function index()
    {
        // return JobModels::with('setting_status')->get();
        $status = SettingJobModelsStatus::with('job_models')->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
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
            $status_key .= '#'.$sts_key->status_key.',';
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
            'status' => $request->status
        ]);

        $status_count = SettingJobModelsStatus::with('job_models')->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();

        return response()->json([
            'id' => $request->id,
            'status' => $request->status,
            'status_count' =>  $status_count
        ]);

    }

    public function search_job(Request $request)
    {
        return response()->json([
            'status' => SettingJobModelsStatus::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get('status_key'),
            'value' => $this->jobboardRepository->search_job($request),
        ]);
    }

    public function jobs_store(JobsStoreRequest $request)
    {  
        $this->jobboardRepository->created($request);

        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function overview($uid)
    {
        $dataTalent = [];
        $talentNeed = [];

        $result = JobModels::with(['comment' => function ($query){
            $query->with('job_models_comments_reply');
        },'match_talent', 'languages', 'availability', 'task', 'client' => function($query){
            $query->with('attached_file');
        }, 'file' => function ($query) {
            $query->limit(5);
        },'actifities' => function ($query) {
            $query->limit(6)->orderBy('id', 'desc');
        }])->where('uid', $uid)->firstOrFail();

        // return $result;
        foreach ($result->match_talent as $match) {
            $talent = TalentTypeHelper::where('code_helper', $match->jobs_sub_category)->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->with('talent')->get();
            if ($talent->count() > 0) {
                foreach ($talent as $val) {
                    array_push($dataTalent, $val->talent);
                }
            }
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }

        $actifity = ModelsActifity::where('type' , 'TASK')->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->get();
        return view('jobboard.detail_job_overview', compact('result', 'dataTalent', 'talentNeed', 'actifity'));
    }

    public function detail_match_talent($id)
    {
        $talent = Talents::where('id', $id)->first();
        return view('modal.jobboard.detail_talent', compact('talent'));
    }

    public function upload_file(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,zip,rar,doc|max:2048',
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

       $created =  JobModelsComment::create([
            'name' =>  auth()->user()->full_name ?? 'Your agency',
            'comment' => $request->comment,
            'avatar' => auth()->user()->staf->avatar ?? auth()->user()->avatar->avatar ?? 'dummy.png',
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);

        $time = Carbon::parse($created->created_at)->format('g:i A');
        $date = Carbon::parse($created->created_at)->format('d M Y');
        $data = [
            'name' => $created->name,
            'comment' => $request->comment,
            'avatar' => asset('storage/Setting/avatar/'.$created->avatar),
            'time' =>  $date.' - '.$time,
            'id' => $created->id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'job_models_id' => $request->job_models_id,
        ];
        Comments::dispatch($data);

        return response()->json([
            'status' => 'success'
        ],200);
    }

    public function reply(Request $request)
    {
        $request->validate([
            'reply_comment' => 'required',
            'job_comments_id' => 'required',
            'job_models_id' => 'required'
        ]);

        $created = JobModelsCommentsReply::create([
            'name' =>  auth()->user()->full_name ?? 'Your agency',
            'comment' => $request->reply_comment,
            'avatar' => auth()->user()->staf->avatar ?? auth()->user()->avatar->avatar ?? 'dummy.png',
            'job_models_comments_id' => $request->job_comments_id,
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id
        ]);

        $time = Carbon::parse($created->created_at)->format('g:i A');
        $date = Carbon::parse($created->created_at)->format('d M Y');

        $data = [
            'name' => $created->name ?? 'Not Name',
            'reply' => $request->reply_comment,
            'avatar' => asset('storage/Setting/avatar/'.$created->avatar),
            'time' =>  $date.' - '.$time,
            'id_comment' => $request->job_comments_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'job_models_id' => $request->job_models_id,
        ];


        ReplyComment::dispatch($data);

        return response()->json([
            'status' => 'success'
        ],200);
    }

    public function send()
    {
        return view('jobboard.send');
    }

    public function apply()
    {
        return view('jobboard.apply');
    }
}
