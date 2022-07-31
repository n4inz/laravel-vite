<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {

        return view('welcome');
    }
    

    public function test_multi_select()
    {
        $client = Client::all();

        $json = [];
        foreach($client as $value){
            array_push($json , [
                'value' => $value->id,
                'name' => $value->first_name,
                'avatar' => 'dummy.png',
                'email' => $value->email
            ]);
        }

        
        
        // return $json;
    
        return view('testing.multi-select1', compact('json'));
    }


    public function test_multi_select_store(Request $request)
    {
        return $request;
    }

    public function drag()
    {
        return view('testing.drag');
    }
}
