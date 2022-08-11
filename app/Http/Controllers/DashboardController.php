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
        return view('dashboard.dashboard');
    }
}
