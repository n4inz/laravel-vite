<?php

namespace App\Listeners;

use App\Events\Nofication;
use App\Models\Notification;
use App\Models\Staf;


class NotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Nofication  $event
     * @return void
     */
    public function create(Nofication $event)
    {
        $data = Staf::where('users_agency_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->with('user')->get();
        
        $id = [
         
        ];
        foreach($data as $val){
            if(auth()->user()->id != $val->users_id){
                array_push($id, $val->users_id);
            }
        }

        if(isset(auth()->user()->staf->users_agency_id)){
            array_push($id, $val->users_agency_id);
        }

        foreach($id as $val){
            Notification::create([
                'name' => $event->data['name'],
                'avatar' => $event->data['avatar'],
                'body' => $event->data['body'],
                'notify_to' => $val,
                'users_id' => $event->data['users_id'],
                'status' => 'UNREAD',
                'job_models_id' => $event->data['job_models_id'],
            ]);
        }
      
    }

    
}
