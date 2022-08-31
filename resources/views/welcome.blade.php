<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <title>Fine Uploader Gallery View Demo</title>
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/demo.css') }}"> --}}
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> --}}
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/js-datepicker/dist/datepicker.min.css">
    <script src="https://unpkg.com/js-datepicker"></script>

    <style>
        .iti__country-list{
            width: vw;
        }
    </style>
</head>
<body>
    <form>
        <input id="phone" name="phone" type="tel">
        <button type="submit">Submit</button>
    </form>

    <div date-rangepicker class="flex items-center">
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
          </div>
          <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
        </div>
        <span class="mx-4 text-gray-500">to</span>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
          </div>
          <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
      </div>
    </div>

    {{-- <form action="{{ route('jobboard.jobs_store') }}" method="POST">@csrf
        <input type="text" name="dates">
        <input type="submit">
    </form> --}}

    <input id="1" type="text" class="one">
    <input id="1" type="text" class="two">

  {{-- <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data"
  class="dropzone bg-slate-400" id="dropzone">
  @csrf
  </form> --}}
  {{-- <div class='container-loading'>
    <div class='loader'>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--dot'></div>
      <div class='loader--text'></div>
    </div>
  </div> --}}
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
                            <form action="{{ route('uploadWithDb') }}"  class="dropzone w-[670px]  border border-dotted border-[#CCD3DC] mt-2 rounded relative hover:cursor-pointer" id="dropzone"  method="POST" enctype="multipart/form-data">
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


<script>
    const start = datepicker('.one', { id: 1 })
const end = datepicker('.two', { id: 1 })

start.getRange()
end.getRange()
</script>

<script src="{{ asset('js/intlTelInput.js') }}"></script>
{{-- <script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    autoHideDialCode:true,
    placeholderNumberType:"MOBILE",


    utilsScript: "{{ asset('js/utils.js') }}",
  });
  $('input[name="dates"]').daterangepicker();

</script> --}}
<script type="text/javascript">

  Dropzone.options.dropzone =
  {
      maxFilesize: 12,
      resizeQuality: 1.0,
      acceptedFiles: ".pdf,.jpg,.png,.gif",
      addRemoveLinks: true,
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
</body>
</html>