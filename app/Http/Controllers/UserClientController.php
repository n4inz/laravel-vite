<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\TalentRequest;
use App\Http\Traits\ImageUpload;
use App\Models\Client;
use App\Models\File;
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

        // File::where(['type' => 'TALENT'])->delete();

    }
    public function client()
    {

        $client = Client::orderBy('id', 'desc')->get();
        // return request()->query('search');
        // return $client->count();
        return view('user.client.user_client' , compact('client'));
    }

    public function client_created()
    {
        return view('user.client.user_client_created');
    }

    public function client_store(ClientRequest $request)
    {
        // return $request;   
        $this->UserClientRepository->created($request);
        return redirect()->route('jobboard')->with('Success' , 'Created client successfuly');
    }

    public function user_client_datail_modal(Request $request)
    {
        $client = Client::with('attached_file')->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id, 'id' => $request->id])->with('attached_file')->first();
        // return $client;
        return view('modal.user.detail_client', compact('client'));
    }

    public function talent()
    {
        $talent = Talents::orderBy('id', 'desc')->where('users_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->with('type_helper')->get();

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
                'email' => 'required|unique:users,email|unique:clients,email|unique:talents,email|email',
                // 'type' => 'required|min:3',
                'password' => 'required',
            ]);
            if(isset($request->avatar)){
                $avatar = $this->uploadImageStore($request->file('avatar') , 'avatar');
            }

            $color = [
                '#EB5757',
                '#F2994A',
                '#27AE60',
                '#6AEAE3',
                '#56CCF2',
                '#BB6BD9',
                '#F2C94C',
            ];
            $color_rand = $color[rand(0, count($color) - 1)];
    
           $user = User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'color' => $color_rand,
                'password' => Hash::make($request->password),
                'tenants_id' => $request->user()->tenants_id,
    
            ]);
    
            $user->staf()->create([
                'avatar' => $avatar ?? null,
                'type' => $request->type ?? 'staff',
                'users_agency_id' => $request->user()->id
            ]);
            
    
            $user->assignRole('staf');
    
            return redirect()->back()->with('Success', 'Create staff successfuly');
        }
      
    }

    public function user_talent_edit_detail(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        Talents::where('id' , $request->id)->update([
            'email_verified' => $request->email_verified,
            'background_check' => $request->background_check,
            'vaccination' => $request->vaccination
        ]);
        
        return redirect()->back();
    }

    public function __destruct()
    {
        File::where(['type' => 'TALENT'])->delete();
    }
}
