<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
class UploadController extends Controller
{
    use ImageUpload;
    public function upload(Request $request)
    {

        $request->validate([
            'file' => 'mimes:doc,rar,zip,pdf,txt|max:10000',
            'type' => 'required|string'
        ]);
        $name = $this->uploadImageStore($request->file('file'), 'Files before submit');

        $session = $request->type.'_'.auth()->user()->id;
        // $request->session()->put($session, $name);
        $request->session()->flash($session, $name);
        return response(200);
    }
}
