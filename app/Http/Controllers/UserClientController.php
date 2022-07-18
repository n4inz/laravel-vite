<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Repositories\UserClientRepository;
use App\Http\Traits\ImageUpload;
use Illuminate\Http\Request;

class UserClientController extends Controller
{
    use ImageUpload;
    private $UserClientRepository;
    public function __construct(UserClientRepository $UserClientRepository)
    {
        $this->UserClientRepository = $UserClientRepository;
    }
    public function client()
    {
        return view('user.user_client');
    }

    public function client_store(ClientRequest $request)
    {
        
        $this->UserClientRepository->created($request);
        return redirect()->back()->with('Success' , 'Created client successfuly');
    }

    public function attached_file(Request $request)
    {
        

        

        return redirect()->back()->with('Success', 'Attached file successfuly');
    }

    public function talent()
    {
        return view('user.user_talent');
    }
}
