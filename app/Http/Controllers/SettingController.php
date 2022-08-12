<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\SettingGeneral;
use App\Http\Traits\ImageUpload;
use App\Models\Avatar;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingStatusTalent;
use App\Models\User;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUpload;
    private $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->middleware(['role:agency']);
        $this->settingRepository = $settingRepository;
    }

    public function setting()
    {
        $setting = User::where('id',auth()->user()->id)->with(['avatar','SettingDetail' => function ($query){
            $query->with(['service_location_fee'])->first();
        }, 'SettingAdditionals' => function($query){
            $query->with('defined_check_list')->first();
        },'SettingUsers', 'SettingGeneral' , 'SettingCategory' , 'SettingJobStatus' , 'SettingTalentStatus'])->first();

        // return $setting->SettingJobStatus;
        // In array catagory and subcategory
        $category = [];
        $subCategory = [];
        if(!empty($setting->SettingCategory)){
            foreach($setting->SettingCategory as $val ){
                array_push($category, $val->category_key);
    
                foreach($val->service_subcategorys as $valSubs ){
                    array_push($subCategory, $valSubs->sub_category_key);
                }
            }
        }
        // In array job status
        $jobStatus = [];
        if(!empty($setting->SettingJobStatus)){
            foreach($setting->SettingJobStatus as $val ){
                array_push($jobStatus, $val->status_key);
            }
        }

        // in array talent status
        $talentStatus = [];
        if(!empty($setting->SettingTalentStatus)){
            foreach($setting->SettingTalentStatus as $val ){
                array_push($talentStatus, $val->status_key);
            }
        }

        $defined_list = SettingDefinedCheckList::where('users_id', auth()->guard('web')->user()->id)->get();
        return view('setting.setting', compact('setting', 'defined_list' , 'category' , 'subCategory' , 'jobStatus', 'talentStatus'));
    }

    public function setting_store(Request $request)
    {
        $cek_setting = SettingGeneral::where('users_id' , auth()->user()->id)->first();

        if(empty($cek_setting)){
        
           $this->settingRepository->created($request);
        }else{
           $a = $this->settingRepository->updated($request);

        }
        return redirect()->back()->with('success', 'Setting was success update');
    }

    public function upload_avatar(Request $request)
    {
        $avatar = $this->uploadImageStore($request->file('avatar') , 'Setting/avatar');
        $exit =  Avatar::where('users_id', auth()->guard('web')->user()->id)->first();

        if(empty($exit)){
            Avatar::create([
                'avatar' => $avatar,
                'users_id' => auth()->guard('web')->user()->id
            ]);
        }else{
            Avatar::where('users_id' , auth()->guard('web')->user()->id)->update([
                'avatar' => $avatar,
            ]);
        }
      
        return redirect()->back()->with('Success', 'Profile Update Success');
    }
}
