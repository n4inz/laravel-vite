<?php

namespace App\Repositories;

use App\Models\Talents;
use App\Http\Traits\ImageUpload;
use App\Models\File;

class UserTalentRepository 
{
    use ImageUpload;
    public function created($request)
    {
        $languages = json_decode($request->languages);
        $type_helper = json_decode($request->type_helper);
        
        
        if(isset($request->avatar)){
            $avatar = $this->uploadImageStore($request->file('avatar'), 'Talent attached file/avatar');
        }
        // if(isset($request->attached_file)){
        //     $name = $this->uploadImageStore($request->file('attached_file'), 'Talent attached file');
        // }
       $talent =  Talents::create([
            'avatar' => $avatar ?? 'dummy.png',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'day_of_birthday' => $request->day_of_birthday,
            'experience' => $request->experience,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'about_talent' => $request->about_talent,
            'file_documents' => $name ?? null,
            'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            'create_by' => auth()->user()->id,
        ]);

        foreach($languages as $key => $value){

            $talent->languages()->create([
                'languages' => $languages[$key]->code,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            ]);
        }

        foreach($type_helper as $key => $value){
            $talent->type_helper()->create([
                'name_type_helper' => $type_helper[$key]->value,
                'code_helper' => $type_helper[$key]->code,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            ]);
         }

         File::where(['users_id' => auth()->user()->id , 'type' => 'TALENT'])->get()->map(function($res , $key) use($talent){
            $talent->attached_file()->create([
                'files' => $res->file ,
                'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
            ]);
            $this->move_file('public/Files before submit/'.$res->file, 'public/Talent attached file/'.$res->file);

            File::where('id' , $res->id)->delete();
         });

       
    }
}