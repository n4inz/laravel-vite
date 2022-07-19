<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\SettingGeneral;
use App\Http\Traits\ImageUpload;
use App\Models\SettingDefinedCheckList;
use App\Models\User;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUpload;
    private $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function setting()
    {
        // return SettingGeneral::where('users_id',auth()->user()->id)->first();
        $setting = User::where('id',auth()->user()->id)->with(['SettingDetail' => function ($query){
            $query->with(['service_location_fee', 'service_category'])->first();
        }, 'SettingAdditionals' => function($query){
            $query->with('defined_check_list')->first();
        },'SettingUsers', 'SettingGeneral'])->first();

        $defined_list = SettingDefinedCheckList::where('users_id', auth()->user()->id)->get();
        return view('setting.setting', compact('setting', 'defined_list'));
    }

    public function setting_store(SettingRequest $request)
    {
        $cek_setting = SettingGeneral::where('users_id' , auth()->user()->id)->first();

        if(empty($cek_setting)){
            $this->settingRepository->created($request);
        }else{
            $this->settingRepository->updated($request);
        }

        return redirect()->back()->with('success', 'Setting was success update');
    }

    public function upload_avatar(Request $request)
    {
        $avatar = $this->uploadImageStore($request->file('avatar') , 'Setting/avatar');
        SettingGeneral::where('users_id' , auth()->user()->id)->update([
            'avatar' => $avatar,
        ]);
       
        return redirect()->back()->with('Success', 'Profile Update Success');
    }
}
