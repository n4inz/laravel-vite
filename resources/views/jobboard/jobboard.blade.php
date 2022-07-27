@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] space-x-2 px-5 mt-[85px] w-[75%]">
        <div>
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
                        <div class="w-72 h-8 border rounded-md">
    
                            <input type="text"  class="search_task text-colortext text-xs border-none bg-transparent outline-none  block w-full pl-10 p-2 focus:ring-0" placeholder="Search for tasks, projects, ..." required>
                        </div>
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
    
            <div class="mt-[42px] w-full mb-20">               
               
                <div class="flex  xl:w-full space-x-4 overflow-auto overflow-y-hidden">
                     {{-- Potension Client --}}
                    <div class="w-[265px]">
                        {{-- Tittle Card --}}
                        <div class="w-full flex justify-between">
                            <div class="flex items-center space-x-1">
                                <span class="text-base">Potential Clients</span>
                                <div class="potential_clients flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">{{ $potential_clients->count() }}</div>
                            </div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                    <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                    <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                </svg>
                            </div>                   
                        </div>
                        <div class="w-full h-[1px] bg-palet mt-3.5"></div>
        
                        {{-- Card --}}
                        <div id="potential_clients" class="connectedSortable min-h-[170px]">
                            @foreach ($potential_clients as $value )
                                <a id="{{ $value->id }}" href="{{ route('jobboard.overview', ['id_unique' => $value->id_unique] )}}">
                                    <div class="relative w-full h-[211px] bg-bgbody mt-3 rounded">
                                        <div class="h-40 px-4">
                                            <div class="flex items-center justify-between pt-[11px]">
                                                <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
                                                    <span>#{{ $value->id_unique }} </span>
                                                    @if (now()->diffInMinutes($value->created_at) < 1)
                                                            <div class="w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                                        <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                                        <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pt-[7px]">
                                                <div class="text-sm max-w-[200px] font-medium text-[#222222]">
                                                    {{Str::limit($value->title, 45, $end='...')}}
                                                </div> 
                                            </div>
                                            <div class="pt-2 ">
                                                <div class="text-xs text-[#827C7C] ">
                                                    {{Str::limit($value->description, 110, $end='...')}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
                                        <div class="px-4 flex items-center justify-between mt-2">
                                            <div id="sts{{ $value->id }}">
                                                <div id="sts{{ $value->id }}" class="text-colorStatusCard1 status-card-job bg-colorStatusCard2 rounded-sm">Potencial Client</div>
                                            </div>                                            
                                            <div class="flex -space-x-2">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex items-center px-4 space-x-4">
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
                                </a>
                            @endforeach
                        </div>
                        
                        {{-- Botton add fot potensial --}}
                        <div onclick="potensial_client()" class="w-full flex items-center justify-center hover:cursor-pointer  h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
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
                    <div class="w-[265px]">
                        {{-- Tittle Card --}}
                        <div class="w-full flex justify-between">
                            <div class="flex items-center space-x-1">
                                <span class="text-base">Interviewing</span>
                                <div class="interviewing flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">{{ $interviewing->count() }}</div>
                            </div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                    <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                    <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                </svg>
                            </div>                   
                        </div>
                        <div class="w-full  h-[1px] bg-colorStatusCard1 mt-3.5"></div>
        
                        {{-- Card --}}
                        <div id="interviewing" class="connectedSortable min-h-[170px]">
                            @foreach ($interviewing as $value )
                                <a id="{{ $value->id }}" href="{{ route('jobboard.overview' , ['id_unique' => $value->id_unique]) }}">
                                    <div class="w-full h-[211px] bg-bgbody mt-3 rounded">
                                        <div class="h-40 px-4">
                                            <div class="flex items-center justify-between pt-[11px]">
                                                <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
                                                    <span> #{{ $value->id_unique }}</span>
                                                    @if (now()->diffInMinutes($value->created_at) < 1)
                                                        <div class="w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                                        <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                                        <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pt-[7px]">
                                                <div class="text-sm max-w-[200px] font-medium text-[#222222]">
                                                    {{Str::limit($value->title, 45, $end='...')}}
                                                </div> 
                                            </div>
                                            <div class="pt-2">
                                                <div class="text-xs text-[#827C7C]">
                                                    {{Str::limit($value->description, 110, $end='...')}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
                                        <div class="px-4 flex items-center justify-between mt-2">
                                            <div id="sts{{ $value->id }}">
                                                <div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">Interviewing</div>
                                            </div>
                                            <div class="flex -space-x-2">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex items-center px-4 space-x-4">
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
                                </a>
                            @endforeach
                        </div>
                        {{-- Botton add for Interviewing --}}
                        <div onclick="interviewing()" class="flex items-center justify-center hover:cursor-pointer w-full  h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
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
                    <div class="w-[265px]">
                        {{-- Tittle Card --}}
                        <div class="w-full  flex justify-between">
                            <div class="flex items-center space-x-1">
                                <span class="text-base">Trialing</span>
                                <div class="trialing flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">{{ $trialing->count() }}</div>
                            </div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                    <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                    <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                </svg>
                            </div>                   
                        </div>
                        <div class="w-full  h-[1px] bg-[#923BD7] mt-3.5"></div>

                        {{-- Card --}}
                        <div id="trialing" class="connectedSortable min-h-[170px]">
                            @foreach ($trialing as $value )
                                <a id="{{ $value->id }}" href="{{ route('jobboard.overview' , ['id_unique' => $value->id_unique]) }}">
                                    <div class="w-full h-[211px] bg-bgbody mt-3 rounded">
                                        <div class="h-40 px-4">
                                            <div class="flex items-center justify-between pt-[11px]">
                                                <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
                                                    <span>#{{ $value->id_unique }}</span>
                                                    @if (now()->diffInMinutes($value->created_at) < 1)
                                                        <div class="w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                                        <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                                        <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="pt-[7px]">
                                                <div class="text-sm max-w-[200px] font-medium text-[#222222]">
                                                    {{Str::limit($value->title, 45, $end='...')}}
                                                </div> 
                                            </div>
                                            <div class="pt-2">
                                                <div class="text-xs text-[#827C7C]">
                                                    {{Str::limit($value->description, 110, $end='...')}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
                                        <div class="px-4 flex items-center justify-between mt-2">
                                            <div id="sts{{ $value->id }}">
                                                <div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>
                                            </div>
                                            <div class="flex -space-x-2">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                                                <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex items-center px-4 space-x-4">
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
                                </a>
                            @endforeach
                        </div>

                        {{-- Botton add fot Trialing --}}
                        <div onclick="trialing()" class="flex items-center justify-center hover:cursor-pointer w-full h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
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
                    <div class="w-[265px]">
                        {{-- Tittle Card --}}
                        <div class="w-full flex justify-between">
                            <div class="flex items-center space-x-1">
                                <span class="text-base">Completed</span>
                                <div class="completed flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">{{ $completed->count() }}</div>
                            </div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                    <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                    <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                </svg>
                            </div>                   
                        </div>
                        <div class="w-full  h-[1px] bg-[#3B79D7] mt-3.5"></div>
                        {{-- Card --}}
                        <div id="completed" class="connectedSortable min-h-[170px]">
                            @foreach ($completed as $value )
                            <a id="{{ $value->id }}" href="{{ route('jobboard.overview' , ['id_unique' => $value->id_unique]) }}">
                                <div class="w-full h-[211px] bg-bgbody mt-3 rounded">
                                    <div class="h-40 px-4">
                                        <div class="flex items-center justify-between pt-[11px]">
                                            <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
                                                <span>#{{ $value->id_unique }}</span>
                                                @if (now()->diffInMinutes($value->created_at) < 1)
                                                    <div class="w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                                                @endif
                                            </div>
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                                    <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                                    <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="pt-[7px]">
                                            <div class="text-sm max-w-[200px] font-medium text-[#222222]">
                                                {{Str::limit($value->title, 45, $end='...')}}
                                            </div> 
                                        </div>
                                        <div class="pt-2">
                                            <div class="text-xs text-[#827C7C]">
                                                {{Str::limit($value->description, 110, $end='...')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
                                    <div class="px-4 flex items-center justify-between mt-2">
                                        <div id="sts{{ $value->id }}">
                                            <div class="text-white status-card-job bg-palet rounded-sm">Accepted</div>
                                        </div>
                                        <div class="flex -space-x-2">
                                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                                            <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="flex items-center px-4 space-x-4">
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
                            </a>
                            @endforeach
                        </div>
                        {{-- Botton add fot Completed --}}
                        <div onclick="completed()" class="flex items-center justify-center hover:cursor-pointer w-full  h-[42px] bg-[#DAF2F1] mt-3 rounded mb-5">
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
            </div>
        </div>

        {{-- Modal Create job --}}
        <div id="create-job" tabindex="-1" aria-hidden="true"  aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">
            <div class=" w-[766px] h-screen">
                <form method="post" action="{{ route('jobboard.jobs_store') }}">
                    <div class="status">
                        @if($errors->any())
                            <input type="hidden" name="status" value="{{ old('status') }}">
                        @endif
                    </div>
                    @csrf
                    <div class="shadow bg-white rounded mt-6">
                        <div class="flex items-center justify-between px-8 h-14 rounded-t border-b dark:border-gray-600">
                            <span class="overview-talent-modal-title text-colortext">
                                Create Job
                            </span>
                            <button onclick="close_modal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <div class="px-8 mt-[34px] flex items-center space-x-16">
                            <div class="flex items-center justify-center space-x-3">
                                <input onclick="onlyOneJob(this, 'onlyOneStatus')" id="active" name="onlyOneStatus" checked style="color: #3BD7CF" type="checkbox" value="active" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="active" class="overview-note-body text-colortext" >Active</label>
                            </div>
                            <div class="flex items-center justify-center space-x-3">
                                <input onclick="onlyOneJob(this, 'onlyOneStatus')" id="archived" name="onlyOneStatus" style="color: #3BD7CF" type="checkbox" value="archived" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label  for="archived" class="overview-note-body text-colortext">Archived</label>
                            </div>
                        </div>
                        <div class="px-8 mt-4">
                            <label for="family" class="{{ $errors->has('family') ? 'text-red-600' : '' }} mb-2 overview-note-body block text-colortext">Family*</label>
                            <div class="{{ $errors->has('family') ? 'border-red-500' : 'border-[#CCD3DC]' }} w-[670px] h-8 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                <input id="type_helper" name='family' value="{{ old('family') }}" type="text" id="family" class="costums-family overview-modal-add-talent-text  border-none rounded focus:ring-0 w-full p-1 outline-none" placeholder="">
                            </div>
                            @if($errors->has('family'))
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('family') }}</p>
                            @endif
                        </div>
                        <div class="px-8 mt-4">
                            <label for="title" class="{{ $errors->has('title') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">Title*</label>
                            <div class="{{ $errors->has('title') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                                <input name="title" value="{{ old('title') }}" type="text" id="title" class="h-8 overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none rounded" placeholder="">
                            </div>
                            @if($errors->has('title'))
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                        <div class="px-8 mt-4">
                            <label for="description" class="{{ $errors->has('description') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">Description*</label>
                            <div class="{{ $errors->has('description') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                                <input name="description" value="{{ old('description') }}" type="text" id="description" class="h-8 overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none rounded" placeholder="">
                            </div>
                            @if($errors->has('description'))
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('description') }}</p>
                            @endif
                        </div>
                        <div class="px-8 mt-4">
                            <label for="id" class="{{ $errors->has('id_unique') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">ID*</label>
                            <div class="{{ $errors->has('id_unique') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                                <input name="id_unique" value="{{ old('id_unique') }}" type="text" id="id" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none " placeholder="">
                            </div>
                            @if($errors->has('id_unique'))
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('id_unique') }}</p>
                            @endif
                        </div>
                        <div class="px-8 mt-4">
                            <label for="id" class="mb-2 block overview-note-body text-colortext">Address(city/state/country)</label>
                            <div class="flex items-center">
                                <div class="w-8 h-[34px] flex items-center justify-center rounded-l bg-[#CCD3DC]">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.09993 5.65006C4.37886 5.13849 6.1114 4.83325 7.99967 4.83325C9.88795 4.83325 11.6205 5.13849 12.8994 5.65006C13.5375 5.90529 14.0874 6.22171 14.486 6.59865C14.8856 6.97659 15.1663 7.44994 15.1663 7.99992C15.1663 8.54989 14.8856 9.02325 14.486 9.40119C14.0874 9.77813 13.5375 10.0945 12.8994 10.3498C11.6205 10.8613 9.88795 11.1666 7.99967 11.1666C6.1114 11.1666 4.37886 10.8613 3.09993 10.3498C2.46186 10.0945 1.91193 9.77813 1.51335 9.40119C1.11372 9.02325 0.833008 8.54989 0.833008 7.99992C0.833008 7.44994 1.11372 6.97659 1.51335 6.59865C1.91193 6.22171 2.46186 5.90529 3.09993 5.65006ZM2.20046 7.32521C1.9254 7.58534 1.83301 7.81351 1.83301 7.99992C1.83301 8.18633 1.9254 8.4145 2.20046 8.67463C2.47658 8.93576 2.90297 9.19396 3.47132 9.4213C4.60525 9.87487 6.20605 10.1666 7.99967 10.1666C9.7933 10.1666 11.3941 9.87487 12.528 9.4213C13.0964 9.19396 13.5228 8.93576 13.7989 8.67463C14.074 8.4145 14.1663 8.18633 14.1663 7.99992C14.1663 7.81351 14.074 7.58534 13.7989 7.32521C13.5228 7.06407 13.0964 6.80588 12.528 6.57854C11.3941 6.12497 9.7933 5.83325 7.99967 5.83325C6.20605 5.83325 4.60525 6.12497 3.47132 6.57854C2.90297 6.80588 2.47658 7.06407 2.20046 7.32521Z" fill="#222222"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.57829 3.47157C6.12472 4.6055 5.83301 6.20629 5.83301 7.99992C5.83301 9.79354 6.12472 11.3943 6.57829 12.5283C6.80563 13.0966 7.06383 13.523 7.32496 13.7991C7.58509 14.0742 7.81327 14.1666 7.99967 14.1666C8.18608 14.1666 8.41425 14.0742 8.67439 13.7991C8.93552 13.523 9.19372 13.0966 9.42106 12.5283C9.87463 11.3943 10.1663 9.79354 10.1663 7.99992C10.1663 6.20629 9.87463 4.6055 9.42106 3.47157C9.19372 2.90322 8.93552 2.47683 8.67439 2.20071C8.41425 1.92564 8.18608 1.83325 7.99967 1.83325C7.81327 1.83325 7.58509 1.92564 7.32496 2.20071C7.06383 2.47683 6.80563 2.90322 6.57829 3.47157ZM6.59841 1.5136C6.97635 1.11396 7.4497 0.833252 7.99967 0.833252C8.54965 0.833252 9.023 1.11396 9.40094 1.5136C9.77788 1.91218 10.0943 2.4621 10.3495 3.10018C10.8611 4.37911 11.1663 6.11164 11.1663 7.99992C11.1663 9.8882 10.8611 11.6207 10.3495 12.8997C10.0943 13.5377 9.77788 14.0877 9.40094 14.4862C9.023 14.8859 8.54965 15.1666 7.99967 15.1666C7.4497 15.1666 6.97635 14.8859 6.59841 14.4862C6.22147 14.0877 5.90505 13.5377 5.64982 12.8997C5.13824 11.6207 4.83301 9.8882 4.83301 7.99992C4.83301 6.11164 5.13824 4.37911 5.64982 3.10018C5.90505 2.4621 6.22147 1.91218 6.59841 1.5136Z" fill="#222222"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.83325C4.59392 1.83325 1.83301 4.59416 1.83301 7.99992C1.83301 11.4057 4.59392 14.1666 7.99967 14.1666C11.4054 14.1666 14.1663 11.4057 14.1663 7.99992C14.1663 4.59416 11.4054 1.83325 7.99967 1.83325ZM0.833008 7.99992C0.833008 4.04188 4.04163 0.833252 7.99967 0.833252C11.9577 0.833252 15.1663 4.04188 15.1663 7.99992C15.1663 11.958 11.9577 15.1666 7.99967 15.1666C4.04163 15.1666 0.833008 11.958 0.833008 7.99992Z" fill="#222222"/>
                                    </svg> 
                                </div>
                                <div class="flex items-center justify-center space-x-3 w-[638px] h-8 border border-[#CCD3DC] rounded-r py-4">
                                    <input name="location" value="{{ old('') }}" type="text" id="id" class="overview-note-body text-sm block border-none bg-transparent focus:ring-0 w-full outline-none " placeholder="Enter Location">
                                </div>
                            </div>
                        </div>
            
                        {{-- Category --}}
                        <div class="px-8 mt-8 ">
                            <span class="overview-comments-name text-colortext">Category</span>
                            <div class="p-2 mt-4">
                                <label for="category" class="overview-note-body text-colortext mb-2 block">Category</label>
                                <div class="w-[316px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                    <select name="category" id="category" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                        <option value="Child Care">Child Care</option>
                                        <option value="Infant">Infant</option>
                                        <option value="Family Assist">Family Assist</option>
                                    </select>
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                            <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                        </svg> 
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="flex space-x-[102px]">
                                    <div>
                                        <label for="category" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Subcategories*</label>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="nanny" name="subcategory[]" value="nanny"  style="color: #3BD7CF" type="checkbox" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="nanny" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Nanny</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="sister" name="subcategory[]" value="sister" style="color: #3BD7CF" type="checkbox" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="sister" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Sister</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input name="subcategory[]" value="maternity_care" id="maternity-care" style="color: #3BD7CF" type="checkbox"  class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="maternity-care" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Maternity Care</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="daycare" name="subcategory[]" value="at_home_daycare" style="color: #3BD7CF" type="checkbox"  class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="daycare" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">At Home Daycare</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="category" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Subcategories*</label>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="infant" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="infant" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="infant" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Infant</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="young-baby" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="young_baby" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="young-baby" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Young baby</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="toddler" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="toddler" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="toddler" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Toddler</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="press-schooler" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="press_schooler" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="press-schooler" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Press Schooler</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="grade-schooler" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="grade_schooler" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="grade-schooler" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Grade Schooler</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="simple-housework " name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="simple_housework" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="simple-housework " class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Simple Housework </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="category" class="invisible {{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Subcategory</label>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="laundry" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="laundry" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="laundry" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Laundry</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="prep-meal" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="prep_meal" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="prep-meal" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Prep Meal</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="cook-meal" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="cook_meal" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="cook-meal" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Cook Meal</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="run-errands" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="run_errands" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="run-errands" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Run Errands</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="special-needs" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="special_needs" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="special-needs" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Special Needs</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="provide-transportation" name="subcategory[]" style="color: #3BD7CF" type="checkbox" value="provide_transportation" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="provide-transportation" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">Provide Transportation</label>
                                        </div>
                                    </div>
                                </div>
                                @if($errors->has('subcategory'))
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('subcategory') }}</p>
                                @endif
              
                            </div>
                        </div>
            
                        {{-- Time --}}
                        <div class="px-8 mt-8 ">
                            <span class="overview-comments-name text-colortext">Time</span>
                            <div class="flex space-x-4 p-2 mt-4">
                                <div>
                                    <label for="part-time" class="overview-note-body text-colortext mb-2 block">Part Time</label>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <select id="part-time" name="part_time" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Part Time</option>
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
                                    <div class="flex items-center space-x-3 mt-[13px]">
                                        <input id="comfortable-with-pets" name="comfortable_with_pets" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="comfortable-with-pets" class="overview-note-body text-colortext">Comfortable with pets</label>
                                    </div>
                                </div>
                                <div>
                                    <label for="desired-living" class="overview-note-body text-colortext mb-2 block">Desired Living</label>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <select id="desired-living" name="desired_living" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Desired Living</option>
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
                                    <div class="flex items-center space-x-3 mt-[13px]">
                                        <input id="has-transportation" name="has_transportation" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="has-transportation" class="overview-note-body text-colortext">Has transportation</label>
                                    </div>
                                </div>
                                <div>
                                    <label for="english-level" class="overview-note-body text-colortext mb-2 block">English Level</label>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <select id="english-level" name="english_level" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Fluent</option>
                                            <option>Basic</option>
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
                                    <div class="flex items-center space-x-3 mt-[13px]">
                                        <input id="has-driver-license" name="has_driver_license" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="has-driver-license" class="overview-note-body text-colortext">Has driver license</label>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        {{-- Languages --}}
                        <div class="px-8 mt-8 ">
                            <span class="overview-comments-name text-colortext">Languages</span>
                            <div class="flex space-x-16 mt-4 px-2">
                                <div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="english" name="language[]" style="color: #3BD7CF" type="checkbox" value="English" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="english" class="overview-note-body text-colortext">English</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="french" name="language[]" style="color: #3BD7CF" type="checkbox" value="French" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="french" class="overview-note-body text-colortext">French</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="tagalog" name="language[]" style="color: #3BD7CF" type="checkbox" value="Tagalog" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="tagalog" class="overview-note-body text-colortext">Tagalog</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="thai" name="language[]" style="color: #3BD7CF" type="checkbox" value="Thai" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="thai" class="overview-note-body text-colortext">Thai</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="chinese-mandarin" name="language[]" style="color: #3BD7CF" type="checkbox" value="Chinese Mandarin" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="chinese-mandarin" class="overview-note-body text-colortext">Chinese Mandarin</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="hindi" name="language[]" style="color: #3BD7CF" type="checkbox" value="Hindi" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="hindi" class="overview-note-body text-colortext">Hindi</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="polish" name="language[]" style="color: #3BD7CF" type="checkbox" value="Polish" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="polish" class="overview-note-body text-colortext">Polish</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="vietnamese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Vietnamese" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="vietnamese" class="overview-note-body text-colortext">Vietnamese</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="grade-schooler" name="language[]" style="color: #3BD7CF" type="checkbox" value="Grade Schooler" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="grade-schooler" class="overview-note-body text-colortext">Grade Schooler</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="chinese-cantonese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Chinese Cantonese" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="chinese-cantonese" class="overview-note-body text-colortext">Chinese Cantonese</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="japanese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Japanese" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="japanese" class="overview-note-body text-colortext">Japanese</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="russian" name="language[]" style="color: #3BD7CF" type="checkbox" value="Russian" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="russian" class="overview-note-body text-colortext">Russian</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="ethiopian" name="language[]" style="color: #3BD7CF" type="checkbox" value="Ethiopian" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="ethiopian" class="overview-note-body text-colortext">Ethiopian</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="korean" name="language[]" style="color: #3BD7CF" type="checkbox" value="Korean" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="korean" class="overview-note-body text-colortext">Korean</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="spanish" name="language[]" style="color: #3BD7CF" type="checkbox" value="Spanish" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="spanish" class="overview-note-body text-colortext">Spanish</label>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        {{-- Children/ seniors --}}
                        <div class="px-8 mt-8 ">
                            <span class="overview-comments-name text-colortext">Childrens/ Seniors</span>
                            <div class="flex mt-4 px-2">
                                <button class="w-[71px] h-8 rounded-lg bg-palet flex items-center justify-center">
                                    <span class="overview-attechment-btn-text text-center">Add</span>
                                </button>
                            </div>
                        </div>
            
                        {{-- availability --}}
                        <div class="px-8 mt-8 ">
                            <span class="overview-comments-name text-colortext">Availability</span>
                            <div class="mt-4 px-2 ">
                                <div class="flex space-x-[110px]">
                                    <div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="all-days" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="all-days" class="overview-note-body text-colortext">All days</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="monday" name="monday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="monday" class="overview-note-body text-colortext">Monday</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="tuesday" name="tuesday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="tuesday" class="overview-note-body text-colortext">Tuesday</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="wednesday" name="wednesday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="wednesday" class="overview-note-body text-colortext">Wednesday</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="thursday" name="thursday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="thursday" class="overview-note-body text-colortext">Thursday</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="friday" name="friday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="friday" class="overview-note-body text-colortext">Friday</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="saturday" name="saturday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="saturday" class="overview-note-body text-colortext">Saturday</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="sunday" name="sunday" style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="sunday" class="overview-note-body text-colortext">Sunday</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex space-x-4 mt-8">
                                    <div>
                                        <label for="start-date" class="{{ $errors->has('start_time') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Start time*</label>
                                        <div class="{{ $errors->has('start_time') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                            <input type="time" name="start_time" value="{{ old('start_time') }}" id="start-date" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                        </div>
                                        @if($errors->has('start_time'))
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('start_time') }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="end-time*" class="{{ $errors->has('end_time') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">End time*</label>
                                        <div class="{{ $errors->has('end_time') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <input type="time" name="end_time" value="{{ old('end_time') }}" id="end-time" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                        </div>
                                        @if($errors->has('end_time'))
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('end_time') }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="duration" class="overview-note-body text-colortext mb-2 block">Duration</label>
                                        <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <select id="duration" name="duration" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option>1 Month</option>
                                                <option>3 Month</option>
                                                <option>6 Month</option>
                                                <option>1 Year</option>
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
                                <div class="flex space-x-4 mt-6">
                                    <div>
                                        <label for="start-date" class="{{ $errors->has('start_date') ? 'text-red-600' : '' }} overview-note-body text-colortext block">Start date*</label>
                                        <div class="flex items-center space-x-3 py-2 ">
                                            <input id="asap" name="asap" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="asap" class="overview-note-body text-colortext">ASAP</label>
                                        </div>
                                        <div class="{{ $errors->has('start_date') ? 'border-red-500 ' : 'border-[#CCD3DC]'}} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                            <input type="date" name="start_date" value="{{ old('start_date') }}" id="start-date" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                        </div>
                                        @if($errors->has('start_date'))
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('start_date') }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="end-date" class="{{ $errors->has('end_date') ? 'text-red-600' : '' }} overview-note-body text-colortext block">End date*</label>
                                        <div class="flex items-center space-x-3 py-2 ">
                                            <input id="tbd" name="tbd" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="tbd" class="overview-note-body text-colortext">TBD</label>
                                        </div>
                                        <div class="{{ $errors->has('start_date') ? 'border-red-500 ' : 'border-[#CCD3DC]'}} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                            <input type="date" name="end_date" value="{{ old('end_date') }}" id="end-date" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                        </div>
                                        @if($errors->has('family'))
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('end_date') }}</p>
                                        @endif
                                    </div>
            
                                </div>
                            </div>
                        </div>
            
                        {{-- Salary --}}
                        <div class="px-8 mt-8 ">
                            <span class="overview-comments-name text-colortext">Salary</span>
                            <div class="mt-4 px-2 ">
                                <div class="flex space-x-2 ">
                                    <div>
                                        <label for="start-date" class="overview-note-body text-colortext mb-2 block">Type</label>
                                        <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                            <select id="duration" name="salary_type" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option>Hourly</option>
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
                                        <div class="flex items-center space-x-3 mt-[13px] ">
                                            <input id="rate-negotible" name="rate_negotiable" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="rate-negotible" class="overview-note-body text-colortext">Rate negotiable</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="rate" class="{{ $errors->has('rate') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Rate*</label>
                                        <div class="{{ $errors->has('rate') ? 'border-red-500 ' : 'border-[#CCD3DC]'}} w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <input type="text" name="rate" value="{{ old('rate') }}" id="rate" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-3 outline-none " placeholder="">
                                        </div>
                                        @if($errors->has('family'))
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('rate') }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <label for="daily" class="overview-note-body text-colortext mb-2 block">Pay frequency</label>
                                        <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <select id="daily" name="pay_frequency" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option>Daily</option>
                                                <option>Week</option>
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
                                        <label for="pay-with" class="overview-note-body text-colortext mb-2 block">Pay with</label>
                                        <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <select id="pay-with" name="pay_with" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option value="any">Any</option>
                                                <option value="check">Check</option>
                                                <option value="cash">Cash</option>
                                                <option value="online_payment">Online Payment</option>
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
                            </div>
                        </div>
                        <div class="px-8 py-8">
                            <button class="w-40 h-[42px] bg-palet rounded-lg flex items-center justify-center">
                                <span class="overview-attechment-btn-text">Add Job</span>
                            </button>
                           
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </article>
    <script src="{{ asset('js/jQuery/jobBoardJquery.js') }}"></script>
    <script src="{{ asset('js/jQuery/jobBoard.js') }}"></script>
    <script>
        var input = document.querySelector('input[name=family]');

        function tagTemplate(tagData){
            return `
            <div class="bg-palet h-5 flex items-center space-x-2 rounded-md pl-1">
                <x title='' class='tagify__tag__removeBtn text-white' role='button' aria-label='remove tag'></x>

                <img width="20" height="20" src="{{ asset('storage/Talent attached file/avatar/${tagData.avatar}') }}" class="rounded-full" alt="">
                <span class="text-xs text-white pr-2">${tagData.name}</span>
            </div>
            `
        }
        function suggestionItemTemplate(tagData){
            return `
                <div ${this.getAttributes(tagData)}
                    class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                    tabindex="0"
                    role="option">
                    ${ tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap'>
                        <img onerror="this.style.visibility='hidden'" src="{{ asset('storage/Talent attached file/avatar/${tagData.avatar}') }}">
                    </div>` : ''
                    }
                    <strong>${tagData.name}</strong>
                    <span>${tagData.email}</span>
                </div>
            `
        }

        new Tagify(input,{
            whitelist : <?=  json_encode($json) ?>,
            maxTags:1,
            skipInvalid: true,
            dropdown: {
                closeOnSelect: true,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
            },

            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate,
                // dropdownHeader: dropdownHeaderTemplate
            },

        })
    </script>
    <script src="{{ asset('js/jQuery/jobBoardCreate.js') }}"></script>
    @if ($errors->any())
        <script>
            modal.show()
        </script>
    @endif
    <script>
        var status , id;
        $(function(){
            $("#potential_clients, #interviewing, #trialing, #completed")
            .sortable({
                connectWith: ".connectedSortable",
                receive: function (event , ui,){
                    status = event.target.id;
                    id = ui.item.attr('id');
                    $.ajax({
                        type:'POST',
                        url:'{{ route("jobboard.status") }}',
                        data:{status ,id , _token: '{{ csrf_token() }}'},
                        success:function(res){
                            $('.potential_clients').html(`<span>${res.count_potential_clients}</span>`)
                            $('.interviewing').html(`<span>${res.count_interviewing}</span>`)
                            $('.trialing').html(`<span>${res.count_trialing}</span>`)
                            $('.completed').html(`<span>${res.count_completed}</span>`)
                            if(status == 'potential_clients'){
                                 $('#sts'+id).html('<div class="text-colorStatusCard1 status-card-job bg-colorStatusCard2 rounded-sm">Potencial Client</div>')
                            }

                            if(status == 'interviewing'){
                                $('#sts'+id).html('<div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">Interviewing</div>')
                            }   

                            if(status == 'trialing'){
                                $('#sts'+id).html('<div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>')
                            }

                            if(status == 'completed'){
                                $('#sts'+id).html('<div class="text-white status-card-job bg-palet rounded-sm">Accepted</div>')
                            }
                        }
                    });
                }
            })
        })
    </script>
</main>
@endsection
