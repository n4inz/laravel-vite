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
                        <form method="post" action="{{ route('setting.store') }}">
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
                                    <div>
                                        <label for="first-name" class="block overview-status-field text-[#222222] mb-2">Agency Name</label>
                                        <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                            <input name="agency_name" value="{{ old('agency_name' , $setting->SettingGeneral->agency_name ?? null) }}" type="text" id="first-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="last-name" class="block overview-status-field text-[#222222] mb-2">URL Ending Legal</label>
                                        <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                            <input name="url_ending_legal" value="{{ old('url_ending_legal', $setting->SettingGeneral->url_ending_legal ?? null ) }}" type="text" id="last-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 mt-4 ">
                                    <label class="overview-status-field text-[#222222] mb-2">Company Description</label>
                                    <div class="w-[650px] h-36 flex items-center justify-center border border-[#ECECEC] mt-2 rounded relative">
                                        <textarea name="company_description" id="message" rows="5" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none text-[#222222]" placeholder="">{{ old('company_description' , $setting->SettingGeneral->company_description ?? null) }}</textarea>
                                        {{-- <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span> --}}
                                    </div>
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
                                    <div>
                                        <label for="first-name" class="block overview-status-field text-[#222222] mb-3">Services Type</label>
                                        <div class="w-[316px] p-1 h-10 border border-[#ECECEC] flex items-center rounded">
                                            <select name="service_type" id="category" class="text-sm overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option value="Placement">Placement</option>
                                                <option value="Test 1">Test 1</option>
                                                <option value="Test 2">Test 1</option>
                                                <option value="Test 3">Test 1</option>
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
                                    <div class="w-full">
                                        <label for="first-name" class="block overview-status-field text-[#222222] mb-2">Services Category</label>
                                        <div class="">
                                            <table  width="100%">
                                                <tr class="border-b" valign="top" height="50px">
                                                    <td  width="175px">
                                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                                            <input name="chile_care" {{ $setting->SettingDetail->service_category->chile_care ?? null ? 'checked' : '' }} value="1" id="child-care" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="child-care"  class="overview-id-field text-colortext ">Child care</label>
                                                        </div>
                                                    </td>
                                                    <td  width="190px">
                                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                                            <input name="senior_care" {{ $setting->SettingDetail->service_category->senior_care ?? null ? 'checked' : '' }} value="1" id="senior-care" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="senior-care" class="overview-id-field text-colortext">Senior care</label>
                                                        </div>
                                                    </td>
                                                    <td  width="180px">
                                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                                            <input name="home_care" {{ $setting->SettingDetail->service_category->home_care ?? null ? 'checked' : '' }} value="1" id="home-care" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="home-care" class="overview-id-field text-colortext">Home care</label>
                                                        </div>  
                                                    </td>
                                                    <td >
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="other" {{ $setting->SettingDetail->service_category->other ?? NULL ? 'checked' : '' }} id="other" style="color: #3BD7CF" type="checkbox" value="other" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="other" class="overview-id-field text-colortext">Other services</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  valign="top">
                                                        <div class="flex items-center space-x-[14px] mt-[10px] w-full">
                                                            <input name="nanny_sister" {{ $setting->SettingDetail->service_category->nanny_sister ?? null ? 'checked' : '' }} value="1" id="nany-sister" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="nany-sister" class="overview-id-field text-colortext">Nany/ Sister</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="au_pair" {{ $setting->SettingDetail->service_category->au_pair ?? null ? 'checked' : '' }} value="1" id="au-pair" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="au-pair" class="overview-id-field text-colortext">Au Pair</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="maternity_care" {{ $setting->SettingDetail->service_category->maternity_care ?? null ? 'checked' : '' }} value="1" id="maternity-care" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="maternity-care" class="overview-id-field text-colortext">Maternity Care</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="at_home_daycare" {{ $setting->SettingDetail->service_category->at_home_daycare ?? null ? 'checked' : '' }}  value="1" id="at-home-daycare" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="at-home-daycare" class="overview-id-field text-colortext">At Home Daycare</label>
                                                        </div>
                                                    </td>
                                                    <td  valign="top">
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="companion" {{ $setting->SettingDetail->service_category->companion ?? null ? 'checked' : '' }} value="1" id="companion" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="companion" class="overview-id-field text-colortext">Companion</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="personal_full_care" {{ $setting->SettingDetail->service_category->personal_full_care ?? null ? 'checked' : '' }} value="1" id="personal-full-care" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="personal-full-care" class="overview-id-field text-colortext">Personal Full Care</label>
                                                        </div>
                                                    </td>
                                                    <td  valign="top">
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="meal_prepation_coking" {{ $setting->SettingDetail->service_category->meal_prepation_coking ?? null ? 'checked' : '' }} value="1" id="meal-prepation-coking" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="meal-prepation-coking" class="overview-id-field text-colortext max-w-[140px]">Meal Prepation/ Coking</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="house_cleaning" {{ $setting->SettingDetail->service_category->house_cleaning ?? null ? 'checked' : '' }} value="1" id="house-cleaning" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="house-cleaning" class="overview-id-field text-colortext">House Cleaning</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            <input name="private_home_kitchen" {{ $setting->SettingDetail->service_category->private_home_kitchen ?? null ? 'checked' : '' }} value="1" id="private-home-kitchen" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                            <label for="private-home-kitchen" class="overview-id-field text-colortext max-w-[130px]">Private Home Kitchen</label>
                                                        </div>
                                                    </td>
                                                    <td  valign="top">
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            {{-- <input id="meal-prepation-coking" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                            <label for="meal-prepation-coking" class="overview-status text-[#AFABAB]">Tutor</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            {{-- <input id="house-cleaning" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                            <label for="house-cleaning" class="overview-status text-[#AFABAB]">Pick up/ Drop off</label>
                                                        </div>
                                                        <div class="flex items-center space-x-[14px] mt-[10px]">
                                                            {{-- <input id="private-home-kitchen" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" > --}}
                                                            <label for="private-home-kitchen" class="overview-status text-[#AFABAB]">Other Professional Services</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 mt-8 flex items-center space-x-[25px]">
                                    <div>
                                        <label for="first-name" class="block overview-status-field text-[#222222] mb-3">Services Location</label>
                                        <div class="w-[450px] p-1 h-10 border border-[#ECECEC] flex items-center rounded">
                                            <select name="location" id="category" class="text-sm overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option>USA, CA, Senior care San Jose</option>
                                                <option>Test 1</option>
                                                <option>Test 1</option>
                                                <option>Test 1</option>
                                            </select>
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                    <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                </svg>   
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="" class="invisible block overview-status-field text-[#222222] mb-3">Services Location</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px] w-full">
                                            <input name="send_notifcation" {{ $setting->SettingDetail->service_location_fee->send_notifcation ?? null ? 'checked' : '' }} value="1" id="send-notification" style="color: #3BD7CF" type="checkbox" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="send-notification" class="overview-id-field text-colortext ">Send Notification</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 mt-8 flex flex-col items-center space-x-[25px]">
                                    <div class="flex">
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input id="app-fee" name="application_fee" {{ $setting->SettingDetail->service_location_fee->aplication_fee  ?? null ? 'checked' : '' }} value="1" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="app-fee" class="overview-status-field text-colortext ">Application Fee ($)</label>
                                        </div>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input id="placement-fee" name="placement_fee" {{ $setting->SettingDetail->service_location_fee->placement_fee  ?? null ? 'checked' : '' }} value="1" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="placement-fee" class="overview-status-field text-colortext ">Placement Fee ($)</label>
                                        </div>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input id="hourly-rate" name="hourly_rate" {{ $setting->SettingDetail->service_location_fee->hourly_rate  ?? null ? 'checked' : '' }} value="1" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="hourly-rate" class="overview-status-field text-colortext ">Hourly Rate ($)</label>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-[60px] mt-3">
                                        <div class="flex items-center  w-40 h-10 border border-[#ECECEC] rounded-md">
                                            <input name="aplication_fee" value="{{ old('aplication_fee', $setting->SettingDetail->service_location_fee->aplication_fee ?? null) }}" type="number"  class="overview-modal-add-talent-text text-colortext  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="0">
                                            <div class="flex items-center justify-center space-x-2 pr-2">
                                                <span class="text-base text-colortext hover:cursor-pointer">+</span>
                                                <span class="text-lg text-colortext font-semibold hover:cursor-pointer">-</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center w-40 h-10 border border-[#ECECEC] rounded-md">
                                            <input name="placement_fee" value="{{ old('placement_fee' , $setting->SettingDetail->service_location_fee->placement_fee ?? null) }}" type="number"  class="overview-modal-add-talent-text text-colortext  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="0">
                                            <div class="flex items-center justify-center space-x-2 pr-2">
                                                <span class="text-base text-colortext hover:cursor-pointer">+</span>
                                                <span class="text-lg text-colortext font-semibold hover:cursor-pointer">-</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center w-40 h-10 border border-[#ECECEC] rounded-md">
                                            <input name="hourly_rate" value="{{ old('hourly_rate' , $setting->SettingDetail->service_location_fee->hourly_rate ?? null) }}" type="number"  class="overview-modal-add-talent-text text-colortext  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="0">
                                            <div class="flex items-center justify-center space-x-2 pr-2">
                                                <span class="text-base text-colortext hover:cursor-pointer">+</span>
                                                <span class="text-lg text-colortext font-semibold hover:cursor-pointer">-</span>
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
                                <div class="px-6 mt-8 flex items-center space-x-4 ">
                                    <div>
                                        <label for="" class="overview-status-field text-colortext">Client</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input name="client" {{ $setting->SettingUsers->client ?? null ? 'checked' : '' }} value="1" id="" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="" class="overview-id-field text-colortext">Can sign up and create a job</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="" class="overview-status-field text-colortext">Caregives</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input name="caregives" {{ $setting->SettingUsers->caregives ?? null ? 'checked' : '' }}  value="1" id="" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="" class="overview-id-field text-colortext">Can sign up and create a job</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-6 mt-8 flex items-center space-x-4 ">
                                    <div>
                                        <label for="" class="overview-status-field text-colortext">Are you interested in being as a part of public pool?</label>
                                        <div class="flex items-center space-x-[14px] mt-[10px] mr-[76px]">
                                            <input name="interested_public_pool" {{ $setting->SettingUsers->interested_public_pool ?? null ? 'checked' : '' }} value="1" id="" style="color: #3BD7CF" type="checkbox"  class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
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
                                        <span class="text-[#222222] user-create-client-title">Additional settings</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="px-8 mt-8 ">
                                    <label for="" class="overview-status-field text-colortext">Notification</label>
                                    <div class="flex items-center justify-between border-b py-[26.5px]">
                                        <span class=" overview-id-field text-colortext">Allow email notifications</span>
                                        <label for="toggle-email-notif" class="relative inline-flex items-center cursor-pointer">
                                            <input name="notification_email" {{ $setting->SettingAdditionals->notification_email ?? null ? 'checked' : '' }}  value="1" type="checkbox" id="toggle-email-notif" class="sr-only peer">
                                            <div class="w-[51px] h-8 bg-gray-200 rounded-full peer peer-focus:ring-4  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:-left-[3px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-7 after:w-7 after:transition-all  peer-checked:bg-palet focus:ring-0 outline-none"></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="px-8 mt-4 ">
                                    <label for="" class="overview-status-field text-colortext">Dashboard</label>
                                    <div class="flex items-center border-b py-[28.5px] space-x-[108px]">
                                        <span class=" overview-id-field text-colortext">Choose a color theme</span>
                                        <div class="flex space-x-3">
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#EB5757]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#EB5757">

                                                @else
                                                    <input {{  $setting->SettingAdditionals->dashboard_color_theme == '#EB5757' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#EB5757">
                                                @endif
                                            </label>
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#F2994A]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#F2994A">
                                                @else
                                                    <input {{ $setting->SettingAdditionals->dashboard_color_theme == '#F2994A' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="#F2994A">
                                                @endif
                                            </label>
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#27AE60]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#27AE60">
                                                @else
                                                    <input  {{ $setting->SettingAdditionals->dashboard_color_theme == '#27AE60' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="#27AE60">
                                                @endif
                                            </label>
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#6AEAE3]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#6AEAE3">
                                                @else
                                                    <input {{ $setting->SettingAdditionals->dashboard_color_theme == '#6AEAE3' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="#6AEAE3">
                                                @endif
                                            </label>
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#56CCF2]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#56CCF2">
                                                @else
                                                    <input {{ $setting->SettingAdditionals->dashboard_color_theme == '#56CCF2' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="#56CCF2">
                                                @endif
                                            </label>
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#BB6BD9]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#BB6BD9">
                                                @else
                                                    <input {{ $setting->SettingAdditionals->dashboard_color_theme == '#BB6BD9' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="#BB6BD9">
                                                @endif
                                            </label>
                                            <label class="w-10 h-10 rounded-full hover:cursor-pointer bg-[#F2C94C]">
                                                @if (empty($setting->SettingAdditionals->dashboard_color_theme))
                                                    <input onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"   type="checkbox" value="#F2C94C">
                                                @else
                                                    <input  {{ $setting->SettingAdditionals->dashboard_color_theme == '#F2C94C' ?? null ? 'checked' : '' }} onclick="onlyOneStatus(this, 'dashboard_color_theme')" name="dashboard_color_theme"  type="checkbox" value="#F2C94C">
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-8 mt-4 ">
                                    <label for="" class="overview-status-field text-colortext mb-[26px]">Pre-defined check list</label>
                                    @foreach ($defined_list as $value )
                                        
                                    <div class="flex items-center space-x-[29.5px] mb-7">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                        </svg>
                                        <div>
                                            <span class="task-text-body text-colortext">{{ $value->body }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                   
                                    {{-- Add more --}}
                                    <div class="add">
                                        <div class="flex items-center space-x-[29.5px] mb-7">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                            </svg>
                                            <div>
                                                <input name="body[]" value="" type="text" id="first-name" class="border-none task-text-body text-colortext focus:ring-0 w-full p-1 outline-none" placeholder="Enter a title for this task">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Button --}}
                                    <div href="#" onclick="add_more()" class="w-[133px] h-10 bg-palet rounded-md flex items-center justify-center hover:cursor-pointer">
                                        <span class="task-btn-text">+ Add More</span>
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
                                            @if (empty($setting->SettingGeneral->avatar))
                                                <img id="output" alt="" class="w-full rounded-full ring-0 bg-opacity-80 hover:animate-pulse">
                                            @else
                                                <img id="output" src="{{ asset('storage/avatar/'.$setting->SettingGeneral->avatar) }}" class="w-full rounded-full ring-0 bg-opacity-80 hover:animate-pulse">

                                            @endif

                                            <div class="absolute -bottom-3 w-9 h-9 bg-palet rounded-full flex items-center justify-center">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6875 3.375C1.6875 2.44302 2.44302 1.6875 3.375 1.6875H14.625C15.557 1.6875 16.3125 2.44303 16.3125 3.375V14.625C16.3125 15.557 15.557 16.3125 14.625 16.3125H3.375C2.44303 16.3125 1.6875 15.557 1.6875 14.625V3.375ZM3.375 2.8125C3.06434 2.8125 2.8125 3.06434 2.8125 3.375V14.625C2.8125 14.9357 3.06434 15.1875 3.375 15.1875H14.625C14.9357 15.1875 15.1875 14.9357 15.1875 14.625V3.375C15.1875 3.06434 14.9357 2.8125 14.625 2.8125H3.375Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3125 6.75C4.3125 5.40381 5.40381 4.3125 6.75 4.3125C8.09619 4.3125 9.1875 5.40381 9.1875 6.75C9.1875 8.09619 8.09619 9.1875 6.75 9.1875C5.40381 9.1875 4.3125 8.09619 4.3125 6.75ZM6.75 5.4375C6.02514 5.4375 5.4375 6.02514 5.4375 6.75C5.4375 7.47486 6.02514 8.0625 6.75 8.0625C7.47486 8.0625 8.0625 7.47486 8.0625 6.75C8.0625 6.02514 7.47486 5.4375 6.75 5.4375Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2487 9.3319C11.4635 9.13865 11.7897 9.13946 12.0034 9.33378L16.1284 13.0838C16.3583 13.2928 16.3752 13.6485 16.1662 13.8784C15.9573 14.1082 15.6015 14.1252 15.3717 13.9162L11.6231 10.5085L8.25133 13.5431C8.04126 13.7322 7.72354 13.736 7.50896 13.5521L5.22656 11.5957L2.58753 13.575C2.339 13.7614 1.98643 13.711 1.80003 13.4625C1.61364 13.214 1.664 12.8614 1.91253 12.675L4.91253 10.425C5.12345 10.2668 5.41593 10.2763 5.6161 10.4479L7.86598 12.3764L11.2487 9.3319Z" fill="white"/>
                                                </svg>
                                            </div>
    
                                            {{-- <button class="flex justify-center items-center px-5 w-[99px] h-6 bg-palet rounded space-x-1 hover:cursor-pointer absolute top-[45%]">
                                                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 4.625C10.2071 4.625 10.375 4.79289 10.375 5V9.5C10.375 9.70711 10.2071 9.875 10 9.875H1C0.792893 9.875 0.625 9.70711 0.625 9.5V5.00208C0.625 4.79497 0.792893 4.62708 1 4.62708C1.20711 4.62708 1.375 4.79497 1.375 5.00208V9.125H9.625V5C9.625 4.79289 9.79289 4.625 10 4.625Z" fill="#3BD7CF"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23483 0.234835C5.38128 0.0883883 5.61872 0.0883883 5.76517 0.234835L8.01516 2.48483C8.16161 2.63128 8.16161 2.86872 8.01516 3.01517C7.86872 3.16161 7.63128 3.16161 7.48484 3.01517L5.5 1.03033L3.51517 3.01517C3.36872 3.16161 3.13128 3.16161 2.98483 3.01517C2.83839 2.86872 2.83839 2.63128 2.98483 2.48483L5.23483 0.234835Z" fill="#3BD7CF"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.49805 0.125C5.70515 0.125 5.87305 0.292893 5.87305 0.5V7C5.87305 7.20711 5.70515 7.375 5.49805 7.375C5.29094 7.375 5.12305 7.20711 5.12305 7V0.5C5.12305 0.292893 5.29094 0.125 5.49805 0.125Z" fill="#3BD7CF"/>
                                                </svg> 
                                                <span class="overview-send-job text-hover">Upload</span>
                                            </button> --}}
                            
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
        var loadFile = function(event) {
          var output = document.getElementById('output');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
          }

          const btn = `<button class="bg-palet invisible group-hover:animate-pulse group-hover:visible h-6 absolute rounded-md p-4 top-1/2 bottom-1/2 flex items-center justify-center">
                            <span class="text-sm text-gray-50">Upload</span>
                        </button>`;
    
          $('#bg-avatar').append(btn);
        };


      </script>
</main>

@endsection
