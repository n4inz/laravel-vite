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
            $avatar = $this->uploadImageStore($request->file('avatar'), 'avatar');
        }
        $color = [
            '#EB5757',
            '#F2994A',
            '#27AE60',
            '#6AEAE3',
            '#56CCF2',
            '#BB6BD9',
            '#F2C94C',
        ];
        $color_rand = $color[rand(0, count($color) - 1)];

       $client =  Client::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'languages' => $request->languages,
            'color' => $color_rand,
            'note' => $request->note,
            'avatar' => $avatar ?? null,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'create_by' =>  auth()->user()->id,
        ]);


        $session = 'client_file_'.auth()->user()->id;
        if(request()->session()->get($session)){
            $file = request()->session()->get($session);
            // $name = $this->uploadImageStore($request->file('attached_file'), 'Jobs attached file');
            $this->move_file('public/Files before submit/'.$file, 'public/file/'.$file);
            $client->attached_file()->create([
                'attached_file' => $file ,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            ]);

            request()->session()->forget($session);
        }
    }
}