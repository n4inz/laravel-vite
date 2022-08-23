<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\JobModels;
use App\Models\SettingJobModelsStatus;
use App\Models\Staf;
use App\Models\Talents;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        // $request->validate([
        //     'search' => 'required'
        // ]);

        $array = [];

        $client = $this->client($request);
        $talent = $this->talent($request);
        $staff = $this->staff($request);
        $job = $this->job($request);

        if($client->count() > 0){
            array_push($array, [
                'Client' => $client
            ]);
        }

        if($talent->count() > 0){
            array_push($array, [
                'Talent' => $talent
            ]);
        }

        if($staff->count() > 0){
            array_push($array, [
                'Staff' => $staff
            ]);
        }

        if($job->count() > 0){
            array_push($array, [
                'Job' => $job
            ]);
        }
       
        
        return response()->json([
            'val' => $array
        ]);
    }

    public function client($request)
    {
        return Client::where('users_id',auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        ->where(function($query) use($request){
            $query->where('first_name','like',"%{$request->search}%")
            ->orWhere('last_name','like',"%{$request->search}%")
            ->orWhere('email','like',"%{$request->search}%")
            ->orWhere('phone','like',"%{$request->search}%")
            ->orWhere('address','like',"%{$request->search}%")
            ->orWhere('languages','like',"%{$request->search}%")
            ->orWhere('note','like',"%{$request->search}%");
        })->get();

    }

    public function talent($request)
    {
       return Talents::where('users_id',auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        ->where(function($query) use($request){
            $query->where('first_name','like',"%{$request->search}%")
            ->orWhere('last_name','like',"%{$request->search}%")
            ->orWhere('day_of_birthday','like',"%{$request->search}%")
            ->orWhere('experience','like',"%{$request->search}%")
            ->orWhere('email','like',"%{$request->search}%")
            ->orWhere('phone','like',"%{$request->search}%")
            ->orWhere('address','like',"%{$request->search}%")
            ->orWhere('about_talent','like',"%{$request->search}%");
        })->get();
    }

    public function staff($request)
    {
       return Staf::where('users_agency_id',auth()->user()->staf->users_agency_id ?? auth()->user()->id)
        ->where(function($query) use($request){
            $query->whereHas('user',function($query) use($request){
                $query->where('full_name','like',"%{$request->search}%")
                ->orWhere('email','like',"%{$request->search}%");
            });
        })->with('user')->get();
    }

    public function job($request)
    {
       return SettingJobModelsStatus::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id, 'status' => true])
        ->where(function($query) use($request){
            $query->where('status_name','like',"%{$request->search}%")
            ->orWhereHas('job_models', function($query) use($request){
                $query->where('family','like',"%{$request->search}%")
                ->orWhere('title','like',"%{$request->search}%")
                ->orWhere('description','like',"%{$request->search}%")
                ->orWhere('id_unique','like',"%{$request->search}%")
                ->orWhere('location','like',"%{$request->search}%");
                
            });
        })->with('job_models' ,function($query){
            $query->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id);
        })->get();

    }
}
