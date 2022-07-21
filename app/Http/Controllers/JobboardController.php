<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;

use App\Models\JobModels;
use App\Models\JobModelsTask;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Repositories\JobboardRepository;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Break_;

class JobboardController extends Controller
{
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }


    public function index()
    {
   
        $jobs = JobModels::with(['match_talent', 'languages', 'availability'])->get();
        return view('jobboard.jobboard', [
            "potential_clients" => $jobs->where('status', 'potential_clients')->where('users_id' , auth()->user()->id),
            "interviewing" => $jobs->where('status', 'interviewing')->where('users_id' , auth()->user()->id),
            "trialing" => $jobs->where('status', 'trialing')->where('users_id' , auth()->user()->id),
            "completed" => $jobs->where('status', 'completed')->where('users_id' , auth()->user()->id),
        ]);
    }

    public function jobs_store(Request $request)
    {  
        $this->jobboardRepository->created($request);

        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function overview($id_unique)
    {
        $dataTalent = [];
        $talentNeed = [];

        $result = JobModels::with(['match_talent', 'languages', 'availability' ,'task'])->where('id_unique', $id_unique)->firstOrFail();
        foreach($result->match_talent as  $match){
            $talent = TalentTypeHelper::where('code_helper',$match->jobs_sub_category)->where('users_id', auth()->user()->id)->with('talent')->get();
            if($talent->count() > 0){
                foreach($talent as $val){
                    array_push($dataTalent, $val->talent);
                 }
            }
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1 );
        }

        // return$result;
        return view('jobboard.detail_job_overview', compact('result', 'dataTalent', 'talentNeed'));
    }

    public function detail_match_talent($id)
    {
        $talent = Talents::where('id', $id)->first();
        return view('modal.jobboard.detail_talent', compact('talent'));
    }

    public function add_task(Request $request)
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
                    'users_id' => 1
                ]);
                return response()->json([
                    'status' => 200,
                    'data' => $data
                ],200);
            break;

            case 'updated';
                $data = JobModelsTask::where('id',$request->id)->update([
                    'status' => 'Done'
                ]);

                $load = JobModelsTask::where('id', $request->id)->first();
                return response()->json([
                    'status' => 200,
                    'data' => $load
                ],200);
            break;
       }

    }

    public function send_email(Request $request)
    {   
        $request->validate([
            'talent_name' => 'required'
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
