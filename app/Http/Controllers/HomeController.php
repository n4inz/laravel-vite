<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAplicantsRequest;
use App\Http\Traits\ImageUpload;
use App\Models\File;
use App\Models\JobModels;
use App\Models\JobModelsNewApplicant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ImageUpload;
    public function send($uid)
    {
        
        $result = JobModels::with(['availability','languages','match_talent'])->where('uid' , $uid)->firstOrFail();
        $talentNeed = [];
             // Match Talent
        foreach ($result->match_talent as $match) {
            array_push($talentNeed, $talentNeed[$match->jobs_sub_category] = 1);
        }
        // return $talentNeed;
        return view('jobboard.send' , compact('result','talentNeed'));
    }

    public function apply($uid)
    {
        
        return view('jobboard.apply' , compact('uid'));
    }

    public function new_aplicant_store(NewAplicantsRequest $request)
    {
       
        $idModels = JobModels::where('uid' , $request->uid)->firstOrFail(['id', 'users_id']);
       $newAplicants =  JobModelsNewApplicant::create([
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'description' => $request->description,
           'status' => 'new',
           'job_models_id' =>  $idModels->id,
           'users_id' =>  $idModels->users_id,
        ]);

        if(isset($request->id_file)){
            foreach($request->id_file as $key => $idFile){
                File::where(['id' => $request->id_file[$key], 'type' => 'NEW_APLICANTS'])->get()->map(function($res , $key) use($newAplicants){
                    $newAplicants->file()->create([
                        'file' => $res->file ,
                        'extension' => strtolower($res->extension)
                    ]);
                    $this->move_file('public/Files before submit/'.$res->file, 'public/File/'.$res->file);
        
                    File::where('id' , $res->id)->delete();
                 });
            }
        }


        return redirect()->back()->with('success' , 'success apply');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'mimes:doc,rar,zip,pdf,txt,jpg,jpeg,png|max:10000',
            'type' => 'required|string',
            'uid' => 'required'
        ]);
        $name = $this->uploadImageStore($request->file('file'), 'Files before submit');
        $idModels = JobModels::where('uid' , $request->uid)->firstOrFail(['id', 'users_id']);
       $res =  File::create([
            'file' => $name,
            'extension' => $request->file('file')->extension(),
            'type' => $request->type,
            'users_id' => $idModels->users_id
        ]);

        return response()->json([
            'id' => $res->id
        ]);
    }


}
