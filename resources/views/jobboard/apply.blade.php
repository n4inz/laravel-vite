<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>
<body class="bg-bgbody font-roboto ">
    <main>
        <div class="flex">
            <div class=" flex items-center justify-center w-[555px]  ">
                <div class=" h-full xl:fixed top-0 bottom-0 w-[555px] bg-[#F3FFFE] z-20">
                    <img src="{{ asset('images/bg-1.png') }}" alt="">
                </div>
            </div>
            <div class="mt-[61px] pl-[58px] w-[680px]">
                <form action="{{ route('jobboard.new_aplicants') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uid" value="{{ $uid }}">
                    <span class="overview-send-title text-palet w-[650px]">Apply to job</span>
                    <div class="mt-10 flex space-x-4">
                        <div>
                            <label for="first-name" class="block overview-modal-add-talent-text text-[#222222] mb-2">Full Name</label>
                            <div class="flex items-center justify-center w-[327px] h-10 border border-[#CCD3DC] rounded text-[#222222]">
                                <input name="first_name" value="{{ old('first_name') }}" type="text" id="first-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="First Name">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="invisible block overview-modal-add-talent-text text-[#222222] mb-2">Last Name</label>
                            <div class="flex items-center justify-center w-[327px] h-10 border border-[#CCD3DC] rounded text-[#222222]">
                                <input name="last_name" value="{{ old('last_name') }}" type="text" id="last-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <label for="" class="block overview-modal-add-talent-text text-[#222222] mb-2">Your contact information</label>
                        <div class="flex items-center w-[670px] h-10 rounded border border-[#CCD3DC]">
                            <input name="email" value="{{ old('email') }}" type="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Email">
                        </div>
                        <div class="flex items-center w-[670px] h-10 rounded border border-[#CCD3DC] mt-[10px]">
                            <input name="phone" value="{{ old('phone') }}" type="text"  class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Phone">
                        </div>
                    </div>
                    <div class="mt-8">
                        <label class="block overview-modal-add-talent-text text-[#222222] mb-2">Address</label>
                        <div class="flex items-center w-[670px] h-10 rounded border border-[#CCD3DC] mt-[10px]">
                            <input name="address" value="{{ old('address') }}" type="text" id="address" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="">
                        </div>
                    </div>
                    <div class="mt-8">
                        <span class="overview-modal-add-talent-text text-[#222222]">Description</span>
                        <div class="w-[670px] h-[148px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                            <textarea name="description" rows="6" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="Enter your comment">{{ old('description') }}</textarea>
                            <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <span class="overview-modal-add-talent-text text-[#222222]">Upload documents</span>
                        <label for="file_new_aplicants">
                            <div class="w-[670px] h-[109px] flex flex-col items-center justify-center space-x-[10.25px] border border-dotted border-[#CCD3DC] mt-2 rounded relative hover:cursor-pointer">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.6528C2.25 18.2386 2.58579 17.9028 3 17.9028H21C21.4142 17.9028 21.75 18.2386 21.75 18.6528C21.75 19.067 21.4142 19.4028 21 19.4028H3C2.58579 19.4028 2.25 19.067 2.25 18.6528Z" fill="#827C7C"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21.5C2.25 21.0858 2.58579 20.75 3 20.75H21C21.4142 20.75 21.75 21.0858 21.75 21.5C21.75 21.9142 21.4142 22.25 21 22.25H3C2.58579 22.25 2.25 21.9142 2.25 21.5Z" fill="#827C7C"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 11.4697C8.76256 11.1768 9.23744 11.1768 9.53033 11.4697L12 13.9393L14.4697 11.4697C14.7626 11.1768 15.2374 11.1768 15.5303 11.4697C15.8232 11.7626 15.8232 12.2374 15.5303 12.5303L12.5303 15.5303C12.2374 15.8232 11.7626 15.8232 11.4697 15.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697Z" fill="#827C7C"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C12.4142 2.75 12.75 3.08579 12.75 3.5V15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V3.5C11.25 3.08579 11.5858 2.75 12 2.75Z" fill="#827C7C"/>
                                </svg>
                                <span class="overview-modal-add-talent-upload-text text-[#827C7C]">Click to upload.</span>
                            </div>
                        </label>
                        <input id="file_new_aplicants" type="file" name="file_new_aplicants" class="hidden">
                    </div>
                    <button class="w-[670px] h-10 bg-palet rounded-lg mt-20 mb-8">
                        <span class="overview-talent-modal-title text-white">Send</span>
                    </button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>