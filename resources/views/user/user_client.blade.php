@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-56 space-x-2 mt-[85px] px-10 xl:w-[80%]">
        <div>            
            <div id="myTabContent" class="text-teal-500">
                 {{-- Tabs Overview --}}
                <div class=" flex space-x-2 mt-11">
                    {{-- right --}}
                    <div class="w-[704px] xl:w-[80%] ">
                        {{-- Create Client --}}
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
                                    <label for="first-name" class="block overview-status-field text-[#222222] mb-2">First Name</label>
                                    <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                        <input type="text" id="first-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="First Name">
                                    </div>
                                </div>
                                <div>
                                    <label for="last-name" class="block overview-status-field text-[#222222] mb-2">Last Name</label>
                                    <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                        <input type="text" id="last-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Lasr Name">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 mt-4 flex space-x-4">
                                <div>
                                    <label for="email" class="block overview-status-field text-[#222222] mb-2">Email</label>
                                    <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                        <input type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="First Name">
                                    </div>
                                </div>
                                <div>
                                    <label for="phone" class="block overview-status-field text-[#222222] mb-2">Phone</label>
                                    <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                        <input type="text" id="phone" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Lasr Name">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 mt-4 flex space-x-4">
                                <div>
                                    <label for="address" class="block overview-status-field text-[#222222] mb-2">Address</label>
                                    <div class="flex items-center justify-center w-[316px] h-10 border border-[#ECECEC] rounded text-[#222222]">
                                        <input type="text" id="address" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="First Name">
                                    </div>
                                </div>
                                <div>
                                    <label for="languages" class="block overview-status-field text-[#222222] mb-2">Languages</label>
                                    <div class="w-[316px] p-3 h-10 border border-[#ECECEC] flex items-center rounded">
                                        <select id="category" class="text-sm overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Languages</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                        </select>
                                        <div>
                                            <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2071 0.54289C14.8166 0.15237 14.1834 0.15237 13.7929 0.54289L8 6.3358L2.2071 0.542889C1.8166 0.152369 1.1834 0.152369 0.7929 0.542889C0.4024 0.933409 0.4024 1.56658 0.7929 1.9571L6.5858 7.75C7.3668 8.531 8.6332 8.531 9.4142 7.75L15.2071 1.95711C15.5976 1.56658 15.5976 0.93342 15.2071 0.54289Z" fill="#3BD7CF"/>
                                            </svg>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 mt-4 ">
                                <label class="overview-status-field text-[#222222] mb-2">Description</label>
                                <div class="w-[650px] h-[221px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                                    <textarea id="message" rows="9" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="Enter your comment"></textarea>
                                    <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span>
                                </div>
                            </div>
                            <div class="flex mt-10"></div>
                        </div>
                        <div class="flex justify-end w-full mt-6 space-x-2 ">
                            <button class="w-40 h-[42px] bg-colorStatusCard1 rounded-md ">
                                <span class="overview-attechment-btn-text justify-center">Delete</span>
                            </button>
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
                                <div class="flex flex-col justify-center items-center w-full h-40 rounded border-[2px] border-dotted space-y-[10.25px] hover:cursor-pointer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.1528C2.25 17.7386 2.58579 17.4028 3 17.4028H21C21.4142 17.4028 21.75 17.7386 21.75 18.1528C21.75 18.567 21.4142 18.9028 21 18.9028H3C2.58579 18.9028 2.25 18.567 2.25 18.1528Z" fill="#827C7C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21C2.25 20.5858 2.58579 20.25 3 20.25H21C21.4142 20.25 21.75 20.5858 21.75 21C21.75 21.4142 21.4142 21.75 21 21.75H3C2.58579 21.75 2.25 21.4142 2.25 21Z" fill="#827C7C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 10.9697C8.76256 10.6768 9.23744 10.6768 9.53033 10.9697L12 13.4393L14.4697 10.9697C14.7626 10.6768 15.2374 10.6768 15.5303 10.9697C15.8232 11.2626 15.8232 11.7374 15.5303 12.0303L12.5303 15.0303C12.2374 15.3232 11.7626 15.3232 11.4697 15.0303L8.46967 12.0303C8.17678 11.7374 8.17678 11.2626 8.46967 10.9697Z" fill="#827C7C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.5C12.75 14.9142 12.4142 15.25 12 15.25C11.5858 15.25 11.25 14.9142 11.25 14.5V3C11.25 2.58579 11.5858 2.25 12 2.25Z" fill="#827C7C"/>
                                    </svg>
                                    <span class="overview-modal-add-talent-upload-text text-[#827C7C]">Drop file here or click to upload.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex mt-24"></div>
            </div>
        </div>
    </article>
</main>

@endsection
