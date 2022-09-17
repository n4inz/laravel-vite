
@extends('family.layoutFamily.main')
@section('container')
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <main>
        <article class="pb-[207px]">
            <div class="w-[1240px]  mt-24 mx-auto ">
                <div class="bg-palet py-12 rounded-[10px] px-8 ">
                    <div class="flex flex-col text-white space-y-2">
                        <span class="text-5xl font-medium ">Messages</span>
                        <span class="text-xl font-light">Look up people you've worked with</span>
                    </div>
                </div>
                <div class="flex mt-5 space-x-[19px]">
                    <div class="w-[400px] bg-white shadow p-4">
                        <div class="flex items-center justify-start space-x-4">
                            <div class="w-14">
                                <img src="{{ asset('images/logo/logo-ayiconnect.png') }}" alt="">
                            </div>
                            <div class="flex flex-col">
                                <span class="text-base font-medium text-colortext leading-3">Edward Zhang</span>
                                <span class="text-sm text-[#827C7C] font-normal">Family</span>
                            </div>
                        </div>
                        <div class="w-full h-10 bg-[#F7F8F9] rounded flex items-center justify-center space-x-3 px-2 mt-6">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7011 14.1954L11.6312 10.1256C12.5632 8.81596 12.9691 7.20397 12.7685 5.60917C12.5678 4.01437 11.7752 2.55318 10.5479 1.51528C9.3205 0.477377 7.74795 -0.0614617 6.14197 0.00558229C4.536 0.0726263 3.01383 0.740658 1.87725 1.87725C0.740658 3.01383 0.0726263 4.536 0.00558229 6.14197C-0.0614617 7.74795 0.477377 9.3205 1.51528 10.5479C2.55318 11.7752 4.01437 12.5678 5.60917 12.7685C7.20397 12.9691 8.81596 12.5632 10.1256 11.6312L14.1954 15.7011C14.3962 15.8951 14.6652 16.0024 14.9444 16C15.2236 15.9975 15.4907 15.8855 15.6881 15.6881C15.8855 15.4907 15.9975 15.2236 16 14.9444C16.0024 14.6652 15.8951 14.3962 15.7011 14.1954ZM1.10525 6.42948C1.10525 5.37645 1.41751 4.34706 2.00255 3.4715C2.58758 2.59593 3.41911 1.91351 4.39199 1.51054C5.36486 1.10756 6.43539 1.00212 7.46818 1.20756C8.50098 1.41299 9.44967 1.92008 10.1943 2.66468C10.9389 3.40929 11.446 4.35798 11.6514 5.39077C11.8568 6.42357 11.7514 7.4941 11.3484 8.46697C10.9454 9.43985 10.263 10.2714 9.38746 10.8564C8.5119 11.4414 7.48251 11.7537 6.42948 11.7537C5.01788 11.7522 3.66455 11.1907 2.6664 10.1926C1.66824 9.19441 1.1068 7.84108 1.10525 6.42948Z" fill="#827C7C"/>
                            </svg>
                            <input type="text" class="w-full outline-none bg-transparent focus:ring-0 border-none font-normal text-[#827C7C]" placeholder="Search" autocomplete="off">
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 px-2 mt-6 ">
                                <span id="dropdownDefault" data-dropdown-toggle="dropdown"  class="text-base font-medium text-colortext">All</span>
                                <svg id="dropdownDefault" data-dropdown-toggle="dropdown"  width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0.5L6 5.5L1 0.5" stroke="#75818F" stroke-width="1.2"/>
                                </svg>
                            </div>
                            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                  <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Test 1</a>
                                  </li>
                                  <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Test 2</a>
                                  </li>
                                </ul>
                            </div>
                        </div>

                        <div class="border-b pb-3">
                            <div class="flex justify-between mt-5">
                                <div class="flex items-center space-x-4">
                                    <div class="w-[41px] h-[41px] rounded-full">
                                        <img class="rounded-full h-[41px]" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-base font-medium text-[#2CA6A0]"># 562 Linda Rodiger</span>
                                        <span class="text-sm font-normal text-[#827C7C]">Helper</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-xs font-medium text-[#AFABAB]">22/4/2021</span>
                                    <div class="flex justify-end">
                                        <div class="w-3 h-3 bg-[#EB5757] rounded-full "></div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-xs font-normal text-[#AFABAB]">I am good and how about you?</span>
                        </div>
                        <div class="border-b pb-3">
                            <div class="flex justify-between mt-3">
                                <div class="flex items-center space-x-4">
                                    <div class="w-[41px] h-[41px] rounded-full">
                                        <img class="rounded-full h-[41px]" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-base font-medium text-[#2CA6A0]"># 562 Linda Rodiger</span>
                                        <span class="text-sm font-normal text-[#827C7C]">Helper</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-xs font-medium text-[#AFABAB]">22/4/2021</span>
                                    <div class="flex justify-end">
                                        <div class="w-3 h-3 bg-[#EB5757] rounded-full "></div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-xs font-normal text-[#AFABAB]">Looking for a nanny to help for my 85-year-old...</span>
                        </div>
                        <div class="border-b pb-3">
                            <div class="flex justify-between mt-3">
                                <div class="flex items-center space-x-2">
                                    <div class="flex flex-wrap w-12 ">
                                        <img class="w-7 h-7 rounded-full border-2 border-white dark:border-gray-800" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                        <img class="w-7 h-7 -ml-2 rounded-full border-2 border-white dark:border-gray-800" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                        <img class="w-7 h-7 -mt-2 rounded-full border-2 border-white dark:border-gray-800" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                        <img class="w-7 h-7 -ml-2 -mt-2 rounded-full border-2 border-white dark:border-gray-800" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                        
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-base font-medium text-[#2CA6A0]"># 562 Linda Rodiger</span>
                                        <span class="text-sm font-normal text-[#827C7C]">#421 Lisa Ann, #821 ..,</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-xs font-medium text-[#AFABAB]">22/4/2021</span>
                                    <div class="flex justify-end">
                                        <div class="w-3 h-3 bg-[#EB5757] rounded-full "></div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-xs font-normal text-[#AFABAB]">Looking for a nanny to help for my 85-year-old...</span>
                        </div>
                        <div class="border-b pb-3">
                            <div class="flex justify-between mt-3">
                                <div class="flex items-center space-x-4">
                                    <div class="w-[41px] h-[41px] rounded-full">
                                        <img class="rounded-full h-[41px]" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-base font-medium text-[#2CA6A0]"># 562 Linda Rodiger</span>
                                        <span class="text-sm font-normal text-[#827C7C]">Family</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-xs font-medium text-[#AFABAB]">22/4/2021</span>
                                    <div class="flex justify-end">
                                        <div class="w-3 h-3 bg-[#EB5757] rounded-full "></div>
                                    </div>
                                </div>
                            </div>
                            <span class="text-xs font-normal text-[#AFABAB]">Looking for a nanny to help for my 85-year-old...</span>
                        </div>
                        
                    </div>
                    <div class="w-full bg-neutral-50 flex flex-col  ">
                        <div class="bg-white h-[71px] shadow-sm p-4 flex justify-between items-center">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-base font-medium text-colortext">AyiConnect staff</span>
                                    <span class="text-sm text-[#827C7C]">Admin</span>
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60397 8.57755C0.442692 6.47218 0 4.77489 0 3.62849C0 2.48209 0.281662 2.15329 0.567471 1.88766C0.85328 1.62203 2.14208 0.827443 2.36167 0.679255C2.58126 0.531068 3.41937 0.243082 3.94496 0.999148C4.47054 1.75521 5.46029 3.27324 6.14266 4.28168C7.21343 5.71007 6.36037 6.3371 6.08483 6.71293C5.57779 7.4045 5.28584 7.57508 5.28584 8.42426C5.28584 9.27345 7.65908 11.686 8.22655 12.2805C8.78971 12.8704 11.1544 14.9434 11.8872 15.0542C12.6251 15.1659 13.6129 14.3846 13.823 14.1865C14.8914 13.3662 15.4945 13.9881 15.9867 14.2585C16.4788 14.5288 18.7024 15.9144 19.3915 16.3814C20.04 16.8485 19.9995 17.5703 19.9995 17.5703C19.9995 17.5703 18.6619 19.6933 18.4998 19.948C18.2971 20.2452 17.8107 20.5 16.7163 20.5C15.6219 20.5 14.4525 20.3001 11.6736 18.7718C9.39975 17.5213 7.23214 15.563 6.0972 14.4166C4.92172 13.2702 2.93047 10.9825 1.60397 8.57755Z" fill="#3BD7CF"/>
                                </svg>
                                <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 2.5C16 1.397 15.103 0.5 14 0.5H2C0.897 0.5 0 1.397 0 2.5V12.5C0 13.603 0.897 14.5 2 14.5H14C15.103 14.5 16 13.603 16 12.5V9.167L20 12.5V2.5L16 5.833V2.5Z" fill="#3BD7CF"/>
                                </svg>
                                        
                            </div>
                        </div>
                        <div>
                            asd
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection