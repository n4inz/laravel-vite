
@extends('family.layoutFamily.main')
@section('container')
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <main>
        <article class="pb-[207px]">
            <div class="w-[1240px]  mt-24 mx-auto ">
                <div class="bg-palet flex justify-between py-12 rounded-[10px] px-8 ">
                    <div class="flex flex-col text-white space-y-2">
                        <span class="text-5xl font-medium ">Your Jobs</span>
                        <span class="text-xl font-light">Look up people you've worked with</span>
                    </div>
                    <div class="w-[166px] h-14 bg-neutral-50 flex items-center justify-center space-x-[18px] rounded-[5px]">
                        <span class="text-base font-medium text-neutral-700">Create Job</span>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0V8H0V10H8V18H10V10H18V8H10V0H8Z" fill="#404040"/>
                        </svg>
                    </div>
                </div>
                <div class="flex mt-5 space-x-[19px]">
                    <div>
                        <div class="w-[294px] bg-white shadow rounded-[10px]">
                            <div class="bg-palet flex items-center justify-between h-[78px] px-8 rounded-t-[10px]">
                                <div class="text-white tex-base font-medium">Active Jobs</div>
                                <div class="border-2 text-white border-white w-6 h-6 rounded-full flex items-center justify-center">
                                    2
                                </div>
                            </div>
                            <div class="flex border-b items-center justify-between h-[78px] px-8">
                                <div class="text-neutral-400 text-base font-medium">Finished Jobs</div>
                                <div class="border-2 text-neutral-400 border-neutral-400 w-6 h-6 rounded-full flex items-center justify-center">
                                    2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white flex flex-col  ">
                        <div class="w-full px-[26px] py-8 border-b">
                            <div class="flex space-x-[34px]">
                                <div class="w-[200px]">
                                    <img class="w-[200px]" src="{{ asset('images/dummy/dummy1.png') }}" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl text-neutral-700 font-medium">Part-Time Care for Toddler 2x Weekly-Family is Flexible! (Northlake)</span>
                                    <span class="text-xs font-light text-neutral-700 mt-1">Child Care in Brooklyn, NY, USA</span>
                                    <div class="space-x-4 mt-2">
                                        <span class="text-xs font-medium text-neutral-700">5 Days / Week</span>
                                        <span class="text-xs font-medium text-neutral-700">$25 / hour</span>
                                    </div>
                                    <div class="text-sm font-light text-neutral-700 max-w-2xl mt-3">
                                        Hi. We are looking for a bilingual nanny who can speak English and Cantonese, who is warm and clean, who can cook for the family and help take care of the children when they come home from school. Looking for someone with many years of experience. We can be flexible on start date, working hours and salary. Looking forward to meeting
                                    </div>
                                    <div class="flex mt-4 space-x-4">
                                        <div class="text-xs font-light text-neutral-700">Placement Fee <span class="font-medium"> $25</span></div>
                                        <div class="text-xs font-light text-neutral-700">Aplication Fee <span class="font-medium"> $2</span></div>
                                    </div>
                                    <div class="mt-[18px] flex items-center justify-between">
                                        <div class="flex space-x-4">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-6 h-6 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                                    <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                                </div>
                                                <span class="text-xs font-medium text-neutral-600">Child Care</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-6 h-6 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                                    <img class="w-4 h-4" src="{{ asset('icon/daycare-teach.png') }}" alt="">
                                                </div>
                                                <span class="text-xs font-medium text-neutral-600">Daycare Teacher</span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-6 items-center">
                                            <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.66634 0V2.66667H24.333V16H26.9997V2.66667C26.9997 1.19333 25.8063 0 24.333 0H5.66634ZM2.99967 5.33333C1.53301 5.33333 0.346029 6.53333 0.346029 8L0.333008 28L5.66634 22.6667H18.9997C20.4663 22.6667 21.6663 21.4667 21.6663 20V8C21.6663 6.53333 20.4663 5.33333 18.9997 5.33333H2.99967ZM2.99967 8H18.9997V20H5.66634H4.56217L3.78092 20.7812L2.99967 21.5625V8Z" fill="black"/>
                                            </svg>
                                            <div data-modal-toggle="detail" class="hover:cursor-pointer w-[153px] h-[44px] bg-palet rounded-[5px] text-base font-medium text-white flex items-center justify-center">
                                                View Details
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                        </div>
                        <div class="w-full px-[26px] py-8 border-b">
                            <div class="flex space-x-[34px]">
                                <div class="w-[200px]">
                                    <img class="w-[200px]" src="{{ asset('images/dummy/dummy1.png') }}" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl text-neutral-700 font-medium">Part-Time Care for Toddler 2x Weekly-Family is Flexible! (Northlake)</span>
                                    <span class="text-xs font-light text-neutral-700 mt-1">Child Care in Brooklyn, NY, USA</span>
                                    <div class="space-x-4 mt-2">
                                        <span class="text-xs font-medium text-neutral-700">5 Days / Week</span>
                                        <span class="text-xs font-medium text-neutral-700">$25 / hour</span>
                                    </div>
                                    <div class="text-sm font-light text-neutral-700 max-w-2xl mt-3">
                                        Hi. We are looking for a bilingual nanny who can speak English and Cantonese, who is warm and clean, who can cook for the family and help take care of the children when they come home from school. Looking for someone with many years of experience. We can be flexible on start date, working hours and salary. Looking forward to meeting
                                    </div>
                                    <div class="flex mt-4 space-x-4">
                                        <div class="text-xs font-light text-neutral-700">Placement Fee <span class="font-medium"> $25</span></div>
                                        <div class="text-xs font-light text-neutral-700">Aplication Fee <span class="font-medium"> $2</span></div>
                                    </div>
                                    <div class="mt-[18px] flex items-center justify-between">
                                        <div class="flex space-x-4">
                                            <div class="flex items-center space-x-2">
                                                <div class="w-6 h-6 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                                    <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                                </div>
                                                <span class="text-xs font-medium text-neutral-600">Child Care</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <div class="w-6 h-6 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                                    <img class="w-4 h-4" src="{{ asset('icon/daycare-teach.png') }}" alt="">
                                                </div>
                                                <span class="text-xs font-medium text-neutral-600">Daycare Teacher</span>
                                            </div>
                                        </div>
                                        <div class="flex space-x-6 items-center">
                                            <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.66634 0V2.66667H24.333V16H26.9997V2.66667C26.9997 1.19333 25.8063 0 24.333 0H5.66634ZM2.99967 5.33333C1.53301 5.33333 0.346029 6.53333 0.346029 8L0.333008 28L5.66634 22.6667H18.9997C20.4663 22.6667 21.6663 21.4667 21.6663 20V8C21.6663 6.53333 20.4663 5.33333 18.9997 5.33333H2.99967ZM2.99967 8H18.9997V20H5.66634H4.56217L3.78092 20.7812L2.99967 21.5625V8Z" fill="black"/>
                                            </svg>
                                            <div class="w-[153px] h-[44px] bg-palet rounded-[5px] text-base font-medium text-white flex items-center justify-center">
                                                View Details
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main modal Detail -->
            <div id="detail" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-[820px] h-screen ">
                    <!-- Modal content -->
                    <div class="relative p-8 bg-white  overflow-auto rounded-lg shadow">
                        <button type="button" class="absolute top-0 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="detail">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="relative">
                            <img class="w-[756px] h-[200px] bg-contain" src="{{ asset('images/dummy/modal.png') }}" alt="">
                        </div>
                        <div class="flex justify-between mt-9">
                            <div class="text-2xl font-semibold text-neutral-900">Caregiver who cooks</div>
                            <div class="space-x-4">
                                <span class="text-sm font-medium text-neutral-800">5 Days / Week</span>
                                <span class="text-sm font-medium text-neutral-800"> $25 / hour</span>
                            </div>
                        </div>
                        <span class="text-neutral-700 text-xs font-light mt-1">Child Care in Brooklyn, NY, USA</span>
                        <div class="text-sm text-neutral-700 font-light mt-5">
                            Hi. We are looking for a bilingual nanny who can speak English and Cantonese, who is warm and clean, who can cook for the family and help take care of the children when they come home from school. Looking for someone with many years of experience. We can be flexible on start date, working hours and salary. Looking forward to meeting
                        </div>
                        <div class="flex flex-col mt-6 space-y-2">
                            <span class="text-base text-neutral-900 font-medium">Times</span>
                            <span class="text-sm font-normal text-neutral-900">Days</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-4 w-full">
                                <div class="w-8 h-8 border border-colorStatusCard1 rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-normal text-neutral-600">Mo</span>
                                </div>
                                <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-semibold">Tu</span>
                                </div>
                                <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-semibold">We</span>
                                </div>
                                <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-semibold">Th</span>
                                </div>
                                <div class="w-8 h-8 border border-colorStatusCard1  rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-normal text-neutral-600">Fr</span>
                                </div>
                                <div class="w-8 h-8 border border-colorStatusCard1 rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-normal text-neutral-600">Sa</span>
                                </div>
                                <div class="w-8 h-8 border border-colorStatusCard1 rounded flex items-center justify-center text-white">
                                    <span class="text-sm font-normal text-neutral-600">Su</span>
                                </div>
                            </div>
                            <div class="flex space-x-8 w-full">
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm text-neutral-700 font-normal">Start Date</span>
                                    <span class="text-sm font-medium text-neutral-900">ASAP</span>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm text-neutral-700 font-normal">Start Time</span>
                                    <span class="text-sm font-medium text-neutral-900">2:30 PM</span>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm text-neutral-700 font-normal">End Date</span>
                                    <span class="text-sm font-medium text-neutral-900">TBD</span>
                                </div>
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm text-neutral-700 font-normal">End Time</span>
                                    <span class="text-sm font-medium text-neutral-900">8:30 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-9">
                            <div class="text-base text-neutral-900 font-medium w-full">Responsibilities</div>
                            <div class="text-base text-neutral-900 font-medium w-full">Skills</div>
                        </div>
                        <div class="flex justify-between mt-6">
                            <div class="flex space-x-4 w-full">
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Child Care</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Daycare Teacher</span>
                                </div>
                            </div>
                            <div class="flex space-x-4 w-full">
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Speak English</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Cook certification</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-9">
                            <div class="text-base text-neutral-900 font-medium w-full">Payment Method</div>
                            <div class="text-base text-neutral-900 font-medium w-full">Preferences</div>
                        </div>
                        <div class="flex justify-between mt-6">
                            <div class="flex space-x-4 w-full">
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 0.5C5.27899 0.500021 5.06704 0.583204 4.91077 0.731255C4.75449 0.879305 4.66669 1.0801 4.66667 1.28947V1.68421V4.44737H3C2.54 4.44737 2.16667 4.09289 2.16667 3.65789C2.16667 3.22289 2.54 2.86842 3 2.86842V1.28947C1.62167 1.28947 0.5 2.35211 0.5 3.65789V13.9211C0.5 14.7918 1.2475 15.5 2.16667 15.5H13.8333C14.7525 15.5 15.5 14.7918 15.5 13.9211V6.02632C15.5 5.15553 14.7525 4.44737 13.8333 4.44737H13V1.28947C13 1.0801 12.9122 0.879305 12.7559 0.731255C12.5996 0.583204 12.3877 0.500021 12.1667 0.5H5.91667H5.5ZM7.09342 2.07895H10.5732C10.6354 2.24498 10.7359 2.39578 10.8674 2.52035C10.9989 2.64492 11.1581 2.74013 11.3333 2.79903V4.44737H9.66667C9.66667 4.01158 9.29333 3.65789 8.83333 3.65789C8.37333 3.65789 8 4.01158 8 4.44737H6.33333V2.79903C6.50859 2.74013 6.66776 2.64492 6.79925 2.52035C6.93075 2.39578 7.03125 2.24498 7.09342 2.07895ZM2.16667 5.88137C2.42866 5.96992 2.70634 6.02632 3 6.02632H5.5H13.8333V13.9211H2.16667V5.88137ZM11.3333 9.18421C10.8733 9.18421 10.5 9.5379 10.5 9.97368C10.5 10.4095 10.8733 10.7632 11.3333 10.7632C11.7933 10.7632 12.1667 10.4095 12.1667 9.97368C12.1667 9.5379 11.7933 9.18421 11.3333 9.18421Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Cash</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Online Payment</span>
                                </div>
                            </div>
                            <div class="flex space-x-4 w-full">
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Live In</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-colorStatusCard1 rounded-[5px] flex items-center justify-center">
                                        <img class="w-4 h-4" src="{{ asset('icon/child-care.png') }}" alt="">
                                    </div>
                                    <span class="text-xs font-normal text-neutral-700">Job Type</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-base font-medium text-neutral-900 mt-10">Notes for Agency</div>
                        <div class="text-sm text-neutral-700 font-light mt-4">
                            family is more westernized and usually has an issue with strong headed / opinionated caregiver,
                        </div>
                        <div class="flex items-center w-full justify-center mt-8">
                            <button class="w-[168px] h-11 rounded-[5px] bg-palet text-white text-base font-medium">
                                Contact Talent
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection