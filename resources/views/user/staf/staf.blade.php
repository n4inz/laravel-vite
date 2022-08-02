@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class=" ml-[310px] space-x-2 mt-[85px] px-5 w-[75%]">
        <div class="flex items-center justify-between mt-8 w-[1017px] xl:w-full">
            <span class="overview-modal-add-talent-title">Staf</span>
            <button onclick="modal_show()" class="w-[111px] h-10 bg-palet rounded-md">
                <span class="task-btn-text">+ Create</span>
            </button>
        </div>
        <div class="mt-6 h-20 w-[1017px] xl:w-full bg-bgbody px-6 flex items-center justify-between rounded">
            <div class="flex items-center space-x-8 w-[1017px]">
                <div class="flex items-center space-x-2 ">
                    <div class="w-2 h-6 bg-palet rounded-sm"></div>
                    <span class="text-[#222222] user-talent-title">Staf</span>
                </div>
    
                <div class="relative w-80 left-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                        </svg>
                    </div>
                    <div class="w-[340px] h-10 border-2 border-[#EFEFEF] rounded-md bg-[#EFEFEF] flex items-center">
                        <input type="text"  class="border border-[#EFEFEF] text-colortext text-sm bg-transparent border-none outline-none  block w-full pl-10 p-2 focus:ring-0" placeholder="Search client" required>
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
            @foreach ($staf as $values )
                <div class="flex items-center w-[310px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                    <div>
                        <img class="w-20 h-20 rounded-full" src="{{ asset('storage/Setting/avatar/'.$values->avatar) }}" alt="">
                    </div>
                    <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                        <span class="user-talent-name text-[#222222]">{{ $values->user->full_name }}</span>
                        {{-- <span class="user-talent-live">Age {{ Carbon\Carbon::parse($values->day_of_birthday)->age }}, in  {{ Str::limit($values->address, 20, $end='...') }}</span> --}}
                        <span class="overview-note-body text-[#2CA6A0]">
                           {{ $values->type }}
                        </span>
                        <div class="flex items-center space-x-[9.67px] ">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                            </svg>
                            <span class="user-talent-live ">
                                {{ Str::limit($values->user->email, 20, $end='...') }}
                            </span>
                        </div>
                    </div>
                </div>         
            @endforeach
        </div>

        {{-- Modal add staf --}}
        <div id="modal-add-staf" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">  
            <div class="p-4 w-[852px] h-screen">
                <div class="bg-white rounded-lg shadow ">
                    <div class="relative text-center pt-10">
                        <span class="overview-modal-add-talent-title mt-10 ml-10 text-[#222222]">Add New Staf</span>
                        <button onclick="close_modal()" type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <form action="{{ route('user_staf.staf_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="px-[91px] mt-10">
                            <div class="flex justify-center  items-center space-x-10">
                                <div>
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
                            </div>
                            <div class="w-full flex flex-col mt-6">
                                <div class="flex items-center space-x-2">
                                    <div class="mb-6 w-full ">
                                        <label for="full-name" class="{{ $errors->has('full_name') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">Full Name</label>
                                        <div class="{{ $errors->has('full_name') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-full h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                            <input name="full_name" value="{{ old('full_name') }}" type="text" id="full-name" class="{{ $errors->has('full_name') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="First Name">
                                        </div>
                                        @if($errors->has('full_name'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('full_name') }}</p>
                                        @endif
                                    </div>
                                    <div class="mb-6 w-full">
                                        <label for="email" class="{{ $errors->has('email') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">Email</label>
                                        <div class="{{ $errors->has('email') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} w-full h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                            <input name="email" value="{{ old('email') }}" type="email" id="email" class="{{ $errors->has('email') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none " placeholder="Email">
                                        </div>
                                        @if($errors->has('email'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>                        
                                </div>
       
                                <div class="flex items-center space-x-2">
                                    <div class="mb-6 w-full">
                                        <label for="password" class="{{ $errors->has('password') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">Password</label>
                                        <div class="{{ $errors->has('password') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                            <input name="password" value="{{ old('password') }}" type="password" id="password" class="{{ $errors->has('password') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none text-[#222222] opacity-50" placeholder="Password">
                                            <span toggle="#password" class="fa fa-eye-slash toggle-password mr-2"></span>
                                        </div>
                                        @if($errors->has('password'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <div class="mb-6 w-full">
                                        <label for="type" class="{{ $errors->has('type') ? 'text-red-600' : '' }} block mb-2 overview-modal-add-talent-text text-[#222222]">Type</label>
                                        <div class="{{ $errors->has('type') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                            <select name="type"  class="bg-transparent border-none focus:ring-0 text-[#222222] block w-full p-2.5">
                                                <option selected>Choose a type</option>
                                                <option value="staf">Staf</option>
                                            </select>
                                        </div>
                                        @if($errors->has('type'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('type') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="py-12">
                                <button class="w-[670px] h-[40px] bg-palet rounded">
                                    <span class="overview-talent-modal-title text-white">Add Your Staf</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </article>
    <script>
        const options = {
            };
            const targetEl = document.getElementById('modal-add-staf');
            const modal = new Modal(targetEl, options);



            function close_modal(){
                modal.hide();
            }

            function modal_show()
            {
                modal.show();
            }
            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye-slash fa-eye");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr("type", "text");
                } else {
                input.attr("type", "password");
                }
            });
    </script>
    @if ($errors->any())
        <script>
            modal.show()
        </script>    
    @endif

    <script>
        var loadFile = function(event) {
          var output = document.getElementById('output');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src)
          }
        };
    </script>
</main>

@endsection
