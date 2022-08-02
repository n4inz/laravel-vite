<?php

namespace App\Listeners;

use App\Models\Actifity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActifityListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {

       Actifity::create([
        'name' => $event->data['name'],
        'avatar' => $event->data['avatar'],
        'body' => $event->data['body'],
        'create_by' => $event->data['create_by'],
        'users_id' => $event->data['users_id'],
        'type' => $event->data['type'],
        'job_models_id' => $event->data['job_models_id'],
       ]);
    }

}
