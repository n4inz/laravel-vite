<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

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

    public function move_file($old , $new)
    {
        Storage::move($old, $new);
    }

}