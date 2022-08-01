<?php

namespace App\Repositories;

use App\Models\Talents;
use App\Http\Traits\ImageUpload;
class UserTalentRepository 
{
    use ImageUpload;
    public function created($request)
    {
        $languages = json_decode($request->languages);
        $type_helper = json_decode($request->type_helper);
        $name = $this->uploadImageStore($request->file('attached_file'), 'Talent attached file');
        $avatar = $this->uploadImageStore($request->file('avatar'), 'Talent attached file/avatar');

       $talent =  Talents::create([
            'avatar' => $avatar,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'day_of_birthday' => $request->day_of_birthday,
            'experience' => $request->experience,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'about_talent' => $request->about_talent,
            'file_documents' => $name,
            'users_id' => auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->users_id,
            'create_by' => auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->id
        ]);

        foreach($languages as $key => $value){

            $talent->languages()->create([
                'languages' => $languages[$key]->code,
                'users_id' => auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->users_id,
            ]);
        }

        foreach($type_helper as $key => $value){
            $talent->type_helper()->create([
                'name_type_helper' => $type_helper[$key]->value,
                'code_helper' => $type_helper[$key]->code,
                'users_id' => auth()->guard('web')->user()->id ?? auth()->guard('staf')->user()->users_id,
            ]);
         }
       
    }
}