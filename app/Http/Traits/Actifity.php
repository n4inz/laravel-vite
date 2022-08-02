<?php

namespace App\Http\Traits;


trait Actifity
{
    public function actifity($body, $type)
    {
       return [
            'name' => auth()->user()->full_name ?? 'Your Agency',
            'avatar' => auth()->user()->staf->avatar ?? auth()->user()->avatar->avatar ?? 'dummy.png',
            'body' => $body,
            'create_by' => auth()->user()->id,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'type' => $type,
            'job_models_id' => request()->job_models_id
        ];           
    }
}