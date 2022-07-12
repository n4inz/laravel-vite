<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobboardController extends Controller
{
    public function index()
    {
        return view('jobboard.jobboard');
    }

    public function overview()
    {
        return view('jobboard.detail_job_overview');
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
