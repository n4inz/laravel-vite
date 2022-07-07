@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class=" ml-56 space-x-2 mt-[85px] px-10 w-[80%]">
        <div class="h-[228px] w-[1016px] xl:w-full bg-bgbody px-6 rounded">
            <div class="flex items-center justify-between w-full mb-3">
                <span class="overview-title text-colortext mt-6">Live-in nanny</span>
                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 18.5C9.10457 18.5 10 17.6046 10 16.5C10 15.3954 9.10457 14.5 8 14.5C6.89543 14.5 6 15.3954 6 16.5C6 17.6046 6.89543 18.5 8 18.5Z" fill="#827C7C"/>
                    <path d="M16 18.5C17.1046 18.5 18 17.6046 18 16.5C18 15.3954 17.1046 14.5 16 14.5C14.8954 14.5 14 15.3954 14 16.5C14 17.6046 14.8954 18.5 16 18.5Z" fill="#827C7C"/>
                    <path d="M24 18.5C25.1046 18.5 26 17.6046 26 16.5C26 15.3954 25.1046 14.5 24 14.5C22.8954 14.5 22 15.3954 22 16.5C22 17.6046 22.8954 18.5 24 18.5Z" fill="#827C7C"/>
                </svg>    
            </div>
            <table width="500px">
                <tr>
                    <td height="30px" width="65px"><span class="text-[#827C7C] overview-status">Status</span></td>
                    <td ><span class="text-colorStatusCard1 overview-status-field">Interviewing</span></td>
                </tr>
                <tr>
                    <td width="65px" height="30px"><span class="text-[#827C7C] overview-status">ID</span></td>
                    <td ><span class="overview-id-field">1992</span></td>
                </tr>
                <tr>
                    <td width="65px" height="30px"><span class="text-[#827C7C] overview-status">Assigned</span></td>
                    <td>
                        <div class="flex space-x-1">
                            <img class="w-4 h-4 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                            <span class="overview-assigned-field">Jonathan Morrow</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="65px" height="30px"><span class="text-[#827C7C] overview-status">Label</span></td>
                    <td> 
                        <div class="flex space-x-1">
                            <div class="w-[39px] h-[15px] bg-[#5FCFFF] flex items-center justify-center rounded-sm"> <span class="overview-label-text">Hight</span></div>
                            <div class="w-[39px] h-[15px] bg-[#CCD3DC] flex items-center justify-center rounded-sm"> <span class="overview-label-text">+ Add</span></div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b border-transparent hover:text-gray-600 hover:border-red-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                    </li>
                </ul>
            </div>
        </div>

        <div id="myTabContent">
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div>

    </article>
</main>
@endsection
