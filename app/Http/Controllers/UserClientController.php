<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\TalentRequest;
use App\Models\Client;
use App\Models\Talents;
use App\Repositories\UserClientRepository;
use App\Repositories\UserTalentRepository;
use GuzzleHttp\Psr7\Request;

class UserClientController extends Controller
{

    private $UserClientRepository;
    private $UserTalentRepository;
    public function __construct(UserClientRepository $UserClientRepository, UserTalentRepository  $UserTalentRepository)
    {
        $this->UserClientRepository = $UserClientRepository;
        $this->UserTalentRepository = $UserTalentRepository;

    }
    public function client()
    {
        $client = Client::where('users_id', auth()->user()->id)->get();
        return view('user.client.user_client' , compact('client'));
    }

    public function client_created()
    {
        return view('user.client.user_client_created');
    }

    public function client_store(ClientRequest $request)
    {
        
        $this->UserClientRepository->created($request);
        return redirect()->back()->with('Success' , 'Created client successfuly');
    }

    public function talent()
    {
        $talent = Talents::where('users_id', auth()->user()->id)->with('type_helper')->get();

        return view('user.user_talent', compact('talent'));
    }

    public function telent_store(TalentRequest $request)
    {
        
        $this->UserTalentRepository->created($request);
        return redirect()->back()->with('Success', 'Create Talent Successfuly');
    }

    public function staf()
    {
        return view('user.staf.staf');
    }

    public function staf_store(Request $request)
    {

    }
}
