@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] space-x-2 mt-[85px] px-5 xl:w-[75%]">
        <div>            
            <div id="myTabContent" class="text-teal-500">
                <form id="validate_clients" action="{{ route('user_client.store') }}" class="validate_client" method="POST" enctype="multipart/form-data">
                        <div class=" flex space-x-2 mt-11">
                            {{-- right --}}
                            <div class="w-[704px] xl:w-[80%] ">
                                {{-- Create Client --}}
                                    @csrf
                                    <div class="bg-bgbody rounded ">
                                        <div class="px-4 pt-[18.5px]">
                                            <div class="flex items-center space-x-2 ">
                                                <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                                <span class="text-[#222222] user-create-client-title">Create Client</span>
                                            </div>
                                        </div>
                                        <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                        <div class="px-4 mt-8 flex space-x-4">
                                            <div class="errors_first_name">
                                                <label class="{{ $errors->has('first_name') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">First Name</label>
                                                <div class="{{ $errors->has('first_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                    <input name="first_name" value="{{ old('first_name') }}" type="text" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="">
                                                </div>
                                                @if($errors->has('first_name'))
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('first_name') }}</p>
                                                @endif
                                            </div>
                                            <div class="errors_last_name">
                                                <label class="{{ $errors->has('last_name') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Last Name</label>
                                                <div class="{{ $errors->has('last_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                    <input name="last_name" value="{{ old('last_name') }}" type="text" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="">
                                                </div>
                                                @if($errors->has('last_name'))
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('last_name') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="px-4 mt-4 flex space-x-4">
                                            <div class="errors_email">
                                                <label class="{{ $errors->has('email') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Email</label>
                                                <div class="{{ $errors->has('email') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                    <input name="email" value="{{ old('email') }}" type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="">
                                                </div>
                                                @if($errors->has('email'))
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('email') }}</p>
                                                @endif
                                            </div>
                                            <div class="errors_phone">
                                                <label class="{{ $errors->has('phone') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Phone</label>
                                                <div class="{{ $errors->has('phone') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                    <input name="phone" value="{{ old('phone') }}" type="text" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3  outline-none " placeholder="">
                                                </div>
                                                @if($errors->has('phone'))
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('phone') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="px-4 mt-4 flex space-x-4">
                                            <div class="errors_address">
                                                <label class="{{ $errors->has('address') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Address</label>
                                                <div class="{{ $errors->has('address') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                    <input name="address" value="{{ old('address') }}" type="text" id="address" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3  outline-none " placeholder="">
                                                </div>
                                                @if($errors->has('address'))
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('address') }}</p>
                                                @endif
                                            </div>
                                            <div>
                                                <label  class="{{ $errors->has('languages') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Languages</label>
                                                <div class="{{ $errors->has('languages') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-[316px] p-3 h-10 border border-[#ECECEC] flex items-center rounded">
                                                    <select name="languages" id="category" class="text-sm overview-note-body bg-transparent border-none text-colortext appearance-none rounded-lg p-1 block w-full focus:ring-0 outline-none">
                                                        <option @if(old('languages') == 'Chinese Cantonese') selected @endif value="Chinese Cantonese">Chinese Cantonese</option>
                                                        <option @if(old('languages') == 'Chinese Mandarin') selected @endif value="Chinese Mandarin">Chinese Mandarin</option>
                                                        <option @if(old('languages') == 'English') selected @endif value="English">English</option>
                                                        <option @if(old('languages') == 'Ethiopian') selected @endif value="Ethiopian">Ethiopian</option>
                                                        
                                                        <option @if(old('languages') == 'French') selected @endif value="French">French</option>
                                                        <option @if(old('languages') == 'Hindi') selected @endif value="Hindi">Hindi</option>
                                                        <option @if(old('languages') == 'Japanese') selected @endif value="Japanese">Japanese</option>
                                                        <option @if(old('languages') == 'Korean') selected @endif value="Korean">Korean</option>
                                                        <option @if(old('languages') == 'Tagalog') selected @endif value="Tagalog">Tagalog</option>
                                                        <option @if(old('languages') == 'Polish') selected @endif value="Polish">Polish</option>
                                                        <option @if(old('languages') == 'Russian') selected @endif value="Russian">Russian</option>
                                                        <option @if(old('languages') == 'Spanish') selected @endif value="Spanish">Spanish</option>
                                                        <option @if(old('languages') == 'Thai') selected @endif value="Thai">Thai</option>
                                                        <option @if(old('languages') == 'Vietnamese') selected @endif value="Vietnamese">Vietnamese</option>
                                                    </select>
                                                    <div>
                                                        <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2071 0.54289C14.8166 0.15237 14.1834 0.15237 13.7929 0.54289L8 6.3358L2.2071 0.542889C1.8166 0.152369 1.1834 0.152369 0.7929 0.542889C0.4024 0.933409 0.4024 1.56658 0.7929 1.9571L6.5858 7.75C7.3668 8.531 8.6332 8.531 9.4142 7.75L15.2071 1.95711C15.5976 1.56658 15.5976 0.93342 15.2071 0.54289Z" fill="#3BD7CF"/>
                                                        </svg>    
                                                    </div>
                                                </div>
                                                @if($errors->has('languages'))
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('languages') }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="px-4 mt-4 errors_note">
                                            <label class="{{ $errors->has('note') ? 'text-red-600' : '' }} overview-status-field text-[#222222] mb-2">Note</label>
                                            <div class="{{ $errors->has('note') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-[650px] h-[221px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                                                <textarea name="note" rows="9" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3  outline-none text-[#222222]" placeholder="">{{ old('note') }}</textarea>
                                                <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span>
                                            </div>
                                            @if($errors->has('note'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('note') }}</p>
                                            @endif
                                        </div>
                                        <div class="flex mt-10"></div>
                                    </div>
                                    <div class="flex justify-end w-full mt-6 space-x-2 ">
                                        <div class="w-40 h-[42px] bg-colorStatusCard1 rounded-md flex items-center justify-center hover:cursor-pointer" onclick="model_open()">
                                            <span class="overview-attechment-btn-text justify-center">Delete</span>
                                        </div>
                                        <button class="w-40 h-[42px] bg-palet rounded-md" >
                                            <span class="overview-attechment-btn-text justify-center">Create</span>
                                        </button>
                                    </div>
                                
                            </div>

                            {{-- left --}}
                            <div class="w-[300px] xl:w-[30%] space-y-2">
                                <div class="bg-bgbody rounded">
                                    <div class="flex justify-between px-4 pt-[18.5px]">
                                        <div class="flex items-center space-x-2 ">
                                            <div class="w-2 h-6 bg-palet rounded-sm"></div>
                                            <span class="text-[#222222] user-create-client-title">Avatar</span>
                                        </div>
                                    </div>
                                    <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                    <div class="px-4 mt-6 flex items-center justify-center">
                                        {{-- Upload --}}
                                        <label for="avatar" class="group">
                                            <div id="bg-avatar" class="relative  w-[186px] flex justify-center h-[186px] bg-[#E8E8E8] rounded-full border-[2px] hover:cursor-pointer">
                                                <img id="output" alt="" class="w-full rounded-full ring-0 bg-opacity-80 hover:animate-pulse">
                                                <div class="absolute -bottom-3 w-9 h-9 bg-palet rounded-full flex items-center justify-center">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6875 3.375C1.6875 2.44302 2.44302 1.6875 3.375 1.6875H14.625C15.557 1.6875 16.3125 2.44303 16.3125 3.375V14.625C16.3125 15.557 15.557 16.3125 14.625 16.3125H3.375C2.44303 16.3125 1.6875 15.557 1.6875 14.625V3.375ZM3.375 2.8125C3.06434 2.8125 2.8125 3.06434 2.8125 3.375V14.625C2.8125 14.9357 3.06434 15.1875 3.375 15.1875H14.625C14.9357 15.1875 15.1875 14.9357 15.1875 14.625V3.375C15.1875 3.06434 14.9357 2.8125 14.625 2.8125H3.375Z" fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3125 6.75C4.3125 5.40381 5.40381 4.3125 6.75 4.3125C8.09619 4.3125 9.1875 5.40381 9.1875 6.75C9.1875 8.09619 8.09619 9.1875 6.75 9.1875C5.40381 9.1875 4.3125 8.09619 4.3125 6.75ZM6.75 5.4375C6.02514 5.4375 5.4375 6.02514 5.4375 6.75C5.4375 7.47486 6.02514 8.0625 6.75 8.0625C7.47486 8.0625 8.0625 7.47486 8.0625 6.75C8.0625 6.02514 7.47486 5.4375 6.75 5.4375Z" fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2487 9.3319C11.4635 9.13865 11.7897 9.13946 12.0034 9.33378L16.1284 13.0838C16.3583 13.2928 16.3752 13.6485 16.1662 13.8784C15.9573 14.1082 15.6015 14.1252 15.3717 13.9162L11.6231 10.5085L8.25133 13.5431C8.04126 13.7322 7.72354 13.736 7.50896 13.5521L5.22656 11.5957L2.58753 13.575C2.339 13.7614 1.98643 13.711 1.80003 13.4625C1.61364 13.214 1.664 12.8614 1.91253 12.675L4.91253 10.425C5.12345 10.2668 5.41593 10.2763 5.6161 10.4479L7.86598 12.3764L11.2487 9.3319Z" fill="white"/>
                                                    </svg>
                                                </div>                           
                                            </div>
                                        </label>
                                        <input type="file" id="avatar" name="avatar" class="hidden" onchange="loadFile(event)">
                                    </div>
                                    <span class="{{ $errors->has('avatar') ? 'text-red-600' : '' }} text-center text-xs mt-4 mb-4 flex items-center justify-center text-gray-400">Max 126Kb</span>
                                    <div class="flex mt-4"></div>
                                </div>
                </form>
                                {{-- Attached file --}}
                                <form action="{{ route('upload') }}" method="POST" class="upload" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="type" value="client_file">
                                    <div class="bg-bgbody rounded {{ $errors->has('attached_file') ? 'h-[290px]' : 'h-[259px]' }} ">
                                        <div class="flex justify-between px-4 pt-[18.5px]">
                                            <div class="flex items-center space-x-2 ">
                                                <div class="w-2 h-6 bg-palet rounded-sm"></div>
                                                <span class="text-[#222222] user-create-client-title">Attached file</span>
                                            </div>
                                        </div>
                                        <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                        <div class="px-4 mt-4 space-y-3">
                                            {{-- Upload --}}
                                            <label for="client_file">
                                                <div class="{{ $errors->has('client_file') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex flex-col justify-center items-center w-full h-40 rounded border-[2px] border-dotted space-y-[10.25px] hover:cursor-pointer files-kept">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.1528C2.25 17.7386 2.58579 17.4028 3 17.4028H21C21.4142 17.4028 21.75 17.7386 21.75 18.1528C21.75 18.567 21.4142 18.9028 21 18.9028H3C2.58579 18.9028 2.25 18.567 2.25 18.1528Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }} "/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21C2.25 20.5858 2.58579 20.25 3 20.25H21C21.4142 20.25 21.75 20.5858 21.75 21C21.75 21.4142 21.4142 21.75 21 21.75H3C2.58579 21.75 2.25 21.4142 2.25 21Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }}"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 10.9697C8.76256 10.6768 9.23744 10.6768 9.53033 10.9697L12 13.4393L14.4697 10.9697C14.7626 10.6768 15.2374 10.6768 15.5303 10.9697C15.8232 11.2626 15.8232 11.7374 15.5303 12.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L8.46967 12.0303C8.17678 11.7374 8.17678 11.2626 8.46967 10.9697Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }}"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.5C12.75 14.9142 12.4142 15.25 12 15.25C11.5858 15.25 11.25 14.9142 11.25 14.5V3C11.25 2.58579 11.5858 2.25 12 2.25Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }}"/>
                                                    </svg>
                                                    
                                                    <span class="{{ $errors->has('client_file') ? 'text-red-600' : '' }} overview-modal-add-talent-upload-text text-[#827C7C]">Click to upload.</span>
                                                    <span class="{{ $errors->has('client_file') ? 'text-red-600' : '' }} name-file text-xs text-gray-400">Max 10MB</span>
                                                    
                                                </div>
                                                <input  name="file" id="client_file" type="file" class="hidden">
                                            </label>
                                        </div>
                                        
                                        <div class="errors_client_file bg-bgbody flex items-center justify-center px-4">
                                            @if($errors->has('client_file'))
                                                <p class="mt-2 text-center text-sm text-red-600 dark:text-red-500">{{ $errors->first('client_file') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="flex mt-24"></div>
            </div>
        </div>
    </article>
   
    <script>
        // Validate form
        $(function(){
        var validate = $('#validate_clients');
        
            if(validate.length){
                validate.validate({
                    rules: {
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
                            maxlength:255
                        },
                        phone:{
                            required:true,
                            number:true,
                         
                            minlength:5,
                            maxlength:13
                        },
                        address:{
                            required:true,
                            maxlength:255
                        },
                        note:{
                            required:true,
                            maxlength:255
                        },
                    },
                    errorPlacement: function(error, element){
                        if (element.is(":checkbox"))
                        {
                            error.appendTo(element.parents('.errors_status'));
                            error.appendTo(element.parents('.errors_subcategory'));
                        }else{ 
                            error.insertAfter( element );
                            error.appendTo(element.parents('.errors_first_name'));
                            error.appendTo(element.parents('.errors_last_name'));
                            error.appendTo(element.parents('.errors_email'));
                            error.appendTo(element.parents('.errors_phone'));
                            error.appendTo(element.parents('.errors_address'));
                            error.appendTo(element.parents('.errors_note'));
                        }
                    },
                })
            }
        })

        // Priview image
        var loadFile = function(event) {

          var output = document.getElementById('output');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src)
          }

        };


        // Upload File
        $('#client_file').change(function(e){
            var val = $(this).val();
            e.preventDefault();
           
            var formData = new FormData($(".upload")[0]);        
           $.ajax({
                url: $('.upload').attr("action"),
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend : function(xhr ,a){
                    const tmp = `<div class="">
                                    <svg role="status" class="w-20 h-16 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                </div>
                                <span class="progress">0%</span>
                                <span class="animate-pulse overview-status-field text-[#222222]">Please wait</span>`;
                    $('.files-kept').html(tmp)
                },

                xhr: function(){
                   
                //upload Progress
                var xhr = $.ajaxSettings.xhr();
                if (xhr.upload) {
                    xhr.upload.addEventListener('progress', function(event) {
                    var percent = 0;
                    var position = event.loaded || event.position;
                    var total = event.total;
                    if (event.lengthComputable){
                    percent = Math.ceil(position / total * 100);
                    }                   
                    // $("#progress-bar").css("width", + percent +"%");
                    $(".progress").text(percent +"%");
                    }, true);
                }
                return xhr;
                },
                error: function(e){

                    console.log(e)
                    const tmp = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.1528C2.25 17.7386 2.58579 17.4028 3 17.4028H21C21.4142 17.4028 21.75 17.7386 21.75 18.1528C21.75 18.567 21.4142 18.9028 21 18.9028H3C2.58579 18.9028 2.25 18.567 2.25 18.1528Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }} "/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21C2.25 20.5858 2.58579 20.25 3 20.25H21C21.4142 20.25 21.75 20.5858 21.75 21C21.75 21.4142 21.4142 21.75 21 21.75H3C2.58579 21.75 2.25 21.4142 2.25 21Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }}"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 10.9697C8.76256 10.6768 9.23744 10.6768 9.53033 10.9697L12 13.4393L14.4697 10.9697C14.7626 10.6768 15.2374 10.6768 15.5303 10.9697C15.8232 11.2626 15.8232 11.7374 15.5303 12.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L8.46967 12.0303C8.17678 11.7374 8.17678 11.2626 8.46967 10.9697Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }}"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.5C12.75 14.9142 12.4142 15.25 12 15.25C11.5858 15.25 11.25 14.9142 11.25 14.5V3C11.25 2.58579 11.5858 2.25 12 2.25Z" fill="{{ $errors->has('client_file') ? '#e80f00' : '#827C7C' }}"/>
                                </svg>
                                
                                <span class="{{ $errors->has('client_file') ? 'text-red-600' : '' }} overview-modal-add-talent-upload-text text-[#827C7C]">Click to upload.</span>
                                <span class="{{ $errors->has('client_file') ? 'text-red-600' : '' }} name-file text-xs text-gray-400">Max 10MB</span>`;
                    $('.files-kept').html(tmp)

                    const errors = `<p class="mt-2 text-center text-sm text-red-600 dark:text-red-500 py-2">${e.responseJSON.message}</p>
                                    <div class="flex mb-5"></div>`;
                    if(e.status != 500){
                        $('.errors_client_file').html(errors)                  
                    }
                },
                success: function (mdata) {
                    console.log(mdata)
                    var extension = val.substring(val.lastIndexOf('.') + 1);
                    if(extension == 'pdf' || extension == 'PDF' || extension == 'Pdf'){
                        var pdf = `<i class="fa fa-5x fa-file-pdf-o text-red-600" aria-hidden="true"></i>
                                    <span class="name-file text-xs text-gray-400">Uploaded</span>`;                 
                        $('.files-kept').html(pdf)
                    }else if(extension == 'zip' || extension == 'rar' || extension == 'Zip'){
                        var zip = `<i class="fa fa-5x text-yellow-400 fa-file-archive-o" aria-hidden="true"></i> 
                                    <span class="name-file text-xs text-gray-400">Uploaded</span>`;                 
                        $('.files-kept').html(zip)
                    }else{
                        var other = `<i class="fa fa-5x fa-file-text-o" aria-hidden="true"></i> 
                                    <span class="name-file text-xs text-gray-400">Uploaded</span>`;                 
                        $('.files-kept').html(other)
                    }
                                
                },
            });
        });

    </script>
     <script src="{{ asset('js/fileNameLoad.js') }}"></script>
</main>

@endsection
