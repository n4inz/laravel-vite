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
        $name = $this->uploadImageStore($request->file('attached_file'), 'Talent attached file');
       $client =  Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'languages' => $request->languages,
            'note' => $request->note,
            'users_id' => auth()->user()->id,
        ]);


        $client->attached_file()->create([
            'attached_file' => $name,
            'users_id' => auth()->user()->id
        ]);

        // ClientAttachedFile::create([

        // ]);
    }
}