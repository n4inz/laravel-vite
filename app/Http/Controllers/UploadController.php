<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Models\File;

class UploadController extends Controller
{
    use ImageUpload;
    public function upload(Request $request)
    {

        // return $request->file('file');

        $request->validate([
            'file' => 'mimes:doc,rar,zip,pdf,txt,jpg,jpeg,png|max:10000',
            'type' => 'required|string'
        ]);
        $name = $this->uploadImageStore($request->file('file'), 'Files before submit');

        // $array = ['nas'];
        // array_push($array,$name);
        $session = $request->type.'_'.auth()->user()->id;
        // $request->session()->put($session, $name);
        $request->session()->flash($session, $name);
        // $request->session()->put($session, $array);

        return response(200);
    }

    public function uploadWithDb(Request $request)
    {
        $request->validate([
            'file' => 'mimes:doc,rar,zip,pdf,txt,jpg,jpeg,png|max:10000',
            'type' => 'required|string'
        ]);
        $name = $this->uploadImageStore($request->file('file'), 'Files before submit');

        File::create([
            'file' => $name,
            'extension' => $request->file('file')->extension(),
            'type' => $request->type,
            'users_id' => auth()->user()->id
        ]);

        return response(200);
    }
}
