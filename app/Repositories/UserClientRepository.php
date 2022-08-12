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
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'create_by' =>  auth()->user()->id,
        ]);


        $session = 'client_file_'.auth()->user()->id;
        if(request()->session()->get($session)){
            $file = request()->session()->get($session);
            // $name = $this->uploadImageStore($request->file('attached_file'), 'Jobs attached file');
            $this->move_file('public/Files before submit/'.$file, 'public/Jobs attached file/'.$file);
            $client->attached_file()->create([
                'attached_file' => $file ,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            ]);

            request()->session()->forget($session);
        }
    }
}