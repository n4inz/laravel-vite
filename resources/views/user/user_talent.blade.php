@extends('layouts.main')
@section('container')
<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class=" ml-56 space-x-2 mt-[85px] px-10 w-[80%]">
        <div class="flex items-center justify-between mt-8 w-[1017px] xl:w-full">
            <span class="overview-modal-add-talent-title">Talents</span>
            <button class="w-[111px] h-10 bg-palet rounded-md">
                <span class="task-btn-text">+ Create</span>
            </button>
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
                        <input type="text"  class="border border-[#EFEFEF] text-colortext text-sm bg-transparent border-none outline-none  block w-full pl-10 p-2 focus:ring-0" placeholder="Search helper" required>
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
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>     
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>   
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>          
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>          
            <div class="flex items-center w-[330px] h-[130px] bg-white rounded-lg pl-3 space-x-4">
                <div>
                    <img class="w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                </div>
                <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                    <span class="user-talent-name text-[#222222]">Jean-Paul Kueny</span>
                    <span class="user-talent-live">Age 29, in Plano, Texas, USA</span>
                    <span class="overview-note-body text-[#2CA6A0]">Nanny/Sitter, House Cleaning...</span>
                    <div class="flex items-center space-x-[9.67px]">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                        </svg>
                        <span class="user-talent-live">talents@gmail.com</span>
                    </div>
                </div>
            </div>
    
        </div>

        {{-- Modal Create job --}}
        <div id="create-job" tabindex="-1" aria-hidden="true"  aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">
            <div class=" w-[766px] h-screen">
                <div class="shadow bg-white rounded mt-6">
                    <div class="flex items-center justify-between px-8 h-14 rounded-t border-b dark:border-gray-600">
                        <span class="overview-talent-modal-title text-colortext">
                            Send Talent to Client
                        </span>
                        <button data-modal-toggle="create-job" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"  data-modal-toggle="modal-detail-talen">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <div class="px-8 mt-[34px] flex items-center space-x-16">
                        <div class="flex items-center justify-center space-x-3">
                            <input id="active" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                            <label for="active" class="overview-note-body text-colortext">Active</label>
                        </div>
                        <div class="flex items-center justify-center space-x-3">
                            <input id="active" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                            <label for="active" class="overview-note-body text-colortext">Archived</label>
                        </div>
                    </div>
                    <div class="px-8 mt-4">
                        <label for="family" class="mb-2 overview-note-body block text-colortext">Family*</label>
                        <div class="flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                            <input type="text" id="family" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full ml-3 outline-none " placeholder="Find & select user">
                        </div>
                    </div>
                    <div class="px-8 mt-4">
                        <label for="title" class="mb-2 block overview-note-body text-colortext">Title*</label>
                        <div class="flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                            <input type="text" id="title" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full ml-3 outline-none " placeholder="">
                        </div>
                    </div>
                    <div class="px-8 mt-4">
                        <label for="description" class="mb-2 block overview-note-body text-colortext">Description*</label>
                        <div class="flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                            <input type="text" id="description" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full ml-3 outline-none " placeholder="">
                        </div>
                    </div>
                    <div class="px-8 mt-4">
                        <label for="id" class="mb-2 block overview-note-body text-colortext">ID*</label>
                        <div class="flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
                            <input type="text" id="id" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full ml-3 outline-none " placeholder="">
                        </div>
                    </div>
                    <div class="px-8 mt-4">
                        <label for="id" class="mb-2 block overview-note-body text-colortext">Address(city/state/country)</label>
                        <div class="flex items-center">
                            <div class="w-8 h-[34px] flex items-center justify-center rounded-l bg-[#CCD3DC]">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.09993 5.65006C4.37886 5.13849 6.1114 4.83325 7.99967 4.83325C9.88795 4.83325 11.6205 5.13849 12.8994 5.65006C13.5375 5.90529 14.0874 6.22171 14.486 6.59865C14.8856 6.97659 15.1663 7.44994 15.1663 7.99992C15.1663 8.54989 14.8856 9.02325 14.486 9.40119C14.0874 9.77813 13.5375 10.0945 12.8994 10.3498C11.6205 10.8613 9.88795 11.1666 7.99967 11.1666C6.1114 11.1666 4.37886 10.8613 3.09993 10.3498C2.46186 10.0945 1.91193 9.77813 1.51335 9.40119C1.11372 9.02325 0.833008 8.54989 0.833008 7.99992C0.833008 7.44994 1.11372 6.97659 1.51335 6.59865C1.91193 6.22171 2.46186 5.90529 3.09993 5.65006ZM2.20046 7.32521C1.9254 7.58534 1.83301 7.81351 1.83301 7.99992C1.83301 8.18633 1.9254 8.4145 2.20046 8.67463C2.47658 8.93576 2.90297 9.19396 3.47132 9.4213C4.60525 9.87487 6.20605 10.1666 7.99967 10.1666C9.7933 10.1666 11.3941 9.87487 12.528 9.4213C13.0964 9.19396 13.5228 8.93576 13.7989 8.67463C14.074 8.4145 14.1663 8.18633 14.1663 7.99992C14.1663 7.81351 14.074 7.58534 13.7989 7.32521C13.5228 7.06407 13.0964 6.80588 12.528 6.57854C11.3941 6.12497 9.7933 5.83325 7.99967 5.83325C6.20605 5.83325 4.60525 6.12497 3.47132 6.57854C2.90297 6.80588 2.47658 7.06407 2.20046 7.32521Z" fill="#222222"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.57829 3.47157C6.12472 4.6055 5.83301 6.20629 5.83301 7.99992C5.83301 9.79354 6.12472 11.3943 6.57829 12.5283C6.80563 13.0966 7.06383 13.523 7.32496 13.7991C7.58509 14.0742 7.81327 14.1666 7.99967 14.1666C8.18608 14.1666 8.41425 14.0742 8.67439 13.7991C8.93552 13.523 9.19372 13.0966 9.42106 12.5283C9.87463 11.3943 10.1663 9.79354 10.1663 7.99992C10.1663 6.20629 9.87463 4.6055 9.42106 3.47157C9.19372 2.90322 8.93552 2.47683 8.67439 2.20071C8.41425 1.92564 8.18608 1.83325 7.99967 1.83325C7.81327 1.83325 7.58509 1.92564 7.32496 2.20071C7.06383 2.47683 6.80563 2.90322 6.57829 3.47157ZM6.59841 1.5136C6.97635 1.11396 7.4497 0.833252 7.99967 0.833252C8.54965 0.833252 9.023 1.11396 9.40094 1.5136C9.77788 1.91218 10.0943 2.4621 10.3495 3.10018C10.8611 4.37911 11.1663 6.11164 11.1663 7.99992C11.1663 9.8882 10.8611 11.6207 10.3495 12.8997C10.0943 13.5377 9.77788 14.0877 9.40094 14.4862C9.023 14.8859 8.54965 15.1666 7.99967 15.1666C7.4497 15.1666 6.97635 14.8859 6.59841 14.4862C6.22147 14.0877 5.90505 13.5377 5.64982 12.8997C5.13824 11.6207 4.83301 9.8882 4.83301 7.99992C4.83301 6.11164 5.13824 4.37911 5.64982 3.10018C5.90505 2.4621 6.22147 1.91218 6.59841 1.5136Z" fill="#222222"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.83325C4.59392 1.83325 1.83301 4.59416 1.83301 7.99992C1.83301 11.4057 4.59392 14.1666 7.99967 14.1666C11.4054 14.1666 14.1663 11.4057 14.1663 7.99992C14.1663 4.59416 11.4054 1.83325 7.99967 1.83325ZM0.833008 7.99992C0.833008 4.04188 4.04163 0.833252 7.99967 0.833252C11.9577 0.833252 15.1663 4.04188 15.1663 7.99992C15.1663 11.958 11.9577 15.1666 7.99967 15.1666C4.04163 15.1666 0.833008 11.958 0.833008 7.99992Z" fill="#222222"/>
                                </svg> 
                            </div>
                            <div class="flex items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded-r py-4">
                                <input type="text" id="id" class="overview-note-body text-sm block border-none bg-transparent focus:ring-0 w-full ml-3 outline-none " placeholder="Enter Location">
                            </div>
                        </div>
                    </div>
        
                    {{-- Category --}}
                    <div class="px-8 mt-8 ">
                        <span class="overview-comments-name text-colortext">Category</span>
                        <div class="p-2 mt-4">
                            <label for="category" class="overview-note-body text-colortext mb-2 block">Category</label>
                            <div class="w-[316px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                <select id="category" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                    <option>Child Care</option>
                                    <option>Test 1</option>
                                    <option>Test 1</option>
                                    <option>Test 1</option>
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
                            <div class="flex space-x-[102px]">
                                <div>
                                    <label for="category" class="overview-note-body text-colortext mb-2 block">Subcategories*</label>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="nanny" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="nanny" class="overview-note-body text-colortext">Nanny</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="sister" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="sister" class="overview-note-body text-colortext">Sister</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="sister" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="sister" class="overview-note-body text-colortext">Sister</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="maternity-care" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="maternity-care" class="overview-note-body text-colortext">Maternity Care</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="daycare" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="daycare" class="overview-note-body text-colortext">At Home Daycare</label>
                                    </div>
                                </div>
                                <div>
                                    <label for="category" class="overview-note-body text-colortext mb-2 block">Subcategories*</label>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="infant" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="infant" class="overview-note-body text-colortext">Infant</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="young-baby" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="young-baby" class="overview-note-body text-colortext">Young baby</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="toddler" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="toddler" class="overview-note-body text-colortext">Toddler</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="press-schooler" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="press-schooler" class="overview-note-body text-colortext">Press Schooler</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="grade-schooler" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="grade-schooler" class="overview-note-body text-colortext">Grade Schooler</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="simple-housework " style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="simple-housework " class="overview-note-body text-colortext">Simple Housework </label>
                                    </div>
                                </div>
                                <div>
                                    <label for="category" class="invisible overview-note-body text-colortext mb-2 block">Subcategory</label>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="laundry" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="laundry" class="overview-note-body text-colortext">Laundry</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="prep-meal" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="prep-meal" class="overview-note-body text-colortext">Prep Meal</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="cook-meal" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="cook-meal" class="overview-note-body text-colortext">Cook Meal</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="run-errands" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="run-errands" class="overview-note-body text-colortext">Run Errands</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="special-needs" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="special-needs" class="overview-note-body text-colortext">Special Needs</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="provide-transportation" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="provide-transportation" class="overview-note-body text-colortext">Provide Transportation</label>
                                    </div>
                                </div>
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
                                    <select id="part-time" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                        <option>Part Time</option>
                                        <option>Test 1</option>
                                        <option>Test 1</option>
                                        <option>Test 1</option>
                                    </select>
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                            <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                        </svg> 
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 mt-[13px]">
                                    <input id="comfortable-with-pets" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="comfortable-with-pets" class="overview-note-body text-colortext">Comfortable with pets</label>
                                </div>
                            </div>
                            <div>
                                <label for="desired-living" class="overview-note-body text-colortext mb-2 block">Desired Living</label>
                                <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                    <select id="desired-living" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                        <option>Desired Living</option>
                                        <option>Test 1</option>
                                        <option>Test 1</option>
                                        <option>Test 1</option>
                                    </select>
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                            <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                        </svg> 
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 mt-[13px]">
                                    <input id="has-transportation" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="has-transportation" class="overview-note-body text-colortext">Has transportation</label>
                                </div>
                            </div>
                            <div>
                                <label for="english-level" class="overview-note-body text-colortext mb-2 block">English Level</label>
                                <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                    <select id="english-level" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                        <option>Part Time</option>
                                        <option>Test 1</option>
                                        <option>Test 1</option>
                                        <option>Test 1</option>
                                    </select>
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                            <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                        </svg> 
                                    </div>
                                </div>
                                <div class="flex items-center space-x-3 mt-[13px]">
                                    <input id="has-driver-license" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="has-driver-license" class="overview-note-body text-colortext">Has driver license</label>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    {{-- Languages --}}
                    <div class="px-8 mt-8 ">
                        <span class="overview-comments-name text-colortext">Languages</span>
                        <div class="flex space-x-16 mt-4 px-2">
                            <div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="english" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="english" class="overview-note-body text-colortext">English</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="french" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="french" class="overview-note-body text-colortext">French</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="tagalog" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="tagalog" class="overview-note-body text-colortext">Tagalog</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="thai" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="thai" class="overview-note-body text-colortext">Thai</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="chinese-mandarin" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="chinese-mandarin" class="overview-note-body text-colortext">Chinese Mandarin</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="hindi" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="hindi" class="overview-note-body text-colortext">Hindi</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="polish" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="polish" class="overview-note-body text-colortext">Polish</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="vietnamese" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="vietnamese" class="overview-note-body text-colortext">Vietnamese</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="grade-schooler" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="grade-schooler" class="overview-note-body text-colortext">Grade Schooler</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="chinese-cantonese" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="chinese-cantonese" class="overview-note-body text-colortext">Chinese Cantonese</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="japanese" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="japanese" class="overview-note-body text-colortext">Japanese</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="russian" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="russian" class="overview-note-body text-colortext">Russian</label>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="ethiopian" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="ethiopian" class="overview-note-body text-colortext">Ethiopian</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="korean" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="korean" class="overview-note-body text-colortext">Korean</label>
                                </div>
                                <div class="flex items-center space-x-3 mt-[10px]">
                                    <input id="spanish" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="spanish" class="overview-note-body text-colortext">Spanish</label>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    {{-- Children/ seniors --}}
                    <div class="px-8 mt-8 ">
                        <span class="overview-comments-name text-colortext">Childrens/ Seniors</span>
                        <div class="flex mt-4 px-2">
                            <button class="w-[71px] h-8 rounded-lg bg-palet flex items-center justify-center">
                                <span class="overview-attechment-btn-text text-center">Add</span>
                            </button>
                        </div>
                    </div>
        
                    {{-- availability --}}
                    <div class="px-8 mt-8 ">
                        <span class="overview-comments-name text-colortext">Availability</span>
                        <div class="mt-4 px-2 ">
                            <div class="flex space-x-[110px]">
                                <div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="all-days" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="all-days" class="overview-note-body text-colortext">All days</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="monday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="monday" class="overview-note-body text-colortext">Monday</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="tuesday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="tuesday" class="overview-note-body text-colortext">Tuesday</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="Wednesday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="Wednesday" class="overview-note-body text-colortext">Wednesday</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="thursday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="thursday" class="overview-note-body text-colortext">Thursday</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="friday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="friday" class="overview-note-body text-colortext">Friday</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="saturday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="saturday" class="overview-note-body text-colortext">Saturday</label>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[10px]">
                                        <input id="Sunday" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="Sunday" class="overview-note-body text-colortext">Sunday</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-4 mt-8">
                                <div>
                                    <label for="start-date" class="overview-note-body text-colortext mb-2 block">Start time*</label>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                        <input type="text" id="start-date" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                    </div>
                                </div>
                                <div>
                                    <label for="end-time*" class="overview-note-body text-colortext mb-2 block">End time*</label>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <input type="text" id="end-time" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                    </div>
                                </div>
                                <div>
                                    <label for="duration" class="overview-note-body text-colortext mb-2 block">Duration</label>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <select id="duration" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Temporary</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
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
                            <div class="flex space-x-4 mt-6">
                                <div>
                                    <label for="start-date" class="overview-note-body text-colortext block">Start date*</label>
                                    <div class="flex items-center space-x-3 py-2 ">
                                        <input id="asap" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="asap" class="overview-note-body text-colortext">ASAP</label>
                                    </div>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                        <input type="text" id="start-time" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                    </div>
                                </div>
                                <div>
                                    <label for="end-date" class="overview-note-body text-colortext block">End date*</label>
                                    <div class="flex items-center space-x-3 py-2 ">
                                        <input id="tbd" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="tbd" class="overview-note-body text-colortext">TBD</label>
                                    </div>
                                    <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                        <input type="text" id="end-date" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="">
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
        
                    {{-- Salery --}}
                    <div class="px-8 mt-8 ">
                        <span class="overview-comments-name text-colortext">Salery</span>
                        <div class="mt-4 px-2 ">
                            <div class="flex space-x-2 ">
                                <div>
                                    <label for="start-date" class="overview-note-body text-colortext mb-2 block">Type</label>
                                    <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                                        <select id="duration" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Hourly</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                        </select>
                                        <div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                                                <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                                            </svg> 
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3 mt-[13px] ">
                                        <input id="rate-negotible" style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                        <label for="rate-negotible" class="overview-note-body text-colortext">Rate negotiable</label>
                                    </div>
                                </div>
                                <div>
                                    <label for="rate" class="overview-note-body text-colortext mb-2 block">Rate*</label>
                                    <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <input type="text" id="rate" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-3 outline-none " placeholder="">
                                    </div>
                                </div>
                                <div>
                                    <label for="daily" class="overview-note-body text-colortext mb-2 block">Pay frequency</label>
                                    <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                                        <select id="daily" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Daily</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
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
                                        <select id="pay-with" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                            <option>Any</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
                                            <option>Test 1</option>
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
                    <div class="px-8 py-8">
                        <button class="w-40 h-[42px] bg-palet rounded-lg flex items-center justify-center">
                            <span class="overview-attechment-btn-text">Add Job</span>
                        </button>
                       
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
@endsection
