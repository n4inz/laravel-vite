<?php

namespace App\Http\Traits;


trait ImageUpload
{
    protected $path  = 'app/public/images/';

    public function uploadImagePublic($name)
    {
        $file_name = time().'_'.$name->getClientOriginalName();
        $path = $name->move('avatar', $file_name);
        return $file_name;
    }

    public function uploadImageStore($request , $path)
    {
        $name = time().'_'.$request->getClientOriginalName();
        $request->storePubliclyAs($path, $name, "public");
        return $name;
    }

}