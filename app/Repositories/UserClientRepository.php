<?php

namespace App\Repositories;

use App\Models\Client;
use App\Http\Traits\ImageUpload;
use App\Models\ClientAttachedFile;

class UserClientRepository 
{
    use ImageUpload;
    public function created($request)
    {
        $name = $this->uploadImageStore($request->file('attached_file'), 'Client file');
        if(isset($request->avatar)){
            $avatar = $this->uploadImageStore($request->file('avatar'), 'Client file/avatar');
        }

       $client =  Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'languages' => $request->languages,
            'note' => $request->note,
            'avatar' => $avatar ?? 'dummy.png',
            'users_id' => auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->users_id,
            'create_by' =>  auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->id,
        ]);


        $client->attached_file()->create([
            'attached_file' => $name,
            'users_id' => auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->users_id
        ]);

        // ClientAttachedFile::create([

        // ]);
    }
}