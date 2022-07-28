<?php

namespace App\Http\Controllers;

use App\Events\Comments;
use App\Events\ReplyComment;
use App\Http\Requests\JobsStoreRequest;
use App\Http\Traits\ImageUpload;
use App\Models\Client;
use App\Models\JobModels;
use App\Models\JobModelsComment;
use App\Models\JobModelsCommentsReply;
use App\Models\JobModelsFile;
use App\Models\JobModelsTask;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Repositories\JobboardRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobboardController extends Controller
{
    use ImageUpload;
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }

    public function index()
    {
        $client = Client::where('users_id', auth()->user()->id)->get();
        $json = [];
        foreach ($client as $value) {
            array_push($json, [
                'value' => $value->id,
                'name' => $value->first_name,
                'avatar' => 'dummy.png',
                'email' => $value->email,
            ]);
        }
        $jobs = JobModels::with(['match_talent', 'languages', 'availability'])->get();
        return view('jobboard.jobboard', [
            "potential_clients" => $jobs->where('status', 'potential_clients')->where('users_id', auth()->user()->id),
            "interviewing" => $jobs->where('status', 'interviewing')->where('users_id', auth()->user()->id),
            "trialing" => $jobs->where('status', 'trialing')->where('users_id', auth()->user()->id),
            "completed" => $jobs->where('status', 'completed')->where('users_id', auth()->user()->id),
            "json" => $json,
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

        return response()->json([
            'id' => $request->id,
            'status' => $request->status,
            'count_potential_clients' => JobModels::where('status', 'potential_clients')->where('users_id', auth()->user()->id)->count(),
            'count_interviewing' => JobModels::where('status', 'interviewing')->where('users_id', auth()->user()->id)->count(),
            'count_trialing' => JobModels::where('status', 'trialing')->where('users_id', auth()->user()->id)->count(),
            'count_completed' => JobModels::where('status', 'completed')->where('users_id', auth()->user()->id)->count(),
        ]);

    }

    public function search_job(Request $request)
    {
        return response()->json([
            'value' => $this->jobboardRepository->search_job($request),
        ]);
    }

    public function jobs_store(JobsStoreRequest $request)
    {
        $this->jobboardRepository->created($request);

        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function overview($id_unique)
    {
        $dataTalent = [];
        $talentNeed = [];

        $result = JobModels::with(['comment' => function ($query){
            $query->with('job_models_comments_reply');
        },'match_talent', 'languages', 'availability', 'task', 'client', 'file' => function ($query) {
            $query->limit(5);
        }])->where('id_unique', $id_unique)->firstOrFail();

        // return $result;
        foreach ($result->match_talent as $match) {
            $talent = TalentTypeHelper::where('code_helper', $match->jobs_sub_category)->where('users_id', auth()->user()->id)->with('talent')->get();
            if ($talent->count() > 0) {
                foreach ($talent as $val) {
                    array_push($dataTalent, $val->talent);
                }
            }
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }
        return view('jobboard.detail_job_overview', compact('result', 'dataTalent', 'talentNeed'));
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
        ]);
        $this->jobboardRepository->email($request);
        return redirect()->back()->with('success', 'Send email to talent Succesfuly');
    }

    public function comment(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'job_models_id' => 'required|numeric'
        ]);

       $created =  JobModelsComment::create([
            'name' =>  auth()->user()->SettingGeneral->agency_name ?? 'Your agency',
            'comment' => $request->comment,
            'avatar' => auth()->user()->avatar->avatar ?? 'dummy.png',
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->id
        ]);

        $time = Carbon::parse($created->created_at)->format('g:i A');
        $date = Carbon::parse($created->created_at)->format('d M Y');
        $data = [
            'comment' => $request->comment,
            'avatar' => asset('storage/Setting/avatar/'.$created->avatar),
            'time' =>  $date.' - '.$time,
            'id' => $created->id,
            'users_id' => auth()->user()->id,
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
            'reply_comment' => 'required'
        ]);

        $created = JobModelsCommentsReply::create([
            'name' =>  auth()->user()->SettingGeneral->agency_name ?? 'Your agency',
            'comment' => $request->reply_comment,
            'avatar' => auth()->user()->avatar->avatar ?? 'dummy.png',
            'job_models_comments_id' => $request->job_comments_id,
            'job_models_id' => $request->job_models_id,
            'users_id' => auth()->user()->id
        ]);

        $time = Carbon::parse($created->created_at)->format('g:i A');
        $date = Carbon::parse($created->created_at)->format('d M Y');

        $data = [
            'name' => auth()->user()->SettingGeneral->agency_name ?? 'Your agency',
            'reply' => $request->reply_comment,
            'avatar' => asset('storage/Setting/avatar/'.$created->avatar),
            'time' =>  $date.' - '.$time,
            'id_comment' => $request->job_comments_id,
            'users_id' => auth()->user()->id,
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
