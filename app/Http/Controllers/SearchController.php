<?php

namespace App\Http\Controllers;

use App\Models\JobModels;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        // return $request->search;

        // JobModels::where([
        //     'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id, 
        //     'family' => 'status', 'like', "%" . $request->search . "%"
        // ]);

        $data = JobModels::
                // orWhere('family', 'like', "%" . $request->search . "%")
                // ->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                // ->orWhere('title', 'like', "%" . $request->search . "%")
                // ->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                // ->orWhere('description', 'like', "%" . $request->search . "%")
                // ->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                // ->orWhere('id_unique', 'like', "%" . $request->search . "%")
                // ->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                orWhere('location', 'like', "%" . $request->search . "%")
                // ->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)
                ->orWhereHas('match_talent' , function($query) use ($request){
                    $query->where('jobs_sub_category','like', "%" . $request->search . "%");
                })->get();
        
        return response()->json([
            'val' => $data
        ]);
    }
}
