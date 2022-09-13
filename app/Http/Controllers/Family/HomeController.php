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

    public function on_boarding()
    {
        return view('family.on_boarding');
    }

    public function on_boarding_add()
    {
        return view('family.on_boarding_add');
    }

    public function on_boarding_billing()
    {
        return view('family.on_boarding_billing');
    }

    public function add_person()
    {
        return view('family.add_person');
    }

    public function rekomendation()
    {
        return view('family.rekomendation');
    }

    public function sign_document()
    {
        return view('family.sign_document');
    }
}
