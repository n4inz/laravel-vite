<?php

namespace App\Repositories;

use App\Models\SettingAdditionals;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingDetail;
use App\Models\SettingGeneral;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingUsers;

class SettingRepository {

    public function created($request)
    {
        SettingGeneral::create([
            'agency_name' => $request->agency_name,
            'url_ending_legal' => $request->url_ending_legal, 
            'company_description' => $request->company_description,
            'avatar' => null,
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

        foreach($request->body as $key => $value){
            if($request->body[$key] != null){
                $setting_additionals->defined_check_list()->create([
                    'body' => $request->body[$key],
                    'users_id' => auth()->user()->id
                ]);
            }
        }
    
    }

    public function updated($request)
    {
        SettingGeneral::where('users_id' , auth()->user()->id)->update([
            'agency_name' => $request->agency_name,
            'url_ending_legal' => $request->url_ending_legal, 
            'company_description' => $request->company_description,
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

        $sett_id = SettingAdditionals::updateOrCreate(['users_id' => auth()->user()->id], [
            'notification_email' => $request->notification_email,
            'dashboard_color_theme' => $request->dashboard_color_theme,
        ]);

        foreach($request->body as $keys => $value){
            if($request->body[$keys] != null){
                SettingDefinedCheckList::create([
                    'body' => $request->body[$keys],
                    'setting_additionals_id' => $sett_id->id,
                    'users_id' => auth()->user()->id
                ]);
            }
        }

    }

}