<?php

namespace App\Http\Controllers\Family;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('family.home');
    }

    public function fill()
    {
        return view('family.fill');
    }

    public function login()
    {
        return view('family.login');
    }

    public function login_success()
    {
        return view('family.loginSuccess');
    }
}
