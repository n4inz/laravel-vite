<?php

namespace App\Repositories;

use App\Models\SettingAdditionals;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingDetail;
use App\Models\SettingGeneral;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingUsers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SettingRepository {

    public function created($request)
    {
        
        DB::beginTransaction();
 
        try{

            User::where('id', auth()->user()->id)->update([
            'full_name' => $request->agency_name,
            ]);
            
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
           
            // Chile care
            if(isset($request->chile_care_category)){
                $serviceCaregoryChileCare =  SettingServiceCategory::create([
                    'category_name' => 'Chile Care',
                    'category_key' => $request->chile_care_category,
                    'users_id' => auth()->user()->id
                ]);

                if(isset($request->chile_care)){
                    foreach($request->chile_care as $key => $value){
                        if($request->chile_care[$key] != null){
                            $serviceCaregoryChileCare->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->chile_care[$key])),
                                'sub_category_key' => $request->chile_care[$key],
                                'category' => 'Chile Care',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }

                }
            }

            // Senior Care
            if(isset($request->senior_care_category)){
                $serviceCaregorySeniorCare =  SettingServiceCategory::create([
                    'category_name' => 'Senior Care',
                    'category_key' => $request->senior_care_category,
                    'users_id' => auth()->user()->id
                ]);

                if(isset($request->senior_care)){
                    foreach($request->senior_care as $key => $value){
                        if($request->senior_care[$key] != null){
                            $serviceCaregorySeniorCare->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->senior_care[$key])),
                                'sub_category_key' => $request->senior_care[$key],
                                'category' => 'Senior Care',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }
                }
            }

            // Home Care
            if(isset($request->home_care_category)){
                $serviceCaregoryHomeCare =  SettingServiceCategory::create([
                    'category_name' => 'Home Care',
                    'category_key' => $request->home_care_category,
                    'users_id' => auth()->user()->id
                ]);

                if(isset($request->home_care)){
                    foreach($request->home_care as $key => $value){
                        if($request->home_care[$key] != null){
                            $serviceCaregoryHomeCare->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->home_care[$key])),
                                'sub_category_key' => $request->home_care[$key],
                                'category' => 'Home Care',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }

                }
            }


            // Other
            if(isset($request->other_category)){
                $other =  SettingServiceCategory::create([
                    'category_name' => 'Other',
                    'category_key' => $request->other_category,
                    'users_id' => auth()->user()->id
                ]);
                
                if(isset($request->other)){
                    foreach($request->other as $key => $value){
                        if($request->other[$key] != null){
                            $other->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->other[$key])),
                                'sub_category_key' => $request->other[$key],
                                'category' => 'Other',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }
                }
            }

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

            foreach($request->status as $key => $status){
                SettingJobModelsStatus::create([
                    'status_name' => $request->status[$key],
                    'status_key' => str_replace(' ', '_', strtolower($request->status[$key])),
                    // 'text_color' => $request->text_color[$key],
                    // 'bg_color' => $request->bg_color[$key],
                    'users_id' => auth()->user()->id
                ]);
            }

            DB::commit(); 
 
        }catch(\Exception $e){
 
            DB::rollback();
 
        }   
    }

    public function updated($request)
    {
        DB::beginTransaction();
        try{
            User::where('id', auth()->user()->id)->update([
                'full_name' => $request->agency_name,
            ]);
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

            
            SettingServiceCategory::where('users_id', auth()->user()->id)->delete();


             //Chile care
             if(isset($request->chile_care_category)){
                $serviceCaregoryChileCare =  SettingServiceCategory::create([
                    'category_name' => 'Chile Care',
                    'category_key' => $request->chile_care_category,
                    'users_id' => auth()->user()->id
                ]);

                if(isset($request->chile_care)){
                    foreach($request->chile_care as $key => $value){
                        if($request->chile_care[$key] != null){
                            $serviceCaregoryChileCare->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->chile_care[$key])),
                                'sub_category_key' => $request->chile_care[$key],
                                'category' => 'Chile Care',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }

                }
            }

            // Senior Care
            if(isset($request->senior_care_category)){
                $serviceCaregorySeniorCare =  SettingServiceCategory::create([
                    'category_name' => 'Senior Care',
                    'category_key' => $request->senior_care_category,
                    'users_id' => auth()->user()->id
                ]);

                if(isset($request->senior_care)){
                    foreach($request->senior_care as $key => $value){
                        if($request->senior_care[$key] != null){
                            $serviceCaregorySeniorCare->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->senior_care[$key])),
                                'sub_category_key' => $request->senior_care[$key],
                                'category' => 'Senior Care',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }
                }
            }

            // Home Care
            if(isset($request->home_care_category)){
                $serviceCaregoryHomeCare =  SettingServiceCategory::create([
                    'category_name' => 'Home Care',
                    'category_key' => $request->home_care_category,
                    'users_id' => auth()->user()->id
                ]);

                if(isset($request->home_care)){
                    foreach($request->home_care as $key => $value){
                        if($request->home_care[$key] != null){
                            $serviceCaregoryHomeCare->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->home_care[$key])),
                                'sub_category_key' => $request->home_care[$key],
                                'category' => 'Home Care',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }

                }
            }


            // Other
            if(isset($request->other_category)){
                $other =  SettingServiceCategory::create([
                    'category_name' => 'Other',
                    'category_key' => $request->other_category,
                    'users_id' => auth()->user()->id
                ]);
                
                if(isset($request->other)){
                    foreach($request->other as $key => $value){
                        if($request->other[$key] != null){
                            $other->service_subcategorys()->create([
                                'sub_category_name' => str_replace('_',' ',ucfirst($request->other[$key])),
                                'sub_category_key' => $request->other[$key],
                                'category' => 'Other',
                                'users_id' => auth()->user()->id
                            ]);
                        }
                    }
                }
            }

            SettingServiceLocationFee::where('users_id' , auth()->user()->id)->update([
                'location' => $request->location,
                'send_notifcation' => $request->send_notifcation,
                'aplication_fee' => $request->aplication_fee,
                'placement_fee' => $request->placement_fee,
                'hourly_rate' => $request->hourly_rate
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

            SettingJobModelsStatus::where('users_id', auth()->user()->id)->delete();

            foreach($request->status as $key => $status){
                SettingJobModelsStatus::create([
                    'status_name' => $request->status[$key],
                    'status_key' => str_replace(' ', '_', strtolower($request->status[$key])),
                    // 'text_color' => $request->text_color[$key],
                    // 'bg_color' => $request->bg_color[$key],
                    'users_id' => auth()->user()->id
                ]);
            }

            
            DB::commit(); 
           
        }catch(\Exception $e){
            
            DB::rollback();
           
        }
     

    }

}