<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserClientController extends Controller
{
    public function client()
    {
        return view('user.user_client');
    }
    public function talent()
    {
        return view('user.user_talent');
    }
}
