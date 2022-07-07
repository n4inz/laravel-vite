@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class=" ml-56 space-x-2 mt-[85px] px-10 w-[80%]">
        <div class="h-20 xl:w-full bg-bgbody px-6 flex items-center justify-between rounded">
            <div class="flex items-center">
                <div class="h-8 w-[119px] bg-palet rounded-lg flex items-center justify-center space-x-2 hover:cursor-pointer">
                    <div class="relative">
                        <div class="w-[10.33px] h-[1px] bg-white"></div>
                        <div class="absolute w-[10.33px] h-[1px] bg-white rotate-90"></div>
                    </div>
                    <div class="btn-create-list text-white ">Create a List</div>
                </div>
    
                <div class="relative w-80 left-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg outline-none  block w-full pl-10 p-2 " placeholder="Search for tasks, projects, ..." required>
                </div>
            </div>

            <div class="flex -space-x-4">
                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                <div class="relative ">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                    <a class="absolute top-0 flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-palet opacity-80 border-2 border-white rounded-full " href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.0207 2.83337C8.29684 2.83374 8.52041 3.05789 8.52005 3.33403L8.50781 12.6674C8.50745 12.9435 8.2833 13.1671 8.00716 13.1667C7.73102 13.1663 7.50745 12.9422 7.50781 12.6661L7.52005 3.33272C7.52041 3.05658 7.74456 2.83301 8.0207 2.83337Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.83301 8C2.83301 7.72386 3.05687 7.5 3.33301 7.5H12.6663C12.9425 7.5 13.1663 7.72386 13.1663 8C13.1663 8.27614 12.9425 8.5 12.6663 8.5H3.33301C3.05687 8.5 2.83301 8.27614 2.83301 8Z" fill="white"/>
                        </svg>  
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-[42px] w-full  flex space-x-5 overflow-auto overflow-y-hidden mb-20">               
            {{-- Potension Client --}}
            <div>
                {{-- Tittle Card --}}
                <div class="w-[265px] flex justify-between">
                    <div class="flex items-center space-x-1">
                        <span class="text-base">Potential Clients</span>
                        <div class="flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">2</div>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                            <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                            <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                        </svg>
                    </div>                   
                </div>
                <div class="w-[265px] h-[1px] bg-palet mt-3.5"></div>

                {{-- Card --}}
                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-colorStatusCard1 status-card-job bg-colorStatusCard2 rounded-sm">Potencial Client</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">Houston - </div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-colorStatusCard1 status-card-job bg-colorStatusCard2 rounded-sm">Potencial Client</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                {{-- Botton add fot potensial --}}
                <div class="flex items-center justify-center hover:cursor-pointer w-[265px] h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
                    <div class="relative">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 8H12.5" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 12V4" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                            
                    </div>
                    <div class="text-palet text-sm">Create a job</div>
                </div>
            </div>
            {{-- Interviewing --}}
            <div>
                {{-- Tittle Card --}}
                <div class="w-[265px] flex justify-between">
                    <div class="flex items-center space-x-1">
                        <span class="text-base">Interviewing</span>
                        <div class="flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">3</div>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                            <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                            <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                        </svg>
                    </div>                   
                </div>
                <div class="w-[265px] h-[1px] bg-colorStatusCard1 mt-3.5"></div>

                {{-- Card --}}
                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">Interviewing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">Interviewing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">Interviewing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>
                {{-- Botton add for Interviewing --}}
                <div class="flex items-center justify-center hover:cursor-pointer w-[265px] h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
                    <div class="relative">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 8H12.5" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 12V4" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                            
                    </div>
                    <div class="text-palet text-sm">Create a job</div>
                </div>
            </div>
            {{-- Trialing --}}
            <div>
                {{-- Tittle Card --}}
                <div class="w-[265px] flex justify-between">
                    <div class="flex items-center space-x-1">
                        <span class="text-base">Trialing</span>
                        <div class="flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">4</div>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                            <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                            <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                        </svg>
                    </div>                   
                </div>
                <div class="w-[265px] h-[1px] bg-[#923BD7] mt-3.5"></div>

                {{-- Card --}}
                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                {{-- Botton add fot Trialing --}}
                <div class="flex items-center justify-center hover:cursor-pointer w-[265px] h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
                    <div class="relative">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 8H12.5" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 12V4" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                            
                    </div>
                    <div class="text-palet text-sm">Create a job</div>
                </div>
            </div>
            {{-- Completed --}}
            <div>
                {{-- Tittle Card --}}
                <div class="w-[265px] flex justify-between">
                    <div class="flex items-center space-x-1">
                        <span class="text-base">Completed</span>
                        <div class="flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">2</div>
                    </div>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                            <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                            <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                        </svg>
                    </div>                   
                </div>
                <div class="w-[265px] h-[1px] bg-[#3B79D7] mt-3.5"></div>

                {{-- Card --}}
                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-palet rounded-sm">Accepted</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>

                <div class="w-[265px] h-[211px] bg-bgbody mt-3 rounded">
                    <div class="flex items-center justify-between p-3">
                        <div class="text-xs font-semibold text-[#2CA6A0]">#12548</div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                            </svg>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">We must improve concierge process to a better</div> 
                    </div>
                    <div class="p-3">
                        <div class="text-xs text-[#827C7C]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim consectetur proin eget .</div>
                    </div>
                    <div class="w-[233px] h-[1px] bg-[#EFEFEF] mx-auto"></div>
                    <div class="px-4 flex items-center justify-between mt-2">
                        <div class="text-white status-card-job bg-palet rounded-sm">Accepted</div>
                        <div class="flex -space-x-2">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="flex items-center p-3 space-x-4">
                        <div>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
                            </svg>  
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">10</span>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
                            </svg>
                            <span class="text-xs text-[#827C7C]">2</span>
                        </div>
                    </div>
                </div>
                
                {{-- Botton add fot Completed --}}
                <div class="flex items-center justify-center hover:cursor-pointer w-[265px] h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
                    <div class="relative">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 8H12.5" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 12V4" stroke="#3BD7CF" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                            
                    </div>
                    <div class="text-palet text-sm">Create a job</div>
                </div>
            </div>
        </div>
    </article>
</main>
@endsection
