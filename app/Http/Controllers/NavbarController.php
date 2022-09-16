<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Notification;
use App\Models\NotificationStatus;
use App\Http\Traits\ImageUpload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NavbarController extends Controller
{
    use ImageUpload;
    public function comment_notify(Request $request)
    {   
        $notify = Notification::where([
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                'notify_to' => auth()->user()->id
                ]);
        $notify->update([
            'status' => "READ"
        ]);
          $data =  $notify->limit(3)
                ->orderBy('id', 'desc')
                ->get();

        $response = [];
        foreach($data as $key => $val){
            array_push($response, [
                'name' => $val->name,
                'avatar' => $val->avatar,
                'avatar1' => '<div class="w-5 h-5 flex items-center justify-center rounded-full">
                                    <span class="text-white text-lg">'.$val->name.'</span>
                                </div>',
                'body' => $val->body,
                'job_models_id' => $val->job_models_id,
                'notify_status' => $val->notify_status,
                'created_at' => $val->created_at->diffForHumans()
            ]);
        }
        return response($response);
    }

    public function change_email_password(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);
       $user =  User::where('id', auth()->user()->id)->update([
            'email' => $request->email ?? auth()->user()->email,
            'password' => Hash::make($request->password),
        ]);

        if($request->avatar){
            $avatar = $this->uploadImageStore($request->file('avatar'), 'avatar');
            Avatar::updateOrCreate(['users_id' => auth()->user()->id],[
                'avatar' => $avatar,
                'users_id' => auth()->user()->id,
            ]);
        }

        return redirect()->back();
    }
}
