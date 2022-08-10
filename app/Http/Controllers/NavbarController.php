<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\NotificationStatus;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function comment_notify(Request $request)
    {   
        $notify = Notification::with(['notify_status' => function($query){
            $query->where('user_staf_id', auth()->user()->id);
        }])->where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id ])
                    ->limit(3)
                    ->orderBy('id', 'desc')
                    ->get();

        // return $notify;

        $response = [];
        foreach($notify as $key => $val){
            Notifi::updateOrCreate(['notifications_id' =>  $val->id ,  'user_staf_id' => auth()->user()->id],[
                'user_staf_id' => auth()->user()->id,
                'status' => 'read',
                'notifications_id' => $val->id
            ]);

            array_push($response, [
                'name' => $val->name,
                'avatar' => $val->avatar,
                'body' => $val->body,
                'job_models_id' => $val->job_models_id,
                'notify_status' => $val->notify_status,
                'created_at' => $val->created_at->diffForHumans()
            ]);
        }
        return response($response);
    }
}
