<?php

namespace App\Http\Traits;
use App\Events\Nofication;
use App\Events\Comments;
use App\Events\ReplyComment;
use Carbon\Carbon;
trait Event
{

    public function tmp_notify($request, $body, $created)
    {
        $avatar = auth()->user()->staf->avatar ?? auth()->user()->avatar->avatar ?? null;
        return [
            'name' => auth()->user()->full_name ?? 'Your agency',
            // 'avatar' => asset('storage/'.$avatar),
            'avatar' => $avatar,

            'body' => $body,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'job_models_id' => $request->job_models_id,
        ];
    }

    public function notify($request, $body)
    {
        Nofication::dispatch($this->tmp_notify($request, $body , null));
    }

    public function comment_event($request ,$created)
    {
        $time = Carbon::parse($created->created_at)->format('g:i A');
        $date = Carbon::parse($created->created_at)->format('d M Y');
        $data = [
            'name' => $created->name,
            'comment' => $request->comment,
            'avatar' => asset('storage/avatar/'.$created->avatar),
            'cek_avatar' => $created->avatar,
            'avatar1' => '<div class="w-10 h-10 flex items-center justify-center bg-['. auth()->user()->color.'] rounded-full">
                                <span class="text-white text-lg">'.strtoupper(substr($created->name, 0, 1)).'</span>
                            </div>',
            'time' =>  $date.' - '.$time,
            'id' => $created->id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'job_models_id' => $request->job_models_id,
            
        ];
        Comments::dispatch($data);
    }

    public function reply_comment_event($request , $created)
    {
        $time = Carbon::parse($created->created_at)->format('g:i A');
        $date = Carbon::parse($created->created_at)->format('d M Y');

        $data = [
            'name' => $created->name ?? 'Not Name',
            'reply' => $request->reply_comment,
            'avatar' => asset('storage/avatar/'.$created->avatar),
            'cek_avatar' => $created->avatar,
            'avatar1' => '<div class="w-10 h-10 flex items-center justify-center bg-['. auth()->user()->color.'] rounded-full">
                                <span class="text-white text-lg">'.strtoupper(substr($created->name, 0, 1)).'</span>
                            </div>',
            'time' =>  $date.' - '.$time,
            'id_comment' => $request->job_comments_id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'job_models_id' => $request->job_models_id,
        ];


        ReplyComment::dispatch($data);
    }
}