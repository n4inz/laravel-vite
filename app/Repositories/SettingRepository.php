<?php

namespace App\Repositories;

use App\Http\Traits\HttpGuzzle;
use App\Models\JobModels;
use App\Models\JobModelsMatchTalent;
use App\Models\SettingAdditionals;
use App\Models\SettingCalendlyApi;
use App\Models\SettingDefinedCheckList;
use App\Models\SettingDetail;
use App\Models\SettingGeneral;
use App\Models\SettingJobModelsStatus;
use App\Models\SettingServiceCategory;
use App\Models\SettingServiceLocationFee;
use App\Models\SettingStatusTalent;
use App\Models\SettingUsers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SettingRepository {

    use HttpGuzzle;

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
                'aplication_fee_check' => $request->aplication_fee_checkbox,
                'placement_fee' => $request->placement_fee,
                'placement_fee_check' => $request->placement_fee_checkbox,
                'hourly_rate' => $request->hourly_rate,
                'hourly_rate_check' => $request->hourly_rate_checkbox,
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

            foreach($request->name_status_job as $key => $status){
            
                SettingJobModelsStatus::create([
                    'status_name' => $request->name_status_job[$key],
                    'status_key' => str_replace(' ', '_', strtolower($request->name_status_job[$key])),
                    'status' => request()->post($key),
                    // 'text_color' => $request->text_color[$key],
                    // 'bg_color' => $request->bg_color[$key],
                    'users_id' => auth()->user()->id
                ]);
            }

            foreach($request->status_talent as $key => $value){
                SettingStatusTalent::create([
                    'status_name' => str_replace('_', ' ', ucfirst($request->status_talent[$key])),
                    'status_key' =>  $request->status_talent[$key],
                    'users_id' => auth()->user()->id
                ]);
    
            }

            if(isset($request->calendly)){
                $res = json_decode($this->get('https://api.calendly.com', 'users/me' , $request)->getBody());
    
               $load = SettingCalendlyApi::create([
                    'token' => $request->calendly,
                    'current_organization' => $res->resource->current_organization,
                    'scheduling_url' => $res->resource->scheduling_url,
                    'uri' => $res->resource->uri,
                    'users_id' => auth()->user()->id
                ]);


                // Add detail Job from calendly
                // $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
                // $responses = $this->getWithParams($request->calendly, 'https://api.calendly.com/event_types',[
                //     'organization' => $load->current_organization,
                //     'status' => 'active',

                // ]);
                // $response = json_decode($responses);
          
                // foreach($response->collection as $valCalendly){
                //     $idJobStatus = SettingJobModelsStatus::where([
                //         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //         'status_key' => 'potential_client',
                //         ])->first('id');
                //     $exits = JobModels::where('uri_api', $valCalendly->uri)->first('id');
                //     $jobsIdUnique = JobModels::get('id');
                //     if(!$exits){
                //         $jobs = JobModels::create([
                //             'title' => $valCalendly->name,
                //             'id_unique' => $jobsIdUnique->count()+1,
                //             'description' => $valCalendly->description_plain,
                //             'url_calendly' => $valCalendly->scheduling_url,
                //             'uri_api' => $valCalendly->uri,
                //             'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //             'set_job_status_id' => $idJobStatus->id
                //         ]);
                //     }
        
                //     // Filter subcategory form multi_select type
                //     foreach($valCalendly->custom_questions as $subcategory){
                //         if($subcategory->type == 'multi_select'){

                //             // Update Subcategory 
                //             if(count($subcategory->answer_choices) > 0){
                //                 $jobsUpdate = JobModels::updateOrCreate(['uri_api' => $valCalendly->uri],[
                //                     'title' => $valCalendly->name,
                //                     'description' => $valCalendly->description_plain,
                //                     'url_calendly' => $valCalendly->scheduling_url,
                //                     'uri_api' => $valCalendly->uri,
                //                     'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     // 'set_job_status_id' => $idJobStatus->id
                //                 ]);
        
                //                 JobModelsMatchTalent::where(['job_models_id' => $jobsUpdate->id])->delete();
                //                 foreach($subcategory->answer_choices as $keySub => $category){
                //                     JobModelsMatchTalent::create([
                //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
                //                         'job_models_id' => $jobsUpdate->id, 
                //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     ]);
                //                 }
                //             }
                           
                //             // Create subcategory if subcategory exist
                //             if(!$exits){
                //                 foreach($subcategory->answer_choices as $keySub => $category){
                //                     JobModelsMatchTalent::updateOrCreate([
                //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
                //                         'job_models_id' => $jobs->id, 
                //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     ]);
                //                 }
                //             }
                //         }
        
                //     }
                // }

                // // $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
                // $responses = $this->getWithParams($request->calendly, 'https://api.calendly.com/event_types',[
                //     'organization' => $load->current_organization,
                //     'status' => 'active',
        
                // ]);
        
                // $response = json_decode($responses);
          
                // foreach($response->collection as $valCalendly){
                //     $idJobStatus = SettingJobModelsStatus::where([
                //         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //         'status_key' => 'potential_client',
                //         ])->first('id');
                //     $exits = JobModels::where('uri_api', $valCalendly->uri)->first('id');
                //     $jobsIdUnique = JobModels::get('id');
                //      // Get Description
                //      $responseSchedulings = $this->getWithParams($request->calendly, 'https://api.calendly.com/scheduled_events',[
                //         'organization' => $load->current_organization,
                //         'status' => 'active',
        
                //     ]);
        
                //     $arrayAnswerDetail = [];
                //     $responseScheduling = json_decode($responseSchedulings);
                //     foreach($responseScheduling->collection as $value_scheduling){
                //         if($value_scheduling->event_type == $valCalendly->uri){
                //             $getQuestionPerEvents = $this->getWithParams($request->calendly, $value_scheduling->uri.'/invitees');
                //             $getQuestionPerEvent = json_decode($getQuestionPerEvents);
                //             array_push($arrayAnswerDetail, $getQuestionPerEvent->collection);
                //         }
                //     }
        
                //     $descriptionString = '';
                //     foreach($arrayAnswerDetail as $valAnswerDetail){
                //         $question = '';
                //         foreach ($valAnswerDetail[0]->questions_and_answers as $val_question) {
                //             $question .= ''.$val_question->question.' : '.$val_question->answer.'<br />';
                //         }
                //         $descriptionString .= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam facilis ab quia voluptas quidem esse<br /><br />​​​​​​​<br /></p><p><strong>Name :</strong>&nbsp; '.$valAnswerDetail[0]->name.' '.$valAnswerDetail[0]->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail[0]->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail[0]->payment->external_id).';<br />provider : '.isset($valAnswerDetail[0]->payment->provider).'<br />amount : '.isset($valAnswerDetail[0]->payment->amount).'<br />currency : '.isset($valAnswerDetail[0]->payment->currency).'<br />terms: '.isset($valAnswerDetail[0]->payment->terms).'<br /><br />--------------------------------------------------------------------------------------------------------------------------------------<br /><br />&nbsp;</p>';
                //     }
        
                //     if(!$exits){
                        
                //         $jobs = JobModels::create([
                //             'title' => $valCalendly->name,
                //             'id_unique' => $jobsIdUnique->count()+1,
                //             'description' => $descriptionString,
                //             'url_calendly' => $valCalendly->scheduling_url,
                //             'uri_api' => $valCalendly->uri,
                //             'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //             'set_job_status_id' => $idJobStatus->id
                //         ]);
                //     }
        
                //     // Filter subcategory form multi_select type
                //     foreach($valCalendly->custom_questions as $subcategory){
                //         if($subcategory->type == 'multi_select'){
        
                //             // Update Subcategory 
                //             if(count($subcategory->answer_choices) > 0){
                //                 $jobsUpdate = JobModels::updateOrCreate(['uri_api' => $valCalendly->uri],[
                //                     'title' => $valCalendly->name,
                //                     'description' => $descriptionString,
                //                     'url_calendly' => $valCalendly->scheduling_url,
                //                     'uri_api' => $valCalendly->uri,
                //                     'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     // 'set_job_status_id' => $idJobStatus->id
                //                 ]);
        
                //                 JobModelsMatchTalent::where(['job_models_id' => $jobsUpdate->id])->delete();
                //                 foreach($subcategory->answer_choices as $keySub => $category){
                //                     JobModelsMatchTalent::create([
                //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
                //                         'job_models_id' => $jobsUpdate->id, 
                //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     ]);
                //                 }
                //             }
                           
                //             // Create subcategory if subcategory exist
                //             if(!$exits){
                //                 foreach($subcategory->answer_choices as $keySub => $category){
                //                     JobModelsMatchTalent::updateOrCreate([
                //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
                //                         'job_models_id' => $jobs->id, 
                //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     ]);
                //                 }
                //             }
                //         }
        
                //     }
                // }

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
                'aplication_fee_check' => $request->aplication_fee_checkbox,
                'placement_fee' => $request->placement_fee,
                'placement_fee_check' => $request->placement_fee_checkbox,
                'hourly_rate' => $request->hourly_rate,
                'hourly_rate_check' => $request->hourly_rate_checkbox,
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

            

            foreach($request->name_status_job as $key => $status){
            
                SettingJobModelsStatus::updateOrCreate(['id' => $request->id[$key] ],[
                    'status_name' => $request->name_status_job[$key],
                    'status_key' => str_replace(' ', '_', strtolower($request->name_status_job[$key])),
                    'status' => request()->post($key),
                    // 'text_color' => $request->text_color[$key],
                    // 'bg_color' => $request->bg_color[$key],
                    // 'users_id' => auth()->user()->id
                ]);
            }
            
            SettingStatusTalent::where('users_id', auth()->user()->id)->delete();

            foreach($request->status_talent as $key => $value){
                SettingStatusTalent::create([
                    'status_name' => str_replace('_', ' ', ucfirst($request->status_talent[$key])),
                    'status_key' =>  $request->status_talent[$key],
                    'users_id' => auth()->user()->id
                ]);
    
            }

            if(isset($request->calendly)){
                $res = json_decode($this->get('https://api.calendly.com', 'users/me' , $request)->getBody());
    
                $load = SettingCalendlyApi::updateOrCreate(['users_id' => auth()->user()->id],[
                    'token' => $request->calendly,
                    'current_organization' => $res->resource->current_organization,
                    'scheduling_url' => $res->resource->scheduling_url,
                    'uri' => $res->resource->uri,
                    'users_id' => auth()->user()->id
                ]); 
                
                // // Add detail Job from calendly
                // // $load =  SettingCalendlyApi::where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id)->first(['token','current_organization']);
                // $responses = $this->getWithParams($request->calendly, 'https://api.calendly.com/event_types',[
                //     'organization' => $load->current_organization,
                //     'status' => 'active',

                // ]);
                // $response = json_decode($responses);
          
                // foreach($response->collection as $valCalendly){
                //     $idJobStatus = SettingJobModelsStatus::where([
                //         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //         'status_key' => 'potential_client',
                //         ])->first('id');
                //     $exits = JobModels::where('uri_api', $valCalendly->uri)->first('id');
                //     $jobsIdUnique = JobModels::get('id');

                //     $responseSchedulings = $this->getWithParams($request->calendly, 'https://api.calendly.com/scheduled_events',[
                //         'organization' => $load->current_organization,
                //         'status' => 'active',
        
                //     ]);
        
                //     $arrayAnswerDetail = [];
                //     $responseScheduling = json_decode($responseSchedulings);
                //     foreach($responseScheduling->collection as $value_scheduling){
                //         if($value_scheduling->event_type == $valCalendly->uri){
                //             $getQuestionPerEvents = $this->getWithParams($request->calendly, $value_scheduling->uri.'/invitees');
                //             $getQuestionPerEvent = json_decode($getQuestionPerEvents);
                //             array_push($arrayAnswerDetail, $getQuestionPerEvent->collection);
                //         }
                //     }
        
                    
                //     $descriptionString = '';
                //     foreach($arrayAnswerDetail as $valAnswerDetail){
                //         $question = '';
                //         foreach ($valAnswerDetail[0]->questions_and_answers as $val_question) {
                //             $question .= ''.$val_question->question.' : '.$val_question->answer.'<br />';
                //         }
                //         $descriptionString .= '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam facilis ab quia voluptas quidem esse<br /><br />​​​​​​​<br /></p><p><strong>Name :</strong>&nbsp; '.$valAnswerDetail[0]->name.' '.$valAnswerDetail[0]->first_name.'<br /><strong>email </strong>:&nbsp;'.$valAnswerDetail[0]->email.'<br /><br /><strong>Question and Answer :</strong><br />'.$question.'<br /><strong>Payment&nbsp;:</strong><br />external_id :&nbsp'.isset($valAnswerDetail[0]->payment->external_id).';<br />provider : '.isset($valAnswerDetail[0]->payment->provider).'<br />amount : '.isset($valAnswerDetail[0]->payment->amount).'<br />currency : '.isset($valAnswerDetail[0]->payment->currency).'<br />terms: '.isset($valAnswerDetail[0]->payment->terms).'<br /><br />--------------------------------------------------------------------------------------------------------------------------------------<br /><br />&nbsp;</p>';
                //     }

                //     if(!$exits){
                //         $jobs = JobModels::create([
                //             'title' => $valCalendly->name,
                //             'id_unique' => $jobsIdUnique->count()+1,
                //             'description' => $descriptionString,
                //             'url_calendly' => $valCalendly->scheduling_url,
                //             'uri_api' => $valCalendly->uri,
                //             'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //             'set_job_status_id' => $idJobStatus->id
                //         ]);
                //     }
        
                //     // Filter subcategory form multi_select type
                //     foreach($valCalendly->custom_questions as $subcategory){
                //         if($subcategory->type == 'multi_select'){

                //             // Update Subcategory 
                //             if(count($subcategory->answer_choices) > 0){
                //                 $jobsUpdate = JobModels::updateOrCreate(['uri_api' => $valCalendly->uri],[
                //                     'title' => $valCalendly->name,
                //                     'description' => $descriptionString,
                //                     'url_calendly' => $valCalendly->scheduling_url,
                //                     'uri_api' => $valCalendly->uri,
                //                     'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     // 'set_job_status_id' => $idJobStatus->id
                //                 ]);
        
                //                 JobModelsMatchTalent::where(['job_models_id' => $jobsUpdate->id])->delete();
                //                 foreach($subcategory->answer_choices as $keySub => $category){
                //                     JobModelsMatchTalent::create([
                //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
                //                         'job_models_id' => $jobsUpdate->id, 
                //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     ]);
                //                 }
                //             }
                           
                //             // Create subcategory if subcategory exist
                //             if(!$exits){
                //                 foreach($subcategory->answer_choices as $keySub => $category){
                //                     JobModelsMatchTalent::updateOrCreate([
                //                         'jobs_sub_category' => str_replace(' ', '_', strtolower($subcategory->answer_choices[$keySub])), 
                //                         'job_models_id' => $jobs->id, 
                //                         'users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id,
                //                     ]);
                //                 }
                //             }
                //         }
        
                //     }
                // }

            }

            DB::commit(); 
           
        }catch(\Exception $e){
            
            DB::rollback();
           
        }
     

    }



}