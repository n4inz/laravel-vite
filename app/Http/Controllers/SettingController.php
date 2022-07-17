<?php

namespace App\Http\Controllers;

use App\Models\SettingGeneral;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Models\SettingAdditionals;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingDetail;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingUsers;
use App\Models\User;

class SettingController extends Controller
{
    use ImageUpload;
    public function setting()
    {
        $setting = User::find(auth()->user()->id)->with(['SettingDetail' => function ($query){
            $query->with(['service_location_fee', 'service_category'])->first();
        }, 'SettingAdditionals' => function($query){
            $query->with('defined_check_list')->first();
        },'SettingUsers', 'SettingGeneral'])->first();


        $defined_list = SettingDefinedCheckList::all();
        // return $setting;
        return view('setting.setting', compact('setting', 'defined_list'));
    }

    public function setting_store(Request $request)
    {

       
        $response = $request->validate([
            'agency_name' => 'required|min:3',
            'url_ending_legal' => 'required', 
            'company_description' => 'required',
            // 'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'service_type' => 'required',

            'location' => 'required',
            'aplication_fee' => 'required',
            'placement_fee' => 'required',
            'hourly_rate' => 'required'
        ]);

        $cek_setting = SettingGeneral::where('users_id' , auth()->user()->id)->first();

        if(empty($cek_setting)){

            SettingGeneral::create([
                'agency_name' => $request->agency_name,
                'url_ending_legal' => $request->url_ending_legal, 
                'company_description' => $request->company_description,
                'avatar' => '$avatar',
                'users_id' => auth()->user()->id
            ]);
        
            $setting_detail =  SettingDetail::create([
                'service_type' => $request->service_type,
                'users_id' => auth()->user()->id
            ]);
        
            $setting_detail->service_location_fee()->create([
                'location' => $request->location,
                'send_notifcation' => $request->send_notifcation,
                'aplication_fee' => $request->aplication_fee,
                'placement_fee' => $request->placement_fee,
                'hourly_rate' => $request->hourly_rate,
                'users_id' => auth()->user()->id
            ]);
        
            $setting_detail->service_category()->create([
                'chile_care' => $request->chile_care,
                'nanny_sister' => $request->nanny_sister,
                'au_pair' => $request->au_pair,
                'maternity_care' => $request->maternity_care,
                'at_home_daycare' => $request->at_home_daycare,
                'senior_care' => $request->senior_care,
                'companion' => $request->companion,
                'personal_full_care' => $request->personal_full_care,
                'home_care' => $request->home_care,
                'meal_prepation_coking' => $request->meal_prepation_coking,
                'house_cleaning' => $request->house_cleaning,
                'private_home_kitchen' => $request->private_home_kitchen,
                'other' => $request->other,
                'users_id' => auth()->user()->id
            ]);
            
            SettingUsers::create([
                'client' => $request->client,
                'caregives' => $request->caregives,
                'interested_public_pool' => $request->interested_public_pool,
                'users_id' => auth()->user()->id
            ]);
        
            $setting_additionals = SettingAdditionals::create([
                'notification_email' => $request->notification_email,
                'dashboard_color_theme' => $request->dashboard_color_theme,
                'users_id' => auth()->user()->id
            ]);
        
            $setting_additionals->defined_check_list()->create([
                'body' => $request->body,
                'users_id' => auth()->user()->id
            ]);
        }else{
             SettingGeneral::where('users_id' , auth()->user()->id)->update([
                'agency_name' => $request->agency_name,
                'url_ending_legal' => $request->url_ending_legal, 
                'company_description' => $request->company_description,
                'avatar' => '$avatar',
                'users_id' => auth()->user()->id
            ]);

 

            SettingDetail::where('users_id' , auth()->user()->id)->update([
                'service_type' => $request->service_type,
                'users_id' => auth()->user()->id
            ]);

            
            SettingServiceLocationFee::where('users_id' , auth()->user()->id)->update([
                'location' => $request->location,
                'send_notifcation' => $request->send_notifcation,
                'aplication_fee' => $request->aplication_fee,
                'placement_fee' => $request->placement_fee,
                'hourly_rate' => $request->hourly_rate
            ]);

            SettingServiceCategory::where('users_id' , auth()->user()->id)->update([
                'chile_care' => $request->chile_care,
                'nanny_sister' => $request->nanny_sister,
                'au_pair' => $request->au_pair,
                'maternity_care' => $request->maternity_care,
                'at_home_daycare' => $request->at_home_daycare,
                'senior_care' => $request->senior_care,
                'companion' => $request->companion,
                'personal_full_care' => $request->personal_full_care,
                'home_care' => $request->home_care,
                'meal_prepation_coking' => $request->meal_prepation_coking,
                'house_cleaning' => $request->house_cleaning,
                'private_home_kitchen' => $request->private_home_kitchen,
                'other' => $request->other
            ]);

            SettingUsers::where('users_id' , auth()->user()->id)->update([
                'client' => $request->client,
                'caregives' => $request->caregives,
                'interested_public_pool' => $request->interested_public_pool,
            ]);

            SettingAdditionals::where('users_id' , auth()->user()->id)->update([
                'notification_email' => $request->notification_email,
                'dashboard_color_theme' => $request->dashboard_color_theme,
            ]);

            SettingDefinedCheckList::where('users_id' , auth()->user()->id)->update([
                'body' => $request->body,
            ]);
        
        }

    //    $avatar = $this->uploadImageStore($request->file('avatar'));
       

        return redirect()->back()->with('success', 'Setting was success update');
       
    }
}
