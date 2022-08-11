<?php

namespace App\Events;

use App\Models\Notification;
use App\Models\Staf;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class Nofication implements ShouldQueue,ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    public $count;
    public function __construct($data)
    {
        $this->data = $data;
        $this->notify_staf();

    }

    public function notify_staf()
    {
        
        $data = Staf::where('users_agency_id', auth()->user()->staf->users_agency_id ?? auth()->user()->id)->with('user')->get();
        
        $id = [ ];
        // Staf
        foreach($data as $val){
             $count = Notification::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'notify_to' => $val->users_id, 'status' => 'UNREAD'])->count();

            if(auth()->user()->id != $val->users_id){
                array_push($id, [
                    'count' => $count + 1,
                    'notify_to' => $val->users_id
                ]);
            }
        }

        // Agency
        if(isset(auth()->user()->staf->users_agency_id)){
            $count =  Notification::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'notify_to' => $val->users_agency_id, 'status' => 'UNREAD'])->count();
            array_push($id, [
                'count' => $count + 1,
                'notify_to' => $val->users_agency_id
            ]);
        }
        $this->count = $id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('channel-comment');
    }
}
