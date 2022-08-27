@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class=" ml-[310px] space-x-2 mt-[85px] px-5 w-[75%]">
        <div class="flex items-center justify-between mt-8 w-[1017px] xl:w-full">
            <span class="overview-modal-add-talent-title">Talents</span>
            <button onclick="modal_show()" class="w-[111px] h-10 bg-palet rounded-md">
                <span class="task-btn-text">+ Create</span>
            </button>
            {{-- <input
            name='input'
            class='some_class_name'            
            placeholder='write some tags'     
            value='css, html, javascript, css' 
            data-blacklist='.NET,PHP'>     --}}
        </div>
        <div class="mt-6 h-20 w-[1017px] xl:w-full bg-bgbody px-6 flex items-center justify-between rounded">
            <div class="flex items-center space-x-8 w-[1017px]">
                <div class="flex items-center space-x-2 ">
                    <div class="w-2 h-6 bg-palet rounded-sm"></div>
                    <span class="text-[#222222] user-talent-title">Talents</span>
                </div>
    
                <div class="relative w-80 left-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                        </svg>
                    </div>
                    <div class="w-[340px] h-10 border-2 border-[#EFEFEF] rounded-md bg-[#EFEFEF] flex items-center">
                        <input type="text" id="search_talents" class="border border-[#EFEFEF] text-colortext text-sm bg-transparent border-none outline-none  block w-full pl-10 p-2 focus:ring-0" placeholder="Search helper" required>
                    </div>
                </div>
            </div>

            <div class="flex item-center justify-center">
                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.739031 1.13982C0.830853 0.940319 1.03039 0.8125 1.25001 0.8125H14.75C14.9696 0.8125 15.1692 0.940319 15.261 1.13982C15.3528 1.33933 15.3201 1.57402 15.1773 1.74085L9.91251 7.88958V13.75C9.91251 13.9445 9.81207 14.1251 9.64692 14.2278C9.48176 14.3304 9.2753 14.3405 9.10094 14.2544L6.40094 12.921C6.20901 12.8262 6.08751 12.6307 6.08751 12.4167V7.88958L0.822735 1.74085C0.679895 1.57402 0.647209 1.33933 0.739031 1.13982ZM2.47217 1.9375L7.07728 7.31582C7.16455 7.41774 7.21251 7.54749 7.21251 7.68167V12.0671L8.78751 12.8449V7.68167C8.78751 7.54749 8.83547 7.41774 8.92274 7.31582L13.5278 1.9375H2.47217Z" fill="#222222"/>
                </svg>   
            </div>
        </div>

        <div class="grid gap-4 grid-cols-3 mt-10 mb-20 w-[1017px] xl:w-full">   
            {{-- <div class="flex flex-wrap space-x-2 space-y-2  mt-10 mb-20 xl:w-full">    --}}
            @foreach ($talent as $values )
                <div id="search_talent" class="flex items-center w-[310px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                    <div class="hidden">{{ $values->day_of_birthday}} {{ $values->experience }} {{ $values->email }} {{ $values->phone }} {{ $values->address }} {{ $values->about_talent }}</div>
                    <div>
                        @if ($values->avatar)
                        {{-- <img class="w-20 h-20 rounded-full" src="{{ asset('storage/avatar/'.$values->avatar) }}" alt=""> --}}
                        <img class="w-20 h-20 rounded-full" src="{{ asset('storage/avatar/'.$values->avatar) }}" alt="">
                        @else
                            <div class="w-20 h-20 flex items-center justify-center bg-[{{ $values->color }}] rounded-full">
                                <span class="text-white text-lg">{{ strtoupper(substr($values->first_name, 0, 1)) }}{{ strtoupper(substr($values->last_name, 0, 1)) }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                        <span class="user-talent-name text-[#222222]">{{ $values->first_name }} {{ $values->last_name }}</span>
                        <span class="user-talent-live">@if($values->day_of_birthday != 'null') Age {{ Carbon\Carbon::parse($values->day_of_birthday)->age }} @endif, in  {{ Str::limit($values->address, 20, $end='...') }}</span>
                        <span class="overview-note-body text-[#2CA6A0]">
                            <?php $helpers = '';  ?>
                            @foreach ($values->type_helper as $helper )
                            <?php $helpers .= $helper->name_type_helper.', ' ?>
                            @endforeach
                            {{Str::limit($helpers, 25, $end='...')}}
                        </span>
                        <div class="flex items-center space-x-[9.67px] ">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                            </svg>
                            <span class="user-talent-live ">
                                {{ Str::limit($values->email, 20, $end='...') }}
                            </span>
                        </div>
                    </div>
                </div>         
            @endforeach
        </div>

        <!-- Main modal Add Talent -->
        <div id="modal-add-talent" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">  
            <div class="p-4 w-[852px] h-screen">
                <div class="bg-white rounded-lg shadow ">
                    <div class="relative text-center pt-10">
                        <span class="overview-modal-add-talent-title mt-10 ml-10 text-[#222222]">Add New Talent</span>
                        <button onclick="close_modal()" type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <form action="{{ route('user_talent.store') }}" method="post" class="validate_talent" enctype="multipart/form-data">
                        @csrf
                        <div class="px-[91px] mt-10">
                            <div class="flex justify-center  items-center space-x-10">
                                <div class="errors_avatar">
                                    <label for="avatar">
                                        <div class="{{ $errors->has('avatar') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex relative justify-center  items-center w-28 h-28 bg-hover rounded-full hover:cursor-pointer">
                                            <img id="output" class="absolute rounded-full w-28 h-28"/>
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C3 4.34315 4.34315 3 6 3H26C27.6569 3 29 4.34316 29 6V26C29 27.6569 27.6569 29 26 29H6C4.34316 29 3 27.6569 3 26V6ZM6 5C5.44772 5 5 5.44772 5 6V26C5 26.5523 5.44771 27 6 27H26C26.5523 27 27 26.5523 27 26V6C27 5.44771 26.5523 5 26 5H6Z" fill="{{ $errors->has('avatar') ? '#e80f00' : '#3BD7CF' }}"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.66675 12C7.66675 9.60674 9.60686 7.66663 12.0001 7.66663C14.3933 7.66663 16.3334 9.60674 16.3334 12C16.3334 14.3932 14.3933 16.3333 12.0001 16.3333C9.60686 16.3333 7.66675 14.3932 7.66675 12ZM12.0001 9.66663C10.7114 9.66663 9.66675 10.7113 9.66675 12C9.66675 13.2886 10.7114 14.3333 12.0001 14.3333C13.2887 14.3333 14.3334 13.2886 14.3334 12C14.3334 10.7113 13.2887 9.66663 12.0001 9.66663Z" fill="{{ $errors->has('avatar') ? '#e80f00' : '#3BD7CF' }}"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9978 16.5901C20.3795 16.2465 20.9594 16.248 21.3394 16.5934L28.6727 23.2601C29.0814 23.6316 29.1115 24.2641 28.74 24.6727C28.3685 25.0814 27.736 25.1115 27.3274 24.74L20.6634 18.6818L14.669 24.0767C14.2956 24.4128 13.7307 24.4196 13.3493 24.0926L9.29165 20.6147L4.60006 24.1334C4.15823 24.4647 3.53143 24.3752 3.20006 23.9334C2.86869 23.4915 2.95823 22.8647 3.40006 22.5334L8.73339 18.5334C9.10835 18.2522 9.62832 18.2691 9.98418 18.5741L13.984 22.0025L19.9978 16.5901Z" fill="{{ $errors->has('avatar') ? '#c7270e' : '#3BD7CF' }}"/>
                                            </svg>
                                        </div>
                                        <input onchange="loadFile(event)" type="file" id="avatar" name="avatar" class="hidden">
                                    </label>
                                </div>
                                <div class="w-full flex flex-col ">
                                    <div class="flex items-center space-x-2">
                                        <div class="mb-6 w-[249px] errors_first_name">
                                            <label for="first-name" class="{{ $errors->has('first_name') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">Full Name</label>
                                            <div class="{{ $errors->has('first_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input name="first_name" value="{{ old('first_name') }}" type="text" class="{{ $errors->has('first_name') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="First Name">
                                            </div>
                                            @if($errors->has('first_name'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('first_name') }}</p>
                                            @endif
                                            @if($errors->has('last_name'))
                                                <p class="{{ $errors->has('last_name') ? 'invisible' : 'hidden' }} mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('last_name') }}</p>
                                            @endif
                                        </div>
                                        <div class="mb-6 w-[249px] errors_last_name">
                                            <label for="last-name" class="{{ $errors->has('last_name') ? 'text-red-600' : '' }} invisible block mb-2 overview-modal-add-talent-text text-[#222222]">Last Name</label>
                                            <div class="{{ $errors->has('last_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input name="last_name" value="{{ old('last_name') }}" type="text" class="{{ $errors->has('last_name') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="Last Name">
                                            </div>
                                            @if($errors->has('last_name'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('last_name') }}</p>
                                            @endif
                                            @if($errors->has('first_name'))
                                                <p class="{{ $errors->has('first_name') ? 'invisible' : 'hidden' }} mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('first_name') }}</p>
                                            @endif
                                        </div>                        
                                    </div>
           
                                    <div class="flex items-center space-x-2">
                                        <div class="mb-6 w-[249px] errors_day_of_birthday">
                                            <label  class="{{ $errors->has('day_of_birthday') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">DoB</label>
                                            <div class="{{ $errors->has('day_of_birthday') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input name="day_of_birthday" value="{{ old('day_of_birthday') }}" type="date" class="{{ $errors->has('day_of_birthday') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none text-[#222222] opacity-50">
                                            </div>
                                            @if($errors->has('day_of_birthday'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('day_of_birthday') }}</p>
                                            @endif
                                            @if($errors->has('experience'))
                                                <p class="{{ $errors->has('experience') ? 'invisible' : 'hidden' }} mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('experience') }}</p>
                                            @endif
                                        </div>
                                        <div class="mb-6 w-[249px] errors_experience">
                                            <label  class="{{ $errors->has('experience') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">Experience</label>
                                            <div class="{{ $errors->has('experience') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input name="experience" value="{{ old('experience') }}" type="text" class="{{ $errors->has('experience') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="10">
                                            </div>
                                            @if($errors->has('experience'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('experience') }}</p>
                                            @endif
                                            @if($errors->has('day_of_birthday'))
                                                <p class="{{ $errors->has('day_of_birthday') ? 'invisible' : 'hidden' }} mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('day_of_birthday') }}</p>
                                            @endif
                                        </div>
                                    </div>
    
                                    <div></div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="errors_email">
                                    <span class="{{ $errors->has('email') ||  $errors->has('phone') ? 'text-red-600' : '' }} overview-modal-add-talent-text text-[#222222]">Your contact information</span>
                                    <div class="{{ $errors->has('email') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                        <input name="email" value="{{ old('email') }}" type="text" id="email" class="{{ $errors->has('email') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="Email">
                                    </div>
                                    @if($errors->has('email'))
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="errors_phone">
                                    <div class="{{ $errors->has('phone') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                        <input name="phone" value="{{ old('phone') }}" type="text" id="phone" class="{{ $errors->has('phone') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="Phone">
                                    </div>
                                    @if($errors->has('phone'))
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-6 errors_type_helper">
                                <span class="{{ $errors->has('type_helper') ? 'text-red-600' : '' }} overview-modal-add-talent-text text-[#222222]">Type of Help Needed</span>
                                <div class="{{ $errors->has('type_helper') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] h-28 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input id="type_helper" name='type_helper' value="{{ old('type_helper') }}" type="text" class="costum overview-modal-add-talent-text border-none focus:ring-0 w-full p-1 outline-none" placeholder="">
                                </div>
                                {{-- <input id="type_helper" name='type_helper' value="{{ old('type_helper') }}" type="text" id="email" class="costum overview-modal-add-talent-text border-none focus:ring-0 w-full p-1 outline-none" placeholder=""> --}}

                                @if($errors->has('type_helper'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('type_helper') }}</p>
                                @endif
                            </div>
                            <div class="mt-6 errors_languages">
                                <span class="{{ $errors->has('languages') ? 'text-red-600' : '' }} overview-modal-add-talent-text text-[#222222]">Languages</span>
                                <div class="{{ $errors->has('languages') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input name='languages' value="{{ old('languages') }}" id="languages" type="text" class="costum overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 outline-none" placeholder="">
                                </div>
                                @if($errors->has('languages'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('languages') }}</p>
                                @endif
                            </div>
                            <div class="mt-6 errors_address">
                                <span class="{{ $errors->has('address') ? 'text-red-600' : '' }} overview-modal-add-talent-text text-[#222222]">Address</span>
                                <div class="{{ $errors->has('address') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input name="address" value="{{ old('address') }}" type="text" id="address" class="{{ $errors->has('address') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="">
                                </div>
                                @if($errors->has('address'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('address') }}</p>
                                @endif
                            </div>
                            <div class="mt-6 errors_about_talent">
                                <span class="{{ $errors->has('about_talent') ? 'text-red-600' : '' }} overview-modal-add-talent-text text-[#222222]">About talent</span>
                                <div class="{{ $errors->has('about_talent') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] h-[148px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                                    <textarea name="about_talent" rows="6" class="{{ $errors->has('address') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="Enter referral">{{ old('about_talent') }}</textarea>
                                    <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span>
                                </div>
                                @if($errors->has('about_talent'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('about_talent') }}</p>
                                @endif
                            </div>
                    </form>
                           
                            <div class="mt-6">
                                <span class="{{ $errors->has('talent_file') ? 'text-red-600' : '' }} overview-modal-add-talent-text text-[#222222]">Upload documents</span>
                                <form style="border-style: dotted" action="{{ route('uploadWithDb') }}"  class="dropzone w-[670px]  border border-[#CCD3DC] mt-2 rounded relative hover:cursor-pointer" id="dropzone"  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="type" value="TALENT">
                                    <div class="dz-default dz-message flex flex-col items-center justify-center  space-x-[10.25px]">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.6528C2.25 18.2386 2.58579 17.9028 3 17.9028H21C21.4142 17.9028 21.75 18.2386 21.75 18.6528C21.75 19.067 21.4142 19.4028 21 19.4028H3C2.58579 19.4028 2.25 19.067 2.25 18.6528Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21.5C2.25 21.0858 2.58579 20.75 3 20.75H21C21.4142 20.75 21.75 21.0858 21.75 21.5C21.75 21.9142 21.4142 22.25 21 22.25H3C2.58579 22.25 2.25 21.9142 2.25 21.5Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 11.4697C8.76256 11.1768 9.23744 11.1768 9.53033 11.4697L12 13.9393L14.4697 11.4697C14.7626 11.1768 15.2374 11.1768 15.5303 11.4697C15.8232 11.7626 15.8232 12.2374 15.5303 12.5303L12.5303 15.5303C12.2374 15.8232 11.7626 15.8232 11.4697 15.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C12.4142 2.75 12.75 3.08579 12.75 3.5V15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V3.5C11.25 3.08579 11.5858 2.75 12 2.75Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
                                        </svg>
                                        <span class="{{ $errors->has('talent_file') ? 'text-red-600' : '' }} overview-modal-add-talent-upload-text text-[#827C7C]">Click to upload.</span>
                                        <span class="{{ $errors->has('talent_file') ? 'text-red-600' : '' }} name-file text-xs text-gray-400">Max 10MB</span>
                                    </div>
                                </form>
                            </div>
    
                            <div class="py-12">
                                <button class="w-[670px] h-[40px] bg-palet rounded">
                                    <span class="overview-talent-modal-title text-white">Add Talent</span>
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </article>
    <script src="{{ asset('js/fileNameLoad.js') }}"></script>

    {{-- Quick search --}}
    <script type="text/javascript" src="{{ asset('js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript">
        $('input#search_talents').quicksearch('div#search_talent');
        $('input#simple-search').quicksearch('div#search_talent');
    </script>

    <script>
        // Validate
        $(function(){
        var validate = $('.validate_talent');
        
            if(validate.length){
                validate.validate({
                    rules: {
                        avatar:{
                            required:true
                        },
                        first_name:{
                            required:true,
                            maxlength:255
                        },
                        last_name:{
                            required:true,
                            maxlength:255
                        },
                        email:{
                            required:true,
                            email: true,
                        },
                        phone:{
                            required:true,
                            number:true,
                         
                            minlength:5,
                            maxlength:13
                        },
                        day_of_birthday:{
                            required:true
                        },
                        experience:{
                            required:true,
                            maxlength:255
                        },
                        experience:{
                            required:true,
                            maxlength:255
                        },
                        type_helper:{
                            required:true
                        },
                        languages:{
                            required:true
                        },
                        address:{
                            required:true,
                            maxlength:255
                        },
                        about_talent:{
                            required:true,
                            maxlength:255
                        }
                    },
                    errorPlacement: function(error, element){
                        if (element.is(":checkbox"))
                        {
                            error.appendTo(element.parents('.errors_status'));
                            error.appendTo(element.parents('.errors_subcategory'));
                        }else{ 
                            error.insertAfter( element );
                            error.appendTo(element.parents('.errors_avatar'));
                            error.appendTo(element.parents('.errors_first_name'));
                            error.appendTo(element.parents('.errors_last_name'));
                            error.appendTo(element.parents('.errors_email'));
                            error.appendTo(element.parents('.errors_phone'));
                            error.appendTo(element.parents('.errors_day_of_birthday'));
                            error.appendTo(element.parents('.errors_experience'));
                            error.appendTo(element.parents('.errors_type_helper'));
                            error.appendTo(element.parents('.errors_languages'));
                            error.appendTo(element.parents('.errors_address'));
                            error.appendTo(element.parents('.errors_about_talent'));
                        }
                    },

                })
            }
        })
        var type_helper = document.querySelector('#type_helper');
        var tagify = new Tagify(type_helper, {
        whitelist  : [
                        { value:'At Home Daycare', code:'at_home_daycare' },
                        { value:'Assist Bathing', code:'assist_bathing' },
                        { value:'Assist Feeding', code:'assist_feeding' },
                        { value:'Companion Elders', code:'companion_elders' },
                        { value:'Cook Meal', code:'cook_meal' },
                        { value:'Grade Schooler', code:'grade_schooler' },
                        { value:'Hour Help', code:'hour_help' },
                        { value:'Infant', code:'infant' },
                        { value:'Laundry', code:'laundry' },
                        { value:'Maternity Care', code:'maternity_care' },
                        { value:'Nanny', code:'nanny' },
                        { value:'Prep Meal', code:'prep_meal' },
                        { value:'Press Schooler', code:'press_schooler' },
                        { value:'Provide Transportation', code:'provide_transportation' },
                        { value:'Remind Medicine', code:'remind_medicine' },
                        { value:'Run Errands', code:'run_errands' },
                        { value:'Special Needs', code:'special_needs' },
                        { value:'Simple Housework', code:'simple_housework' },
                        { value:'Sister', code:'sister' },
                        { value:'Toddler', code:'toddler' },
                        { value:'Young Baby', code:'young_baby' },
                    ],
        maxTags: 10,
        dropdown: {
            maxItems: 20,           // <- mixumum allowed rendered suggestions
            classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0,             // <- show suggestions on focus
            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
        }
        })

    </script>

    <script>
        var languages = document.querySelector('#languages');
        var tagify = new Tagify(languages, {
        whitelist  : [
                        { value:'Chinese Cantonese', code:'chinese_cantonese' },
                        { value:'Chinese Mandarin', code:'chinese_mandarin' },
                        { value:'Ethiopian', code:'Ethiopian' },
                        { value:'French', code:'french' },
                        { value:'Hindi', code:'hindi' },
                        { value:'Polish', code:'polish' },
                        { value:'Spanish', code:'spanish' },
                        { value:'Thai', code:'thai' },
                        { value:'Vietnamese', code:'vietnamese' },
                        { value:'Japanese', code:'japanese' },
                        { value:'Korean', code:'korean' },
                        { value:'Indonesia', code:'indonesia' },
                        { value:'English', code:'english' },
                        { value:'Tagalog', code:'tagalog' },
                    ],
        maxTags: 10,
        dropdown: {
            maxItems: 20,           // <- mixumum allowed rendered suggestions
            classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0,             // <- show suggestions on focus
            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
        }
        })

    </script>


    <script>
        // Priview images
        var loadFile = function(event) {
          var output = document.getElementById('output');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src)
          }
        };

        // Upload FIle
        // $('#talent_filea').change(function(e){
        //     var val = $(this).val();
        //     e.preventDefault();
           
        //     var formData = new FormData($(".talent_submit_file")[0]);
                    
        //    $.ajax({
        //         url: $('.talent_submit_file').attr("action"),
        //         type: 'POST',
        //         data: formData,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         beforeSend : function(xhr ,a){
        //             $('.errors_uploaded').html('')
        //         const tmp = `<div class="w-full h-full bg-gray-200">
        //                         <div id="progress-bar" class="bg-hover h-full flex items-center justify-center text-5xl  font-medium text-white text-center p-0.5 leading-none " style="width: 1%"> </div>
        //                     </div>`;
        //             $('.files-kept').html(tmp)
        //         },

        //         xhr: function(){
        //         //upload Progress
        //         var xhr = $.ajaxSettings.xhr();
        //         if (xhr.upload) {
        //             xhr.upload.addEventListener('progress', function(event) {
        //             var percent = 0;
        //             var position = event.loaded || event.position;
        //             var total = event.total;
        //             if (event.lengthComputable){
        //             percent = Math.ceil(position / total * 100);
        //             }                   
        //             $("#progress-bar").css("width", + percent +"%");
        //             $("#progress-bar").text(percent +"%");
        //             }, true);
        //         }
        //         return xhr;
        //         },
        //         error: function(e){
        //             console.log(e)
        //             const tmp = `<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        //                             <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.6528C2.25 18.2386 2.58579 17.9028 3 17.9028H21C21.4142 17.9028 21.75 18.2386 21.75 18.6528C21.75 19.067 21.4142 19.4028 21 19.4028H3C2.58579 19.4028 2.25 19.067 2.25 18.6528Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
        //                             <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21.5C2.25 21.0858 2.58579 20.75 3 20.75H21C21.4142 20.75 21.75 21.0858 21.75 21.5C21.75 21.9142 21.4142 22.25 21 22.25H3C2.58579 22.25 2.25 21.9142 2.25 21.5Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
        //                             <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 11.4697C8.76256 11.1768 9.23744 11.1768 9.53033 11.4697L12 13.9393L14.4697 11.4697C14.7626 11.1768 15.2374 11.1768 15.5303 11.4697C15.8232 11.7626 15.8232 12.2374 15.5303 12.5303L12.5303 15.5303C12.2374 15.8232 11.7626 15.8232 11.4697 15.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
        //                             <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C12.4142 2.75 12.75 3.08579 12.75 3.5V15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V3.5C11.25 3.08579 11.5858 2.75 12 2.75Z" fill="{{ $errors->has('talent_file') ? '#e80f00' : '#827C7C' }}"/>
        //                         </svg>
        //                         <span class="{{ $errors->has('talent_file') ? 'text-red-600' : '' }} overview-modal-add-talent-upload-text text-[#827C7C]">Click to upload.</span>
        //                         <span class="{{ $errors->has('talent_file') ? 'text-red-600' : '' }} name-file text-xs text-gray-400">Max 10MB</span>`;
        //                         $('.files-kept').html(tmp)
        //             const errors = `<p class="mt-2 text-sm text-red-600 dark:text-red-500">${e.responseJSON.message}</p>`;
        //             $('.errors_uploaded').html(errors)
        //         },
        //         success: function (mdata) {
        //             console.log(mdata)
        //         },
        //     });
        // });

        // Dropzone config
        Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            resizeQuality: 1.0,
            acceptedFiles: ".pdf,.jpg,.png,.gif",
            // addRemoveLinks: true,
            timeout: 60000,

            // uploadMultiple:true
            removedfile: function(file) 
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("files/destroy") }}',
                    data: {file: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function (file, response) {
            },
            error: function (file, response) {
                return false;
            }
        };

    </script>
    <script>
        const options = {
            };
            const targetEl = document.getElementById('modal-add-talent');
            const modal = new Modal(targetEl, options);



            function close_modal(){
                modal.hide();
            }

            function modal_show()
            {
                modal.show();
            }

    </script>
    @if ($errors->any())
        <script>
            modal.show()
        </script>    
    @endif
</main>
@endsection
