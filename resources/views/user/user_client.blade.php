@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] space-x-2 mt-[85px] px-5 xl:w-[75%]">
        <div>            
            <div id="myTabContent" class="text-teal-500">
                 <form action="{{ route('user_client.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <div>
                                            <label for="first-name" class="{{ $errors->has('first_name') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">First Name</label>
                                            <div class="{{ $errors->has('first_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                <input name="first_name" value="{{ old('first_name') }}" type="text" id="first-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="">
                                            </div>
                                            @if($errors->has('first_name'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('first_name') }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="last-name" class="{{ $errors->has('last_name') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Last Name</label>
                                            <div class="{{ $errors->has('last_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                <input name="last_name" value="{{ old('last_name') }}" type="text" id="last-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="">
                                            </div>
                                            @if($errors->has('last_name'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('last_name') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="px-4 mt-4 flex space-x-4">
                                        <div>
                                            <label for="email" class="{{ $errors->has('email') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Email</label>
                                            <div class="{{ $errors->has('email') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                <input name="email" value="{{ old('email') }}" type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="">
                                            </div>
                                            @if($errors->has('email'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="phone" class="{{ $errors->has('phone') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Phone</label>
                                            <div class="{{ $errors->has('phone') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                <input name="phone" value="{{ old('phone') }}" type="text" id="phone" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3  outline-none " placeholder="">
                                            </div>
                                            @if($errors->has('phone'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('phone') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="px-4 mt-4 flex space-x-4">
                                        <div>
                                            <label for="address" class="{{ $errors->has('address') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Address</label>
                                            <div class="{{ $errors->has('address') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                                <input name="address" value="{{ old('address') }}" type="text" id="address" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3  outline-none " placeholder="">
                                            </div>
                                            @if($errors->has('address'))
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('address') }}</p>
                                            @endif
                                        </div>
                                        <div>
                                            <label for="languages" class="{{ $errors->has('languages') ? 'text-red-600' : '' }} block overview-status-field text-[#222222] mb-2">Languages</label>
                                            <div class="{{ $errors->has('languages') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-[316px] p-3 h-10 border border-[#ECECEC] flex items-center rounded">
                                                <select name="languages" id="category" class="text-sm overview-note-body bg-transparent border-none text-colortext appearance-none rounded-lg p-1 block w-full focus:ring-0 outline-none">
                                                    <option value="English">English</option>
                                                    <option value="Rusia">Rusia</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Hindi">Hindi</option>
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
                                    <div class="px-4 mt-4 ">
                                        <label class="{{ $errors->has('note') ? 'text-red-600' : '' }} overview-status-field text-[#222222] mb-2">Note</label>
                                        <div class="{{ $errors->has('note') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-[650px] h-[221px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                                            <textarea id="message" name="note" rows="9" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3  outline-none text-[#222222]" placeholder="">{{ old('note') }}</textarea>
                                            <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span>
                                        </div>
                                        @if($errors->has('note'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('note') }}</p>
                                        @endif
                                    </div>
                                    <div class="flex mt-10"></div>
                                </div>
                                <div class="flex justify-end w-full mt-6 space-x-2 ">
                                    <div class="w-40 h-[42px] bg-colorStatusCard1 rounded-md flex items-center justify-center hover:cursor-pointer">
                                        <span class="overview-attechment-btn-text justify-center">Delete</span>
                                    </div>
                                    <button class="w-40 h-[42px] bg-palet rounded-md ">
                                        <span class="overview-attechment-btn-text justify-center">Create</span>
                                    </button>
                                </div>
                            
                        </div>

                        {{-- left --}}
                        <div class="w-[300px] xl:w-[30%] ">
                            {{-- Attached file --}}
                            <div class="bg-bgbody rounded h-[249px]">
                                <div class="flex justify-between px-4 pt-[18.5px]">
                                    <div class="flex items-center space-x-2 ">
                                        <div class="w-2 h-6 bg-palet rounded-sm"></div>
                                        <span class="text-[#222222] user-create-client-title">Attached file</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="px-4 mt-4 space-y-3">
                                    {{-- Upload --}}
                                    <label for="attached_file_user">
                                        <div class="{{ $errors->has('attached_file') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex flex-col justify-center items-center w-full h-40 rounded border-[2px] border-dotted space-y-[10.25px] hover:cursor-pointer">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.1528C2.25 17.7386 2.58579 17.4028 3 17.4028H21C21.4142 17.4028 21.75 17.7386 21.75 18.1528C21.75 18.567 21.4142 18.9028 21 18.9028H3C2.58579 18.9028 2.25 18.567 2.25 18.1528Z" fill="{{ $errors->has('attached_file') ? '#e80f00' : '#827C7C' }} "/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21C2.25 20.5858 2.58579 20.25 3 20.25H21C21.4142 20.25 21.75 20.5858 21.75 21C21.75 21.4142 21.4142 21.75 21 21.75H3C2.58579 21.75 2.25 21.4142 2.25 21Z" fill="{{ $errors->has('attached_file') ? '#e80f00' : '#827C7C' }}"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 10.9697C8.76256 10.6768 9.23744 10.6768 9.53033 10.9697L12 13.4393L14.4697 10.9697C14.7626 10.6768 15.2374 10.6768 15.5303 10.9697C15.8232 11.2626 15.8232 11.7374 15.5303 12.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L8.46967 12.0303C8.17678 11.7374 8.17678 11.2626 8.46967 10.9697Z" fill="{{ $errors->has('attached_file') ? '#e80f00' : '#827C7C' }}"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.5C12.75 14.9142 12.4142 15.25 12 15.25C11.5858 15.25 11.25 14.9142 11.25 14.5V3C11.25 2.58579 11.5858 2.25 12 2.25Z" fill="{{ $errors->has('attached_file') ? '#e80f00' : '#827C7C' }}"/>
                                            </svg>
                                            {{-- <span class="overview-modal-add-talent-upload-text text-[#827C7C]">Drop file here or click to upload.</span> --}}
                                            <span class="{{ $errors->has('attached_file') ? 'text-red-600' : '' }} overview-modal-add-talent-upload-text text-[#827C7C]">Click to upload.</span>
                                        </div>
                                        <input id="attached_file_user" name="attached_file" id="attached_file" type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="flex mt-24"></div>
            </div>
        </div>
    </article>
    <!--
    <script>
        $('#attached_file_user').change(function(){  
          var formData = new FormData($("#uploadForm")[0]);
          $.ajax({
            url: $('#uploadForm').attr("action"),
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,

            beforeSend : function(){
                // const html = `<div class="mb-5">
                //                 <svg role="status" class="w-20 h-16 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-green-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                //                   <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                //                   <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                //                 </svg>
                //               </div>
                //               <div class="w-2/4 bg-gray-200 rounded-full dark:bg-gray-700">
                //                 <div id="progress-bar" class="bg-green-600 text-sm font-semibold text-blue-100 text-center p-0.5 leading-none rounded-full" > 85%</div>
                //               </div>`;
                // $('#template-img').html(html)
            },

            xhr: function(){
            //upload Progress
              var xhr = $.ajaxSettings.xhr();
              if (xhr.upload) {
                xhr.upload.addEventListener('progress', function(event) {

                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable)
                {
                percent = Math.ceil(position / total * 100);
                }
                
                $("#progress-bar").css("width", + percent +"%");
                $("#progress-bar").text(percent +"%");
                }, true);
              }
              return xhr;
            },
            success: function (mdata) {
              const html = `<div id="uplod_image" class="flex justify-center p-5 shadow rounded-lg overflow-x-auto max-h-[29rem] h-screen bg-white">
                              <div class="w-1/2  text-center mx-auto m-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 mb-5 text-green-600 opacity-70 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-green-600 font-semibold uppercase">successfully</span>
                                  <div class="flex mt-10">
                                    <div class="relative w-full">
                                        <input readonly type="search" id="pilih" class="block p-2.5 w-full z-20 text-sm text-gray-400 text-center bg-gray-50 rounded-lg  border-2 border-gray-100 outline-none " value="`+mdata.path+`" required>
                                        <button title="Copy" onclick="copy_text()" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-gray-100 rounded-r-lg  border-2 border-gray-100 hover:bg-gray-200 focus:outline-none ">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                          </svg>
                                        </button>
                                    </div>
                                  </div>
                              </div>
                            </div>`;

              $('#load').html(html)
              
            },
          });
        });

    </script>
-->
</main>

@endsection
