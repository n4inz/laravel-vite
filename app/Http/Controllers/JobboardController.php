<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobBoardRequest;
use App\Models\Jobs;
use App\Models\JobsMatchTalent;
use App\Models\JobsSubCategorys;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use App\Repositories\JobboardRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class JobboardController extends Controller
{
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }


    public function index()
    {
        $jobs = Jobs::with(['match_talent', 'languages', 'availability'])->get();
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

        $result = Jobs::with(['match_talent', 'languages', 'availability'])->where('id_unique', $id_unique)->firstOrFail();
        foreach($result->match_talent as  $match){
            $talent = TalentTypeHelper::where('code_helper',$match->jobs_sub_category)->where('users_id', auth()->user()->id)->with('talent')->get();
            if($talent->count() > 0){
                foreach($talent as $val){
                    array_push($dataTalent, $val->talent);
                 }
            }
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1 );
        }
        return view('jobboard.detail_job_overview', compact('result', 'dataTalent', 'talentNeed'));
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
