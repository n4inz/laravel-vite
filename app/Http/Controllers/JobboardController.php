<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobboardController extends Controller
{
    public function index()
    {
        return view('jobboard');
    }
}
