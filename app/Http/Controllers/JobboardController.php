<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Repositories\JobboardRepository;
use Illuminate\Http\Request;
// use App\Repositories\SettingRepository;

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
            "potential_clients" => $jobs->where('status', 'potential_clients'),
            "interviewing" => $jobs->where('status', 'interviewing'),
            "trialing" => $jobs->where('status', 'trialing'),
            "completed" => $jobs->where('status', 'completed'),
        ]);
    }

    public function jobs_store(Request $request)
    {
        // return $request;
        // dd($request->days);
        // $request->validate([
        //     'family' => 'required',
        //     'title' => 'required|min:3',
        //     'description' => 'required|min:6',
        //     'id_unique' => 'required|min:3|unique:jobs,id_unique',
        //     'location' => 'required|min:3',
        //     'status' => 'required',
        //     'type' => 'required',
        // ]);
        
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
