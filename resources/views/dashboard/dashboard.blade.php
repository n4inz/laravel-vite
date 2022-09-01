@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] mt-20 px-6 w-[75%]">
        <div class=" flex w-full space-x-2">
            <div class=" space-y-2 ">
                <div class="space-y-5 bg-bgbody p-8 rounded w-[669px]">
                    <div class=" flex space-x-2">
                        <div class="w-2 h-6 bg-palet rounded-sm"></div>
                        <span class="text-[#222222] font-semibold">Job Status</span>
                    </div>
                    <div class="flex flex-wrap items-center w-full ">
                            
                        <div class="w-[135px] mb-2 mr-4 h-[126px] border border-palet rounded-md p-4">
                            <div class="w-7 h-7 flex justify-center items-center bg-colorelips rounded-full mb-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4997 2.83325C10.5792 2.83325 9.83301 3.57944 9.83301 4.49992C9.83301 5.42039 10.5792 6.16658 11.4997 6.16658C12.4201 6.16658 13.1663 5.42039 13.1663 4.49992C13.1663 3.57944 12.4201 2.83325 11.4997 2.83325ZM8.83301 4.49992C8.83301 3.02716 10.0269 1.83325 11.4997 1.83325C12.9724 1.83325 14.1663 3.02716 14.1663 4.49992C14.1663 5.97268 12.9724 7.16658 11.4997 7.16658C10.0269 7.16658 8.83301 5.97268 8.83301 4.49992Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4997 9.83325C10.5792 9.83325 9.83301 10.5794 9.83301 11.4999C9.83301 12.4204 10.5792 13.1666 11.4997 13.1666C12.4201 13.1666 13.1663 12.4204 13.1663 11.4999C13.1663 10.5794 12.4201 9.83325 11.4997 9.83325ZM8.83301 11.4999C8.83301 10.0272 10.0269 8.83325 11.4997 8.83325C12.9724 8.83325 14.1663 10.0272 14.1663 11.4999C14.1663 12.9727 12.9724 14.1666 11.4997 14.1666C10.0269 14.1666 8.83301 12.9727 8.83301 11.4999Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.49967 2.83325C3.5792 2.83325 2.83301 3.57944 2.83301 4.49992C2.83301 5.42039 3.5792 6.16658 4.49967 6.16658C5.42015 6.16658 6.16634 5.42039 6.16634 4.49992C6.16634 3.57944 5.42015 2.83325 4.49967 2.83325ZM1.83301 4.49992C1.83301 3.02716 3.02692 1.83325 4.49967 1.83325C5.97243 1.83325 7.16634 3.02716 7.16634 4.49992C7.16634 5.97268 5.97243 7.16658 4.49967 7.16658C3.02692 7.16658 1.83301 5.97268 1.83301 4.49992Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.49967 9.83325C3.5792 9.83325 2.83301 10.5794 2.83301 11.4999C2.83301 12.4204 3.5792 13.1666 4.49967 13.1666C5.42015 13.1666 6.16634 12.4204 6.16634 11.4999C6.16634 10.5794 5.42015 9.83325 4.49967 9.83325ZM1.83301 11.4999C1.83301 10.0272 3.02692 8.83325 4.49967 8.83325C5.97243 8.83325 7.16634 10.0272 7.16634 11.4999C7.16634 12.9727 5.97243 14.1666 4.49967 14.1666C3.02692 14.1666 1.83301 12.9727 1.83301 11.4999Z" fill="white"/>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[#4F4F4F] text-sm font-semibold">Total</span>
                            </div>
                            <div>
                                <span class="text-5xl font-bold">{{ $TotalJob->count() }}</span>
                            </div>
                        </div>
                        @foreach ($statusJob as $valueStatusJob )
                            @if($valueStatusJob->job_models->count() > 0)
                                @if($valueStatusJob->status_key !== 'potential_client')
                                    <div class="w-[135px] mb-2 mr-4  border border-palet rounded-md p-4">
                                        <div class="flex justify-between ">
                                            <div class="w-7 h-7 flex justify-center items-center bg-colorelips rounded-full mb-2">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.55279 1.77639C5.63748 1.607 5.81061 1.5 6 1.5H10C10.1894 1.5 10.3625 1.607 10.4472 1.77639L11.4472 3.77639C11.5247 3.93139 11.5164 4.11546 11.4253 4.26287C11.3342 4.41027 11.1733 4.5 11 4.5H5C4.82671 4.5 4.66578 4.41027 4.57468 4.26287C4.48357 4.11546 4.47529 3.93139 4.55279 3.77639L5.55279 1.77639ZM6.30902 2.5L5.80902 3.5H10.191L9.69098 2.5H6.30902Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.833008 4.93333C0.833008 4.10979 1.53763 3.5 2.33301 3.5H13.6663C14.4617 3.5 15.1663 4.1098 15.1663 4.93333V13.0667C15.1663 13.8902 14.4617 14.5 13.6663 14.5H2.33301C1.53763 14.5 0.833008 13.8902 0.833008 13.0667V4.93333ZM2.33301 4.5C2.02381 4.5 1.83301 4.72594 1.83301 4.93333V13.0667C1.83301 13.2741 2.02381 13.5 2.33301 13.5H13.6663C13.9755 13.5 14.1663 13.2741 14.1663 13.0667V4.93333C14.1663 4.72594 13.9755 4.5 13.6663 4.5H2.33301Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="w-7 h-7 rounded-full bg-gray-100 text-gray-400 font-semibold flex items-center justify-center">{{ $valueStatusJob->job_models->count() }}</div>
                                        </div>
                                        <div>
                                            <span class="text-[#4F4F4F] text-xs font-semibold">{{ $valueStatusJob->status_name }}</span>
                                        </div>
                                        <div>
                                        <span class="text-sm font-bold">
                                            @if ( App\Models\JobModelsRange::query()->where('status_to' ,$valueStatusJob->id)->get()->sum('day') == 0)
                                                <span class="text-xs">Lest then 1 day</span>
                                            @else
                                                {{ App\Models\JobModelsRange::query()->where('status_to' ,$valueStatusJob->id)->get()->sum('day') / App\Models\JobModelsRange::query()->where('status_to' ,$valueStatusJob->id)->get()->count() }} Day
                                            @endif
                                        </span>
                                        </div>
                                    </div>
                                @endif
                            @else
                                @if($valueStatusJob->status_key !== 'potential_client')
                                    <div class="w-[135px] mb-2 mr-4  border border-palet rounded-md p-4">
                                        <div class="flex justify-between ">
                                            <div class="w-7 h-7 flex justify-center items-center bg-colorelips rounded-full mb-2">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.55279 1.77639C5.63748 1.607 5.81061 1.5 6 1.5H10C10.1894 1.5 10.3625 1.607 10.4472 1.77639L11.4472 3.77639C11.5247 3.93139 11.5164 4.11546 11.4253 4.26287C11.3342 4.41027 11.1733 4.5 11 4.5H5C4.82671 4.5 4.66578 4.41027 4.57468 4.26287C4.48357 4.11546 4.47529 3.93139 4.55279 3.77639L5.55279 1.77639ZM6.30902 2.5L5.80902 3.5H10.191L9.69098 2.5H6.30902Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.833008 4.93333C0.833008 4.10979 1.53763 3.5 2.33301 3.5H13.6663C14.4617 3.5 15.1663 4.1098 15.1663 4.93333V13.0667C15.1663 13.8902 14.4617 14.5 13.6663 14.5H2.33301C1.53763 14.5 0.833008 13.8902 0.833008 13.0667V4.93333ZM2.33301 4.5C2.02381 4.5 1.83301 4.72594 1.83301 4.93333V13.0667C1.83301 13.2741 2.02381 13.5 2.33301 13.5H13.6663C13.9755 13.5 14.1663 13.2741 14.1663 13.0667V4.93333C14.1663 4.72594 13.9755 4.5 13.6663 4.5H2.33301Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="w-7 h-7 rounded-full bg-gray-100 text-gray-400 font-semibold flex items-center justify-center">{{ $valueStatusJob->job_models->count() }}</div>
                                        </div>
                                        <div>
                                            <span class="text-[#4F4F4F] text-xs font-semibold">{{ $valueStatusJob->status_name }}</span>
                                        </div>
                                        <div>
                                        <span class="text-sm font-bold">
                                            @if ( App\Models\JobModelsRange::query()->where('status_to' ,$valueStatusJob->id)->get()->sum('day')  == 0)
                                                <span class="text-xs">Lest then 1 day</span>
                                            @else
                                                {{ App\Models\JobModelsRange::query()->where('status_to' ,$valueStatusJob->id)->get()->sum('day') / App\Models\JobModelsRange::query()->where('status_to' ,$valueStatusJob->id)->get()->count() }} Day
                                            @endif
                                        </span>
                                        </div>
                                    </div>
                                @endif
                        
                            @endif
                            
                        @endforeach
                    </div>
                </div>
                <div class="bg-bgbody  p-8 rounded w-[669px]">
                    <div class="flex justify-between">
                        <div class="flex space-x-2 ">
                            <div class="w-2 h-6 bg-[#3B83D7] rounded-sm"></div>
                            <span class="text-[#222222] font-semibold">Estimated Revenue</span>
                        </div>
                        <div class="">
                            <select  class="block p-2 mb-6 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 outline-none ">
                                <option selected>Last 5 days</option>
                            </select>
                        </div>
                    </div>
                    <div class="overflow-hidden ">
                        <canvas class="p-3" height="100" id="chartLine"></canvas>
                    </div>
                </div>
    
                <div class="bg-bgbody p-8 rounded space-y-10 w-[669px]">
                    <div class="flex space-x-2 ">
                        <div class="w-2 h-6 bg-[#FEC001] rounded-sm"></div>
                        <span class="text-[#222222] font-semibold">Favorite Links</span>
                    </div>
                    <div class="flex space-x-5">
                        <div class="w-16 h-16 border border-palet rounded flex justify-center items-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.27275 28.0062V15.6425L3.43837 12.1346L0 10.188V25.8244C0 27.0316 0.978125 28.0062 2.18187 28.0062H7.27275Z" fill="#4285F4"/>
                                <path d="M24.7275 28.0064H29.8184C31.0258 28.0064 32.0003 27.0281 32.0003 25.8245V10.1882L28.1058 12.4179L24.7275 15.6426V28.0064Z" fill="#34A853"/>
                                <path d="M7.27273 15.6425L6.75098 10.8116L7.27273 6.18799L16 12.7335L24.7272 6.18799L25.3109 10.562L24.7272 15.6425L16 22.188L7.27273 15.6425Z" fill="#EA4335"/>
                                <path d="M24.7275 6.18796V15.6425L32.0003 10.188V7.27884C32.0003 4.58071 28.9203 3.04259 26.764 4.66071L24.7275 6.18796Z" fill="#FBBC04"/>
                                <path d="M0 10.188L3.34488 12.6968L7.27275 15.6425V6.18802L5.23625 4.66077C3.07625 3.04252 0 4.58077 0 7.27877V10.1879V10.188Z" fill="#C5221F"/>
                            </svg> 
                        </div>
                        <div class="w-16 h-16 border border-palet rounded flex justify-center items-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.73014 20.165C6.73014 22.019 5.23176 23.5175 3.37776 23.5175C1.52377 23.5175 0.0253906 22.019 0.0253906 20.165C0.0253906 18.3111 1.52377 16.8127 3.37789 16.8127H6.73001V20.1651L6.73014 20.165ZM8.40639 20.165C8.40639 18.3111 9.90476 16.8127 11.7588 16.8127C13.6128 16.8127 15.1111 18.3111 15.1111 20.1651V28.546C15.1111 30.4 13.6128 31.8985 11.7586 31.8985C9.90489 31.8985 8.40639 30.4 8.40639 28.546V20.1651V20.165Z" fill="#E01E5A"/>
                                <path d="M11.7587 6.70475C9.90475 6.70475 8.40625 5.20638 8.40625 3.35238C8.40625 1.49838 9.90487 0 11.7587 0C13.6126 0 15.1111 1.49838 15.1111 3.35238V6.70487H11.7586L11.7587 6.70475ZM11.7587 8.40637C13.6128 8.40637 15.1111 9.90475 15.1111 11.7587C15.1111 13.6128 13.6128 15.1111 11.7586 15.1111H3.3525C1.49837 15.1111 0 13.6128 0 11.7586C0 9.90487 1.49838 8.40637 3.35238 8.40637H11.7586H11.7587Z" fill="#36C5F0"/>
                                <path d="M25.1935 11.7587C25.1935 9.90475 26.6919 8.40625 28.5457 8.40625C30.3997 8.40625 31.8983 9.90475 31.8983 11.7587C31.8983 13.6128 30.3997 15.1111 28.5457 15.1111H25.1935V11.7586V11.7587ZM23.5173 11.7587C23.5173 13.6128 22.0188 15.1111 20.1648 15.1111C18.3109 15.1111 16.8125 13.6128 16.8125 11.7586V3.3525C16.8125 1.49837 18.3109 0 20.1648 0C22.0186 0 23.5171 1.49838 23.5171 3.35238V11.7586L23.5173 11.7587Z" fill="#2EB67D"/>
                                <path d="M20.1648 25.1937C22.0188 25.1937 23.5173 26.6921 23.5173 28.546C23.5173 30.4 22.0188 31.8985 20.1648 31.8985C18.3109 31.8985 16.8125 30.4 16.8125 28.546V25.1937H20.1649H20.1648ZM20.1648 23.5175C18.3109 23.5175 16.8125 22.019 16.8125 20.165C16.8125 18.3111 18.3109 16.8127 20.1649 16.8127H28.5711C30.4251 16.8127 31.9236 18.3111 31.9236 20.1651C31.9236 22.019 30.4251 23.5175 28.5711 23.5175H20.1649H20.1648Z" fill="#ECB22E"/>
                            </svg>
                        </div>
                        <div class="w-16 h-16 border border-palet rounded flex justify-center items-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.73014 20.165C6.73014 22.019 5.23176 23.5175 3.37776 23.5175C1.52377 23.5175 0.0253906 22.019 0.0253906 20.165C0.0253906 18.3111 1.52377 16.8127 3.37789 16.8127H6.73001V20.1651L6.73014 20.165ZM8.40639 20.165C8.40639 18.3111 9.90476 16.8127 11.7588 16.8127C13.6128 16.8127 15.1111 18.3111 15.1111 20.1651V28.546C15.1111 30.4 13.6128 31.8985 11.7586 31.8985C9.90489 31.8985 8.40639 30.4 8.40639 28.546V20.1651V20.165Z" fill="#E01E5A"/>
                                <path d="M11.7587 6.70475C9.90475 6.70475 8.40625 5.20638 8.40625 3.35238C8.40625 1.49838 9.90487 0 11.7587 0C13.6126 0 15.1111 1.49838 15.1111 3.35238V6.70487H11.7586L11.7587 6.70475ZM11.7587 8.40637C13.6128 8.40637 15.1111 9.90475 15.1111 11.7587C15.1111 13.6128 13.6128 15.1111 11.7586 15.1111H3.3525C1.49837 15.1111 0 13.6128 0 11.7586C0 9.90487 1.49838 8.40637 3.35238 8.40637H11.7586H11.7587Z" fill="#36C5F0"/>
                                <path d="M25.1935 11.7587C25.1935 9.90475 26.6919 8.40625 28.5457 8.40625C30.3997 8.40625 31.8983 9.90475 31.8983 11.7587C31.8983 13.6128 30.3997 15.1111 28.5457 15.1111H25.1935V11.7586V11.7587ZM23.5173 11.7587C23.5173 13.6128 22.0188 15.1111 20.1648 15.1111C18.3109 15.1111 16.8125 13.6128 16.8125 11.7586V3.3525C16.8125 1.49837 18.3109 0 20.1648 0C22.0186 0 23.5171 1.49838 23.5171 3.35238V11.7586L23.5173 11.7587Z" fill="#2EB67D"/>
                                <path d="M20.1648 25.1937C22.0188 25.1937 23.5173 26.6921 23.5173 28.546C23.5173 30.4 22.0188 31.8985 20.1648 31.8985C18.3109 31.8985 16.8125 30.4 16.8125 28.546V25.1937H20.1649H20.1648ZM20.1648 23.5175C18.3109 23.5175 16.8125 22.019 16.8125 20.165C16.8125 18.3111 18.3109 16.8127 20.1649 16.8127H28.5711C30.4251 16.8127 31.9236 18.3111 31.9236 20.1651C31.9236 22.019 30.4251 23.5175 28.5711 23.5175H20.1649H20.1648Z" fill="#ECB22E"/>
                            </svg>
                        </div>
                        <div class="w-16 h-16 border border-palet rounded flex justify-center items-center relative">
                            <div class="w-8 bg-palet h-[2px]"></div>
                            <div class="absolute w-8 bg-palet h-[2px] rotate-90"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[341px] space-y-2" >
                <div class="bg-bgbody p-8 rounded ">
                    <div class=" flex space-x-2">
                        <div class="w-2 h-6 bg-[#FA9D6B] rounded-sm"></div>
                        <span class="text-[#222222] font-semibold">Task</span>
                    </div>
                    <div class="text-[#827C7C] text-sm font-semibold py-5 border-b ">Past Due</div>
                    @foreach ($array as $arrayValue )
                        <div class="flex items-center space-x-3 mt-7">
                            <div>
                                <div class="flex justify-center items-center w-8 h-8 bg-palet rounded-full">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83301 1.99992C1.83301 1.35559 2.35534 0.833252 2.99967 0.833252H9.66634C9.94248 0.833252 10.1663 1.05711 10.1663 1.33325C10.1663 1.60939 9.94248 1.83325 9.66634 1.83325H2.99967C2.90763 1.83325 2.83301 1.90787 2.83301 1.99992V13.9999C2.83301 14.092 2.90762 14.1666 2.99967 14.1666H12.333C12.4251 14.1666 12.4997 14.092 12.4997 13.9999V6.66812C12.4997 6.39198 12.7235 6.16812 12.9997 6.16812C13.2758 6.16812 13.4997 6.39198 13.4997 6.66812V13.9999C13.4997 14.6443 12.9774 15.1666 12.333 15.1666H2.99967C2.35535 15.1666 1.83301 14.6443 1.83301 13.9999V1.99992Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 6C3.83301 5.72386 4.05687 5.5 4.33301 5.5H6.99967C7.27582 5.5 7.49967 5.72386 7.49967 6C7.49967 6.27614 7.27582 6.5 6.99967 6.5H4.33301C4.05687 6.5 3.83301 6.27614 3.83301 6Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 9.33325C3.83301 9.05711 4.05687 8.83325 4.33301 8.83325H8.33301C8.60915 8.83325 8.83301 9.05711 8.83301 9.33325C8.83301 9.60939 8.60915 9.83325 8.33301 9.83325H4.33301C4.05687 9.83325 3.83301 9.60939 3.83301 9.33325Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0198 1.64669C14.215 1.84195 14.215 2.15853 14.0198 2.3538L10.0215 6.35207C9.82626 6.54733 9.50968 6.54733 9.31442 6.35207C9.11915 6.15681 9.11915 5.84023 9.31441 5.64496L13.3126 1.64669C13.5079 1.45143 13.8245 1.45143 14.0198 1.64669Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="text-sm  text-[#222222] font-semibold">{{ $arrayValue['title'] }}</div>
                                <div class="text-sm"><span class="text-[#FA9D6B] ">{{ $arrayValue['body'] }}</span> / {{ $arrayValue['name'] }}</div>
                            </div>
                        </div>
                        
                    @endforeach
                    <!--
                    <div class="flex items-center space-x-3 mt-7">
                        <div>
                            <div class="flex justify-center items-center w-8 h-8 bg-palet rounded-full">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83301 1.99992C1.83301 1.35559 2.35534 0.833252 2.99967 0.833252H9.66634C9.94248 0.833252 10.1663 1.05711 10.1663 1.33325C10.1663 1.60939 9.94248 1.83325 9.66634 1.83325H2.99967C2.90763 1.83325 2.83301 1.90787 2.83301 1.99992V13.9999C2.83301 14.092 2.90762 14.1666 2.99967 14.1666H12.333C12.4251 14.1666 12.4997 14.092 12.4997 13.9999V6.66812C12.4997 6.39198 12.7235 6.16812 12.9997 6.16812C13.2758 6.16812 13.4997 6.39198 13.4997 6.66812V13.9999C13.4997 14.6443 12.9774 15.1666 12.333 15.1666H2.99967C2.35535 15.1666 1.83301 14.6443 1.83301 13.9999V1.99992Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 6C3.83301 5.72386 4.05687 5.5 4.33301 5.5H6.99967C7.27582 5.5 7.49967 5.72386 7.49967 6C7.49967 6.27614 7.27582 6.5 6.99967 6.5H4.33301C4.05687 6.5 3.83301 6.27614 3.83301 6Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 9.33325C3.83301 9.05711 4.05687 8.83325 4.33301 8.83325H8.33301C8.60915 8.83325 8.83301 9.05711 8.83301 9.33325C8.83301 9.60939 8.60915 9.83325 8.33301 9.83325H4.33301C4.05687 9.83325 3.83301 9.60939 3.83301 9.33325Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0198 1.64669C14.215 1.84195 14.215 2.15853 14.0198 2.3538L10.0215 6.35207C9.82626 6.54733 9.50968 6.54733 9.31442 6.35207C9.11915 6.15681 9.11915 5.84023 9.31441 5.64496L13.3126 1.64669C13.5079 1.45143 13.8245 1.45143 14.0198 1.64669Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-[#222222] font-semibold">Quote accept by Jonathan</div>
                            <div class="text-sm"><span class="text-[#FA9D6B] ">Due 1 day ago</span> / Jonathan Morrow</div>
                        </div>
                    </div>
    
                    <div class="flex items-center space-x-3 mt-7">
                        <div>
                            <div class="flex justify-center items-center w-8 h-8 bg-palet rounded-full">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83301 1.99992C1.83301 1.35559 2.35534 0.833252 2.99967 0.833252H9.66634C9.94248 0.833252 10.1663 1.05711 10.1663 1.33325C10.1663 1.60939 9.94248 1.83325 9.66634 1.83325H2.99967C2.90763 1.83325 2.83301 1.90787 2.83301 1.99992V13.9999C2.83301 14.092 2.90762 14.1666 2.99967 14.1666H12.333C12.4251 14.1666 12.4997 14.092 12.4997 13.9999V6.66812C12.4997 6.39198 12.7235 6.16812 12.9997 6.16812C13.2758 6.16812 13.4997 6.39198 13.4997 6.66812V13.9999C13.4997 14.6443 12.9774 15.1666 12.333 15.1666H2.99967C2.35535 15.1666 1.83301 14.6443 1.83301 13.9999V1.99992Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 6C3.83301 5.72386 4.05687 5.5 4.33301 5.5H6.99967C7.27582 5.5 7.49967 5.72386 7.49967 6C7.49967 6.27614 7.27582 6.5 6.99967 6.5H4.33301C4.05687 6.5 3.83301 6.27614 3.83301 6Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 9.33325C3.83301 9.05711 4.05687 8.83325 4.33301 8.83325H8.33301C8.60915 8.83325 8.83301 9.05711 8.83301 9.33325C8.83301 9.60939 8.60915 9.83325 8.33301 9.83325H4.33301C4.05687 9.83325 3.83301 9.60939 3.83301 9.33325Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0198 1.64669C14.215 1.84195 14.215 2.15853 14.0198 2.3538L10.0215 6.35207C9.82626 6.54733 9.50968 6.54733 9.31442 6.35207C9.11915 6.15681 9.11915 5.84023 9.31441 5.64496L13.3126 1.64669C13.5079 1.45143 13.8245 1.45143 14.0198 1.64669Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-[#222222] font-semibold">Quote accept by Jonathan</div>
                            <div class="text-sm"><span class="text-[#FA9D6B] ">Due 1 day ago</span> / Jonathan Morrow</div>
                        </div>
                    </div>
                    -->
                    <div class="text-[#827C7C] text-sm font-semibold py-5 border-b ">{{ date('l', strtotime(now())) }}</div>
                    @foreach ($taskFolowUp as $value )
                        <div class="flex items-center space-x-3 mt-7">
                            <div>
                                <div class="flex justify-center items-center w-8 h-8 bg-palet rounded-full">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83301 1.99992C1.83301 1.35559 2.35534 0.833252 2.99967 0.833252H9.66634C9.94248 0.833252 10.1663 1.05711 10.1663 1.33325C10.1663 1.60939 9.94248 1.83325 9.66634 1.83325H2.99967C2.90763 1.83325 2.83301 1.90787 2.83301 1.99992V13.9999C2.83301 14.092 2.90762 14.1666 2.99967 14.1666H12.333C12.4251 14.1666 12.4997 14.092 12.4997 13.9999V6.66812C12.4997 6.39198 12.7235 6.16812 12.9997 6.16812C13.2758 6.16812 13.4997 6.39198 13.4997 6.66812V13.9999C13.4997 14.6443 12.9774 15.1666 12.333 15.1666H2.99967C2.35535 15.1666 1.83301 14.6443 1.83301 13.9999V1.99992Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 6C3.83301 5.72386 4.05687 5.5 4.33301 5.5H6.99967C7.27582 5.5 7.49967 5.72386 7.49967 6C7.49967 6.27614 7.27582 6.5 6.99967 6.5H4.33301C4.05687 6.5 3.83301 6.27614 3.83301 6Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 9.33325C3.83301 9.05711 4.05687 8.83325 4.33301 8.83325H8.33301C8.60915 8.83325 8.83301 9.05711 8.83301 9.33325C8.83301 9.60939 8.60915 9.83325 8.33301 9.83325H4.33301C4.05687 9.83325 3.83301 9.60939 3.83301 9.33325Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0198 1.64669C14.215 1.84195 14.215 2.15853 14.0198 2.3538L10.0215 6.35207C9.82626 6.54733 9.50968 6.54733 9.31442 6.35207C9.11915 6.15681 9.11915 5.84023 9.31441 5.64496L13.3126 1.64669C13.5079 1.45143 13.8245 1.45143 14.0198 1.64669Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="text-sm text-[#222222] font-semibold">Follow up {{ now()->format('Y') }}</div>
                                <div class="text-sm"><span class="text-[#FA9D6B] "> {{ $value->created_at->format('d/m/Y') }}</span> / {{ $value->name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="bg-bgbody p-8 rounded ">
                    <div class=" flex space-x-2">
                        <div class="w-2 h-6 bg-colorelips rounded-sm"></div>
                        <span class="text-[#222222] font-semibold">Appointments</span>
                    </div>

                    <div id="calender" >
                        
                    </div>
                </div>
    
                <!--
                <div class="bg-bgbody p-8 rounded ">
                    <div class=" flex space-x-2">
                        <div class="w-2 h-6 bg-colorelips rounded-sm"></div>
                        <span class="text-[#222222] font-semibold">Appointments</span>
                    </div>

                    <div data-modal-toggle="detail_schedule_calendly" class="calendly_load">
                        
                    </div>
                </div>
                
                <div id="detail_schedule_calendly" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        
                        <div class="relative flex bg-white rounded-lg shadow pb-10 ">
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center absolute top-2 right-2" data-modal-toggle="detail_schedule_calendly">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="load_detail_calendly w-full flex justify-center "></div>

                        </div>
                    </div>
                </div>
                -->
            </div> 
        </div>
    </article>
</main>
    <script>
        var events = [
        {'Date': new Date(2022, 9, 7), 'Title': 'Doctor appointment at 3:25pm.'},
        {'Date': new Date(2022, 9, 18), 'Title': 'New Garfield movie comes out!', 'Link': 'https://garfield.com'},
        {'Date': new Date(2022, 9, 27), 'Title': '25 year anniversary', 'Link': 'https://www.google.com.au/#q=anniversary+gifts'},
        ];
        var settings = {};
        var element = document.getElementById('calender');
        caleandar(element, events, settings);

    </script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart line -->
    <script>
    const labels = ["Sep 12", "Sep 12", "Sep 12", "Sep 12", "Sep 12"];
    const data = {
        labels: labels,
        datasets: [
        {
            label:'Agency revenue',
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "#3BD7CF",
            data: [350, 1200, 1000, 1500, 800],
            tension: 0.5
        },
        ],
    };

    const configLineChart = {
        type: "line",
        data,
        options: { },
 
    };

    var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );

    // Appoitments

    function apoitment(){
        $.ajax({
        type: "GET",
            contentType:'json',
            url: '{{ route("dashboard.calendly") }}',
            beforeSend : function(){
                $('.calendly_load').html('');
                const tmp = `<div class="py-10 text-center" role="status">
                                <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                            </div>`;
                            $('.calendly_load').append(tmp);
            },
            error : function(error){
                console.log(error)
                $('.calendly_load').html('');
                const tmp = `<div class="py-10 flex flex-col items-center justify-center">
                                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div onclick="apoitment()" class="text-center bg-colorStatusCard1 rounded-md text-white w-28 text-xs p-1 hover:cursor-pointer">Try Again</div>
                            </div>`;
                $('.calendly_load').append(tmp);
            },
            success: function (data) {
                console.log(data)
                $('.calendly_load').html('');
                $('.calendly_load').append(data);

            }
        });
    }

    apoitment();

    function detail_calendly(id){
        $.ajax({
            type: "POST",
            url: '{{ route("dashboard.detailCalendlyApi") }}',
            data:{ _token: '{{ csrf_token() }}', id},
            beforeSend:function(){
                const tmp = `<div class="h-56 w-full flex text-center justify-center pt-5">
                                <svg aria-hidden="true" class="mr-2 w-8 h-8 text-gray-200 animate-spin  fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                            </div>`;
                            $('.load_detail_calendly').html(tmp);
            },
            success: function (data) {
               $('.load_detail_calendly').html(data);
            }
        });
    }
    </script>
 
@endsection
