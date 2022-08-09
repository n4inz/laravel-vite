<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\TalentRequest;
use App\Http\Traits\ImageUpload;
use App\Models\Client;
use App\Models\Staf;
use App\Models\Talents;
use App\Models\User;
use App\Repositories\UserClientRepository;
use App\Repositories\UserTalentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserClientController extends Controller
{
    use ImageUpload;

    private $UserClientRepository;
    private $UserTalentRepository;
    public function __construct(UserClientRepository $UserClientRepository, UserTalentRepository  $UserTalentRepository)
    {

        $this->UserClientRepository = $UserClientRepository;
        $this->UserTalentRepository = $UserTalentRepository;

    }
    public function client()
    {
        $client = Client::get();

        // return $client->count();
        return view('user.client.user_client' , compact('client'));
    }

    public function client_created()
    {
        return view('user.client.user_client_created');
    }

    public function client_store(ClientRequest $request)
    {
        
        $this->UserClientRepository->created($request);
        return redirect()->route('user_client.client')->with('Success' , 'Created client successfuly');
    }

    public function talent()
    {
        $talent = Talents::where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->with('type_helper')->get();

        return view('user.talent.user_talent', compact('talent'));
    }

    public function telent_store(TalentRequest $request)
    {
        
        $this->UserTalentRepository->created($request);
        return redirect()->back()->with('Success', 'Create Talent Successfuly');
    }

    public function staf()
    {
        if(auth()->user()->hasRole('agency')){
            $staf = Staf::with('user')->where('users_agency_id' , auth()->user()->id)->get();
            return view('user.staf.staf', compact('staf'));
        }

        return abort(403);
    }

    public function staf_store(Request $request)
    {

        if(auth()->user()->hasRole('agency')){
            $request->validate([
                'full_name' => 'required|min:3',
                'email' => 'required|unique:users,email|unique:clients,email|unique:talents,email',
                // 'type' => 'required|min:3',
                'password' => 'required',
            ]);
            if(isset($request->avatar)){
                $avatar = $this->uploadImageStore($request->file('avatar') , 'Setting/avatar');
            }
    
           $user = User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'tenants_id' => $request->user()->tenants_id,
    
            ]);
    
            $user->staf()->create([
                'avatar' => $avatar ?? 'dummy.png',
                'type' => $request->type ?? 'staf',
                'users_agency_id' => $request->user()->id
            ]);
            
    
            $user->assignRole('staf');
    
            return redirect()->back()->with('success', 'Create staff successfuly');
        }
      
    }
}
