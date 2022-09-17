
@extends('family.layoutFamily.main')
@section('container')
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <main>
        <article class="pb-[207px]">
            <div class="w-[1237px]  mt-24 mx-auto ">
                <div class="bg-palet py-12 rounded-[10px] px-8 ">
                    <div class="flex flex-col text-white space-y-2">
                        <span class="text-xl font-normal">Monday, August 15th</span>
                        <span class="text-5xl font-medium ">Good Morning,  Edward Zhang</span>
                        <span class="text-xl font-light">Please complete your information to help us find best talent near you</span>
                    </div>
                </div>
                <div class="flex mt-5 space-x-[19px]">
                    <div>
                        <div class="w-[294px] bg-white shadow rounded-[10px]">
                            <div class="bg-palet flex items-center space-x-[10px] h-[78px] px-8 rounded-t-[10px]">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 0.5C6.11125 0.5 0.5 6.11125 0.5 13C0.5 19.8888 6.11125 25.5 13 25.5C19.8888 25.5 25.5 19.8888 25.5 13C25.5 6.11125 19.8888 0.5 13 0.5ZM13 3C18.5377 3 23 7.46235 23 13C23 18.5377 18.5377 23 13 23C7.46235 23 3 18.5377 3 13C3 7.46235 7.46235 3 13 3ZM18.3662 8.36621L10.5 16.2324L7.63379 13.3662L5.86621 15.1338L10.5 19.7676L20.1338 10.1338L18.3662 8.36621Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="text-white tex-base font-medium">Family Information</div>
                            </div>
                            <div class="flex items-center space-x-[10px] h-[78px] px-8">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 13C0.5 6.11125 6.11125 0.5 13 0.5C19.8888 0.5 25.5 6.11125 25.5 13C25.5 19.8888 19.8888 25.5 13 25.5C6.11125 25.5 0.5 19.8888 0.5 13ZM23 13C23 7.46235 18.5377 3 13 3C7.46235 3 3 7.46235 3 13C3 18.5377 7.46235 23 13 23C18.5377 23 23 18.5377 23 13Z" fill="#A3A3A3"/>
                                    </svg>
                                </div>
                                <div class="text-neutral-400 text-base font-medium">Care Information</div>
                            </div>
                            <div class="flex items-center space-x-[10px] h-[78px] px-8">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 13C0.5 6.11125 6.11125 0.5 13 0.5C19.8888 0.5 25.5 6.11125 25.5 13C25.5 19.8888 19.8888 25.5 13 25.5C6.11125 25.5 0.5 19.8888 0.5 13ZM23 13C23 7.46235 18.5377 3 13 3C7.46235 3 3 7.46235 3 13C3 18.5377 7.46235 23 13 23C18.5377 23 23 18.5377 23 13Z" fill="#A3A3A3"/>
                                    </svg>
                                </div>
                                <div class="text-neutral-400 text-base font-medium">Documents</div>
                            </div>
                            <div class="flex items-center space-x-[10px] h-[78px] px-8">
                                <div>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 13C0.5 6.11125 6.11125 0.5 13 0.5C19.8888 0.5 25.5 6.11125 25.5 13C25.5 19.8888 19.8888 25.5 13 25.5C6.11125 25.5 0.5 19.8888 0.5 13ZM23 13C23 7.46235 18.5377 3 13 3C7.46235 3 3 7.46235 3 13C3 18.5377 7.46235 23 13 23C18.5377 23 23 18.5377 23 13Z" fill="#A3A3A3"/>
                                    </svg>
                                </div>
                                <div class="text-neutral-400 text-base font-medium">Payment</div>
                            </div>
                        </div>
                        <div class="w-[294px] h-14 bg-white rounded-[10px] px-6 flex items-center justify-between mt-[25px]">
                            <span class="text-base text-neutral-700">Create Job</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 3V11H3V13H11V21H13V13H21V11H13V3H11Z" fill="#404040"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full">
                        <div data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#familiy_information" aria-expanded="true" aria-controls="familiy_information">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Family Information
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="familiy_information" class="hidden" aria-labelledby="family_information-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 1</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Email</span>
                                            <span class="text-neutral-700 text-sm font-light">mluthfi2014@gmail.com</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Street Adress</span>
                                                    <span class="text-neutral-700 text-sm font-light">Jalan Cisitu Indah 5 Dalam No 78</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">City</span>
                                                    <span class="text-neutral-700 text-sm font-light">Bandung</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Profile Pictures</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Pictures</button>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 2</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor Wife</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Phone Number</span>
                                            <span class="text-neutral-700 text-sm font-light">+6282315620798</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium invisible">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">States</span>
                                                    <span class="text-neutral-700 text-sm font-light">West Java</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Zip Code</span>
                                                    <span class="text-neutral-700 text-sm font-light">40123</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Country</span>
                                                    <span class="text-neutral-700 text-sm font-light">Indonesia</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Introduction Video (Optional)</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Video</button>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                        
                        <div class="mt-4" data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#care_information" aria-expanded="false" aria-controls="care_information">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Care Information
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="care_information" class="hidden" aria-labelledby="care_information-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 1</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Email</span>
                                            <span class="text-neutral-700 text-sm font-light">mluthfi2014@gmail.com</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Street Adress</span>
                                                    <span class="text-neutral-700 text-sm font-light">Jalan Cisitu Indah 5 Dalam No 78</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">City</span>
                                                    <span class="text-neutral-700 text-sm font-light">Bandung</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Profile Pictures</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Pictures</button>
                                        </div>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Family 2</span>
                                            <span class="text-neutral-700 text-sm font-light">Muhammad Luthfi Dzulfiqor Wife</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Phone Number</span>
                                            <span class="text-neutral-700 text-sm font-light">+6282315620798</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium invisible">Home Address</span>
                                            <div class="flex mt-2 justify-between">
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">States</span>
                                                    <span class="text-neutral-700 text-sm font-light">West Java</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Zip Code</span>
                                                    <span class="text-neutral-700 text-sm font-light">40123</span>
                                                </div>
                                                <div class="flex flex-col">
                                                    <span class="text-neutral-800 text-sm font-medium">Country</span>
                                                    <span class="text-neutral-700 text-sm font-light">Indonesia</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 space-y-2">
                                            <span class="text-neutral-800 text-base font-medium">Introduction Video (Optional)</span>
                                            <button class="w-[129px] h-10 rounded-[5px] bg-palet text-white">Add Video</button>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>

                        <div class="mt-4" data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#document" aria-expanded="true" aria-controls="document">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Document
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="document" class="hidden" aria-labelledby="payment-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="flex items-center w-11/12 justify-between">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-700 text-base font-medium">Documents to Sign</span>
                                            <div class="w-[295px] bg-[#FFF6F1] p-6 mt-4">
                                                <span class="text-colorFamilyText text-sm font-light">Client Contract - Referral Fee Agreement </span>
                                                <button class="text-white mt-2 bg-palet py-[6px] px-8 rounded-[5px]">Sign</button>
                                            </div>
                                        </div>
                                        <div class="flex flex-col mt-6 ">
                                            <span class="text-neutral-700 text-base font-medium">Additional Documents</span>
                                            <button class="text-sm font-normal  text-white bg-palet  p-3 rounded-[5px]">Upload Additional Documents</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    

                        <div class="mt-4" data-accordion="open">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left bg-white border border-b-0 border-gray-200 rounded-t-[10px] " data-accordion-target="#payment" aria-expanded="true" aria-controls="payment">
                                <span class="flex items-center text-neutral-700 text-xl">
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    Payment
                                </span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4141 0C15.1581 0 14.902 0.0979687 14.707 0.292969L12.707 2.29297L11.293 3.70703L0 15V19H4L18.707 4.29297C19.098 3.90197 19.098 3.26891 18.707 2.87891L16.1211 0.292969C15.9261 0.0979687 15.6701 0 15.4141 0ZM15.4141 2.41406L16.5859 3.58594L15.293 4.87891L14.1211 3.70703L15.4141 2.41406ZM12.707 5.12109L13.8789 6.29297L3.17188 17H2V15.8281L12.707 5.12109Z" fill="#404040"/>
                                </svg>
                            </button>
                        
                            <div id="payment" class="hidden" aria-labelledby="payment-1">
                              <div class="flex space-x-16 border border-b-0 border-gray-200 bg-gray-50 px-10 pb-8 rounded-b-[10px]">
                                    <div class="flex items-center w-11/12 justify-between">
                                        <div class="flex flex-col mt-6">
                                            <span class="text-neutral-800 text-base font-medium">Billing Methods</span>
                                            <span class="text-neutral-700 text-sm font-light">Add, update, or remove your billing methods</span>
                                        </div>
                                        <div class="flex flex-col mt-6">
                                            <button class="text-sm font-normal text-white bg-palet  p-3 rounded-[5px]">Add New Billing Method</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
            
        </article>
    </main>
@endsection