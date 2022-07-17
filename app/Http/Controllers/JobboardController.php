<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobBoardRequest;
use App\Models\Jobs;
use App\Repositories\JobboardRepository;
use Illuminate\Http\Request;

class JobboardController extends Controller
{
    private $jobboardRepository;

    public function __construct(JobboardRepository $jobboardRepository)
    {
        $this->jobboardRepository = $jobboardRepository;
    }


    public function index()
    {
        $jobs = Jobs::with(['sub_categorys', 'languages', 'availability'])->get();
        return view('jobboard.jobboard', [
            "potential_clients" => $jobs->where('status', 'potential_clients')->where('users_id' , auth()->user()->id),
            "interviewing" => $jobs->where('status', 'interviewing')->where('users_id' , auth()->user()->id),
            "trialing" => $jobs->where('status', 'trialing')->where('users_id' , auth()->user()->id),
            "completed" => $jobs->where('status', 'completed')->where('users_id' , auth()->user()->id),
        ]);
    }

    public function jobs_store(JobBoardRequest $request)
    {       
        $this->jobboardRepository->created($request);

        return redirect()->back()->with('status', 'Create job succesfuly');
    }

    public function overview($id_unique)
    {

        $result = Jobs::with(['sub_categorys', 'languages', 'availability'])->where('id_unique', $id_unique)->firstOrFail();
        // return $result;
        return view('jobboard.detail_job_overview', compact('result'));
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
