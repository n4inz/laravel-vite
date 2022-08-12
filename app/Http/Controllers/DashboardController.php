<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Events\Nofication;
use App\Models\JobModels;
use App\Models\Notification;
use App\Models\NotificationStatus;
use App\Models\Staf;
use App\Models\Talents;
use App\Models\TalentTypeHelper;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        
        // $file = request()->session()->get(auth()->user()->staf->users_agency_id ?? auth()->user()->id);
        // Storage::move('public/test1/file.jpg', '/public/test2/file.jpg');

        // return $file;
        // $a = TalentTypeHelper::where('users_id' , auth()->user()->id)->take(2)->get();

        // return $a;
        // request()->session()->forget(auth()->user()->staf->users_agency_id ?? auth()->user()->id);
        // return request()->session()->get(auth()->user()->staf->users_agency_id ?? auth()->user()->id);
        
        $session = 'talent_file_'.auth()->user()->id;
        if(request()->session()->get($session)){
            return request()->session()->get($session);

        }else{
            return 'not';
        }
        
        return view('dashboard.dashboard');
    }
}
