<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Events\Nofication;
use App\Models\Notification;
use App\Models\NotificationStatus;
use App\Models\Staf;

class DashboardController extends Controller
{
    public function index()
    {
        
        // $s=  Notification::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'notify_to' => auth()->user()->id])->get();
        // return $s; 
        return view('dashboard.dashboard');
    }
}
