{{-- <nav id="nav" class="fixed left-60 right-0 z-10 bg-bgbody border border-gray-200 px-2 sm:px-4 py-2.5 rounded "> --}}
<nav id="nav" class="fixed w-[1400px] xl:w-full z-10 bg-bgbody border border-gray-200 px-6 py-2.5 rounded ">

    <div class="container flex flex-nowrap xl:flex-wrap  items-center mx-auto ">
        <div id="search" class="w-1/2 togle-search-desktop" >
            <div class="relative ">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                    </svg>
                        
                </div>
                <div class="w-[340px] h-12 border-[2px] border-[#EFEFEF] rounded-lg flex items-center">

                    <input type="text" id="simple-search" class="text-base rounded-lg outline-none border-transparent bg-transparent border-none block w-full pl-10 p-2 focus:ring-0" placeholder="Search anything" required>
                </div>

            </div>
        </div>

        <div class="flex items-center justify-end w-1/2">
            <div class="flex items-center justify-center space-x-11">
                <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.25 11C17.25 10.5858 17.5858 10.25 18 10.25H22C22.4142 10.25 22.75 10.5858 22.75 11V19C22.75 19.4142 22.4142 19.75 22 19.75H19.8107L18.5303 21.0303C18.2374 21.3232 17.7626 21.3232 17.4697 21.0303L16.1893 19.75H11C10.5858 19.75 10.25 19.4142 10.25 19V15C10.25 14.5858 10.5858 14.25 11 14.25H17.25V11ZM18.75 11.75V15C18.75 15.4142 18.4142 15.75 18 15.75H11.75V18.25H16.5C16.6989 18.25 16.8897 18.329 17.0303 18.4697L18 19.4393L18.9697 18.4697C19.1103 18.329 19.3011 18.25 19.5 18.25H21.25V11.75H18.75Z" fill="#868B90"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 3C1.25 2.58579 1.58579 2.25 2 2.25H18C18.4142 2.25 18.75 2.58579 18.75 3V15C18.75 15.4142 18.4142 15.75 18 15.75H8.81066L7.03033 17.5303C6.73744 17.8232 6.26256 17.8232 5.96967 17.5303L4.18934 15.75H2C1.58579 15.75 1.25 15.4142 1.25 15V3ZM2.75 3.75V14.25H4.5C4.69891 14.25 4.88968 14.329 5.03033 14.4697L6.5 15.9393L7.96967 14.4697C8.11032 14.329 8.30109 14.25 8.5 14.25H17.25V3.75H2.75Z" fill="#868B90"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 11C5.25 10.5858 5.58579 10.25 6 10.25H9C9.41421 10.25 9.75 10.5858 9.75 11C9.75 11.4142 9.41421 11.75 9 11.75H6C5.58579 11.75 5.25 11.4142 5.25 11Z" fill="#868B90"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 7C5.25 6.58579 5.58579 6.25 6 6.25H12C12.4142 6.25 12.75 6.58579 12.75 7C12.75 7.41421 12.4142 7.75 12 7.75H6C5.58579 7.75 5.25 7.41421 5.25 7Z" fill="#868B90"/>
                    </svg>
                </div>
                <div id="bell" class="relative hover:cursor-pointer">
                    <div class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.75C15.4518 2.75 18.25 5.54821 18.25 9V18.25H5.75V9C5.75 5.54821 8.54821 2.75 12 2.75ZM19.75 18.25V9C19.75 4.71979 16.2802 1.25 12 1.25C7.71979 1.25 4.25 4.71979 4.25 9V18.25H2C1.58579 18.25 1.25 18.5858 1.25 19C1.25 19.4142 1.58579 19.75 2 19.75H22C22.4142 19.75 22.75 19.4142 22.75 19C22.75 18.5858 22.4142 18.25 22 18.25H19.75Z" fill="#1C1B1E"/>
                        <path d="M8.75 19C8.75 18.5858 9.08579 18.25 9.5 18.25H14.5C14.9142 18.25 15.25 18.5858 15.25 19V19.5C15.25 21.2949 13.7949 22.75 12 22.75C10.2051 22.75 8.75 21.2949 8.75 19.5V19ZM10.2677 19.75C10.389 20.5981 11.1184 21.25 12 21.25C12.8816 21.25 13.611 20.5981 13.7323 19.75H10.2677Z" fill="#1C1B1E"/>
                    </svg>
                </div>
                    
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full  focus:ring-4 focus:ring-gray-300 "  aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-12 h-12 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>
            </div>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                </div>
                <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

