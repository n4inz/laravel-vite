<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsStoreRequest;
use App\Http\Traits\ImageUpload;
use App\Models\Client;
use App\Models\JobModels;
use App\Models\JobModelsFile;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Repositories\JobboardRepository;
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

    public function jobs_store(JobsStoreRequest $request)
    {
        $this->jobboardRepository->created($request);

        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function overview($id_unique)
    {
        $dataTalent = [];
        $talentNeed = [];

        $result = JobModels::with(['match_talent', 'languages', 'availability', 'task', 'client', 'file' => function ($query) {
            $query->limit(5);
        }])->where('id_unique', $id_unique)->firstOrFail();

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

    public function send_email(Request $request)
    {
        $request->validate([
            'talent_name' => 'required',
        ]);
        $this->jobboardRepository->email($request);
        return redirect()->back()->with('success', 'Send email to talent Succesfuly');
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
