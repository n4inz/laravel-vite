<?php

namespace App\Http\Controllers;

use App\Models\SettingGeneral;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Models\SettingAdditionals;
use App\Models\SettingDetail;
use App\Models\SettingUsers;

class SettingController extends Controller
{
    use ImageUpload;
    public function setting()
    {
        return view('setting.setting');
    }

    public function setting_store(Request $request)
    {
        // return $request;
        $response = $request->validate([
            'agency_name' => 'required|min:6',
            'url_ending_legal' => 'required', 
            'company_description' => 'required',
            // 'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'service_type' => 'required',

            'location' => 'required',
            // 'send_notifcation' => $faker->boolean(true),
            'aplication_fee' => 'required',
            'placement_fee' => 'required',
            'hourly_rate' => 'required'
        ]);

    //    $avatar = $this->uploadImageStore($request->file('avatar'));
       
        SettingGeneral::create([
            'agency_name' => $request->agency_name,
            'url_ending_legal' => $request->url_ending_legal, 
            'company_description' => $request->company_description,
            // 'avatar' => $avatar,
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
            'hourly_rate' => $request->hourly_rate
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
            'other' => $request->other
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
        ]);

        return 'ok';
    }
}
