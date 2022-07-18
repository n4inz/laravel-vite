<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class UserClientController extends Controller
{
    public function client()
    {
        return view('user.user_client');
    }

    public function client_store(Request $request)
    {
        Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'languages' => $request->languages,
            'note' => $request->note,
            'attached_file' => $request->attached_file,
            'users_id' => $request->users_id,
        ]);

        return redirect()->back()->with('Success' , 'Created client successfuly');
    }

    public function talent()
    {
        return view('user.user_talent');
    }
}
