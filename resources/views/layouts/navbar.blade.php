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
                <div class="dropdown_comment relative hover:cursor-pointer" data-dropdown-toggle="dropdown-comment">
                    <div id="counters" class="counter counters{{ auth()->user()->id }}">
                        @if (App\Models\Notification::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'notify_to' => auth()->user()->id , 'status' => 'UNREAD'])->count() > 0)
                            <div class="count absolute w-[65%] h-[65%] top-0 right-0 flex items-center justify-center bg-red-500 rounded-full text-[8px] text-white">
                                {{ App\Models\Notification::where(['users_id' => auth()->user()->staf->users_agency_id ?? auth()->user()->id , 'notify_to' => auth()->user()->id , 'status' => 'UNREAD'])->count() }}
                            </div>
                        @endif
                    </div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.75C15.4518 2.75 18.25 5.54821 18.25 9V18.25H5.75V9C5.75 5.54821 8.54821 2.75 12 2.75ZM19.75 18.25V9C19.75 4.71979 16.2802 1.25 12 1.25C7.71979 1.25 4.25 4.71979 4.25 9V18.25H2C1.58579 18.25 1.25 18.5858 1.25 19C1.25 19.4142 1.58579 19.75 2 19.75H22C22.4142 19.75 22.75 19.4142 22.75 19C22.75 18.5858 22.4142 18.25 22 18.25H19.75Z" fill="#1C1B1E"/>
                        <path d="M8.75 19C8.75 18.5858 9.08579 18.25 9.5 18.25H14.5C14.9142 18.25 15.25 18.5858 15.25 19V19.5C15.25 21.2949 13.7949 22.75 12 22.75C10.2051 22.75 8.75 21.2949 8.75 19.5V19ZM10.2677 19.75C10.389 20.5981 11.1184 21.25 12 21.25C12.8816 21.25 13.611 20.5981 13.7323 19.75H10.2677Z" fill="#1C1B1E"/>
                    </svg>
                </div>                   
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full  focus:ring-4 focus:ring-gray-300 "  aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>

                    @if (isset(auth()->user()->avatar->avatar))
                        <img class="w-12 h-12 rounded-full" src='{{ asset('storage/Setting/avatar/'. auth()->user()->avatar->avatar) }} ' alt="user photo">
                    @elseif (isset(auth()->user()->staf->avatar))
                        <img class="w-12 h-12 rounded-full" src='{{ asset('storage/Setting/avatar/'. auth()->user()->staf->avatar) }} ' alt="user photo">
                    @else
                        <div class="w-12 h-12 rounded-full bg-slate-500 flex items-center justify-center">
                            <span class="text-xs text-gray-300 ">No Images</span>
                        </div>
                    @endif

                </button>
            </div>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 text-sm list-none bg-white text-colorStatusCard1 rounded divide-y  shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                <div class="py-3 px-4 text-palet font-semibold">
                    <span class="block text-sm  dark:text-white">

                            {{ auth()->user()->full_name }}

                    </span>
                    <span class="block text-sm font-medium  truncate dark:text-gray-400">{{ auth()->user()->email ?? auth()->guard('staf')->user()->email  }}</span>
                </div>
                <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="{{ route('dashboard') }}" class="block py-2 px-4 text-sm  hover:bg-hover dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('user_client.client') }}" class="block py-2 px-4 text-sm  hover:bg-hover dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">User</a>
                    </li>
                    <li>
                        <a href="{{ route('setting.setting') }}" class="block py-2 px-4 text-sm  hover:bg-hover dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class=" block py-2 px-4 text-sm  hover:bg-hover dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            @csrf
                            <input  type="submit" class="hover:cursor-pointer" value="Sign out">
                        </form>
                        {{-- <a href="#" class=""></a> --}}
                    </li>
                </ul>
            </div>

            {{-- Dropdown comment --}}
            <div class="hidden z-50 my-4 text-xs list-none  bg-white rounded divide-y  shadow" id="dropdown-comment">
                <ul class="tmp_notify_comment py-1 w-48 h-48 " aria-labelledby="dropdown">

                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    $('.dropdown_comment').click(function(){

        $.ajax({
            method: 'post',
            url: "{{ route('navbar.comment_notify') }}",
            data : {  _token : '{{ csrf_token() }}' },
            beforeSend: function() {
                const tmp = `<li class="flex items-center justify-center h-40">
                                <div role="status">
                                    <svg class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                </div>
                            </li>`;
            $('.tmp_notify_comment').html(tmp)
            },
            success: function(res){
                $('.tmp_notify_comment').html('')
                if(res.length == 0){
                    const tmp = ` <li class="flex items-center justify-center h-40">
                                    <div role="status">
                                        <i class="text-gray-300">Not Notify</i>
                                    </div>
                                </li>`;
                    $('.tmp_notify_comment').html(tmp);

                    return false;
                }

                $('.counter').html('');
                
                res.map(function(e){
                    console.log(res.length)
                        const tmp = `<li>
                                         <a href="#" class="block  py-2 px-4 text-xs text-orange-300 hover:bg-hover dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                         <div class="inline-flex items-center space-x-1">
                                             <div class="w-6">
                                                 <img class="w-5 h-5 rounded-full" src="${e.avatar}" alt="">
                                             </div>
                                             <div class="w-full">
                                                 <span>${e.body}</span><span class="text-palet"> ID#${e.job_models_id}</span><i class="text-xs text-gray-400"> ${e.created_at}</i>
                                             </div>
                                         </div>
                                         </a>
                                     </li>`;
                    
                    $('.tmp_notify_comment').append(tmp)
                })

            }
        })
    })
</script>

