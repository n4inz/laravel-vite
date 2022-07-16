<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function test_multi_select()
    {

        return view('testing.select');
    }

    public function test_multi_select_store(Request $request)
    {
        return $request;
    }
}
