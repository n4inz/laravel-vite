@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] space-x-2 mt-[85px] px-5 xl:w-[75%]">
        <div>            
            <div id="myTabContent" class="text-teal-500">
                <div class=" flex space-x-2 mt-11">
                    {{-- right --}}
                    <div class="w-[704px] xl:w-[80%]">
                        <form method="post" action="{{ route('setting.store') }}" class="validate_setting">
                            @csrf
                            <div class="bg-bgbody rounded ">
                                <div class="px-4 pt-[18.5px]">
                                    <div class="flex items-center space-x-2 ">
                                        <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                        <span class="text-[#222222] user-create-client-title">General</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="px-6 mt-8 flex space-x-4">
                                    <div class="errors_agency_name">
                                        <label class="{{ $errors->has('agency_name') ? 'text-red-500' : '' }} block overview-status-field text-[#222222] mb-2">Agency Name</label>
                                        <div class="{{ $errors->has('agency_name') ? 'border-red-500' : '' }} flex items-center justify-center w-[650px] h-10 border  rounded text-[#222222]">
                                            <input name="agency_name" value="{{ old('agency_name' , $setting->SettingGeneral->agency_name ?? null) }}" type="text" class="{{ $errors->has('agency_name') ? 'placeholder-red-700' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " autocomplete="off">
                                        </div>
                                        @if($errors->has('agency_name'))
                                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('agency_name') }}</p>
                                        @endif
                                    </div>
                                    <div class="errors_url_ending_legal hidden">
                                        <label  class="{{ $errors->has('url_ending_legal') ? 'text-red-500' : '' }} block overview-status-field text-[#222222] mb-2">URL Ending Legal</label>
                                        <div class="{{ $errors->has('url_ending_legal') ? 'border-red-500' : '' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                            <input name="url_ending_legal" value="{{ old('url_ending_legal', $setting->SettingGeneral->url_ending_legal ?? null ) }}" type="text" class="{{ $errors->has('url_ending_legal') ? 'placeholder-red-700' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " autocomplete="off">
                                        </div>
                                        @if($errors->has('url_ending_legal'))
                                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('url_ending_legal') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="errors_location px-6 mt-4">
                                    <label for="first-name" class="{{ $errors->has('location') ? 'text-red-500' : '' }} block overview-status-field text-[#222222] mb-3">Headquarter</label>
                                    <div class="{{ $errors->has('location') ? 'border-red-500' : '' }} w-[650px] p-1 h-10 border border-[#ECECEC] flex items-center rounded">
                                        <input type="text"value="{{ old('location' , $setting->SettingDetail->service_location_fee->location ?? null) }}"  name="location" class="placepicker-setting text-sm overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                        <div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                            </svg>   
                                        </div>
                                    </div>
                                    @if($errors->has('location'))
                                        <p class="mt-2 text-sm text-red-600">{{ $errors->first('location') }}</p>
                                    @endif
                                </div>
                                <div class="px-6 mt-4 errors_company_description">
                                    <label class="{{ $errors->has('company_description') ? 'text-red-500' : '' }} overview-status-field text-[#222222] mb-2">Company Description</label>
                                    <div class="{{ $errors->has('company_description') ? 'border-red-500' : '' }} w-[650px] h-36 flex items-center justify-center border border-[#ECECEC] mt-2 rounded relative">
                                        <textarea name="company_description"  rows="5" class="{{ $errors->has('company_description') ? 'placeholder-red-700' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none text-[#222222]" autocomplete="off">{{ old('company_description' , $setting->SettingGeneral->company_description ?? null) }}</textarea>
                                    </div>
                                    @if($errors->has('company_description'))
                                        <p class="mt-2 text-sm text-red-600">{{ $errors->first('company_description') }}</p>
                                    @endif
                                </div>
                                <div class="flex mt-10"></div>
                            </div>
    
                            <div class="bg-bgbody rounded mt-3">
                                <div class="px-4 pt-[18.5px]">
                                    <div class="flex items-center space-x-2 ">
                                        <div class="w-2 h-6 bg-palet rounded-sm"></div>
                                        <span class="text-[#222222] user-create-client-title">Details</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="px-6 mt-8 flex space-x-4">
                                    <div class="w-full errors_status">
                                        <label class="block overview-status-field text-[#222222] mb-3 ">Job Status  <i class="ml-2 text-[10px] text-red-500">editable*</i></label>
                                        @if ($setting->SettingJobStatus->count() == 0)
                                            <div class="flex flex-wrap rounded-lg " id="chile_care">
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52 hidden">
                                                    <input type="hidden" name="0" value="0">
                                                    <input checked name="0" @if(is_array(old('status')) && in_array('potential_client', old('status'))) checked  @endif @if(in_array('potential_client', $jobStatus)) checked @endif value="1" type="checkbox" id="potential_client" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                                    <input name="name_status_job[]" type="text" value="Potential Client" class="task-text-body text-sm text-[#222222] hover:bg-[#F7F7F7] w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52 group rounded">
                                                    <input type="hidden" name="1" value="0">
                                                    <input name="1" @if(is_array(old('status')) && in_array('internal_matched', old('status'))) checked  @endif @if(in_array('internal_matched', $jobStatus)) checked @endif value="1" type="checkbox" id="internal_matched" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                                    <input name="name_status_job[]" type="text" value="Internal Matched" style="font-size: 13.5px; line-height: 15px;" class=" text-colortext hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="2" value="0">
                                                    <input name="2" @if(is_array(old('status')) && in_array('agency_interview', old('status'))) checked  @endif @if(in_array('agency_interview', $jobStatus)) checked @endif value="1" type="checkbox" id="agency_interview"  style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Agency Interview" style="font-size: 13.5px; line-height: 15px;" class=" text-[#222222] text-sm hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="3" value="0">
                                                    <input name="3" @if(is_array(old('status')) && in_array('present_to_family', old('status'))) checked  @endif @if(in_array('present_to_family', $jobStatus)) checked @endif  value="1" type="checkbox" id="present_to_family" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Present to Family" style="font-size: 13.5px; line-height: 15px;" class=" text-[#222222] text-sm hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="4" value="0">
                                                    <input name="4" @if(is_array(old('status')) && in_array('family_interview', old('status'))) checked  @endif @if(in_array('family_interview', $jobStatus)) checked @endif value="1" type="checkbox" id="family_interview" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Family Interview" style="font-size: 13.5px; line-height: 15px;" class=" text-sm text-[#222222] hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="5" value="0">
                                                    <input name="5" @if(is_array(old('status')) && in_array('family_trialing', old('status'))) checked  @endif @if(in_array('family_trialing', $jobStatus)) checked @endif value="1" type="checkbox" id="family_trialing" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Family Trialing" style="font-size: 13.5px; line-height: 15px;" class=" text-sm text-[#222222] hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="6" value="0">
                                                    <input name="6" @if(is_array(old('status')) && in_array('rejected', old('status'))) checked  @endif @if(in_array('rejected', $jobStatus)) checked @endif value="1" type="checkbox" id="rejected" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Rejected" style="font-size: 13.5px; line-height: 15px;" class=" text-sm text-[#222222] hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="7" value="0">
                                                    <input name="7"  @if(is_array(old('status')) && in_array('withdrawn', old('status'))) checked  @endif @if(in_array('withdrawn', $jobStatus)) checked @endif value="1" type="checkbox" id="withdrawn" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Withdrawn" style="font-size: 13.5px; line-height: 15px;" class=" text-sm text-[#222222] hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                                <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                    <input type="hidden" name="8" value="0">
                                                    <input name="8"  @if(is_array(old('status')) && in_array('family_offer', old('status'))) checked  @endif @if(in_array('family_offer', $jobStatus)) checked @endif value="1" type="checkbox" id="family_offer" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    <input name="name_status_job[]" type="text" value="Family Offer" style="font-size: 13.5px; line-height: 15px;" class=" text-sm text-[#222222] hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent border-none focus:ring-0" autocomplete="off">
                                                </div>
                                            </div>
                                        @else
                                            <div class="flex flex-wrap rounded-lg" id="chile_care">
                                                @foreach ($setting->SettingJobStatus as $val )
                                                    @if ($val->status_key != 'potential_client')
                                                        <div class="flex items-center space-x-[14px] mt-[10px] w-52">
                                                            <input type="hidden" name="{{ $loop->iteration -2 }}" value="0">
                                                            <input  name="{{ $loop->iteration -2 }}" @if($val->status) checked @endif value="1" type="checkbox" id="{{ $val->id }}" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                                        
                                                            <input name="name_status_job[]" type="text" value="{{ $val->status_name }}" style="font-size: 13.5px; line-height: 15px;" class="  text-colortext hover:bg-gray-200 focus:bg-gray-200 w-full bg-transparent h-7 border-none focus:ring-0" autocomplete="off">
                                                            <input type="hidden" name="id[]" value="{{ $val->id }}">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endif
                                        @if($errors->has('status'))
                                            <p class="mt-2 text-sm text-red-600 ">{{ $errors->first('status') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="px-6 mt-6 flex space-x-4">
                                    <div class="w-full">
                                        <label for="first-name" class="block overview-status-field text-[#222222] mb-2">Talent Status <i class="ml-2 text-[10px] text-red-500">not editable*</i></label>
                                        <div class="errors_status_talent">
                                            {{-- Chile Care --}}
                                            <div class="flex space-x-7 p-4 rounded-lg" id="chile_care" role="tabpanel" aria-labelledby="chile-care">
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('internal_matched', old('status_talent')) ) checked @endif @if(in_array('internal_matched', $talentStatus)) checked @endif value="internal_matched" id="internal_matched_talent" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                                        <label for="internal_matched_talent" class="overview-id-field text-colortext hover:cursor-pointer">Internal Matched</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('agency_interview', old('status_talent')) ) checked @endif  @if(in_array('agency_interview', $talentStatus)) checked @endif  value="agency_interview" id="agency_interview_talent" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="agency_interview_talent" class="overview-id-field text-colortext hover:cursor-pointer">Agency Interview</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('present_to_family', old('status_talent')) ) checked @endif @if(in_array('present_to_family', $talentStatus)) checked @endif value="present_to_family" id="present_to_family_talent" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="present_to_family_talent" class="overview-id-field text-colortext hover:cursor-pointer">Present to Family</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('family_interview', old('status_talent')) ) checked @endif @if(in_array('family_interview', $talentStatus)) checked @endif value="family_interview" id="family_interview_talent" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="family_interview_talent" class="overview-id-field text-colortext hover:cursor-pointer">Family Interview</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('family_trialing', old('status_talent')) ) checked @endif @if(in_array('family_trialing', $talentStatus)) checked @endif value="family_trialing" id="family_trialing_talent" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="family_trialing_talent" class="overview-id-field text-colortext hover:cursor-pointer">Family Trialing</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('rejected', old('status_talent')) ) checked @endif @if(in_array('rejected', $talentStatus)) checked @endif value="rejected" id="rejected_talent" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="rejected_talent" class="overview-id-field text-colortext hover:cursor-pointer">Rejected</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('withdrawn', old('status_talent')) ) checked @endif @if(in_array('withdrawn', $talentStatus)) checked @endif value="withdrawn" id="withdrawn_talent" style="color: #3BD7CF" type="checkbox" class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="withdrawn_talent" class="overview-id-field text-colortext hover:cursor-pointer">Withdrawn</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input name="status_talent[]" @if(is_array(old('status_talent')) && in_array('family_offer', old('status_talent')) ) checked @endif @if(in_array('family_offer', $talentStatus)) checked @endif value="family_offer" id="family_offer_talent" style="color: #3BD7CF" type="checkbox"  class="talent-status w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="family_offer_talent" class="overview-id-field text-colortext hover:cursor-pointer">Family Offer</label>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- End chile care --}}
                                            @if($errors->has('status_talent'))
                                                <p class="mt-2 text-sm text-red-600">{{ $errors->first('status_talent') }}</p>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="px-6 mt-8 flex space-x-4">
                                    <div>
                                        <label class="block overview-status-field text-[#222222] mb-3">Service Type</label>
                                        <div class="w-[316px] p-1 h-10 border border-[#ECECEC] flex items-center rounded">
                                            <select name="service_type" id="category" class="text-sm overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option @if(old('service_type') == 'Placement') selected @endif value="Placement">Placement</option>
                                                <option @if(old('service_type') == 'Test 1') selected @endif value="Test 1">Test 1</option>
                                                <option @if(old('service_type') == 'Test 2') selected @endif value="Test 2">Test 2</option>
                                                <option @if(old('service_type') == 'Test 3') selected @endif value="Test 3">Test 3</option>
                                            </select>
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                    <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                </svg>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 mt-6 flex space-x-4">
                                    <div class="w-full errors_subcategory">
                                        <label for="first-name" class="block overview-status-field text-[#222222] mb-2">Services Category</label>
                                         <div class="flex  items-center justify-between flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                            <div class="flex items-center space-x-[14px] hover:cursor-pointer mt-[10px] mr-6 p-4 rounded-t-lg border-b-2" id="profile-tab" data-tabs-target="#profile"  role="tab" aria-controls="profile" aria-selected="false">
                                                {{-- <input disabled {{ old('chile_care_category') ? 'checked' : ''  }} @if(in_array('chile_care', $category)) checked @endif value="chile_care" style="color: #3BD7CF" type="checkbox" class="child-care w-5 h-5 hidden rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                <label class="overview-id-field text-colortext ">Child care</label>
                                            </div>
                                            
                                            <div class="flex items-center space-x-[14px] hover:cursor-pointer mt-[10px] mr-6 p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 " id="dashboard-tab" data-tabs-target="#dashboard"  role="tab" aria-controls="dashboard" aria-selected="false">
                                                {{-- <input disabled {{ old('senior_care_category') ? 'checked' : ''  }} @if(in_array('senior_care', $category)) checked @endif value="senior_care" id="senior-care" style="color: #3BD7CF" type="checkbox" class="senior-care w-5 h-5 hidden rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                <label  class="overview-id-field text-colortext">Senior care</label>
                                            </div>
                                            
                                            <div class="flex items-center space-x-[14px] hover:cursor-pointer mt-[10px] mr-6 p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 " id="settings-tab" data-tabs-target="#settings"  role="tab" aria-controls="settings" aria-selected="false">
                                                {{-- <input disabled {{ old('home_care_category') ? 'checked' : ''  }} @if(in_array('home_care', $category)) checked @endif value="home_care" style="color: #3BD7CF" type="checkbox" class="home-care w-5 h-5 hidden rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                <label  class="overview-id-field text-colortext">Home care</label>
                                            </div>
                                            
                                            <div class="flex items-center space-x-[14px] hover:cursor-pointer mt-[10px] mr-6 p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 " id="contacts-tab" data-tabs-target="#contacts"  role="tab" aria-controls="contacts" aria-selected="false">
                                                {{-- <input disabled {{ old('other_category') ? 'checked' : ''  }} @if(in_array('other', $category)) checked @endif style="color: #3BD7CF" type="checkbox" value="other" class="other w-5 h-5 hidden rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                <label  class="overview-id-field text-colortext">Other services</label>
                                            </div>
                                            <input name="chile_care_category" {{ old('chile_care_category') ? 'checked' : ''  }} @if(in_array('chile_care', $category)) checked @endif value="chile_care" style="color: #3BD7CF" type="checkbox" class="child-care hidden subcategory">
                                            <input  name="senior_care_category" {{ old('senior_care_category') ? 'checked' : ''  }} @if(in_array('senior_care', $category)) checked @endif value="senior_care" id="senior-care" style="color: #3BD7CF" type="checkbox" class="hidden subcategory senior-care " >
                                            <input name="home_care_category" {{ old('home_care_category') ? 'checked' : ''  }} @if(in_array('home_care', $category)) checked @endif value="home_care" style="color: #3BD7CF" type="checkbox" class="hidden subcategory home-care" >
                                            <input name="other_category" {{ old('other_category') ? 'checked' : ''  }} @if(in_array('other', $category)) checked @endif style="color: #3BD7CF" type="checkbox" value="other" class="other hidden subcategory " >
                                        </div>
                                        <div id="myTabContent">
                                 
                                            <div class="flex space-x-10 p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif @if(in_array('nanny/_sitter', $subCategory)) checked @endif value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                                        <label for="nany-sitter" class="overview-id-field text-colortext hover:cursor-pointer">Nany/ Sitter</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('au_pair', old('chile_care')) ) checked @endif  @if(in_array('au_pair', $subCategory)) checked @endif  value="au_pair" id="au-pair" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="au-pair" class="overview-id-field text-colortext hover:cursor-pointer">Au Pair</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('maternity_care', old('chile_care')) ) checked @endif @if(in_array('maternity_care', $subCategory)) checked @endif value="maternity_care" id="maternity-care" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="maternity-care" class="overview-id-field text-colortext hover:cursor-pointer">Maternity Care</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('at_home_daycare', old('chile_care')) ) checked @endif @if(in_array('at_home_daycare', $subCategory)) checked @endif value="at_home_daycare" id="at-home-daycare" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="at-home-daycare" class="overview-id-field text-colortext hover:cursor-pointer">At Home Daycare</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('at_home_daycare', old('chile_care')) ) checked @endif @if(in_array('infant', $subCategory)) checked @endif value="infant" id="infant" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="infant" class="overview-id-field text-colortext hover:cursor-pointer">Infant</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('young_baby', old('chile_care')) ) checked @endif @if(in_array('young_baby', $subCategory)) checked @endif value="young_baby" id="young_baby" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="young_baby" class="overview-id-field text-colortext hover:cursor-pointer">Young Baby</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('toddler', old('chile_care')) ) checked @endif @if(in_array('toddler', $subCategory)) checked @endif value="toddler" id="toddler" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="toddler" class="overview-id-field text-colortext hover:cursor-pointer">Toddler</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('press_schooler', old('chile_care')) ) checked @endif @if(in_array('press_schooler', $subCategory)) checked @endif value="press_schooler" id="press_schooler" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="press_schooler" class="overview-id-field text-colortext hover:cursor-pointer">Press Schooler</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('grade_schooler', old('chile_care')) ) checked @endif @if(in_array('grade_schooler', $subCategory)) checked @endif value="grade_schooler" id="grade_schooler" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="grade_schooler" class="overview-id-field text-colortext hover:cursor-pointer">Grade Schooler</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('assist_bathing', old('chile_care')) ) checked @endif @if(in_array('assist_bathing', $subCategory)) checked @endif value="assist_bathing" id="assist_bathing" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="assist_bathing" class="overview-id-field text-colortext hover:cursor-pointer">Assist Bathing</label>
                                                    </div>
                                                </div>
                                            </div>
                                     
                                           
                                            <div class="flex space-x-10  p-4  rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('companion', old('senior_care')) ) checked @endif @if(in_array('companion', $subCategory)) checked @endif value="companion" id="companion" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="companion" class="overview-id-field text-colortext hover:cursor-pointer">Companion</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('personal_full_care', old('senior_care')) ) checked @endif @if(in_array('personal_full_care', $subCategory)) checked @endif value="personal_full_care" id="personal_full_care" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="personal_full_care" class="overview-id-field text-colortext hover:cursor-pointer">Personal Full Care</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('laundry', old('senior_care')) ) checked @endif @if(in_array('laundry', $subCategory)) checked @endif value="laundry" id="laundry" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="laundry" class="overview-id-field text-colortext hover:cursor-pointer">Laundry</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('prep_meal', old('senior_care')) ) checked @endif @if(in_array('prep_meal', $subCategory)) checked @endif  value="prep_meal" id="prep_meal" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="prep_meal" class="overview-id-field text-colortext hover:cursor-pointer">Prep Meal</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('cook_meal', old('senior_care')) ) checked @endif @if(in_array('cook_meal', $subCategory)) checked @endif value="cook_meal" id="cook_meal" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="cook_meal" class="overview-id-field text-colortext hover:cursor-pointer">Cook Meal</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('run_errands', old('senior_care')) ) checked @endif @if(in_array('run_errands', $subCategory)) checked @endif value="run_errands" id="run_errands" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="run_errands" class="overview-id-field text-colortext hover:cursor-pointer">Run Errands</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('special_needs', old('senior_care')) ) checked @endif @if(in_array('special_needs', $subCategory)) checked @endif value="special_needs" id="special_needs" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="special_needs" class="overview-id-field text-colortext hover:cursor-pointer">Special Needs</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('simple_housework', old('senior_care')) ) checked @endif @if(in_array('simple_housework', $subCategory)) checked @endif value="simple_housework" id="simple_housework" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="simple_housework" class="overview-id-field text-colortext hover:cursor-pointer">Simple Housework</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('assist_feeding', old('senior_care')) ) checked @endif @if(in_array('assist_feeding', $subCategory)) checked @endif value="assist_feeding" id="assist_feeding" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="assist_feeding" class="overview-id-field text-colortext hover:cursor-pointer">Assist Feeding</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('hour_help', old('senior_care')) ) checked @endif @if(in_array('hour_help', $subCategory)) checked @endif value="hour_help" id="hour_help" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="hour_help" class="overview-id-field text-colortext hover:cursor-pointer">Hour Help</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="seniorCare()" data-type="senior_care" name="senior_care[]" @if(is_array(old('senior_care')) && in_array('remind_medicine', old('senior_care')) ) checked @endif @if(in_array('remind_medicine', $subCategory)) checked @endif value="remind_medicine" id="remind_medicine" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="remind_medicine" class="overview-id-field text-colortext hover:cursor-pointer">Remind Medicine</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="flex space-x-10 p-4  rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="homeCare()" data-type="home_care" name="home_care[]"  @if(is_array(old('home_care')) && in_array('companion_elders', old('home_care')) ) checked @endif @if(in_array('companion_elders', $subCategory)) checked @endif value="companion_elders" id="companion_elders" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="companion_elders" class="overview-id-field text-colortext hover:cursor-pointer">Companion Elders</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="homeCare()" data-type="home_care" name="home_care[]" @if(is_array(old('home_care')) && in_array('private_home_kitchen', old('home_care')) ) checked @endif @if(in_array('private_home_kitchen', $subCategory)) checked @endif value="private_home_kitchen" id="private_home_kitchen" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="private_home_kitchen" class="overview-id-field text-colortext hover:cursor-pointer">Private Home Kitchen</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="homeCare()" data-type="home_care" name="home_care[]" @if(is_array(old('home_care')) && in_array('meal_prepation_coking', old('home_care')) ) checked @endif @if(in_array('meal_prepation_coking', $subCategory)) checked @endif value="meal_prepation_coking" id="meal_prepation_coking" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="meal_prepation_coking" class="overview-id-field text-colortext hover:cursor-pointer">Meal Prepation Coking</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="homeCare()" data-type="home_care" name="home_care[]" @if(is_array(old('home_care')) && in_array('house_cleaning', old('home_care')) ) checked @endif @if(in_array('house_cleaning', $subCategory)) checked @endif value="house_cleaning" id="house_cleaning" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="house_cleaning" class="overview-id-field text-colortext hover:cursor-pointer">House Cleaning</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="homeCare()" data-type="home_care" name="home_care[]" @if(is_array(old('home_care')) && in_array('provide_transportation', old('home_care')) ) checked @endif @if(in_array('provide_transportation', $subCategory)) checked @endif value="provide_transportation" id="provide_transportation" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="provide_transportation" class="overview-id-field text-colortext hover:cursor-pointer">Provide Transportation</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="flex space-x-16 p-4 rounded-lg" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                        <input onclick="otherCare()" data-type="other" name="other[]" @if(is_array(old('other')) && in_array('tutor', old('other')) ) checked @endif @if(in_array('tutor', $subCategory)) checked @endif value="tutor" id="tutor" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="tutor" class="overview-id-field text-colortext hover:cursor-pointer">Tutor</label>
                                                    </div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="otherCare()" data-type="other" name="other[]" @if(is_array(old('other')) && in_array('pick_up_frop_off', old('other')) ) checked @endif @if(in_array('pick_up_frop_off', $subCategory)) checked @endif value="pick_up_frop_off" id="pick_up_frop_off" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="pick_up_frop_off" class="overview-id-field text-colortext hover:cursor-pointer">Pick Up Drop Off</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[14px] mt-[10px]">
                                                        <input onclick="otherCare()" data-type="other" name="other[]" @if(is_array(old('other')) && in_array('other_professional_services', old('other')) ) checked @endif @if(in_array('other_professional_services', $subCategory)) checked @endif value="other_professional_services" id="other_professional_services" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                        <label for="other_professional_services" class="overview-id-field text-colortext hover:cursor-pointer">Other Professional Services</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                {{-- <div class="px-6 mt-8 flex items-center space-x-[25px]">
                                    <div>
                                        <label for="" class="invisible block overview-status-field text-[#222222] mb-3">Services Location</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px] w-full">
                                            <input name="send_notifcation" {{ old('send_notifcation') ? 'checked' : ''  }} {{ $setting->SettingDetail->service_location_fee->send_notifcation ?? null ? 'checked' : '' }} value="1" id="send-notification" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="send-notification" class="overview-id-field text-colortext ">Send Notification</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="px-6 mt-8 flex items-center space-x-[25px]">
                                    <div class="w-full errors_aplication_fee">   
                                        <div class=" flex items-center space-x-[14px]">
                                            <input id="aplication_fee_checkbox" name="aplication_fee_checkbox" {{ old('aplication_fee_checkbox') ? 'checked' : ''  }} {{ $setting->SettingDetail->service_location_fee->aplication_fee_check  ?? null ? 'checked' : '' }} value="1" style="color: #3BD7CF" type="checkbox" value="" class="aplication_fee_validate w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="aplication_fee_checkbox" class="{{ $errors->has('aplication_fee_checkbox') ? 'text-red-500' : '' }} hover:cursor-pointer overview-status-field text-colortext ">Application Fee ($)</label>
                                        </div>
                                        <div class="w-full pl-8 mt-2">
                                            <div class="{{ $errors->has('aplication_fee') ? 'border-red-500' : '' }}  {{ isset($setting->SettingDetail->service_location_fee->aplication_fee_check)  ? 'bg-gray-200' : '' }} {{ old('aplication_fee_checkbox') ? 'bg-gray-200' : '' }} aplication_fee  flex items-center  w-40 h-10 border border-[#ECECEC] rounded-md">
                                                <input @if(old('aplication_fee_checkbox')) disabled @endif  @if(isset($setting->SettingDetail->service_location_fee->aplication_fee_check)) disabled @endif name="aplication_fee" value="{{ old('aplication_fee', $setting->SettingDetail->service_location_fee->aplication_fee ?? null) }}" type="number"  class="{{ $errors->has('aplication_fee') ? 'placeholder-red-700' : '' }} {{ $setting->SettingDetail->service_location_fee->aplication_fee_check ?? null  ? 'bg-gray-200' : '' }}  {{ old('aplication_fee_checkbox') ? 'bg-gray-200 placeholder-gray-200 text-gray-200' : '' }} aplication_fee_validate  aplication_fee_input overview-modal-add-talent-text text-colortext  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="0" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full errors_placement_fee">
                                        <div class=" flex items-center space-x-[14px]">
                                            <input id="placement_fee_checkbox" name="placement_fee_checkbox" {{ old('placement_fee_checkbox') ? 'checked' : ''  }}  {{ $setting->SettingDetail->service_location_fee->placement_fee_check  ?? null ? 'checked' : '' }} value="1" style="color: #3BD7CF" type="checkbox" value="1" class="placement_fee_validate placement_fee w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="placement_fee_checkbox" class="{{ $errors->has('placement_fee_checkbox') ? 'text-red-500' : '' }} overview-status-field text-colortext hover:cursor-pointer">Placement Fee ($)</label>
                                        </div>
                                        <div class="w-full pl-8 mt-2">
                                            <div class="placement_fee {{ old('placement_fee_checkbox') ? 'bg-gray-200' : '' }} {{ $errors->has('placement_fee') ? 'border-red-500' : '' }} {{ isset($setting->SettingDetail->service_location_fee->placement_fee_check)  ? 'bg-gray-200' : '' }} flex items-center w-40 h-10 border border-[#ECECEC] rounded-md">
                                                <input @if(old('placement_fee_checkbox')) disabled @endif @if(isset($setting->SettingDetail->service_location_fee->placement_fee_check)) disabled @endif name="placement_fee" value="{{ old('placement_fee' , isset($setting->SettingDetail->service_location_fee->placement_fee)) }}" type="number"  class="{{ $errors->has('placement_fee') ? 'placeholder-red-700' : '' }} {{ isset($setting->SettingDetail->service_location_fee->placement_fee_check)  ? 'bg-gray-200' : '' }} {{ old('placement_fee_checkbox') ? 'bg-gray-200 placeholder-gray-200 text-gray-200' : '' }} placement_fee_validate placement_fee_input overview-modal-add-talent-text text-colortext  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="0" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full errors_hourly_rate">
                                        <div class=" flex items-center space-x-[14px]">
                                            <input id="hourly_rate_checkbox" name="hourly_rate_checkbox" {{ old('hourly_rate_checkbox') ? 'checked' : ''  }} {{ $setting->SettingDetail->service_location_fee->hourly_rate_check  ?? null ? 'checked' : '' }} value="1" style="color: #3BD7CF" type="checkbox" value="1" class="hourly_rate_validate hourly_rate w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="hourly_rate_checkbox" class="{{ $errors->has('hourly_rate_checkbox') ? 'text-red-500' : '' }} hover:cursor-pointer overview-status-field text-colortext ">Hourly Rate ($)</label>
                                        </div>
                                        <div class="w-full pl-8 mt-2">
                                            <div class="hourly_rate {{ old('hourly_rate_checkbox') ? 'bg-gray-200' : '' }} {{ $errors->has('hourly_rate') ? 'border-red-500' : '' }} {{ isset($setting->SettingDetail->service_location_fee->hourly_rate_check)  ? 'bg-gray-200' : '' }} flex items-center w-40 h-10 border border-[#ECECEC] rounded-md">
                                                <input @if(old('hourly_rate_checkbox')) disabled @endif @if(isset($setting->SettingDetail->service_location_fee->hourly_rate_check)) disabled @endif name="hourly_rate" value="{{ old('hourly_rate' , isset($setting->SettingDetail->service_location_fee->hourly_rate)) }}" type="number"  class="{{ $errors->has('hourly_rate') ? 'placeholder-red-700' : '' }} {{ isset($setting->SettingDetail->service_location_fee->hourly_rate_check)  ? 'bg-gray-200' : '' }} {{ old('hourly_rate_checkbox') ? 'bg-gray-200 placeholder-gray-200 text-gray-200' : '' }} hourly_rate_validate hourly_rate_input overview-modal-add-talent-text text-colortext  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="0" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8 flex"></div>
                            </div>
    
                            <div class="bg-bgbody rounded mt-3">
                                <div class="px-4 pt-[18.5px]">
                                    <div class="flex items-center space-x-2 ">
                                        <div class="w-2 h-6 bg-[#FEC001] rounded-sm"></div>
                                        <span class="text-[#222222] user-create-client-title">User</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                {{-- <div class="px-6 mt-8 flex items-center space-x-4 ">
                                    <div>
                                        <label for="" class="overview-status-field text-colortext">Client</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input name="client" {{ old('client') ? 'checked' : ''  }} {{ $setting->SettingUsers->client ?? null ? 'checked' : '' }} value="1" id="" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="" class="overview-id-field text-colortext">Can sign up and create a job</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="" class="overview-status-field text-colortext">Caregives</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input name="caregives" {{ old('caregives') ? 'checked' : ''  }} {{ $setting->SettingUsers->caregives ?? null ? 'checked' : '' }}  value="1" id="" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="" class="overview-id-field text-colortext">Can sign up and create a job</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="px-6 mt-8 flex items-center space-x-4 ">
                                    <div>
                                        <label for="" class="overview-status-field text-colortext">Are you interested in being as a part of public pool?</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input name="interested_public_pool" {{ old('interested_public_pool') ? 'checked' : ''  }} {{ $setting->SettingUsers->interested_public_pool ?? null ? 'checked' : '' }} value="1" id="" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="" class="overview-id-field text-colortext">We want to share our work with other agencies and caregives</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mt-8"></div>
                            </div>
    
                            <div class="bg-bgbody rounded mt-3">
                                <div class="px-4 pt-[18.5px]">
                                    <div class="flex items-center space-x-2 ">
                                        <div class="w-2 h-6 bg-[#01A3FE] rounded-sm"></div>
                                        <span class="text-[#222222] user-create-client-title">Additional Settings</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="px-8 mt-8 ">
                                    <label for="" class="overview-status-field text-colortext">Calendly API</label>
                                    <div class=" w-full errors_calendly">
                                        <div class="{{ $errors->has('calendly') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} mt-2 w-full h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                            <input name="calendly" value="{{ old('calendly' , $setting->SettingCalendly->token ?? '') }}" type="password" id="calendly" class="{{ $errors->has('calendly') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none text-[#222222] opacity-50" >
                                            <span toggle="#calendly" class="fa fa-eye-slash toggle-calendly mr-2"></span>
                                        </div>
                                        @if($errors->has('calendly'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('calendly') }}</p>
                                        @endif
                                    </div>
                                </div>


                                <div class="px-8 mt-8 ">
                                    <label for="" class="overview-status-field text-colortext">Notification</label>
                                    <div class="flex items-center justify-between py-5">
                                        <span class=" overview-id-field text-colortext">Allow email notifications</span>
                                        <label for="toggle-email-notif" class="relative inline-flex items-center cursor-pointer">
                                            <input name="notification_email" {{ $setting->SettingAdditionals->notification_email ?? null ? 'checked' : '' }}  value="1" type="checkbox" id="toggle-email-notif" class="sr-only peer">
                                            <div class="w-[51px] h-8 bg-gray-200 rounded-full peer peer-focus:ring-4  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:-left-[3px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-7 after:w-7 after:transition-all  peer-checked:bg-palet focus:ring-0 outline-none"></div>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-between py-5">
                                        <span class=" overview-id-field text-colortext">Send Notification</span>
                                        <label for="send-notification" class="relative inline-flex items-center cursor-pointer">
                                            <input name="send_notifcation" {{ old('send_notifcation') ? 'checked' : ''  }}  {{ $setting->SettingDetail->service_location_fee->send_notifcation ?? null ? 'checked' : '' }}  value="1" type="checkbox" id="send-notification" class="sr-only peer">
                                            <div class="w-[51px] h-8 bg-gray-200 rounded-full peer peer-focus:ring-4  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:-left-[3px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-7 after:w-7 after:transition-all  peer-checked:bg-palet focus:ring-0 outline-none"></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="px-8 mt-4 ">
                                    <label for="" class="overview-status-field text-colortext">Dashboard</label>
                                    <div class="flex items-center border-b py-[28.5px] space-x-[108px]">
                                        <span class=" overview-id-field text-colortext">Choose a color theme</span>
                                        <div class="flex space-x-3">
                                            <label for="EB5757" class="EB5757 w-10 h-10 rounded-full hover:cursor-pointer bg-[#EB5757] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="EB5757" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme" type="checkbox" value="EB5757">
                                                @else
                                                    <input id="EB5757"  class="hidden" {{  $setting->SettingAdditionals->dashboard_color_theme == 'EB5757' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="EB5757">
                                                @endif
                                                <div id="checklist-EB5757">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == 'EB5757')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>
                                            <label for="F2994A" class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#F2994A] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="F2994A" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="F2994A">
                                                @else
                                                    <input id="F2994A"  class="hidden" {{$setting->SettingAdditionals->dashboard_color_theme == 'F2994A' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="F2994A">
                                                @endif
                                                <div id="checklist-F2994A">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == 'F2994A')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>
                                            <label for="27AE60" class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#27AE60] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="27AE60" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="27AE60">
                                                @else
                                                    <input id="27AE60"  class="hidden" {{$setting->SettingAdditionals->dashboard_color_theme == '27AE60' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="27AE60">
                                                @endif
                                                <div id="checklist-27AE60">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == '27AE60')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>
                                            <label for="6AEAE3" class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#6AEAE3] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="6AEAE3" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="6AEAE3">
                                                @else
                                                    <input id="6AEAE3"  class="hidden" {{$setting->SettingAdditionals->dashboard_color_theme == '6AEAE3' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="6AEAE3">
                                                @endif
                                                <div id="checklist-6AEAE3">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == '6AEAE3')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>
                                            <label for="56CCF2" class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#56CCF2] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="56CCF2" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="56CCF2">
                                                @else
                                                    <input id="56CCF2"  class="hidden" {{$setting->SettingAdditionals->dashboard_color_theme == '56CCF2' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="56CCF2">
                                                @endif
                                                <div id="checklist-56CCF2">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == '56CCF2')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>
                                            <label for="BB6BD9" class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#BB6BD9] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="BB6BD9" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="BB6BD9">
                                                @else
                                                    <input id="BB6BD9"  class="hidden" {{$setting->SettingAdditionals->dashboard_color_theme == 'BB6BD9' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="BB6BD9">
                                                @endif
                                                <div id="checklist-BB6BD9">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == 'BB6BD9')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>
                                            <label for="F2C94C" class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#F2C94C] relative">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input id="F2C94C" class="hidden" onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="F2C94C">
                                                @else
                                                    <input id="F2C94C"  class="hidden" {{$setting->SettingAdditionals->dashboard_color_theme == 'F2C94C' ?? null ? 'checked' : '' }} onclick="onlyOneSetting(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="F2C94C">
                                                @endif
                                                <div id="checklist-F2C94C">
                                                    @if (!empty($setting->SettingAdditionals->dashboard_color_theme))
                                                        @if($setting->SettingAdditionals->dashboard_color_theme == 'F2C94C')
                                                            <div class="absolute bottom-0 right-0 w-5 h-5 rounded-full bg-palet flex items-center justify-center">
                                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6866 0.313439C11.8818 0.508701 11.8818 0.825283 11.6866 1.02055L5.01989 7.68721C4.82463 7.88247 4.50805 7.88247 4.31279 7.68721L0.979454 4.35388C0.784192 4.15862 0.784192 3.84203 0.979454 3.64677C1.17472 3.45151 1.4913 3.45151 1.68656 3.64677L4.66634 6.62655L10.9795 0.313439C11.1747 0.118177 11.4913 0.118177 11.6866 0.313439Z" fill="white"/>
                                                                </svg>  
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="px-8 mt-4 ">
                                    <label for="" class="overview-status-field text-colortext mb-[26px]">Pre-defined check list</label>
                                    @foreach ($defined_list as $value )
                                        
                                        <div class="flex items-center space-x-[29.5px] mb-7">
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                                </svg>
                                            
                                            </div>
                                            <div class="w-full">
                                                <span class="task-text-body text-colortext">{{ $value->body }}</span>
                                            </div>
                                            <div class="w-full">
                                                @if ($value->day == 7)
                                                    <span class="overview-id-field text-colortext">1 Week</span>
                                                @else
                                                    <span class="overview-id-field text-colortext">{{ $value->day }} Day</span>
                                                @endif
                                            </div>
                                            <span onclick="$(this).parent().remove();" class="material-symbols-outlined  hover:cursor-pointer text-xs">delete</span>
                                            <input type="hidden" name="body[]" value="{{ $value->body }}">
                                            <input type="hidden" name="day[]" value="{{ $value->day }}">
                                        </div>
                                    @endforeach
                                    
                                   
                                    {{-- Add more --}}
                                    <div class="add">
                                        <div class="flex items-center space-x-[29.5px] mb-7">
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                                </svg>
                                            </div>
                                            <div class="w-full">
                                                <input name="body[]" value="" type="text" id="first-name" class="bg-transparent border-none task-text-body text-colortext focus:ring-0 w-full p-1 outline-none" placeholder="Enter a title for this task">
                                            </div>
                                            <div class="w-full">
                                                <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                                    <select id="part-time" name="day[]" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                        <option @if(old('7') == '7') selected @endif value="7">1 Week</option>
                                                        <option @if(old('3') == '3') selected @endif value="3">3 Day</option>
                                                        <option @if(old('2') == '2') selected @endif value="2">2 Day</option>
                                                        <option @if(old('1') == '1') selected @endif value="1">1 Day</option>
                                                    </select>
                                                    <div>
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                            <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                        </svg> 
                                                    </div>
                                                </div>
                                            </div>
                                            <span onclick="$(this).parent().remove();" class="material-symbols-outlined  hover:cursor-pointer text-xs">delete</span>
                                        </div>
                                    </div>
                                    
                                    {{-- Button --}}
                                    <div onclick="add_more()" class="w-[133px] h-10 bg-palet rounded-md flex items-center justify-center hover:cursor-pointer">
                                        <span class="task-btn-text">+ Add More </span>
                                    </div>
                                </div>
                                <div class="flex mt-8"></div>
                            </div>
                            <div class="flex justify-end w-full mt-6 space-x-2 ">
                                <button class="w-40 h-[42px] bg-colorStatusCard1 rounded-md ">
                                    <span class="overview-attechment-btn-text justify-center">Cancel</span>
                                </button>
                                <button style="background: #3BD7CF" type="submit" class="w-40 h-[42px] rounded-md ">
                                    <span class="overview-attechment-btn-text justify-center">Save</span>
                                </button>
                            </div>
                        </form>
                    </div>
          

                    {{-- left --}}
                    <div class="w-[300px] xl:w-[30%] ">
                        {{-- Attached file --}}
                        <div class="bg-bgbody rounded ">
                            <div class="flex justify-between px-4 pt-[18.5px]">
                                <div class="flex items-center space-x-2 ">
                                    <div class="w-2 h-6 bg-palet rounded-sm"></div>
                                    <span class="text-[#222222] user-create-client-title">Avatar</span>
                                </div>
                            </div>
                            <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                            <div class="px-4 mt-6 flex items-center justify-center">
                                {{-- Upload --}}
                                <form action="{{ route('setting.upload.avatar') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="avatar" class="group">
                                        <div id="bg-avatar" class="relative  w-[186px] flex justify-center h-[186px] bg-[#E8E8E8] rounded-full border-[2px] hover:cursor-pointer">
                                            @if (empty($setting->avatar->avatar))
                                                <img id="output" alt="" class="w-full rounded-full ring-0 bg-opacity-80 hover:animate-pulse">
                                            @else
                                                <img id="output" src="{{ asset('storage/avatar/'.$setting->avatar->avatar) }}" class="w-full rounded-full ring-0 bg-opacity-80 hover:animate-pulse">

                                            @endif

                                            <div class="absolute -bottom-3 w-9 h-9 bg-palet rounded-full flex items-center justify-center">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6875 3.375C1.6875 2.44302 2.44302 1.6875 3.375 1.6875H14.625C15.557 1.6875 16.3125 2.44303 16.3125 3.375V14.625C16.3125 15.557 15.557 16.3125 14.625 16.3125H3.375C2.44303 16.3125 1.6875 15.557 1.6875 14.625V3.375ZM3.375 2.8125C3.06434 2.8125 2.8125 3.06434 2.8125 3.375V14.625C2.8125 14.9357 3.06434 15.1875 3.375 15.1875H14.625C14.9357 15.1875 15.1875 14.9357 15.1875 14.625V3.375C15.1875 3.06434 14.9357 2.8125 14.625 2.8125H3.375Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3125 6.75C4.3125 5.40381 5.40381 4.3125 6.75 4.3125C8.09619 4.3125 9.1875 5.40381 9.1875 6.75C9.1875 8.09619 8.09619 9.1875 6.75 9.1875C5.40381 9.1875 4.3125 8.09619 4.3125 6.75ZM6.75 5.4375C6.02514 5.4375 5.4375 6.02514 5.4375 6.75C5.4375 7.47486 6.02514 8.0625 6.75 8.0625C7.47486 8.0625 8.0625 7.47486 8.0625 6.75C8.0625 6.02514 7.47486 5.4375 6.75 5.4375Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2487 9.3319C11.4635 9.13865 11.7897 9.13946 12.0034 9.33378L16.1284 13.0838C16.3583 13.2928 16.3752 13.6485 16.1662 13.8784C15.9573 14.1082 15.6015 14.1252 15.3717 13.9162L11.6231 10.5085L8.25133 13.5431C8.04126 13.7322 7.72354 13.736 7.50896 13.5521L5.22656 11.5957L2.58753 13.575C2.339 13.7614 1.98643 13.711 1.80003 13.4625C1.61364 13.214 1.664 12.8614 1.91253 12.675L4.91253 10.425C5.12345 10.2668 5.41593 10.2763 5.6161 10.4479L7.86598 12.3764L11.2487 9.3319Z" fill="white"/>
                                                </svg>
                                            </div>                           
                                        </div>
                                    </label>
                                    <input type="file" id="avatar" name="avatar" class="hidden" onchange="loadFile(event)">
                                </form>
                            </div>
                            <div class="flex mt-[51px]"></div>
                        </div>
                    </div>
                </div>

                <div class="flex mt-24"></div>
            </div>
        </div>
    </article>
    <script src="{{ asset('js/jQuery/jobBoard.js') }}"></script>
    <script src="{{ asset('js/jQuery/settingAgency.js') }}"></script>
    <script>
    // Validate
    $(function(){
        var validate = $('.validate_settings');
        
            if(validate.length){
                validate.validate({
                    rules: {
                        agency_name:{
                            required:true
                        },
                        url_ending_legal:{
                            required:true
                        },
                        company_description:{
                            required:true,
                        },
                        location:{
                            required:true,
                        },
                        aplication_fee:{
                            require_from_group: [1, ".aplication_fee_validate"]
                           
                        },
                        placement_fee:{
                            require_from_group: [1, ".placement_fee_validate"]
                        },
                        hourly_rate:{
                            require_from_group: [1, ".hourly_rate_validate"]
                        },
                        'chile_care[]': {   
                            require_from_group: [1, ".subcategory"]
                        },
                        'senior_care[]': {
                            require_from_group: [1, ".subcategory"]
                        },
                        'home_care[]': {
                            require_from_group: [1, ".subcategory"]
                        },
                        'other[]': {
                            required:true,
                        },
                        'status_talent[]':{
                            required:true,
                        },
                        // 'name_status_job[]':{
                        //     required:true,
                        // }
                   
                    },
                    errorPlacement: function(error, element){
                        
                        if (element.is(":checkbox"))
                        {
                            console.log(error)
                            error.appendTo(element.parents('.errors_status'));
                            error.appendTo(element.parents('.errors_subcategory'));
                            error.appendTo(element.parents('.errors_status_talent'));
                            
                        }else{ 
                            error.insertAfter( element );
                            error.appendTo(element.parents('.errors_agency_name'));
                            error.appendTo(element.parents('.errors_url_ending_legal'));
                            error.appendTo(element.parents('.errors_company_description'));
                            error.appendTo(element.parents('.errors_location'));
                            error.appendTo(element.parents('.errors_hourly_rate'));
                            error.appendTo(element.parents('.errors_placement_fee'));
                            error.appendTo(element.parents('.errors_aplication_fee'));
                           
                        }
                       
                    },

                })
                $(".sts").rules("add", {
                    require_from_group: [1, '.group_sts'],

                });
            }
        })

        $(document).ready(function() {
            $(".placepicker-setting").placepicker();
        }); 
        var loadFile = function(event) {
          var output = document.getElementById('output');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src)
          }

          const btn = `<button class="bg-palet invisible group-hover:animate-pulse group-hover:visible h-6 absolute rounded-md p-4 top-1/2 bottom-1/2 flex items-center justify-center">
                            <span class="text-sm text-gray-50">Upload</span>
                        </button>`;
                        
          $('#bg-avatar').append(btn);
        };

    

    // SUbcategory
    function chileCare(){       
        var a =  document.querySelectorAll('[data-type="chile_care"]');
        var allChecked = false;
        a.forEach((item) => {
            if(item.checked){
                allChecked = true;
                return false;
            }          
        })
        if(allChecked){
            $('.child-care').prop('checked', true)
        }else{
            $('.child-care').prop('checked', false)
        }
    }

    function seniorCare(){       
        var a =  document.querySelectorAll('[data-type="senior_care"]');
        var allChecked = false;
        a.forEach((item) => {
            if(item.checked){
                allChecked = true;
                return false;
            }          
        })
        if(allChecked){
            $('.senior-care').prop('checked', true)
        }else{
            $('.senior-care').prop('checked', false)
        }
    }
    function homeCare(){       
        var a =  document.querySelectorAll('[data-type="home_care"]');
        var allChecked = false;
        a.forEach((item) => {
            if(item.checked){
                allChecked = true;
                return false;
            }          
        })
        if(allChecked){
            $('.home-care').prop('checked', true)
        }else{
            $('.home-care').prop('checked', false)
        }
    }
    function otherCare(){       
        var a =  document.querySelectorAll('[data-type="other"]');
        var allChecked = false;
        a.forEach((item) => {
            if(item.checked){
                allChecked = true;
                return false;
            }          
        })
        if(allChecked){
            $('.other').prop('checked', true)
        }else{
            $('.other').prop('checked', false)
        }
    }

    // FEE
    $('#aplication_fee_checkbox').click(function(){
        $('.aplication_fee').toggleClass('bg-gray-200');
        $('.aplication_fee').removeClass('border-red-500');
        $('.aplication_fee_input').removeClass('placeholder-red-700');
        $('.aplication_fee_input').toggleClass('bg-gray-200');
        if (this.checked) {
            $('.aplication_fee_input').prop('disabled', true);
            $('.aplication_fee_input').toggleClass('border-gray-200 ');
            $('.aplication_fee_input').addClass('placeholder-gray-200 text-gray-200');
        } else {
            $('.aplication_fee_input').prop('disabled', false);
            $('.aplication_fee_input').addClass('placeholder-gray-200 text-colortext');
            $('.aplication_fee_input').removeClass('text-gray-200');
        }
    })

    $('#placement_fee_checkbox').click(function(){
        $('.placement_fee').toggleClass('bg-gray-200');
        $('.placement_fee').removeClass('border-red-500');
        $('.placement_fee_input').removeClass('placeholder-red-700');
        $('.placement_fee_input').toggleClass('bg-gray-200');
        if (this.checked) {
            $('.placement_fee_input').prop('disabled', true);
            $('.placement_fee_input').toggleClass('border-gray-200 ');
            $('.placement_fee_input').addClass('placeholder-gray-200 text-gray-200');
        } else {
            $('.placement_fee_input').prop('disabled', false);
            $('.placement_fee_input').addClass('placeholder-gray-200 text-colortext');
            $('.placement_fee_input').removeClass('text-gray-200');
        }
    })

    $('#hourly_rate_checkbox').click(function(){
        $('.hourly_rate').toggleClass('bg-gray-200');
        $('.hourly_rate').removeClass('border-red-500');
        $('.hourly_rate').removeClass('placeholder-red-700');
        $('.hourly_rate_input').toggleClass('bg-gray-200');
        if (this.checked) {
            $('.hourly_rate_input').prop('disabled', true);
            $('.hourly_rate_input').toggleClass('border-gray-200 ');
            $('.hourly_rate_input').addClass('placeholder-gray-200 text-gray-200');
        } else {
            $('.hourly_rate_input').prop('disabled', false);
            $('.hourly_rate_input').addClass('placeholder-gray-200 text-colortext');
            $('.hourly_rate_input').removeClass('text-gray-200');
        }
    })
    

    // Calenly show and hide
    $(".toggle-calendly").click(function() {
        $(this).toggleClass("fa-eye-slash fa-eye");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
    });

    </script>
</main>

@endsection
