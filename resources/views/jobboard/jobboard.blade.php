@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] space-x-2 px-5 mt-[85px] w-[75%]">
        <div>
            <div class="h-20 xl:w-full bg-bgbody px-6 flex items-center justify-between rounded">
                <div class="flex items-center">
                    <div onclick="create_jobs()" class="h-8 w-[119px] bg-palet rounded-lg flex items-center justify-center space-x-2 hover:cursor-pointer">
                        <div class="relative">
                            <div class="w-[10.33px] h-[1px] bg-white"></div>
                            <div class="absolute w-[10.33px] h-[1px] bg-white rotate-90"></div>
                        </div>
                        <div class="btn-create-list text-white ">Create a Job</div>
                    </div>
        
                    <div class="relative w-80 left-1">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                            </svg>
                        </div>
                        <div class="w-72 h-8 border rounded-md">
    
                            <input id="search_task" type="text" class="search_task text-colortext text-xs border-none bg-transparent outline-none  block w-full pl-10 p-2 focus:ring-0" placeholder="Search for tasks, projects, ..." required autocomplete="off">
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
               
                <div class="flex xl:w-full space-x-4 overflow-auto overflow-y-hidden">
                    @foreach ($status as $sts_val )
                        <div class="w-[265px]">
                            {{-- Tittle Card --}}
                            <div class="w-[265px] flex justify-between">
                                <div class="flex items-center space-x-1">
                                    <span class="text-base">{{ $sts_val->status_name }}</span>
                                    <div class="{{ $sts_val->id }} flex items-center justify-center w-6 h-5 border text-[#827C7C] border-[#827C7C] rounded-xl">{{ $sts_val->job_models->count() }}</div>
                                </div>
                                @if($sts_val->status_key == 'potential_client')
                                    <div data-dropdown-toggle="dropdownBottom"  data-dropdown-placement="left-start" class="hover:cursor-pointer">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                            <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                            <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                        </svg>
                                    </div>
                                    <div id="dropdownBottom" class="hidden z-10  bg-white rounded divide-y divide-gray-100 shadow">
                                        <div class=" px-2 space-x-1 text-xs text-gray-700 flex items-center justify-center hover:bg-gray-100 ">
                                          
                                            <form class="sync-calendly" action="{{ route('jobboard.sync_calendly') }}" method="POST">@csrf
                                                <button class="block py-2 justify-">Sync To Calendly</button>
                                            </form>
                                            <i class="fa fa-refresh text-palet" aria-hidden="true"></i>

                                        </div>
                                    </div>
                                @else
                                    <div class="hover:cursor-pointer">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
                                            <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
                                            <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
                                        </svg>
                                    </div>              
                                @endif
                            </div>
                            <div class="w-[265px] h-[1px] bg-palet mt-3.5"></div>
                            {{-- Card --}}
                           
                                <div id="{{ $sts_val->id }}" class="connectedSortable min-h-[517px] pb-52 w-[265px] ">
                                    
                                    @foreach ($sts_val->job_models as $value )
                                        @if ($value->status_calendly)
                                            <div onclick="edit_create_job_calendly('{{ $value->id }}')" class="hover:cursor-move" id="data_{{ $value->id }}" href="{{ route('jobboard.overview', ['uid' => $value->uid] )}}">
                                                <div id="search_list" class="relative w-full h-[211px] bg-bgbody mt-3 rounded">
                                                    <div class="hidden">{{ $sts_val->status_name }} {{ $value->family }} {{ $value->title }} {{ $value->description }} {{ $value->location }}</div>
                                                    <div class="h-40 px-4">
                                                        <div class="flex items-center justify-between pt-[11px]">
                                                            <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
                                                                <span>#{{ $value->id_unique }} </span>
                                                                @if (now()->diffInMinutes($value->created_at) < 1)
                                                                        <div class="w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="pt-[7px]">
                                                            <div class="text-sm max-w-[200px] font-medium text-[#222222]">
                                                                {{Str::limit($value->title, 45, $end='...')}}
                                                            </div> 
                                                        </div>
                                                        <div class="pt-2 ">
                                                            <div class="text-xs text-[#827C7C] ">
                                                                {!! Str::limit($value->description, 110, $end='</strong></p>') !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
                                                    <div class="px-4 flex items-center justify-between mt-2">
                                                        <div id="sts{{ $value->id }}">
                                                            <div id="sts{{ $value->id }}" class="text-white status-card-job bg-colorStatusCard1 rounded-sm">{{ $sts_val->status_name }}</div>
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
                                            </div>
                                        @else
                                        <a class="hover:cursor-move" id="data_{{ $value->id }}" href="{{ route('jobboard.overview', ['uid' => $value->uid] )}}">
                                            <div id="search_list" class="relative w-full h-[211px] bg-bgbody mt-3 rounded">
                                                <div class="hidden">{{ $sts_val->status_name }} {{ $value->family }} {{ $value->title }} {{ $value->description }} {{ $value->location }}</div>
                                                <div class="h-40 px-4">
                                                    <div class="flex items-center justify-between pt-[11px] ">
                                                        <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
                                                            <span>#{{ $value->id_unique }} </span>
                                                            @if (now()->diffInMinutes($value->created_at) < 1)
                                                                    <div class="w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="pt-[7px]">
                                                        <div class="text-sm max-w-[200px] font-medium text-[#222222]">
                                                            {{Str::limit($value->title, 45, $end='...')}}
                                                        </div> 
                                                    </div>
                                                    <div class="pt-2 ">
                                                        <div class="text-xs text-[#827C7C] ">
                                                            {!! Str::limit($value->description, 110, $end='</strong></p>') !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
                                                <div class="px-4 flex items-center justify-between mt-2">
                                                    <div id="sts{{ $value->id }}">
                                                        <div id="sts{{ $value->id }}" class="text-white status-card-job bg-colorStatusCard1 rounded-sm">{{ $sts_val->status_name }}</div>
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
                                                        <span class="text-xs text-[#827C7C]">{{ $value->comment->count() }}</span>
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
                                        @endif
                                    @endforeach
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Modal Create job --}}
        <div id="create-job" tabindex="-1" aria-hidden="true"  aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">
            <div class=" w-[766px] h-screen">
                <form class="validations" method="post" action="{{ route('jobboard.jobs_store') }}">
                    @csrf
                    <div class=" shadow bg-white rounded mt-6">
                        <div class="load_edit_job_calendly">   
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
                            <div class="px-8 mt-4 family-errors">
                                <label class="{{ $errors->has('family') ? 'text-red-600' : '' }} mb-2 overview-note-body block text-colortext">Family*</label>
                                <div class="{{ $errors->has('family') ? 'border-red-500' : 'border-[#CCD3DC]' }} w-[670px] h-8 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input name='family' value="{{ old('family') }} " type="text" class="costums-family overview-modal-add-talent-text  border-none rounded focus:ring-0 w-full p-1 outline-none" autocomplete="off">
                                    <a href="{{ route('user_client.client_created') }}" class="flex px-2">
                                        <div class="hover:cursor-pointer w-10 h-5 rounded-lg bg-palet flex items-center justify-center">
                                            <span class="text-xs font-semibold text-white text-center">+</span>
                                        </div>
                                    </a>
                                </div>
                                @if($errors->has('family'))
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('family') }}</p>
                                @endif
                            </div>
                            <div class="px-8 mt-4 title-errors">
                                <label class="{{ $errors->has('title') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">Title*</label>
                                <div class="{{ $errors->has('title') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} relative flex flex-col items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                                    <input name="title" value="{{ old('title') }}" type="text" class="h-8  block border-none bg-transparent focus:ring-0 w-full outline-none rounded" autocomplete="off">
                                </div>
                                @if($errors->has('title'))
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('title') }}</p>
                                @endif
                            </div>
                            <div class="px-8 mt-4 description-errors">
                                <label for="description-label" class="{{ $errors->has('description') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">Description*</label>
                                <div class="{{ $errors->has('description') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px]  flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                                    {{-- <input name="description" value="{{ old('description') }}" type="text" id="description" class="h-8 overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none rounded" placeholder=""> --}}
                                    <textarea id="editor1" name="description" rows="3" class="{{ $errors->has('description') ? 'placeholder-red-600' : '' }}  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none">{{ old('description') }}</textarea>
                                </div>
                                @if($errors->has('description'))
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('description') }}</p>
                                @endif
                                <div class="replace_description"></div>
                            </div>
                            <div class="px-8 mt-4 address-errors">
                                <label class="mb-2 block overview-note-body text-colortext">Address(city/state/country)</label>
                                <div class="flex items-center">
                                    <div class="w-8 h-[34px] flex items-center justify-center rounded-l bg-[#CCD3DC]">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.09993 5.65006C4.37886 5.13849 6.1114 4.83325 7.99967 4.83325C9.88795 4.83325 11.6205 5.13849 12.8994 5.65006C13.5375 5.90529 14.0874 6.22171 14.486 6.59865C14.8856 6.97659 15.1663 7.44994 15.1663 7.99992C15.1663 8.54989 14.8856 9.02325 14.486 9.40119C14.0874 9.77813 13.5375 10.0945 12.8994 10.3498C11.6205 10.8613 9.88795 11.1666 7.99967 11.1666C6.1114 11.1666 4.37886 10.8613 3.09993 10.3498C2.46186 10.0945 1.91193 9.77813 1.51335 9.40119C1.11372 9.02325 0.833008 8.54989 0.833008 7.99992C0.833008 7.44994 1.11372 6.97659 1.51335 6.59865C1.91193 6.22171 2.46186 5.90529 3.09993 5.65006ZM2.20046 7.32521C1.9254 7.58534 1.83301 7.81351 1.83301 7.99992C1.83301 8.18633 1.9254 8.4145 2.20046 8.67463C2.47658 8.93576 2.90297 9.19396 3.47132 9.4213C4.60525 9.87487 6.20605 10.1666 7.99967 10.1666C9.7933 10.1666 11.3941 9.87487 12.528 9.4213C13.0964 9.19396 13.5228 8.93576 13.7989 8.67463C14.074 8.4145 14.1663 8.18633 14.1663 7.99992C14.1663 7.81351 14.074 7.58534 13.7989 7.32521C13.5228 7.06407 13.0964 6.80588 12.528 6.57854C11.3941 6.12497 9.7933 5.83325 7.99967 5.83325C6.20605 5.83325 4.60525 6.12497 3.47132 6.57854C2.90297 6.80588 2.47658 7.06407 2.20046 7.32521Z" fill="#222222"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.57829 3.47157C6.12472 4.6055 5.83301 6.20629 5.83301 7.99992C5.83301 9.79354 6.12472 11.3943 6.57829 12.5283C6.80563 13.0966 7.06383 13.523 7.32496 13.7991C7.58509 14.0742 7.81327 14.1666 7.99967 14.1666C8.18608 14.1666 8.41425 14.0742 8.67439 13.7991C8.93552 13.523 9.19372 13.0966 9.42106 12.5283C9.87463 11.3943 10.1663 9.79354 10.1663 7.99992C10.1663 6.20629 9.87463 4.6055 9.42106 3.47157C9.19372 2.90322 8.93552 2.47683 8.67439 2.20071C8.41425 1.92564 8.18608 1.83325 7.99967 1.83325C7.81327 1.83325 7.58509 1.92564 7.32496 2.20071C7.06383 2.47683 6.80563 2.90322 6.57829 3.47157ZM6.59841 1.5136C6.97635 1.11396 7.4497 0.833252 7.99967 0.833252C8.54965 0.833252 9.023 1.11396 9.40094 1.5136C9.77788 1.91218 10.0943 2.4621 10.3495 3.10018C10.8611 4.37911 11.1663 6.11164 11.1663 7.99992C11.1663 9.8882 10.8611 11.6207 10.3495 12.8997C10.0943 13.5377 9.77788 14.0877 9.40094 14.4862C9.023 14.8859 8.54965 15.1666 7.99967 15.1666C7.4497 15.1666 6.97635 14.8859 6.59841 14.4862C6.22147 14.0877 5.90505 13.5377 5.64982 12.8997C5.13824 11.6207 4.83301 9.8882 4.83301 7.99992C4.83301 6.11164 5.13824 4.37911 5.64982 3.10018C5.90505 2.4621 6.22147 1.91218 6.59841 1.5136Z" fill="#222222"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.83325C4.59392 1.83325 1.83301 4.59416 1.83301 7.99992C1.83301 11.4057 4.59392 14.1666 7.99967 14.1666C11.4054 14.1666 14.1663 11.4057 14.1663 7.99992C14.1663 4.59416 11.4054 1.83325 7.99967 1.83325ZM0.833008 7.99992C0.833008 4.04188 4.04163 0.833252 7.99967 0.833252C11.9577 0.833252 15.1663 4.04188 15.1663 7.99992C15.1663 11.958 11.9577 15.1666 7.99967 15.1666C4.04163 15.1666 0.833008 11.958 0.833008 7.99992Z" fill="#222222"/>
                                        </svg> 
                                    </div>
                                    <div class="flex relative items-center justify-center space-x-3 w-[638px] h-8 border border-[#CCD3DC] rounded-r py-4">
                                        <input name="address" value="{{ old('address' ) }}" type="text" class="placepicker overview-note-body text-sm block border-none bg-transparent focus:ring-0 w-full outline-none " placeholder="Enter Location" autocomplete="off">
                                    </div>
                                    @if($errors->has('address'))
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                            </div>
                
                            {{-- Category --}}
                            <div class="px-8 mt-8 ">
                                <span class="overview-comments-name text-colortext">Category</span>
                                <div class="p-2 mt-4">
                                    <label for="category" class="overview-note-body text-colortext mb-2 block">Category</label>
                                    <div class="w-[316px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <select name="category" id="category" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            
                                            @if($category->count() == 0)
                                                <option value="">Category is empty</option>
                                            @endif
                                            @foreach ($category as $val )
                                                <option @if(old('category') == $val->id) selected @endif value="{{ $val->id }}">{{ $val->category_name }}</option>
                                            @endforeach
                                        
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
                                    <div class="sub_categorys grid grid-cols-3">
                                    </div>
                                    <div class="sub_categorys_error">
                                        @if($errors->has('subcategory'))
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('subcategory') }}</p>
                                        @endif
                                    </div>
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
                                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Part Time</option>
                                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Full Time</option>
                                            </select>
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                    <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                </svg> 
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[13px]">
                                            <input id="comfortable-with-pets" @if(old('comfortable_with_pets')) checked @endif name="comfortable_with_pets" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="comfortable-with-pets" class="overview-note-body text-colortext">Comfortable with pets</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="desired-living" class="overview-note-body text-colortext mb-2 block">Desired Living</label>
                                        <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <select id="desired-living" name="desired_living" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option @if(old('desired_living') == 'any') selected @endif value="Any" >Any</option>
                                                <option @if(old('desired_living') == 'Live in') selected @endif value="Live in" >Live in</option>
                                                <option @if(old('desired_living') == 'Live out') selected @endif value="Live out" >Live out</option>
                                            </select>
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                    <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                </svg> 
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[13px]">
                                            <input id="has-transportation" name="has_transportation" @if(old('has_transportation')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="has-transportation" class="overview-note-body text-colortext">Has transportation</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="english-level" class="overview-note-body text-colortext mb-2 block">English Level</label>
                                        <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                            <select id="english-level" name="english_level" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                <option @if(old('english_level') == 'Basic') selected @endif value="Basic">Basic</option>
                                                <option  @if(old('english_level') == 'Conversational') selected @endif value="Conversational" >Conversational</option>
                                                <option @if(old('english_level') == 'Fluent native') selected @endif value="Fluent native" >Fluent native</option>
                                            </select>
                                            <div>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                    <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                </svg> 
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[13px]">
                                            <input id="has-driver-license" name="has_driver_license" @if(old('has_driver_license')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="has-driver-license" class="overview-note-body text-colortext">Has driver license</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            {{-- Languages --}}
                            <div class="px-8 mt-8 ">
                                <span class="overview-comments-name text-colortext">Languages</span>
                                <div class="flex space-x-16 mt-4 px-2 error_languages">
                                    <div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="english" name="language[]" @if(is_array(old('language')) && in_array('English', old('language')) ) checked @endif style="color: #3BD7CF" type="checkbox" value="English" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="english" class="overview-note-body text-colortext">English</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="french" name="language[]" style="color: #3BD7CF" type="checkbox" value="French" @if(is_array(old('language')) && in_array('French', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="french" class="overview-note-body text-colortext">French</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="tagalog" name="language[]" style="color: #3BD7CF" type="checkbox" value="Tagalog" @if(is_array(old('language')) && in_array('Tagalog', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="tagalog" class="overview-note-body text-colortext">Tagalog</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="thai" name="language[]" style="color: #3BD7CF" type="checkbox" value="Thai" @if(is_array(old('language')) && in_array('Thai', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="thai" class="overview-note-body text-colortext">Thai</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="chinese-mandarin" name="language[]" style="color: #3BD7CF" type="checkbox" value="Chinese Mandarin" @if(is_array(old('language')) && in_array('Chinese Mandarin', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="chinese-mandarin" class="overview-note-body text-colortext">Chinese Mandarin</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="hindi" name="language[]" style="color: #3BD7CF" type="checkbox" value="Hindi" @if(is_array(old('language')) && in_array('Hindi', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="hindi" class="overview-note-body text-colortext">Hindi</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="polish" name="language[]" style="color: #3BD7CF" type="checkbox" value="Polish" @if(is_array(old('language')) && in_array('Polish', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="polish" class="overview-note-body text-colortext">Polish</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="vietnamese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Vietnamese" @if(is_array(old('language')) && in_array('Vietnamese', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="vietnamese" class="overview-note-body text-colortext">Vietnamese</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="chinese-cantonese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Chinese Cantonese" @if(is_array(old('language')) && in_array('Chinese Cantonese', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="chinese-cantonese" class="overview-note-body text-colortext">Chinese Cantonese</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="japanese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Japanese" @if(is_array(old('language')) && in_array('Japanese', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="japanese" class="overview-note-body text-colortext">Japanese</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="russian" name="language[]" style="color: #3BD7CF" type="checkbox" value="Russian" @if(is_array(old('language')) && in_array('Russian', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="russian" class="overview-note-body text-colortext">Russian</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="ethiopian" name="language[]" style="color: #3BD7CF" type="checkbox" value="Ethiopian" @if(is_array(old('language')) && in_array('Ethiopian', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="ethiopian" class="overview-note-body text-colortext">Ethiopian</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="korean" name="language[]" style="color: #3BD7CF" type="checkbox" value="Korean" @if(is_array(old('language')) && in_array('Korean', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="korean" class="overview-note-body text-colortext">Korean</label>
                                        </div>
                                        <div class="flex items-center space-x-3 mt-[10px]">
                                            <input id="spanish" name="language[]" style="color: #3BD7CF" type="checkbox" value="Spanish" @if(is_array(old('language')) && in_array('Spanish', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            <label for="spanish" class="overview-note-body text-colortext">Spanish</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            {{-- Children/ seniors --}}
                            <div class="px-8 mt-8 ">
                                <span class="overview-comments-name text-colortext">Childrens/ Seniors</span>
                                <div class="flex mt-4 px-2">
                                    <div onclick="addChile()" class="hover:cursor-pointer w-[71px] h-8 rounded-lg bg-palet flex items-center justify-center">
                                        <span class="overview-attechment-btn-text text-center">Add</span>
                                    </div>
                                </div>

                                <div class="append_chile px-2 mt-8 flex flex-wrap justify-around">
                                </div>
                            </div>
                            
                            {{-- availability --}}
                            <div class="px-8 mt-8 ">
                                <span class="overview-comments-name text-colortext">Availability</span>
                                <div class="mt-4 px-2 ">
                                    <div class="flex space-x-[110px]">
                                        <div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="all-days" name="all_days"  @if(old('all_days')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="all-days" class="overview-note-body text-colortext">All days</label>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="monday" name="monday" @if(old('monday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="monday" class="overview-note-body text-colortext">Monday</label>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="tuesday" name="tuesday" @if(old('tuesday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="tuesday" class="overview-note-body text-colortext">Tuesday</label>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="wednesday" name="wednesday" @if(old('wednesday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="wednesday" class="overview-note-body text-colortext">Wednesday</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="thursday" name="thursday" @if(old('thursday')) checked @endif  style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="thursday" class="overview-note-body text-colortext">Thursday</label>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="friday" name="friday" @if(old('friday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="friday" class="overview-note-body text-colortext">Friday</label>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="saturday" name="saturday" @if(old('saturday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="saturday" class="overview-note-body text-colortext">Saturday</label>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[10px]">
                                                <input id="sunday" name="sunday" @if(old('sunday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="sunday" class="overview-note-body text-colortext">Sunday</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex space-x-4 mt-8">
                                        <div class="start-time-errors">
                                            <label class="{{ $errors->has('start_time') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Start time*</label>
                                            <div class="{{ $errors->has('start_time') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                                <input type="time" name="start_time" value="{{ old('start_time') }}" style="font-weight: 400; font-size: 13px;line-height: 18px;letter-spacing: -0.08px;" class="block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="" autocomplete="off">
                                            </div>
                                            @if($errors->has('start_time'))
                                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('start_time') }}</p>
                                            @endif
                                        </div>
                                        <div class="end-time-errors">
                                            <label  class="{{ $errors->has('end_time') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">End time*</label>
                                            <div class="{{ $errors->has('end_time') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                                <input type="time" name="end_time" value="{{ old('end_time') }}" style="font-weight: 400; font-size: 13px;line-height: 18px;letter-spacing: -0.08px;" class="block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="" autocomplete="off">
                                            </div>
                                            @if($errors->has('end_time'))
                                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('end_time') }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="duration" class="overview-note-body text-colortext mb-2 block">Duration</label>
                                            <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                                <select id="duration" name="duration" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                    <option @if(old('duration') == '1 Month') selected @endif value="1 Month">1 Month</option>
                                                    <option @if(old('duration') == '3 Month') selected @endif value="3 Month">3 Month</option>
                                                    <option @if(old('duration') == '6 Month') selected @endif value="6 Month">6 Month</option>
                                                    <option @if(old('duration') == '1 Year') selected @endif value="1 Year">1 Year</option>
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

                                    <div class="flex space-x-[165px] mt-6">
                                        <div>
                                            <label for="start-date" class="{{ $errors->has('start_date') ? 'text-red-600' : '' }} overview-note-body text-colortext block">Start date*</label>
                                            <div class="flex items-center space-x-3 py-2 ">
                                                <input id="asap" name="asap" @if(old('asap')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="asap" class="overview-note-body text-colortext">ASAP</label>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="end-date" class="{{ $errors->has('end_date') ? 'text-red-600' : '' }} overview-note-body text-colortext block">End date*</label>
                                            <div class="flex items-center space-x-3 py-2 ">
                                                <input id="tbd" name="tbd" @if(old('tbd')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="tbd" class="overview-note-body text-colortext">TBD</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div date-rangepicker datepicker-format="mm/dd/yyyy" class="flex space-x-4 relative ">
                                        <div class="start-date-errors">
                                            <div class="input_asap relative w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                                <input style="font-weight: 400; font-size: 13px;line-height: 18px;letter-spacing: -0.08px;" name="start_date" type="text" value="{{ old('start_date') }}" class="start_date block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " autocomplete="off">
                                            </div>
                                            @if($errors->has('start_date'))
                                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('start_date') }}</p>
                                            @endif
                                        </div>
                                        <div class="end-date-errors">
                                            <div class="input_tbd relative w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                                <input style="font-weight: 400; font-size: 13px;line-height: 18px;letter-spacing: -0.08px;" name="end_date" type="text" value="{{ old('end_date') }}" class="end_date block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none" autocomplete="off">
                                            </div>
                                            @if($errors->has('end_date'))
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
                                                    <option @if(old('salary_type') == 'Hourly') selected @endif value="Hourly">Hourly</option>
                                                    <option @if(old('salary_type') == 'Daily') selected @endif value="Daily" >Daily</option>
                                                    <option @if(old('salary_type') == 'Weekly') selected @endif value="Weekly" >Weekly</option>
                                                    <option @if(old('salary_type') == 'Monthly') selected @endif value="Monthly" >Monthly</option>
                                                    <option @if(old('salary_type') == 'Year') selected @endif value="Year" >Year</option>
                                                </select>
                                                <div>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                        <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                                    </svg> 
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3 mt-[13px] ">
                                                <input id="rate-negotible" name="rate_negotiable" @if(old('rate_negotiable')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                <label for="rate-negotible" class="overview-note-body text-colortext">Rate negotiable</label>
                                            </div>
                                        </div>
                                        <div class="rate-errors">
                                            <label class="{{ $errors->has('rate') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Range*</label>
                                            <div class="{{ $errors->has('rate') ? 'border-red-500 ' : 'border-[#CCD3DC]'}} w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                                <input type="text" name="rate" value="{{ old('rate') }}"  class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-3 outline-none " autocomplete="off">
                                            </div>
                                            @if($errors->has('family'))
                                                <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('rate') }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="daily" class="overview-note-body text-colortext mb-2 block">Pay frequency</label>
                                            <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                                <select id="daily" name="pay_frequency" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                                    <option @if(old('pay_frequency') == 'Daily') selected @endif value="Daily" >Daily</option>
                                                    <option @if(old('pay_frequency') == 'Weekly') selected @endif value="Weekly" >Weekly</option>
                                                    <option @if(old('pay_frequency') == 'Monthly') selected @endif value="Monthly" >Monthly</option>
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
                                                    <option @if(old('pay_with') == 'any') selected @endif value="any">Any</option>
                                                    <option @if(old('pay_with') == 'check') selected @endif value="check">Check</option>
                                                    <option @if(old('pay_with') == 'cash') selected @endif value="cash">Cash</option>
                                                    <option @if(old('pay_with') == 'online_payment') selected @endif value="online_payment">Online Payment</option>
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
                        </div>
                        <div class="px-8 py-8 flex space-x-2 button_show">
                            <button class="btn_add_job w-40 h-[42px] bg-palet rounded-lg flex items-center justify-center">
                                <span class="overview-attechment-btn-text">Add Job</span>
                            </button>
                            <button onclick="save_and_send()" class="btn_save_and_send h-[42px] bg-colorStatusCard1 rounded-lg flex items-center justify-center px-2 hover:cursor-pointer">
                                <span class=" overview-attechment-btn-text">Save and Send Confirmation</span>
                            </button>
                            {{-- <button onclick="save_and_send()" data-modal-toggle="send_mail_client" class="h-[42px] bg-colorStatusCard1 rounded-lg flex items-center justify-center px-2 hover:cursor-pointer">
                                <span class="overview-attechment-btn-text">Save and Send Confirmation</span>
                            </button> --}}
                        </div>
                        <div class="px-8 py-8  button_disable hidden">
                            <div class="flex space-x-2">
                                <button onclick="btn_add_job()" disabled class=" bg-opacity-50 w-40 h-[42px] bg-palet rounded-lg flex items-center justify-center">
                                    <span class="overview-attechment-btn-text">Add Job</span>
                                </button>
                                <button disabled onclick="save_and_send()" class="bg-opacity-50 h-[42px] bg-colorStatusCard1 rounded-lg flex items-center justify-center px-2">
                                    <span class=" overview-attechment-btn-text">Save and Send Confirmation</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- Send Email Client -->
        <div id="send_mail_client" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4  max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white w-[600px] rounded-lg shadow ">
                    <form action="{{ route('jobboard.send_email_confirmation_to_client') }}" method="POST">@csrf
                        <input class="family_email_send" type="hidden" name="family_email">
                        <div class="p-6 space-y-6">
                            <div id="myTabContent">
                                <div class="mb-2 flex items-center justify-center h-9 border border-[#ECECEC] rounded text-[#222222]">
                                    <input name="subject" value="" type="text" class="subject text-sm border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="Subject">
                                </div>
                                <div class="w-full rounded-md " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <textarea id="textarea-id"  class="w-full h-full" name="editor_tmp_email_1" >{{ $email->body }}</textarea>
                                </div>
                                {{-- <div class="replace_email">
                                    
                                </div> --}}
                            </div>
                        </div>
                        <!-- Modal footer -->
                        
                        <div class="flex items-end justify-center  p-6 space-x-2 rounded-b border border-gray-200  relative">
                            <div onclick="save_as_email_client()" class="absolute left-5 text-sm text-blue-400 hover:cursor-pointer save_as_email_client">
                                Save as Default
                            </div>
                            <div onclick="location.reload()" class="flex items-center justify-center w-28 h-8 bg-colorStatusCard1 rounded-md mt-2 hover:cursor-pointer">
                                <span class="text-sm text-white">Don't Send</span> 
                            </div>
                            <button class="flex btn_send_email_confirm_client items-center justify-center w-28 h-8 bg-palet rounded-md mt-2">
                                <span class="text-sm text-white">Send</span> 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Modal Calendly --}}
        <div id="modalCalendly" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="h-80 flex items-center justify-center space-x-24 display_calendly">
                        <div class='container-loading'>
                            <div class="loader">
                                <div class='loader--dot'></div>
                                <div class='loader--dot'></div>
                                <div class='loader--dot'></div>
                                <div class='loader--dot'></div>
                                <div class='loader--dot'></div>
                                <div class='loader--dot'></div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <script src="{{ asset('js/jQuery/jobBoardJquery.js') }}"></script>
    <script src="{{ asset('js/jQuery/jobBoard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript">
        $('input#search_task').quicksearch('div#search_list');
        $('input#simple-search').quicksearch('div#search_list');
    </script>

    <script>
        // Validate
        $(function(){
        var validate = $('.validations');
            
            if(validate.length){
                validate.validate({
                    rules: {
                        family:{
                            required:true
                        },
                        title:{
                            required:true,
                            maxlength:25,
                            minlength:3
                        },
                        description: {
                            required:true,
                            minlength: 10,
                            maxlength:255
                        },
                        address:{
                            required:true,
                        },
                        'subcategory[]':{
                            required:true,
                        },
                        start_time:{
                            required:true,
                        },
                        end_time:{
                            required:true,
                        },
                        start_date:{
                            required:true,
                        },
                        end_date:{
                            required:true,
                        },
                        rate:{
                            required:true,
                            number:true
                        },
                       
                        'name_chile[]':{
                            required : {
                                depends: function(element) {
                                        return $(".age_chile").val() == '';
                                }
                            },
                        },
                        'age[]':{
                            required : {
                                depends: function(element) {
                                        return $(".name_chile").val() == '';
                                }
                            },
                            number:true
                        },
                    },
                    errorPlacement: function(error, element){
                        if (element.is(":checkbox"))
                        {
                           
                            error.appendTo($('.sub_categorys_error'));
                           
                        }else{ 
                            error.insertAfter( element );
                            error.appendTo(element.parents('.family-errors'));
                            error.appendTo(element.parents('.title-errors'));
                            error.appendTo(element.parents('.description-errors'));
                            error.appendTo(element.parents('.address-errors'));
                            error.appendTo(element.parents('.start-time-errors'));
                            error.appendTo(element.parents('.end-time-errors'));
                            error.appendTo(element.parents('.start-date-errors'));
                            error.appendTo(element.parents('.end-date-errors'));
                            error.appendTo(element.parents('.rate-errors'));
                            error.appendTo(element.parents('.name-chile-errors'));
                           
                           
                            
                        }
                    },
       
                })
            }
        })

        var input = document.querySelector('input[name=family]');

        function tagTemplate(tagData){
            var avatar
            if(tagData.avatar != null){
                avatar = `<img  src="{{ asset('storage/avatar/${tagData.avatar}') }}" class="rounded-full h-5 w-5" alt="">`;
            }else{
                avatar = tagData.tagTemplate
            }
            return `
            <div class="bg-palet h-6 flex items-center space-x-2 rounded-md pl-1">
                <x title='' class='tagify__tag__removeBtn text-white' role='button' aria-label='remove tag'></x>
                ${avatar}
                
                <span class="text-xs text-white pr-2">${tagData.first_name}</span>
            </div>
            `
        }
        function suggestionItemTemplate(tagData){
            
            var avatar
            if(tagData.avatar != null){
                avatar = `<div class="w-10">
                            <img class="w-10 h-10 rounded-full mt-1" src="{{ asset('storage/avatar/${tagData.avatar}') }}">
                        </div>`;
            }else{
                avatar = tagData.avatar1
            }
            return `
                <div ${this.getAttributes(tagData)}
                    class='tagify__dropdown__item flex items-center space-x-1 ${tagData.class ? tagData.class : ""}'
                    tabindex="0"
                    role="option">
                   
                    ${avatar}
                   
                    <div class="flex flex-col">
                        <strong>${tagData.first_name}</strong>
                        <span>${tagData.email}</span>
                    </div>
                </div>
            `
        }

        new Tagify(input,{
            enforceWhitelist : true,
            whitelist : <?=  json_encode($json) ?>,
            maxTags:1,
            skipInvalid: true,
            dropdown: {
                closeOnSelect: true,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['first_name', 'email']  // very important to set by which keys to search for suggesttions when typing
            },

            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate,
                // dropdownHeader: dropdownHeaderTemplate
            },

        })
        
    </script>
    <script src="{{ asset('js/placePicker.js') }}"></script>
    <script src="{{ asset('js/jQuery/jobBoardCreate.js') }}"></script>
    @if ($errors->any())
        <script>
            modal.show()
        </script>
    @endif
    <script>

        // Drag and drop
        var status , data;
        $(function(){
            $("{{ $status_key }}")

            // $("#outside_application, #agency_interview, #present_to_family, #completed")
            .sortable({
                connectWith: ".connectedSortable",
                receive: function (event , ui,){
                    status = event.target.id;
                    data = ui.item.attr('id');
                    
                    var explode = data.split("_");
                    var id = explode[1];
       
                    // console.log(status)

                    $.ajax({
                        type:'POST',
                        url:'{{ route("jobboard.status") }}',
                        data:{status ,id , _token: '{{ csrf_token() }}'},
                        success:function(res){
                       
                                res.status_count.map(function(e){
                                
                                $('.'+e.id).html(`<span>${e.job_models.length}</span>`)
 
                                // if(status == e.status_key){
                                //      $('#sts'+id).html('<div class="text-colorStatusCard1 status-card-job bg-colorStatusCard2 rounded-sm">'+e.status_name+'</div>')
                                // }
    
                                if(status == e.id){
                                    $('#sts'+id).html('<div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">'+e.status_name+'</div>')
                                }   
    
                                // if(status == 'trialing'){
                                //     $('#sts'+id).html('<div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>')
                                // }
    
                                // if(status == e.status_key){
                                //     $('#sts'+id).html('<div class="text-white status-card-job bg-palet rounded-sm">'+e.status_name+'</div>')
                                // }
                            })
                        }
                    });
                }
            })
        })

        // Search
        
        // $('.search_task').keyup(function(){
        //     const search = $(this).val();

        //     $.ajax({
        //         type:'POST',
        //         url:'{{ route("jobboard.search_job") }}',
        //         data:{search , _token: '{{ csrf_token() }}'},
        //         success:function(val){
    
        //                 val.status.map(function(sts){
        //                     $('#'+sts.id).html('');
        //                 })

        //                 val.value.map(function(res){
                            
        //                     // if(res.status == 'potential_clients'){
        //                     //   var sts =   '<div class="text-colorStatusCard1 status-card-job bg-colorStatusCard2 rounded-sm">Potencial Client</div>';
        //                     // }
    
        //                     // if(res.status == 'interviewing'){
        //                     //     var sts =  '<div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">Interviewing</div>';
        //                     // }   
    
        //                     // if(res.status == 'trialing'){
        //                     //     var sts =  '<div class="text-white status-card-job bg-palet rounded-sm">Trialing</div>';
        //                     // }
    
        //                     // if(res.status == 'completed'){
        //                     //     var sts =  '<div class="text-white status-card-job bg-palet rounded-sm">Accepted</div>';
        //                     // }


        //                     const card = `<a id="${res.id}" href="/overview/${res.uid}">
        //                                     <div class="relative w-full h-[211px] bg-bgbody mt-3 rounded">
        //                                         <div class="h-40 px-4">
        //                                             <div class="flex items-center justify-between pt-[11px]">
        //                                                 <div class="text-xs font-semibold text-[#2CA6A0] flex items-center space-x-2">
        //                                                     <span>#${res.id_unique} </span>
        //                                                 </div>
        //                                                 <div>
        //                                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        //                                                         <path d="M6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5Z" fill="#827C7C"/>
        //                                                         <path d="M12 13.5C12.8284 13.5 13.5 12.8284 13.5 12C13.5 11.1716 12.8284 10.5 12 10.5C11.1716 10.5 10.5 11.1716 10.5 12C10.5 12.8284 11.1716 13.5 12 13.5Z" fill="#827C7C"/>
        //                                                         <path d="M18 13.5C18.8284 13.5 19.5 12.8284 19.5 12C19.5 11.1716 18.8284 10.5 18 10.5C17.1716 10.5 16.5 11.1716 16.5 12C16.5 12.8284 17.1716 13.5 18 13.5Z" fill="#827C7C"/>
        //                                                     </svg>
        //                                                 </div>
        //                                             </div>
        //                                             <div class="pt-[7px]">
        //                                                 <div class="text-sm max-w-[200px] font-medium text-[#222222]">
        //                                                     ${res.title.slice(0,25)+'...'}
        //                                                 </div> 
        //                                             </div>
        //                                             <div class="pt-2 ">
        //                                                 <div class="text-xs text-[#827C7C] ">
        //                                                     ${res.description.slice(0,110)+'...'}
        //                                                 </div>
        //                                             </div>
        //                                         </div>
        //                                         <div class=" mx-4 h-[1px] border-b border-[#EFEFEF]"></div>
        //                                         <div class="px-4 flex items-center justify-between mt-2">
        //                                             <div id="sts${res.id}">
        //                                                 <div class="text-white status-card-job bg-colorStatusCard1 rounded-sm">${res.setting_status.status_name}</div>
        //                                             </div>                                            
        //                                             <div class="flex -space-x-2">
        //                                                 <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
        //                                                 <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
        //                                                 <img class="w-6 h-6 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
        //                                             </div>
        //                                         </div>
        //                                         <div class="flex items-center px-4 space-x-4">
        //                                             <div>
        //                                                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 2.25C1.125 2.04289 1.29289 1.875 1.5 1.875H10.5C10.7071 1.875 10.875 2.04289 10.875 2.25C10.875 2.45711 10.7071 2.625 10.5 2.625H1.5C1.29289 2.625 1.125 2.45711 1.125 2.25Z" fill="#827C7C"/>
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 4.75C1.125 4.54289 1.29289 4.375 1.5 4.375H8.5C8.70711 4.375 8.875 4.54289 8.875 4.75C8.875 4.95711 8.70711 5.125 8.5 5.125H1.5C1.29289 5.125 1.125 4.95711 1.125 4.75Z" fill="#827C7C"/>
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 7.25C1.125 7.04289 1.29289 6.875 1.5 6.875H10.5C10.7071 6.875 10.875 7.04289 10.875 7.25C10.875 7.45711 10.7071 7.625 10.5 7.625H1.5C1.29289 7.625 1.125 7.45711 1.125 7.25Z" fill="#827C7C"/>
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M1.125 9.75C1.125 9.54289 1.29289 9.375 1.5 9.375H8.5C8.70711 9.375 8.875 9.54289 8.875 9.75C8.875 9.95711 8.70711 10.125 8.5 10.125H1.5C1.29289 10.125 1.125 9.95711 1.125 9.75Z" fill="#827C7C"/>
        //                                                 </svg>  
        //                                             </div>
        //                                             <div class="flex items-center justify-center">
        //                                                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1.375C3.44568 1.375 1.375 3.44568 1.375 6V10.625H6C8.55432 10.625 10.625 8.55432 10.625 6C10.625 3.44568 8.55432 1.375 6 1.375ZM1 11L0.625 11V6C0.625 3.03147 3.03147 0.625 6 0.625C8.96853 0.625 11.375 3.03147 11.375 6C11.375 8.96853 8.96853 11.375 6 11.375H1.00004L1 11ZM1 11L1.00004 11.375C0.792933 11.375 0.625 11.2071 0.625 11L1 11Z" fill="#827C7C"/>
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 4.5C3.125 4.29289 3.29289 4.125 3.5 4.125H8C8.20711 4.125 8.375 4.29289 8.375 4.5C8.375 4.70711 8.20711 4.875 8 4.875H3.5C3.29289 4.875 3.125 4.70711 3.125 4.5Z" fill="#827C7C"/>
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 6.5C3.125 6.29289 3.29289 6.125 3.5 6.125H8C8.20711 6.125 8.375 6.29289 8.375 6.5C8.375 6.70711 8.20711 6.875 8 6.875H3.5C3.29289 6.875 3.125 6.70711 3.125 6.5Z" fill="#827C7C"/>
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.125 8.5C3.125 8.29289 3.29289 8.125 3.5 8.125H6C6.20711 8.125 6.375 8.29289 6.375 8.5C6.375 8.70711 6.20711 8.875 6 8.875H3.5C3.29289 8.875 3.125 8.70711 3.125 8.5Z" fill="#827C7C"/>
        //                                                 </svg>
        //                                                 <span class="text-xs text-[#827C7C]">10</span>
        //                                             </div>
                            
        //                                             <div class="flex items-center justify-center">
        //                                                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        //                                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M7.82208 0.918491C8.59833 0.893451 9.45404 1.1454 10.1544 1.84572C10.8547 2.54605 11.1066 3.40176 11.0816 4.17801C11.057 4.94152 10.763 5.65647 10.3311 6.08837L6.79575 9.62377L6.53045 9.35874L6.26532 9.09354L9.80081 5.55805C10.076 5.28282 10.3124 4.76034 10.332 4.15383C10.3511 3.56006 10.1611 2.91317 9.62404 2.37605C9.08691 1.83894 8.44002 1.64895 7.84626 1.6681C7.23975 1.68767 6.71727 1.92406 6.44204 2.19928L1.66908 6.97225C1.55856 7.08277 1.37224 7.39679 1.33543 7.8017C1.30064 8.18449 1.39939 8.64711 1.84586 9.09357C2.29232 9.54003 2.75494 9.63879 3.13774 9.60399C3.54264 9.56718 3.85666 9.38087 3.96719 9.27034L8.56336 4.67414C8.66319 4.57433 8.76846 4.35733 8.78583 4.09678C8.80257 3.84563 8.73448 3.60783 8.56337 3.43673C8.39226 3.26562 8.15445 3.19751 7.90331 3.21426C7.64275 3.23163 7.42577 3.33689 7.32595 3.43672L3.96733 6.79534L3.70203 6.53031L3.4369 6.26511L6.7956 2.9064C6.79561 2.9064 6.7956 2.90641 6.7956 2.9064C7.04934 2.65266 7.45107 2.49274 7.85342 2.46592C8.26517 2.43847 8.73446 2.54716 9.09369 2.90639C9.09369 2.90639 9.09368 2.90638 9.09369 2.90639M9.09368 5.20448C9.09368 5.20449 9.09368 5.20448 9.09368 5.20448C9.34743 4.95075 9.50734 4.54902 9.53417 4.14667C9.56162 3.73492 9.45291 3.26561 9.09369 2.90639M9.09368 5.20448L4.49752 9.80068C4.25449 10.0437 3.77301 10.2993 3.20564 10.3509C2.61615 10.4045 1.92972 10.2381 1.31553 9.6239C0.701337 9.00971 0.534926 8.32328 0.588515 7.7338C0.640094 7.16643 0.895722 6.68495 1.13875 6.44192L5.91171 1.66895C6.34361 1.23706 7.05857 0.943121 7.82208 0.918491M3.70203 6.53031L3.4369 6.26511C3.29045 6.41156 3.29041 6.64903 3.43686 6.79547C3.58331 6.94192 3.82088 6.94178 3.96733 6.79534L3.70203 6.53031ZM6.26529 9.6239C6.11884 9.47745 6.11887 9.23998 6.26532 9.09354L6.53045 9.35874L6.79575 9.62377C6.6493 9.77022 6.41173 9.77035 6.26529 9.6239Z" fill="#827C7C"/>
        //                                                 </svg>
        //                                                 <span class="text-xs text-[#827C7C]">2</span>
        //                                             </div>
        //                                         </div>
        //                                     </div>
        //                                 </a>`;
        //                 $('#'+res.status).append(card);
        //             })
        //         }
        //     })
        // })

        // SubCategorys
        function subCategorys(id){
            $.ajax({
                type:'POST',
                url:'{{ route("jobboard.get_subcategory_ajax") }}',
                data:{id , _token: '{{ csrf_token() }}'},
                success:function(res){
                      $('.sub_categorys').html('')
                   
                    res.sub_categorys.map(function(e){
                        var tmp = `<div  class=" items-center space-x-3 mt-[10px]">
                                        <input id="${e.sub_category_key}" name="subcategory[]" {{ is_array(old('subcategory')) && in_array($val->sub_category_key, old('subcategory')) ? 'checked' : ''}} style="color: #3BD7CF" type="checkbox" value="${e.sub_category_key}" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="${e.sub_category_key}" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">${e.sub_category_name}</label>
                                    </div>`;
                                    $('.sub_categorys').append(tmp)
                    })
                }
            });
        }
        $('#category').change(function(){
            const id = $(this).val()
            subCategorys(id)
        })
        subCategorys($('#category').val())


        // ASAP & TBD
        $('#asap').click(function(){
            $('.input_asap').toggleClass('bg-gray-200');
            if (this.checked) {
                $('.start_date').prop('disabled', true);
                $('.start_date').attr("type", "date")
                $('.start_date').addClass("text-gray-200");
            } else {
                $('.start_date').prop('disabled', false);
                $('.start_date').attr("type", "text")
                $('.start_date').removeClass("text-gray-200");          
            }
        })

        $('#tbd').click(function(){
            $('.input_tbd').toggleClass('bg-gray-200');
         
            if (this.checked) {
                $('.end_date').prop('disabled', true);
                $('.end_date').attr("type", "date")
                $('.end_date').addClass("text-gray-200");
            } else {
                $('.end_date').prop('disabled', false);
                $('.end_date').attr("type", "text")
                $('.end_date').removeClass("text-gray-200");      
            }
        })


        // Add chile
        var no = 0; 
        function addChile()
        {
            const tmp = ` <div id="${no}" class="border group w-52 rounded-lg shadow mb-3">
                            <div class="relative px-4 mt-2 text-center py-3 bg-hover">
                                <span class="text-colorStatusCard1 font-semibold">Child / Senior</span>
                                <button onclick="$(this).parent().parent().remove()" type="button" class="absolute right-0 top-0 text-gray-400 hover:text-red-400 group-hover:inline-flex hidden rounded-full text-sm p-1.5 ml-auto items-center" >
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                            </div>
                            <div class="px-4 mt-4 flex items-center justify-center space-x-10">
                                <div class="flex items-center justify-center space-x-3">
                                    <label for="male${no}" class="overview-note-body text-colortext" >
                                        <input data-type="${no}"  id="male${no}" name="gender${no}" checked  type="radio" value="male" class="gender${no} hidden" autocomplete="off">
                                        <i class="fa fa-2x fa-male male${no} text-palet hover:cursor-pointer" aria-hidden="true"></i>
                                    </label>
                                </div>
                                <div class="flex items-center justify-center space-x-3">
                                    <label for="female${no}" class="overview-note-body text-colortext">
                                        <input data-type="${no}" id="female${no}" name="gender${no}"  type="radio" value="female" class="gender${no} hidden" autocomplete="off">
                                        <i class="fa fa-2x fa-female female${no} text-gray-400 hover:cursor-pointer" aria-hidden="true"></i>
                                    </label>
                                </div>
                                <input class="a${no} hidden" name="chile_gender[]" type="text" value="male" />
                            </div>
                            <div class="px-4 mt-4 name-chile-errors">
                                <div class="{{ $errors->has('name_chile') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} flex items-center justify-center space-x-3 h-8 border border-[#CCD3DC] rounded py-4">
                                    <input name="name_chile[]" value="{{ old('name_chile') }}" type="text"  class="name_chile h-8 overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none rounded" placeholder="Name" autocomplete="off">
                                </div>
                                @if($errors->has('name_chile'))
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('name_chile') }}</p>
                                @endif
                            </div>
                            <div class="px-4 mt-8 flex items-center space-x-4">
                                <label for="month_type${no}" class="bg-colorStatusCard2 month${no} text-white flex items-center p-2 w-full justify-center hover:cursor-pointer space-x-1 rounded border">
                                    <input data-type="${no}" id="month_type${no}" type="radio" value="month" name="type${no}" class="age_type${no} hidden">
                                    <span  class="text-[11px]" >Month</span>
                                </label>
                                <label for="year_type${no}" class="bg-colorStatusCard1 year${no} text-white flex items-center p-2 w-full justify-center hover:cursor-pointer space-x-1 rounded border">
                                    <input data-type="${no}" checked id="year_type${no}" type="radio" value="year" name="type${no}" class="age_type${no} hidden">
                                    <span class="text-[11px]">Year</span>
                                </label>
                                <input class="b${no} hidden" name="age_type[]" type="text" value="year" />
                            </div>
                            <div class="px-4 mt-2 age-errors">
                                <div class="{{ $errors->has('age') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} flex items-center justify-center space-x-3 h-8 border border-[#CCD3DC] rounded py-4">
                                    <input name="age[]" value="{{ old('age') }}" type="text" class="age_chile h-8 overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none rounded" placeholder="Age" autocomplete="off">
                                </div>
                                @if($errors->has('age'))
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('age') }}</p>
                                @endif
                            </div>
                            <div class="flex mt-2"></div>
                        </div>`;
           $('.append_chile').append(tmp);
           
           $('.gender'+no).change(function(){
            
            var gender = $(this).val();
            var data = $(this).data('type')
            $('.a'+data).val(gender)

            if($('#male'+data).is(":checked")){
                $('.male'+data).toggleClass('text-palet text-gray-400')
                $('.female'+data).toggleClass('text-gray-400 text-palet')
            }

            if($('#female'+data).is(":checked")){
                $('.female'+data).toggleClass('text-gray-400 text-palet')
                $('.male'+data).toggleClass('text-palet text-gray-400')

                // alert('female')
            }
           })

           $('.age_type'+no).change(function(){
            var age_type = $(this).val();
            var data = $(this).data('type')
            $('.b'+data).val(age_type)

            if($('#month_type'+data).is(":checked")){
                $('.month'+data).toggleClass('bg-colorStatusCard2 bg-colorStatusCard1')
                $('.year'+data).toggleClass('bg-colorStatusCard1 bg-colorStatusCard2')
            }

            if($('#year_type'+data).is(":checked")){
                $('.month'+data).toggleClass('bg-colorStatusCard1 bg-colorStatusCard2')
                $('.year'+data).toggleClass('bg-colorStatusCard2 bg-colorStatusCard1')
            }

           })

           ++no;
        }

        // Sync Calendly
        const targetElCalendly = document.getElementById('modalCalendly');
        const modalCalendly = new Modal(targetElCalendly, {});
        $('.sync-calendly').submit(function(e){
            e.preventDefault();
            var form = $(this);
            var actionUrl = form.attr('action');
            
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                beforeSend: function(){
                    modalCalendly.show()
                },
                error : function(e){
                    const tmp = `<div class="flex flex-col items-center justify-center">
                                    <i class="fa fa-5x text-red-600 fa-exclamation-triangle" aria-hidden="true"></i>
                                    <span class="text-red-500 mt-2 font-semibold">Failed to sync to calendly </span>
                                    <span class="text-red-500 font-semibold">Check your api key</span>
                                </div>`;
                   $('.display_calendly').html(tmp)
                },
                success: function(data){
                    location.reload()
                }

            });
        })

         // Edit job for calendly
        function edit_create_job_calendly(id){
            $.ajax({
                type: "POST",
                url: "{{ route('jobboard.edit_create_job_calendly') }}",
                data: {id, _token: '{{ csrf_token() }}'},
                beforeSend: function(){
                    modal.show()
                    const loader = `<div class="flex justify-center w-full h-screen pt-32">
                                        <div role="status mt-12">
                                            <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                            </svg>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>`;
                    $('.load_edit_job_calendly').html(loader);             
                },
                success : function(val){
                    
                    modal.show()
                    $('.load_edit_job_calendly').html(val)
                   
                }
            })
        }

        // save_as_email_client
        function save_as_email_client(){
            const email = CKEDITOR.instances["textarea-id"].getData();
            $.ajax({
                type: "POST",
                url: "{{ route('jobboard.save_as_email_client') }}",
                data: { email , status:'CLIENT CONFIRMATION' , _token: '{{ csrf_token() }}' },
                beforeSend: function(){
                   const loading = ` Save as Default
                                    <i class="fa fa-refresh fa-spin fa-fw"></i>`;
                    $('.save_as_email_client').html(loading);
                },
                success : function(val){
                    const success = ` Save as Default
                                <i class="fa fa-check" aria-hidden="true"></i>`;
                                $('.save_as_email_client').html(success);
                    console.log(val)
                
                }
            });
        }

        $('.costums-family').change(function(){
            var val = JSON.parse($(this).val());
            $('.family_email_send').val(val[0].email);
        });

        
        function save_and_send(){
            const values = $('.validations').serialize();
            $('.validations').submit(function(e){
                        e.preventDefault();
            });
           $.ajax({
                type: "POST",
                url: "{{ route('jobboard.jobs_store') }}",
                data: values,
                beforeSend:function(){

                    $('.button_show').toggleClass('hidden'); 
                    $('.button_disable').toggleClass('hidden');

                },
                error:function(e){
                    $('.button_show').toggleClass('hidden'); 
                    $('.button_disable').toggleClass('hidden');
                },
                success : function(val){

                    modal.hide();
                    modalSendEmail.show();
                   
                }
            });
        
        }

        if(localStorage.getItem("client_email_create")){
            modal.show()
            $('.costums-family').val(localStorage.getItem("client_email_create"))
        }

        $('.validations').submit(function(){
            localStorage.clear();
        })

        function send_email_confirmation(email){
            $('.family_email_send').val(email);
            modalSendEmail.show();
        }

</script>

<script>
    $(document).ready(function() {
        $(".placepicker").placepicker();
    }); 
</script>
<script>
    CKEDITOR.replace('editor1', {
      width: '100%',
      height: 100,
      removeButtons: 'PasteFromWord',
    
    });

    CKEDITOR.replace('editor_tmp_email_1', {
        
    })


    
</script>
</main>
@endsection
