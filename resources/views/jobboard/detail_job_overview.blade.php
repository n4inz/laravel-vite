
@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class="ml-[310px] space-x-2 mt-[85px] px-5 w-[75%]">
        <div>
            <div class="h-[228px] w-[1016px] xl:w-full bg-bgbody px-6 rounded">
                <div class="flex items-center justify-between w-full mb-1">
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
                        <td ><span class="text-colorStatusCard1 overview-status-field">{{ str_replace('_',' ',ucfirst($result->setting_status->status_name)) }}</span></td>
                        {{-- @if($result->status === 'potential_clients')
                            <td ><span class="text-colorStatusCard1 overview-status-field">Potential Clients</span></td>
                        @endif
                        @if($result->status === 'interviewing')
                            <td ><span class="text-colorStatusCard1 overview-status-field">Interviewing</span></td>
                        @endif
                        @if($result->status === 'trialing')
                        <td ><span class="text-palet overview-status-field">Trialing</span></td>
                        @endif
                        @if($result->status === 'completed')
                        <td ><span class="text-palet overview-status-field">completed</span></td>
                        @endif --}}
                    </tr>
                    <tr>
                        <td width="65px" height="30px"><span class="text-[#827C7C] overview-status">ID</span></td>
                        <td ><span class="overview-id-field">{{ $result->id_unique }}</span></td>
                    </tr>
                    <tr>
                        <td width="65px" height="30px"><span class="text-[#827C7C] overview-status">Assigned</span></td>
                        <td>
                            <div class="flex space-x-1">
                                <img class="w-4 h-4 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                                <span class="overview-assigned-field">{{ $result->family }}</span>
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
                <ul class="mt-5 flex flex-wrap font-medium text-center" id="myTab" role="tablist">
                    <li class="mr-12" >
                        <button class="overview-tab inline-block px-2 border-b  " id="overview-tab" data-tabs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                    </li>
                    <li class="mr-12" >
                        <button class="overview-tab inline-block px-2 border-b" id="task-tab" data-tabs-target="#task" type="button" role="tab" aria-controls="task" aria-selected="false">Task</button>
                    </li>
                    <li class="mr-12" >
                        <button class="overview-tab inline-block px-2 border-b" id="talent-tab" data-tabs-target="#talent" type="button" role="tab" aria-controls="talent" aria-selected="false">Talent</button>
                    </li>
                    <li class="mr-12" >
                        <button class="overview-tab inline-block px-2 border-b" id="documents-tab" data-tabs-target="#documents" type="button" role="tab" aria-controls="documents" aria-selected="false">Documents</button>
                    </li>
                    <li >
                        <button class="overview-tab inline-block px-2 border-b" id="activities-tab" data-tabs-target="#activities" type="button" role="tab" aria-controls="activities" aria-selected="false">Activities</button>
                    </li>
                    
                </ul>
            </div>
            
            <div>
                 {{-- Tabs Overview --}}
                <div class=" flex space-x-2 mt-6" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    {{-- right --}}
                    <div class="w-[704px] xl:w-[80%] ">
                        {{-- Job Detail --}}
                        <div class="bg-bgbody rounded ">
                            <div class="flex justify-between px-4 pt-[18.5px]">
                                <div class="flex space-x-2 ">
                                    <div class="w-2 h-6 bg-[#5FCFFF] rounded-sm"></div>
                                    <span class="text-[#222222] font-semibold">Job Detail</span>
                                </div>
                                <div class="flex justify-center items-center px-5 w-[99px] h-6 bg-hover rounded space-x-1 hover:cursor-pointer">
                                    <span class="overview-send-job text-palet">Send Job</span>
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.19083 4.75179L10.5551 1.00868C10.6716 0.956912 10.8141 0.982751 10.9048 1.08638C10.9955 1.17709 11.0214 1.31947 10.9825 1.4361L7.2394 10.8004C7.18763 10.9169 7.07099 11.0076 6.94153 11.0076C6.81197 11.0076 6.69542 10.9299 6.64365 10.8004L5.14121 6.88887C5.11528 6.87595 5.08944 6.86294 5.06351 6.85002L1.20383 5.3606C1.07428 5.30883 0.996582 5.19219 0.996582 5.06272C0.996492 4.93317 1.07419 4.80371 1.19073 4.75185L1.19083 4.75179ZM5.18003 6.20248L6.86381 4.5187C6.99336 4.38915 7.20053 4.38915 7.31717 4.5187C7.43372 4.64826 7.44673 4.85543 7.31717 4.97207L5.69818 6.59106L6.92859 9.79019L10.0889 1.88951L2.18818 5.04978L5.18003 6.20248Z" fill="#3BD7CF"/>
                                    </svg> 
                                </div>
                            </div>
                            <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                            <div class="px-4 mt-8">
                                <span class="overview-note">DESCRIPTION</span>
                                
                                <div class="desc_view w-full bg-[#F5F5F5] rounded-md p-4 text-xs">
                                    <span onclick="edit_desc()" class="overview-note-body text-[#827C7C]">
                                        {!! $result->description !!}
                                    </span> 
                                </div>
                              
                                <div class="editor relative w-full p-4 hidden">
                                    @if($errors->has('edit_description'))
                                    <p class="mb-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('edit_description') }}</p>
                                     @endif
                                    <form action="{{ route('jobboard.edit_description') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="uid" value="{{ $result->uid }}" >
                                        <textarea id="editor1" class="w-full h-full" name="edit_description" id="">{{ old('edit_description',$result->description) }}</textarea>
                                        <div class="flex space-x-3 float-right">
                                            <div  onclick="edit_desc()" class="flex items-center justify-center w-28 h-8 bg-colorStatusCard1 rounded-md mt-2 hover:cursor-pointer">
                                                <span class="text-sm text-white">Cancel</span> 
                                            </div>
                                            <button class="flex items-center justify-center w-28 h-8 bg-palet rounded-md mt-2">
                                                <span class="text-sm text-white">Save</span> 
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex space-x-4 items-center px-4 mt-[30px]">
                                <span class="overview-when">When</span>
                                
                                <div class="{{ $result->availability[0]->monday  ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->monday  ? 'overview-text-day' : 'overview-text-muted' }} ">MO</span>
                                </div>
                                <div class="{{ $result->availability[0]->tuesday  ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->tuesday  ? 'overview-text-day' : 'overview-text-muted' }}">Tu</span>
                                </div>
                                <div class="{{ $result->availability[0]->wednesday  ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->wednesday  ? 'overview-text-day' : 'overview-text-muted' }}">We</span>
                                </div>
                                <div class="{{ $result->availability[0]->thursday ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->thursday ? 'overview-text-day' : 'overview-text-muted' }}">Th</span>
                                </div>
                                <div class="{{ $result->availability[0]->friday ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->friday ? 'overview-text-day' : 'overview-text-muted' }}">Fr</span>
                                </div>
                                <div class="{{ $result->availability[0]->saturday ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->saturday ? 'overview-text-day' : 'overview-text-muted' }}">Sa</span>
                                </div>
                                <div class="{{ $result->availability[0]->sunday ? 'overview-ring-day' : '' }} flex items-center justify-center w-8 h-[34px] rounded">
                                    <span class="{{ $result->availability[0]->sunday ? 'overview-text-day' : 'overview-text-muted' }}">Su</span>
                                </div>
                            </div>
                            <div class="px-4 mt-4 space-y-4">
                                <table width="380px">
                                    <tr>
                                        <td width="150px" class="overview-table-header-day ">Start Date</td>
                                        <td  class="overview-table-header-day ">Start Time</td>
                                    </tr>
                                    <tr>
                                        <td width="150px" class="overview-tabel-body-day">
                                            @if($result->asap)
                                                <span>ASAP</span>
                                            @else    
                                                {{ Carbon\Carbon::parse($result->start_date)->format('d/m/Y') }}
                                            @endif
                                        </td>
                                        <td class="overview-tabel-body-day">{{ Carbon\Carbon::parse($result->start_time)->format('g:i A') }}</td>
                                    </tr>
                                </table>
                                <table width="380px">
                                    <tr>
                                        <td width="150px" class="overview-table-header-day">End Date</td>
                                        <td class="overview-table-header-day">End Time</td>
                                    </tr>
                                    <tr>
                                        <td width="150px" class="overview-tabel-body-day">
                                            @if($result->tbd)
                                                <span>TBD</span>
                                            @else    
                                                {{ Carbon\Carbon::parse($result->end_date)->format('d/m/Y') }}
                                            @endif
                                        </td>
                                        <td class="overview-tabel-body-day">{{ Carbon\Carbon::parse($result->end_time)->format('g:i A') }}</td>
                                    </tr>
                                </table>
                            </div>

                            {{-- Show more & less --}}
                           
                            <div data-accordion="collapse">
                                <div id="job-detail" class="hidden" >
                                    <div class="px-4 mt-6">
                                        <span class="overview-note">Talent in the Ayi</span>
                                        <div class="flex w-full p-4 space-x-12">
                                            <div class="w-1/3">
                                                <div>
                                                    <span class="overview-table-header-day">Job Type:</span>
                                                    <span class="overview-tabel-body-day">{{ $result->category }}</span>
                                                </div>
                                                <div>
                                                    <span class="overview-table-header-day">Location:</span>
                                                    <span class="overview-tabel-body-day">{{ $result->location }}</span>
                                                </div>
                                                <div>
                                                    <span class="overview-table-header-day">Desired Living:</span>
                                                    <span class="overview-tabel-body-day">{{ $result->desired_living }}</span>
                                                </div>
                                            </div>
                                            <div class="w-1/3">
                                                <div>
                                                    <span class="overview-table-header-day">Language need:</span>
                                                    <span class="overview-tabel-body-day">
                                                        @foreach ($result->languages as $value )
                                                            {{ $value->language.',' }}
                                                        @endforeach
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="overview-table-header-day">English Level:</span>
                                                    <span class="overview-tabel-body-day">{{ $result->english_level }}</span>
                                                </div>
                                            </div>
                                            <div class="w-1/3">
                                                <div>
                                                    <span class="overview-table-header-day">Rate Negotiable:</span>
                                                    @if ($result->rate_negotiable)
                                                        <span class="overview-tabel-body-day">Flexible</span>
                                                    @else
                                                        <span class="overview-tabel-body-day">Fixed</span>
                                                    @endif
                                                    
                                                </div>
                                                <div>
                                                    <span class="overview-table-header-day">Position Type:</span>
                                                    <span class="overview-tabel-body-day">{{ $result->part_time }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="px-4 mt-6">
                                        <span class="overview-note">Responsibilities</span>
                                        <div class="flex w-full py-4 px-5 space-x-7">
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['companion_elders']) ? '#FA9D6B' : '#DDDDDD' }}" d="M20.6889 14.3862C19.893 13.3675 19.0623 12.8124 17.8864 13.1082C16.868 13.3643 16.7305 14.1921 16.6764 15.1417C16.3242 14.9969 16.0388 14.7783 15.7621 14.7886C15.2096 14.8093 14.4917 14.7798 14.1602 15.1003C13.8358 15.4137 13.7189 16.1875 13.8501 16.667C14.025 17.3072 14.0067 17.6277 13.4351 18.0404C13.1171 18.2702 12.8492 18.9414 12.951 19.3025C13.1593 20.0397 12.7435 20.3618 12.28 20.5113C11.962 20.6139 11.3355 20.4453 11.1773 20.1916C10.9602 19.8449 10.9801 19.2906 11.0453 18.8468C11.0874 18.5621 11.3943 18.3172 11.5827 18.0547C11.5342 17.984 11.4849 17.9124 11.4365 17.8416C11.1828 17.9338 10.9133 17.9975 10.6804 18.1271C10.4673 18.2456 10.2932 18.5669 10.1016 18.5669C9.49343 18.5677 8.7167 18.6663 8.31839 18.3426C7.8064 17.9259 8.38756 17.4225 8.76042 17.0503C9.39723 16.4149 10.0571 15.801 10.6494 15.1266C10.7981 14.9572 10.7249 14.5938 10.7535 14.3194C10.5126 14.4061 10.2129 14.4299 10.0396 14.5898C9.26685 15.3063 8.54895 16.0817 7.77301 16.7942C7.29998 17.2285 6.78481 17.5545 6.15913 16.9294C5.54458 16.3147 5.45236 15.6785 6.02477 15.0486C6.71246 14.2923 7.49635 13.6251 8.18881 12.8736C8.40346 12.6406 8.45752 12.2597 8.58473 11.9463C8.2691 12.0418 7.88113 12.0529 7.65217 12.2493C6.92473 12.876 6.26487 13.5798 5.56287 14.2367C5.13674 14.6351 4.6319 14.9683 4.07778 14.5309C3.50457 14.0792 3.37021 13.4764 3.73989 12.7917C4.73525 10.9467 6.23386 9.54622 7.83741 8.26983C9.16986 7.20974 10.5945 6.26179 12.0025 5.29953C13.2364 4.45575 13.9487 4.6148 14.8033 5.80372C15.2549 6.43118 15.6874 7.09284 16.2391 7.62408C17.3291 8.67303 18.8269 8.56567 19.552 7.45627C19.9352 6.87017 20.0409 6.30633 19.5774 5.65501C19.226 5.16115 18.9541 4.57027 18.8023 3.98257C18.4421 2.58768 17.7242 1.56816 16.2956 1.13315C16.0491 1.05839 15.8297 0.89298 15.4775 0.706093C16.4069 0.133505 17.1979 0.077836 18.0208 0.551812C18.745 0.969325 19.4454 1.43853 20.2015 1.78765C21.3114 2.2998 22.4649 2.45169 23.5954 1.80435C24.2799 1.41229 24.8611 1.57293 25.327 2.1479C27.1166 4.35714 28.228 6.82006 28.1286 9.7347C28.1056 10.4019 27.8011 10.8075 27.212 11.1057C26.2508 11.5924 25.327 12.1515 24.3769 12.6613C24.1997 12.7559 23.9556 12.8418 23.7751 12.7973C22.3401 12.4442 21.1531 12.5976 20.6889 14.3862Z" />
                                                    <path fill="{{ isset( $talentNeed['companion_elders']) ? '#FA9D6B' : '#DDDDDD' }}" d="M18.738 6.69284C18.001 7.46663 17.2879 7.5056 16.4953 6.60536C15.5619 5.54607 14.8249 4.37465 14.9482 2.80799C14.8217 2.99726 14.6619 3.17301 14.5769 3.37978C14.3543 3.91817 14.0784 4.00645 13.4503 3.92215C12.8104 3.83626 12.0122 4.05496 11.4517 4.40805C9.80281 5.44905 8.15553 6.52424 6.66567 7.77519C5.47553 8.77484 4.26154 9.23847 2.67151 9.07067C3.11035 9.39116 3.54921 9.71165 3.99441 10.0369C3.51422 10.6795 3.05868 11.2895 2.57531 11.936C1.91783 11.532 1.18244 11.136 0.519396 10.6437C0.26499 10.4544 0.054311 10.0536 0.0288704 9.73313C-0.203274 6.74692 0.980506 4.29433 3.00541 2.19802C3.57783 1.60555 4.23053 1.35902 5.08279 1.81709C6.44307 2.54953 7.84865 2.56623 9.27968 1.89423C10.0318 1.54114 10.8363 1.17929 11.6465 1.0942C13.6332 0.885839 15.2844 1.90934 16.9349 2.82548C17.1209 2.92887 17.2163 3.22391 17.3157 3.44738C17.7903 4.50746 18.2499 5.57391 18.738 6.69284Z" />
                                                    <path fill="{{ isset( $talentNeed['companion_elders']) ? '#FA9D6B' : '#DDDDDD' }}" d="M22.047 16.6702C22.5423 17.545 22.71 18.275 21.9055 18.9041C21.1788 19.4727 20.48 19.3813 19.7661 18.8564C19.7017 20.5113 19.1269 20.9089 17.7674 20.4493C17.5997 20.8827 17.5472 21.507 17.2467 21.6692C16.8619 21.8768 16.1973 21.8704 15.7958 21.67C15.1788 21.3622 14.5508 20.8978 14.1819 20.3332C13.9362 19.957 14.0014 19.2397 14.1851 18.7769C14.2837 18.5279 14.9236 18.4929 15.3593 18.3482C15.019 17.6786 14.1461 16.8157 15.0874 15.9449C16.1965 14.9182 17.0106 16.1318 18.0568 16.6996C17.8151 15.6451 17.4733 14.6844 18.7238 14.2566C20.1612 13.7643 20.5508 15.032 21.4102 15.9481C21.3402 14.597 21.5962 13.5488 22.9883 13.4741C23.959 13.4216 24.4837 14.1492 24.8462 14.9349C25.1873 15.6745 24.851 16.6193 24.1363 17.1625C23.544 17.6118 23.3604 17.5752 22.047 16.6702Z" />
                                                </svg>
                                                <div class="{{ isset( $talentNeed['companion_elders']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Companion Elders</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M4.47562 13.6877C4.49021 8.47508 8.80493 4.18525 14.0195 4.19858C19.237 4.21232 23.5313 8.5238 23.5163 13.7336C23.5013 18.9471 19.187 23.2373 13.9724 23.2231C8.757 23.2098 4.46103 18.8963 4.47562 13.6877ZM10.3571 16.0794C10.3304 16.0403 10.3033 16.0007 10.2767 15.9615C10.4463 15.8241 10.6147 15.6854 10.7856 15.5497C11.1619 15.2498 11.5446 14.9575 11.9159 14.651C12.6003 14.0867 13.0692 13.4 13.188 12.493C13.3635 11.1532 12.4278 9.93931 11.0744 9.7848C9.78941 9.63821 8.5932 10.6377 8.48566 11.9487C8.44148 12.4863 8.73991 12.884 9.21381 12.9182C9.66229 12.9506 10.0057 12.6154 10.0512 12.1023C10.0808 11.7671 10.2458 11.5247 10.5605 11.4006C11.1632 11.1628 11.7263 11.6767 11.6208 12.3618C11.5433 12.8673 11.2136 13.2005 10.8418 13.5041C10.3879 13.8751 9.91279 14.2216 9.47931 14.6148C8.82702 15.2065 8.48108 15.9545 8.48066 16.8452C8.48066 17.2804 8.79618 17.6365 9.22507 17.6419C10.3021 17.6557 11.3795 17.6552 12.4565 17.6423C12.8742 17.6373 13.1976 17.2792 13.2034 16.8732C13.2093 16.4571 12.8796 16.1073 12.4503 16.0807C12.3281 16.0732 12.2052 16.0794 12.0827 16.0794C11.5075 16.0794 10.9323 16.0794 10.3571 16.0794ZM17.9425 14.4965C17.9425 15.3119 17.9354 16.0894 17.9454 16.8669C17.9508 17.3129 18.3084 17.6523 18.736 17.6473C19.1528 17.6423 19.508 17.3092 19.5096 16.8765C19.5167 14.7684 19.5167 12.66 19.51 10.5519C19.5088 10.1067 19.1441 9.76856 18.7164 9.77481C18.2905 9.78147 17.9491 10.1263 17.9445 10.5752C17.9375 11.2574 17.9425 11.9399 17.9425 12.6221C17.9425 12.7153 17.9425 12.809 17.9425 12.9094C17.4023 12.9094 16.8913 12.9094 16.3594 12.9094C16.3594 12.1519 16.3603 11.4098 16.359 10.6681C16.3582 10.135 16.0402 9.77481 15.5738 9.77439C15.1074 9.77398 14.7889 10.1342 14.7881 10.6668C14.7869 11.6292 14.7881 12.5912 14.7877 13.5537C14.7873 14.2 15.0836 14.4952 15.7359 14.4957C16.4607 14.4969 17.186 14.4965 17.9425 14.4965Z" />
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M24.5506 6.65139C24.1909 6.94332 23.7074 6.88085 23.394 6.48065C22.7429 5.649 22.0027 4.90856 21.1691 4.26015C20.8548 4.0157 20.7611 3.69004 20.8794 3.35313C20.9928 3.02955 21.2741 2.83049 21.6409 2.7851C21.8106 2.8638 22.0015 2.91544 22.1482 3.0258C23.0914 3.7346 23.9167 4.56499 24.6352 5.50158C24.9328 5.89096 24.8953 6.37154 24.5506 6.65139Z" />
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M27.3787 15.8803C27.377 15.889 27.3762 15.8982 27.3745 15.9065C27.1453 17.2975 26.7151 18.6259 26.0366 19.8649C23.9088 23.7457 20.6602 26.1066 16.3143 26.9536C15.827 27.0482 15.3302 27.0923 14.8375 27.1594H13.1549C12.6185 27.0856 12.0742 27.0494 11.5473 26.9336C6.925 25.9175 3.66311 23.3672 1.7946 19.2893C1.77834 19.2552 1.76292 19.2215 1.74791 19.1873C1.62538 18.9158 1.50909 18.6368 1.39947 18.3515C0.842208 16.876 0.537109 15.2769 0.537109 13.6065C0.537109 13.1888 0.555866 12.7753 0.593378 12.3672C0.86013 9.45411 2.05593 6.80967 3.8836 4.73284C3.7869 4.73409 3.71021 4.73534 3.63269 4.73034C3.20255 4.70244 2.8787 4.35846 2.88078 3.93618C2.88286 3.51349 3.21005 3.16117 3.64144 3.15451C4.27164 3.14451 4.9031 3.14285 5.53413 3.14868C5.66542 3.14909 5.7963 3.15076 5.92801 3.15243C6.33481 3.15826 6.67617 3.48059 6.68409 3.88371C6.70034 4.66288 6.69826 5.44247 6.68534 6.22123C6.67867 6.60103 6.38024 6.89962 6.01179 6.94668C5.61916 6.99707 5.27238 6.78759 5.15484 6.41154C5.114 6.28078 5.10983 6.13835 5.08857 6.00093C5.07232 5.98677 5.05606 5.97261 5.03981 5.95803C5.02522 5.9901 5.01563 6.02591 4.99521 6.05298C4.74721 6.38073 4.48046 6.69639 4.2508 7.03621C2.54734 9.55863 1.81085 12.3251 2.23807 15.3556C2.59819 17.9117 3.67812 20.1439 5.51079 21.9654C8.5972 25.0326 12.3109 26.197 16.5739 25.2774C21.5051 24.2142 25.1129 20.2734 25.8682 15.296C25.9378 14.8421 26.1483 14.5889 26.5226 14.5119C26.7872 14.4577 27.0219 14.5356 27.2207 14.7426C27.249 14.7726 27.277 14.8046 27.3036 14.8396C27.3382 14.8937 27.3637 14.9583 27.3807 15.0287C27.4491 15.2948 27.4153 15.6479 27.3787 15.8803Z" />
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M27.3882 14.9599C27.3862 14.9824 27.3837 15.0058 27.3808 15.0282C27.3633 14.9579 27.3383 14.8933 27.3037 14.8392C27.3329 14.8762 27.3608 14.917 27.3882 14.9599Z" />
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.2024 1.17265C13.1499 1.49457 12.8994 1.77817 12.5635 1.82523C11.4698 1.97765 10.4415 2.33787 9.42747 2.7539C8.97941 2.93714 8.52801 2.74016 8.36421 2.3183C8.20457 1.90768 8.39672 1.47083 8.83644 1.29134C9.28117 1.10977 9.72798 0.926116 10.186 0.782858C10.6524 0.636269 11.1251 0.511335 11.5619 0.394313C11.5632 0.394313 11.564 0.393897 11.5657 0.393064C11.6182 0.382236 11.6844 0.362663 11.7607 0.341008C11.7645 0.339758 11.7682 0.338925 11.7724 0.337676C11.8187 0.325183 11.8645 0.312273 11.9095 0.299779C11.9141 0.29853 11.9195 0.297697 11.9241 0.296031C12.1796 0.231482 12.4872 0.18484 12.7198 0.317687C12.7252 0.320185 12.7298 0.323517 12.7344 0.326432C12.7448 0.333095 12.7552 0.339758 12.7652 0.346422C13.1212 0.582547 13.2558 0.84949 13.2024 1.17265Z" />
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M19.6218 2.3354C19.4521 2.74934 18.9999 2.93175 18.5481 2.74685C17.5419 2.33456 16.5224 1.9735 15.4367 1.8265C15.097 1.78027 14.8448 1.50833 14.7944 1.17975C14.7414 0.832437 14.8782 0.565078 15.1703 0.375178C15.1958 0.358937 15.2224 0.344361 15.2562 0.325205H15.2566C15.2674 0.318958 15.2787 0.312711 15.2912 0.305631C15.2925 0.305215 15.2933 0.304382 15.2945 0.303966C15.4287 0.243581 15.6842 0.231504 15.981 0.282311C16.0018 0.286059 16.0235 0.290223 16.0448 0.294388C16.1852 0.32104 16.3257 0.351024 16.4649 0.383507C17.3881 0.596728 18.2772 0.915727 19.1495 1.28595C19.6009 1.47793 19.7931 1.91895 19.6218 2.3354Z" />
                                                    <path fill="{{ isset( $talentNeed['hour_help']) ? '#FA9D6B' : '#DDDDDD' }}" d="M27.4163 12.4125V12.413C27.4122 12.4205 27.4084 12.4267 27.4047 12.4334C27.3767 12.4829 27.3588 12.5158 27.3384 12.5466C27.3317 12.5566 27.3246 12.5666 27.318 12.5762L27.3175 12.5766C27.1287 12.8407 26.8241 12.9764 26.5277 12.9127C26.1876 12.8398 25.9459 12.6308 25.8954 12.2876C25.732 11.1782 25.3419 10.1417 24.9214 9.1122C24.8647 8.97227 24.8367 8.80403 24.8534 8.65452C24.8918 8.30554 25.1735 8.03485 25.5007 7.98737C25.875 7.93282 26.2072 8.11439 26.3656 8.48295C26.5981 9.02558 26.8161 9.57279 27.0012 10.1308C27.1412 10.5506 27.2625 10.9766 27.3576 11.4106C27.3851 11.5351 27.4101 11.6604 27.4326 11.7866V11.7566C27.4688 11.9753 27.4847 12.2247 27.4163 12.4125Z" />
                                                </svg>  
                                                <div class="{{ isset( $talentNeed['hour_help']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">24-Hour Help</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['cook_meals']) ? '#FA9D6B' : '#DDDDDD' }}" d="M23.1788 22.2636H4.82436C4.48673 22.2636 4.213 22.5373 4.21237 22.875L4.20996 24.6595C4.20939 25.327 4.46871 25.9546 4.94026 26.4267C5.41238 26.8994 6.03929 27.1594 6.70687 27.1594H21.2938C22.6708 27.1594 23.7908 26.0394 23.7908 24.6625V22.8755C23.7908 22.5373 23.5171 22.2636 23.1788 22.2636Z" />
                                                    <path fill="{{ isset($talentNeed['cook_meals']) ? '#FA9D6B' : '#DDDDDD' }}" d="M20.7313 2.68046C20.3566 2.68046 19.9717 2.7181 19.5641 2.794C18.1639 1.16123 16.157 0.232544 13.9996 0.232544C9.95005 0.232544 6.65589 3.5267 6.65589 7.57623C6.65589 7.91387 6.38159 8.18822 6.0439 8.18822C5.70626 8.18822 5.43191 7.91393 5.43191 7.57623C5.43191 6.25127 5.73673 4.96934 6.33793 3.76635C6.44493 3.55241 6.41739 3.29601 6.268 3.10955C6.1186 2.92429 5.87413 2.84179 5.64229 2.89859C2.63562 3.64862 0.536133 6.32717 0.536133 9.41215C0.536133 11.9557 1.97045 14.2679 4.22232 15.4111L4.21572 20.4271C4.21572 20.589 4.27969 20.745 4.39444 20.8603C4.50976 20.9751 4.66518 21.0396 4.82771 21.0396H23.1792C23.5175 21.0396 23.7912 20.7659 23.7912 20.4276V15.4021C26.0347 14.2559 27.463 11.9472 27.463 9.4121C27.463 5.70026 24.4432 2.68046 20.7313 2.68046ZM9.49222 17.2292C9.37805 17.3224 9.24064 17.3678 9.10438 17.3678C8.9275 17.3678 8.75177 17.2914 8.63048 17.1443C8.42847 16.8975 6.65589 14.6911 6.65589 13.084C6.65589 12.7457 6.92962 12.472 7.26788 12.472C7.60615 12.472 7.87988 12.7457 7.87988 13.084C7.87988 13.9697 8.92096 15.5678 9.57713 16.3674C9.79101 16.6292 9.75338 17.0146 9.49222 17.2292ZM14.6115 16.7558C14.6115 17.0941 14.3378 17.3678 13.9995 17.3678C13.6613 17.3678 13.3876 17.0941 13.3876 16.7558V13.084C13.3876 12.7457 13.6613 12.472 13.9996 12.472C14.3378 12.472 14.6116 12.7457 14.6116 13.084V16.7558H14.6115ZM19.3687 17.1443C19.2473 17.2914 19.0722 17.3678 18.8954 17.3678C18.7585 17.3678 18.6211 17.3224 18.5075 17.2292C18.2464 17.0146 18.2081 16.6292 18.422 16.368C19.0783 15.5666 20.1193 13.9667 20.1193 13.084C20.1193 12.7457 20.393 12.472 20.7313 12.472C21.0695 12.472 21.3433 12.7457 21.3433 13.084C21.3433 14.691 19.5707 16.8975 19.3687 17.1443Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['cook_meals']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Cook Meal</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_102_7386)">
                                                    <path fill="{{ isset($talentNeed['remind_medicine']) ? '#FA9D6B' : '#DDDDDD' }}" d="M26.0021 19.5057C25.3698 18.8656 24.5066 18.5063 23.6068 18.5086C23.299 18.5072 22.9923 18.5493 22.6962 18.6337C22.582 18.6659 22.4697 18.7037 22.3593 18.7474C22.3233 18.7617 22.289 18.7791 22.2535 18.7953C22.1818 18.8268 22.109 18.8585 22.0418 18.8917C22.0009 18.9133 21.9614 18.9399 21.9219 18.9601C21.8608 18.9951 21.8007 19.0308 21.7419 19.0698C21.7015 19.0966 21.6625 19.125 21.6235 19.1535C21.5687 19.1934 21.5152 19.2343 21.4628 19.2778C21.4252 19.309 21.3876 19.3412 21.3511 19.3739C21.303 19.4192 21.2548 19.4662 21.2066 19.5144C21.1725 19.5492 21.1385 19.5842 21.1056 19.6209C21.0576 19.6723 21.0156 19.7261 20.9723 19.7807C20.9434 19.8171 20.9131 19.8537 20.8856 19.8918C20.841 19.9534 20.8001 20.0178 20.7592 20.0843C20.7376 20.1188 20.7143 20.1522 20.6936 20.1877C20.6894 20.1954 20.6859 20.2036 20.6816 20.2114L21.8665 21.3962H26.9414C26.838 20.6821 26.5088 20.0196 26.0021 19.5057Z" />
                                                    <path fill="{{ isset($talentNeed['remind_medicine']) ? '#FA9D6B' : '#DDDDDD' }}" d="M17.5055 26.564L15.095 24.1534C14.5674 24.2383 14.034 24.282 13.4996 24.2839C7.65203 24.2839 2.91174 19.5436 2.91174 13.696C2.91174 7.84844 7.65203 3.10816 13.4996 3.10816C19.3472 3.10816 24.0875 7.84844 24.0875 13.696C24.0896 15.02 23.8407 16.3322 23.354 17.5635C23.4382 17.5586 23.5204 17.5461 23.6062 17.5461C23.8104 17.5478 24.0144 17.5638 24.2165 17.5943C24.2602 17.5999 24.3034 17.6063 24.3474 17.6136C24.5412 17.646 24.7327 17.6918 24.9205 17.7506C24.9503 17.7597 24.9783 17.7717 25.0077 17.7818C25.1769 17.8396 25.3425 17.908 25.5033 17.9865C25.535 18.0023 25.5681 18.0159 25.5996 18.0347C25.7738 18.1256 25.9418 18.2283 26.102 18.3421C26.1159 18.3517 26.1314 18.3585 26.1453 18.3686C26.6371 17.0252 26.91 15.6114 26.9539 14.1815H25.5312C25.2655 14.1815 25.05 13.966 25.05 13.7002C25.05 13.4345 25.2655 13.219 25.5312 13.219H26.9631C26.7048 6.15813 21.0417 0.493151 13.9809 0.232544V1.66436C13.9809 1.93013 13.7654 2.14562 13.4996 2.14562C13.2338 2.14562 13.0183 1.93013 13.0183 1.66436V0.232544C5.95914 0.492916 0.296505 6.15555 0.0361328 13.2147H1.46795C1.73372 13.2147 1.94921 13.4302 1.94921 13.696C1.94921 13.9618 1.73372 14.1773 1.46795 14.1773H0.0361328C0.296505 21.2365 5.95914 26.8991 13.0183 27.1595V25.7277C13.0183 25.4619 13.2338 25.2464 13.4996 25.2464C13.7654 25.2464 13.9809 25.4619 13.9809 25.7277V27.1536C15.177 27.1169 16.3625 26.9186 17.5055 26.564Z" />
                                                    <path fill="{{ isset($talentNeed['remind_medicine']) ? '#FA9D6B' : '#DDDDDD' }}" d="M22.8047 22.3588C22.8221 22.3804 22.8359 22.4044 22.8529 22.4262C22.8846 22.4676 22.914 22.5108 22.9443 22.5536C23.0021 22.6358 23.0559 22.7202 23.1055 22.8074C23.1325 22.8553 23.1588 22.9035 23.1835 22.9517C23.2317 23.0445 23.2721 23.1399 23.3104 23.2369C23.3278 23.2818 23.3475 23.3255 23.3635 23.3709C23.414 23.5149 23.4547 23.662 23.4852 23.8117C23.5165 23.9628 23.5369 24.1158 23.5463 24.2697C23.5491 24.3113 23.5506 24.3522 23.552 24.3936C23.5564 24.5233 23.5531 24.653 23.5419 24.7825C23.5395 24.8083 23.5419 24.8344 23.5367 24.8603C23.5231 24.99 23.5017 25.1185 23.4723 25.2454C23.5174 25.2459 23.5618 25.2464 23.6055 25.2464C25.2794 25.2442 26.6988 24.0152 26.9401 22.3588H22.8047Z" />
                                                    <path fill="{{ isset($talentNeed['remind_medicine']) ? '#FA9D6B' : '#DDDDDD' }}" d="M14.7467 16.6318C13.7733 16.6309 12.8952 17.2162 12.522 18.1153C12.1486 19.0142 12.3537 20.0495 13.0416 20.7383L15.4253 23.1221L17.1361 21.4137L18.8306 19.7215L16.4471 17.3377C15.9983 16.8835 15.3854 16.629 14.7467 16.6318Z" />
                                                    <path fill="{{ isset($talentNeed['remind_medicine']) ? '#FA9D6B' : '#DDDDDD' }}" d="M21.8889 26.1864C22.0985 25.9798 22.266 25.7347 22.3826 25.4645C22.3878 25.4518 22.3946 25.4403 22.4009 25.4283C22.4282 25.3649 22.4489 25.2988 22.4698 25.2359C22.4865 25.1877 22.5062 25.1362 22.5177 25.0852C22.5361 25.0154 22.5457 24.9442 22.5572 24.8735C22.565 24.8253 22.5769 24.7771 22.5819 24.729C22.588 24.6491 22.5901 24.5687 22.588 24.4883C22.588 24.4484 22.592 24.4089 22.588 24.369C22.5816 24.2477 22.5654 24.1269 22.5401 24.008C22.4505 23.5444 22.2233 23.1186 21.8877 22.786L19.5084 20.4067L17.7854 22.1274L16.1055 23.8026C17.1949 24.8874 18.5955 26.2778 18.7226 26.3899C19.6781 27.1311 21.0361 27.0439 21.8889 26.1864Z" />
                                                    <path fill="{{ isset($talentNeed['remind_medicine']) ? '#FA9D6B' : '#DDDDDD' }}"d="M19.8621 19.3918L19.98 19.5097C20.0153 19.4552 20.0548 19.4047 20.0916 19.3523C20.1154 19.3196 20.1375 19.2863 20.1614 19.2559C20.1739 19.2393 20.1861 19.2214 20.199 19.2049C20.2265 19.1699 20.2564 19.1377 20.2846 19.1034C20.3327 19.0452 20.3809 18.9855 20.4333 18.9298L20.4498 18.9124C20.482 18.8778 20.5172 18.8459 20.5504 18.8127C20.6028 18.7603 20.6552 18.7075 20.7101 18.6579L20.7616 18.6121C20.7877 18.589 20.8154 18.5688 20.842 18.5467C20.8934 18.5033 20.9449 18.4605 20.999 18.4201C21.033 18.394 21.0687 18.3695 21.1038 18.3444C21.139 18.3195 21.1606 18.304 21.1895 18.2842C21.2285 18.2584 21.268 18.2328 21.3073 18.2083C21.3467 18.1837 21.4008 18.1524 21.4478 18.1252C21.4821 18.1059 21.5148 18.0836 21.5495 18.065H21.5524C21.5794 18.0504 21.6076 18.0384 21.6346 18.0246C21.6828 17.9999 21.731 17.9764 21.7824 17.9531C21.8339 17.9301 21.8877 17.9052 21.9417 17.8824L22.0158 17.8526C22.0543 17.8373 22.0938 17.8237 22.1328 17.8093C22.1626 17.7987 22.1911 17.7858 22.2209 17.7762C22.8216 16.5002 23.1306 15.1062 23.1256 13.696C23.1256 8.37998 18.8161 4.07068 13.5003 4.07068C8.1843 4.07068 3.875 8.37998 3.875 13.696C3.875 19.0118 8.1843 23.3213 13.5003 23.3213C13.7471 23.3213 13.9926 23.3117 14.2351 23.2929L12.3611 21.4188C11.3981 20.4549 11.1107 19.0054 11.6328 17.747C12.1552 16.4884 13.3842 15.6683 14.7467 15.6692C15.6416 15.6655 16.5002 16.022 17.1291 16.6586L19.8362 19.3657L19.8621 19.3918ZM19.2755 8.57973L13.8411 14.0358C13.6531 14.2236 13.3485 14.2236 13.1605 14.0358L9.75077 10.6399C9.56794 10.4514 9.56982 10.1514 9.75523 9.96525C9.94041 9.77913 10.2405 9.77584 10.4299 9.95796L13.5003 13.0155L18.5936 7.9006C18.782 7.71777 19.0821 7.71965 19.2682 7.90483C19.4543 8.09024 19.4574 8.39032 19.2755 8.57973Z" />
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_102_7386">
                                                    <rect width="26.9268" height="26.9268" fill="white" transform="translate(0.0361328 0.232544)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <div class="{{ isset($talentNeed['remind_medicine']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Remind Medicine</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['run_errands']) ? '#FA9D6B' : '#DDDDDD' }}" d="M15.4926 2.27313H13.5224C13.2765 2.26552 13.0653 2.09649 13.0039 1.85838C12.8172 0.888439 11.9518 0.199005 10.9647 0.23387C9.97155 0.21647 9.11037 0.917085 8.92539 1.89298C8.86148 2.12454 8.64693 2.28186 8.40691 2.2732H6.50586V5.72963H15.4926V2.27313Z" />
                                                    <path fill="{{ isset($talentNeed['run_errands']) ? '#FA9D6B' : '#DDDDDD' }}" d="M21.0232 25.5694V5.76411C21.0254 4.98146 20.3925 4.34528 19.6099 4.34317C19.574 4.3431 19.5382 4.34436 19.5024 4.34694H16.5298V6.10972C16.5298 6.38626 16.357 6.76648 16.0805 6.76648H5.88406C5.60752 6.76648 5.46932 6.38626 5.46932 6.10972V4.34701H2.49677C1.71623 4.28971 1.03699 4.87607 0.979758 5.65667C0.977112 5.69246 0.975855 5.72832 0.975987 5.76418V25.5695C0.956669 26.4283 1.63724 27.1402 2.49604 27.1594C2.4963 27.1594 2.49657 27.1594 2.49683 27.1594H19.5025C20.3613 27.1405 21.0422 26.429 21.0233 25.5702C21.0232 25.57 21.0232 25.5697 21.0232 25.5694ZM8.19986 21.007L5.50385 23.5302C5.41765 23.6333 5.29241 23.6959 5.15824 23.703C5.01382 23.6973 4.87733 23.6352 4.77803 23.5302L3.36092 22.0785C3.17257 21.8675 3.18799 21.5446 3.39546 21.3526C3.59704 21.155 3.9197 21.155 4.12128 21.3526L5.15818 22.4587L7.50858 20.2465C7.74423 20.0839 8.06715 20.1431 8.22977 20.3787C8.36248 20.571 8.35018 20.8282 8.19986 21.007ZM8.19986 15.4767L5.50385 17.9999C5.41765 18.103 5.29241 18.1656 5.15824 18.1727C5.01382 18.167 4.87733 18.1049 4.77803 17.9999L3.36092 16.5482C3.17257 16.3372 3.18799 16.0143 3.39546 15.8223C3.59704 15.6247 3.9197 15.6247 4.12128 15.8223L5.15818 16.9284L7.50858 14.7162C7.74423 14.5536 8.06715 14.6128 8.22977 14.8484C8.36248 15.0407 8.35018 15.2979 8.19986 15.4767ZM8.19986 9.94637L5.50385 12.4696C5.41765 12.5727 5.29241 12.6353 5.15824 12.6424C5.01382 12.6367 4.87733 12.5746 4.77803 12.4696L3.36092 11.0179C3.17257 10.807 3.18799 10.484 3.39546 10.292C3.59704 10.0944 3.9197 10.0944 4.12128 10.292L5.15818 11.3981L7.50858 9.18595C7.74423 9.02333 8.06715 9.08247 8.22977 9.31813C8.36248 9.51039 8.35018 9.76761 8.19986 9.94637ZM18.2581 23.0117H10.3083C10.0219 23.0117 9.78978 22.7795 9.78978 22.4932C9.78978 22.2069 10.0219 21.9747 10.3083 21.9747H18.258C18.5444 21.9747 18.7765 22.2069 18.7765 22.4932C18.7765 22.7795 18.5444 23.0117 18.2581 23.0117ZM18.2581 17.4814H10.3083C10.0219 17.4814 9.78978 17.2492 9.78978 16.9629C9.78978 16.6766 10.0219 16.4444 10.3083 16.4444H18.258C18.5444 16.4444 18.7765 16.6766 18.7765 16.9629C18.7765 17.2492 18.5444 17.4814 18.2581 17.4814ZM18.2581 11.9511H10.3083C10.0219 11.9511 9.78978 11.7189 9.78978 11.4326C9.78978 11.1463 10.0219 10.9141 10.3083 10.9141H18.258C18.5444 10.9141 18.7765 11.1463 18.7765 11.4326C18.7765 11.719 18.5444 11.9511 18.2581 11.9511Z"/>
                                                </svg>
                                                <div class="{{ isset($talentNeed['run_errands']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Run Errands</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M19.9932 6.81531V6.8157L19.9936 6.81531C19.9943 6.81107 19.9955 6.80644 19.9967 6.80182C19.9951 6.80683 19.994 6.81107 19.9932 6.81531ZM17.2316 19.7087C17.2312 19.7099 17.2309 19.7107 17.2305 19.7118H18.2898C18.3009 19.7118 18.3121 19.7107 18.3225 19.7087H17.2316Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M27.5791 12.017C27.5822 12.0177 27.5849 12.0177 27.588 12.0177C27.6153 12.0177 27.6431 12.0181 27.6705 12.0181C27.6308 12.0174 27.5976 12.017 27.5791 12.017Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M29.8874 10.0491C29.84 9.95001 29.6985 9.89604 29.5983 9.8228C28.4796 9.01022 27.361 8.19725 26.2419 7.38466C25.9574 7.17804 25.673 6.97143 25.3885 6.76481C24.8141 6.34696 24.2394 5.92949 23.6631 5.51394C23.4349 5.34934 23.2063 5.18474 22.9773 5.02092C22.9326 4.98892 22.8887 4.955 22.8451 4.92069C22.7025 4.80852 22.5637 4.69018 22.4053 4.6019C22.3405 4.56567 22.2727 4.53483 22.1998 4.51132C22.1848 4.50631 22.174 4.4878 22.1616 4.47547C22.0911 4.40724 22.0271 4.32976 21.9489 4.27271C21.8371 4.1906 21.7249 4.10888 21.6127 4.02716L20.8452 3.47091L20.7126 3.37493C20.575 3.27548 20.4374 3.17564 20.3002 3.07619C20.0774 2.91429 19.8546 2.75277 19.6314 2.59087L19.5693 2.54577C19.3754 2.40469 19.1815 2.26399 18.9869 2.1229C18.9722 2.11211 18.9522 2.11211 18.9375 2.1229C18.0031 2.80057 17.0707 3.47708 16.1351 4.15591L15.9975 4.25575C15.6876 4.48048 15.3776 4.7056 15.0666 4.9311C15.0415 4.94922 15.0438 4.98777 15.0716 5.00203C15.2705 5.10534 15.4378 5.37517 15.4405 5.62342C15.442 5.77491 15.4054 5.91676 15.3106 6.03164C15.2797 6.06903 15.218 6.03087 15.2396 5.98731C15.24 5.98692 15.24 5.98654 15.2404 5.98615C15.4015 5.66698 15.2743 5.24873 14.9301 5.12153C14.8915 5.10765 14.8306 5.10842 14.799 5.13001C14.7778 5.14465 14.757 5.16007 14.737 5.17665C14.7285 5.1832 14.72 5.19014 14.7115 5.19746C14.7023 5.20517 14.693 5.21327 14.6838 5.22136C14.6564 5.24565 14.629 5.2707 14.6017 5.29499C14.6013 5.29499 14.6009 5.29576 14.6009 5.29576C14.5916 5.30386 14.5824 5.31195 14.5731 5.32005C14.5065 5.36939 14.4398 5.41873 14.3735 5.46807C14.2732 5.539 14.173 5.60993 14.0724 5.68162C14.0716 5.68201 14.0705 5.68278 14.0697 5.68317C14.0215 5.71208 13.9733 5.74137 13.9248 5.77067C13.8801 5.79881 13.833 5.82425 13.7902 5.85547L12.6145 6.70776C11.6886 7.37965 10.7623 8.05115 9.83487 8.72149C9.7728 8.76621 9.75777 8.80553 9.77319 8.87838C9.96824 9.7989 10.1587 10.7202 10.3545 11.6403C10.393 11.82 10.4285 12.005 10.5014 12.1719C10.6012 12.3997 10.7974 12.5481 11.0083 12.6746C11.8594 13.1838 12.7117 13.6907 13.5586 14.2061C14.0786 14.5221 14.3577 14.989 14.3885 15.6011C14.3904 15.6416 14.4155 15.6886 14.444 15.7191C14.6452 15.9353 14.8017 16.1785 14.9012 16.4569C14.9598 16.6203 15.0022 16.7899 15.0696 16.9491C15.1984 17.254 15.3784 17.5817 15.5781 17.8831C15.6012 17.9178 15.6552 17.9016 15.6552 17.86V16.9379C15.6552 16.9345 15.6552 16.931 15.6556 16.9275C15.661 16.83 15.7415 16.7525 15.8406 16.7525H18.2475C18.3728 16.7525 18.4753 16.8551 18.4753 16.9803V19.6671C18.4753 19.6902 18.4564 19.7091 18.4333 19.7091H18.3223C18.3119 19.711 18.3007 19.7122 18.2895 19.7122H17.3443C17.3262 19.7612 17.3258 19.7619 17.3081 19.8109C17.8216 20.2492 18.335 20.6882 18.8519 21.1296C18.8693 21.1443 18.8716 21.1705 18.8573 21.1882C18.6897 21.394 18.5216 21.5929 18.3635 21.7992C17.995 22.2799 17.5814 22.7131 17.0568 23.0246C16.8024 23.1757 16.5406 23.3133 16.287 23.4498C16.2484 23.4706 16.2635 23.5288 16.307 23.5288H27.4473C27.4704 23.5288 27.4893 23.5099 27.4893 23.4868V23.4494C27.4878 22.3863 27.4855 21.3227 27.4839 20.2592C27.4839 19.8533 27.4835 19.4474 27.4832 19.0415C27.4828 18.5053 27.4885 17.9687 27.4893 17.4325V15.9947C27.4893 15.6909 27.4889 15.3875 27.4889 15.0842C27.4889 14.1174 27.4901 13.1502 27.4882 12.1835V12.1804C27.4885 12.0563 27.5024 12.0173 27.5768 12.0173H27.5795C27.598 12.0173 27.6312 12.0177 27.6709 12.0185H27.6767C27.7888 12.0189 27.901 12.0192 28.0132 12.0192C28.6045 12.0212 29.1954 12.0208 29.7868 12.0208H29.8639C29.887 12.0208 29.9059 12.0019 29.9059 11.9788V11.8785C29.9059 11.3982 29.9063 10.9179 29.9055 10.4376C29.9051 10.3062 29.939 10.1566 29.8874 10.0491ZM18.4757 15.5521C18.4757 15.6778 18.3736 15.78 18.2479 15.78H15.883C15.7573 15.78 15.6556 15.6782 15.6556 15.5525V13.0477C15.6556 12.922 15.7573 12.8203 15.883 12.8203H18.2479C18.3732 12.8203 18.4757 12.9228 18.4757 13.0481V15.5521ZM19.9933 6.8157V6.81531C19.9941 6.81107 19.9953 6.80683 19.9968 6.80182C19.9972 6.80722 19.9972 6.81338 19.9972 6.81955C19.9941 6.82032 19.9906 6.82109 19.9876 6.82148C19.9895 6.81955 19.991 6.81762 19.9933 6.8157ZM19.449 13.0327C19.449 12.9163 19.5435 12.8218 19.6599 12.8218H22.0961C22.189 12.8218 22.2646 12.8974 22.2646 12.9906V15.5733C22.2646 15.6898 22.1705 15.7838 22.0541 15.7838H19.6595C19.5431 15.7838 19.449 15.6898 19.449 15.5733V13.0327ZM22.2692 19.5349C22.2692 19.6262 22.1952 19.7006 22.1034 19.7006H19.6568C19.5423 19.7006 19.4494 19.6077 19.4494 19.4933V16.9491C19.4494 16.8342 19.5423 16.7413 19.6572 16.7413H22.1034C22.1952 16.7413 22.2692 16.8157 22.2692 16.9071V19.5349Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M14.7433 18.949C15.4356 19.8132 16.1992 20.6081 17.0766 21.3305C17.077 21.3305 17.077 21.3308 17.0766 21.3312C16.937 21.4596 16.8125 21.5891 16.673 21.6994C16.1784 22.0902 15.6075 22.3362 15.0181 22.5409C14.7668 22.628 14.5074 22.6912 14.2533 22.7698C14.177 22.7933 14.1234 22.7795 14.0625 22.7267C13.4805 22.2236 13.0152 21.6265 12.6301 20.9639C12.228 20.2716 11.9312 19.5364 11.7481 18.7562C11.7373 18.7096 11.7208 18.6641 11.6996 18.6206C11.9559 20.1717 12.3202 21.6878 13.1474 23.0786C13.1474 23.079 13.1474 23.079 13.147 23.0794C12.9612 23.1642 12.7762 23.2586 12.5838 23.3345C12.107 23.5223 11.6128 23.6526 11.1105 23.7528C11.0755 23.7597 11.0215 23.7505 10.9984 23.727C10.5701 23.2898 10.2004 22.8111 9.97107 22.2363C9.96182 22.2132 9.95411 22.1897 9.9464 22.1662C9.93908 22.1442 9.93253 22.1218 9.91595 22.1014C9.95411 22.7502 10.0073 23.3962 10.1742 24.0388C10.1742 24.0392 10.1742 24.0392 10.1738 24.0392C9.33311 24.3056 8.48467 24.5257 7.60425 24.6012C7.65667 24.5762 7.72374 24.5642 7.75921 24.5241C7.96621 24.2905 8.24452 24.2211 8.54481 24.3742C8.64118 24.4231 8.71635 24.4042 8.81734 24.3676C8.81773 24.3676 8.81773 24.3672 8.81734 24.3669C8.60263 24.1514 8.3567 24.077 8.0753 24.1394C7.82435 24.1953 7.61581 24.3148 7.51559 24.5812C7.51559 24.5816 7.51559 24.5816 7.51597 24.582L7.60733 24.5997C7.40071 24.6224 7.1941 24.6452 6.97284 24.6695C6.97245 24.6695 6.97245 24.6695 6.97245 24.6691C6.84987 23.5435 6.53301 22.4938 6.07776 21.4823C6.07737 21.4819 6.07699 21.4819 6.07699 21.4827C6.09279 21.6789 6.10975 21.8751 6.12402 22.0717C6.18646 22.939 6.16989 23.8056 6.09665 24.6714C6.09164 24.7284 6.07853 24.7597 6.01184 24.7658C5.34959 24.8287 4.68657 24.8896 4.02124 24.8649C3.73522 24.8541 3.45035 24.8032 3.16548 24.7685C3.12732 24.7639 3.08993 24.7481 3.05369 24.7346C2.86751 24.6656 2.87406 24.6637 2.91916 24.4709C3.1277 23.5762 3.3401 22.6819 3.53438 21.7838C3.7144 20.9523 3.8709 20.1154 4.03396 19.2805C4.07559 19.0673 4.10296 18.8518 4.13457 18.6371C4.18006 18.3249 4.43486 18.0497 4.76135 17.9841C5.63523 17.8087 6.51026 17.6387 7.38491 17.4653C7.977 17.3477 8.56832 17.2271 9.16003 17.1079C9.34159 17.0713 9.34236 17.0721 9.4368 17.2124C9.43719 17.2128 9.43757 17.2128 9.43757 17.212C9.43526 17.1658 9.43295 17.1195 9.42986 17.0571L9.43025 17.0567C9.56555 17.0293 9.71704 16.9981 9.86854 16.968C10.833 16.7764 11.7975 16.5829 12.7623 16.3944C13.1925 16.3104 13.5599 16.5621 13.6971 16.9773C13.8066 17.3088 13.9646 17.6245 14.1011 17.9475C14.1011 17.9479 14.1011 17.9479 14.1011 17.9483C14.0756 17.9637 14.0425 17.9737 14.0259 17.9961C13.891 18.1769 13.8544 18.3819 13.8999 18.599C13.9746 18.9551 14.327 19.186 14.6627 19.1055C14.7652 19.0808 14.778 19.0573 14.7421 18.9501C14.7425 18.949 14.7429 18.9486 14.7433 18.949ZM9.30189 17.5119C9.3096 17.5042 9.3173 17.4969 9.32463 17.4892C9.28146 17.4502 9.24059 17.4082 9.19472 17.3724C9.04593 17.256 9.03976 17.4707 8.94378 17.4861C8.92142 17.4896 8.90831 17.5536 8.89251 17.5902C8.89058 17.5948 8.89598 17.6044 8.90022 17.6094C8.94917 17.6646 8.99852 17.7189 9.04747 17.7737C9.05557 17.766 9.06405 17.7582 9.07214 17.7509C9.04207 17.7189 9.00353 17.6908 8.98387 17.6534C8.96421 17.6156 8.96267 17.5682 8.95303 17.525C8.95303 17.525 8.95303 17.5246 8.95341 17.5246C8.99659 17.5324 9.04362 17.5316 9.08178 17.5497C9.11956 17.5678 9.1477 17.6052 9.18046 17.6337C9.16042 17.5767 9.11917 17.5416 9.09103 17.4984C9.07561 17.4745 9.08139 17.4368 9.07792 17.4048C9.07792 17.4048 9.07792 17.4044 9.07831 17.4044C9.11069 17.4036 9.15001 17.3909 9.17391 17.4048C9.22055 17.4333 9.25948 17.4757 9.30189 17.5119ZM8.33126 18.4945C8.33742 18.4876 8.34321 18.481 8.34937 18.4741C8.27806 18.4139 8.23026 18.2829 8.1231 18.3222C8.04099 18.3523 7.95734 18.4502 7.92843 18.5361C7.89682 18.6302 8.01208 18.6757 8.0753 18.7323C8.05333 18.6872 8.01208 18.6556 7.99011 18.614C7.97353 18.5832 7.98163 18.5396 7.97893 18.5014C7.97893 18.5014 7.97893 18.5011 7.97931 18.5011C8.01671 18.5038 8.05949 18.496 8.09033 18.5118C8.13273 18.5334 8.1655 18.5728 8.20289 18.6047C8.20906 18.5974 8.21523 18.5897 8.22139 18.5824C8.18863 18.5516 8.14931 18.5253 8.12503 18.4887C8.10575 18.4594 8.10498 18.4182 8.09611 18.3823C8.09611 18.3823 8.09611 18.3819 8.0965 18.3819C8.1362 18.3843 8.18208 18.3746 8.21369 18.3916C8.2584 18.4155 8.29232 18.4594 8.33126 18.4945ZM6.98864 19.4628C6.97862 19.4605 6.96859 19.4578 6.95857 19.4555C6.95125 19.491 6.92696 19.5349 6.94007 19.5603C6.96358 19.6066 7.00213 19.6606 7.04685 19.676C7.08578 19.6895 7.14977 19.6648 7.18639 19.6363C7.21029 19.6174 7.22571 19.5465 7.2099 19.5249C7.14206 19.4328 7.06072 19.3506 6.98479 19.2647C6.97631 19.2732 6.96782 19.2813 6.95896 19.2897C7.01909 19.3533 7.08539 19.4123 7.13666 19.4825C7.15864 19.5122 7.1621 19.5688 7.14977 19.6047C7.14245 19.6259 7.07383 19.6502 7.0561 19.6382C7.02025 19.6143 6.99674 19.5684 6.97631 19.5276C6.9686 19.5118 6.98363 19.4848 6.98864 19.4628ZM8.44497 17.9132C8.44497 17.9136 8.44497 17.9136 8.44497 17.9132C8.50009 17.9645 8.55637 18.0285 8.62499 18.0751C8.65313 18.0944 8.71982 18.0928 8.74526 18.0716C8.7734 18.0485 8.77455 17.9922 8.79267 17.9336C8.74487 17.9915 8.70555 18.0581 8.69129 18.0531C8.63501 18.0331 8.58683 17.9911 8.53286 17.9552V17.9548C8.58143 17.8943 8.61342 17.855 8.66045 17.7968C8.66045 17.7964 8.66045 17.7964 8.66007 17.7964C8.57796 17.8411 8.51898 17.8731 8.44497 17.9132ZM7.51944 19.1043C7.53101 19.0997 7.54218 19.0955 7.55375 19.0908C7.53447 19.0504 7.5152 19.0099 7.49554 18.969H7.49516C7.45931 18.9968 7.3984 19.0218 7.39455 19.0534C7.38877 19.1016 7.41112 19.1652 7.44427 19.2015C7.44659 19.2038 7.4489 19.2057 7.4516 19.2076C7.57688 19.2928 7.632 19.1887 7.70254 19.1259C7.53717 19.2184 7.48937 19.2284 7.44119 19.1548C7.40149 19.0943 7.42384 19.048 7.47781 18.9922C7.4913 19.028 7.49747 19.0442 7.50364 19.06C7.50903 19.0754 7.51404 19.0897 7.51944 19.1043ZM7.86714 18.7539C7.79776 18.6838 7.73107 18.6788 7.6744 18.7458C7.62005 18.8106 7.63316 18.8703 7.70447 18.9332C7.66399 18.7932 7.69984 18.7 7.86714 18.7539ZM8.45769 18.3638C8.49277 18.3388 8.49585 18.2937 8.46193 18.2362C8.42685 18.1765 8.39833 18.1129 8.36672 18.0512C8.3247 18.0971 8.35014 18.1468 8.38252 18.2015C8.41182 18.2509 8.43148 18.306 8.45769 18.3638ZM7.36294 19.454C7.31167 19.3688 7.26426 19.289 7.2207 19.2165C7.17444 19.2782 7.20374 19.3372 7.36294 19.454ZM9.53895 17.2826C9.4661 17.2826 9.38977 17.2826 9.32579 17.2826C9.37436 17.3701 9.47381 17.3731 9.53895 17.2826Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M6.9362 7.62366C6.65211 7.62366 6.41542 7.86188 6.41504 8.14791C6.41504 8.44125 6.64941 8.67485 6.94353 8.67408C7.22801 8.6737 7.46392 8.43701 7.46508 8.15022C7.46662 7.85841 7.23032 7.62366 6.9362 7.62366Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M12.8903 15.329C12.0542 14.8232 11.2146 14.3229 10.3789 13.8167C10.2112 13.715 10.0362 13.688 9.84732 13.7161C9.50348 13.7674 9.19085 13.5612 9.10605 13.2239C9.08022 13.1206 9.06442 13.015 9.0409 12.9113C9.00236 12.739 8.96111 12.5674 8.92064 12.3955C8.87823 12.4603 8.83583 12.525 8.79343 12.5902L8.75642 12.5693C8.79112 12.4757 8.82581 12.382 8.86551 12.2748C8.8871 12.3226 8.90406 12.3593 8.92064 12.3955C8.92141 12.3966 8.92179 12.3974 8.92218 12.3986C8.87399 12.138 8.79497 11.7066 8.74177 11.4183C8.74177 11.4175 8.74139 11.4172 8.74177 11.4168C8.74023 11.4033 8.73869 11.3882 8.73561 11.3736C8.50393 10.2075 8.27226 9.04107 8.03944 7.87501C8.01168 7.73585 7.98778 7.59438 7.94229 7.461C7.82511 7.1133 7.57339 6.89435 7.24188 6.76021L7.22338 6.75828L7.21914 6.7579C7.2203 6.75674 7.22184 6.75558 7.223 6.75443C7.21837 6.75288 7.21336 6.75173 7.20835 6.75057C7.15053 6.73554 7.08885 6.72552 7.02987 6.72012C7.0133 6.71858 6.99711 6.71742 6.9813 6.71665C6.9628 6.71549 6.94507 6.71511 6.92772 6.71511C6.92772 6.71395 6.91654 6.72089 6.91654 6.71973C6.89071 6.71819 6.88031 6.7074 6.85949 6.7074C6.17026 6.70701 5.63483 7.35076 5.76589 8.03729C5.94707 8.98634 6.13942 9.93268 6.32715 10.8802C6.50794 11.793 6.6841 12.7066 6.87337 13.6178C6.94777 13.9771 6.71147 14.3448 6.34681 14.4158C6.1876 14.447 6.05616 14.5318 5.9594 14.6621C5.37078 15.4558 4.78293 16.2499 4.19623 17.0447C4.08676 17.1931 4.07866 17.3573 4.16501 17.4923C4.2529 17.6295 4.40169 17.6892 4.58441 17.653C5.1314 17.5455 5.678 17.436 6.22461 17.3273C7.2068 17.1315 8.18862 16.9356 9.17081 16.7406C10.3619 16.5039 11.5534 16.268 12.7446 16.0309C12.7928 16.0213 12.8421 16.007 12.8853 15.9839C13.1435 15.8444 13.1485 15.4851 12.8903 15.329ZM6.94353 8.6741C6.64941 8.67487 6.41504 8.44127 6.41504 8.14792C6.41542 7.8619 6.6521 7.62368 6.9362 7.62368C7.23032 7.62368 7.46662 7.85843 7.46508 8.15024C7.46392 8.43703 7.22801 8.67371 6.94353 8.6741Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.24199 6.76015L7.22363 6.75824C7.22402 6.75709 7.22478 6.75595 7.22516 6.7548C7.22516 6.75442 7.22555 6.75365 7.22555 6.75327C7.22555 6.75327 7.22593 6.75289 7.22593 6.7525V6.75327C7.23052 6.75518 7.23549 6.75709 7.24008 6.75939C7.24046 6.75939 7.24085 6.75939 7.24123 6.75977C7.24161 6.75977 7.24199 6.75977 7.24199 6.76015Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.46508 8.15022C7.46392 8.43701 7.22801 8.6737 6.94353 8.67408C6.64941 8.67485 6.41504 8.44125 6.41504 8.14791C6.41542 7.86188 6.65211 7.62366 6.9362 7.62366C7.23032 7.62366 7.46662 7.85841 7.46508 8.15022Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M8.92105 12.3955C8.87865 12.4603 8.83624 12.525 8.79384 12.5902L8.75684 12.5693C8.79153 12.4757 8.82622 12.382 8.86593 12.2748C8.88751 12.3226 8.90447 12.3593 8.92105 12.3955Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M12.3571 3.48828C10.7782 3.72921 9.82256 4.68018 9.56737 6.32385C9.50839 5.58566 9.21428 4.93074 8.67576 4.39261C8.13494 3.85217 7.47886 3.55266 6.71484 3.49214C8.32459 3.3842 9.50107 2.0069 9.56853 0.662354C9.82333 2.29716 10.7824 3.24813 12.3571 3.48828Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M5.72718 6.45642C4.14827 6.69735 3.19267 7.64832 2.93749 9.29199C2.87851 8.5538 2.58439 7.89888 2.04588 7.36075C1.50506 6.82031 0.848976 6.5208 0.0849609 6.46028C1.69471 6.35234 2.87119 4.97504 2.93864 3.63049C3.19344 5.2653 4.15251 6.21627 5.72718 6.45642Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M14.7409 18.9471C14.7779 19.0561 14.766 19.08 14.6623 19.1047C14.3265 19.1849 13.9742 18.954 13.8994 18.5982C13.8539 18.3812 13.8906 18.1761 14.0255 17.9953C14.0421 17.973 14.0752 17.9629 14.101 17.9475C14.1161 17.9822 14.1307 18.0173 14.1457 18.052C14.1346 18.1237 14.1311 18.1973 14.1111 18.2663C14.0263 18.5573 14.1708 18.8657 14.4391 18.9313C14.5328 18.954 14.6361 18.9386 14.7348 18.9409C14.7382 18.944 14.7402 18.9463 14.7409 18.9471Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M14.7348 18.9408C14.6362 18.9389 14.5329 18.954 14.4392 18.9312C14.1709 18.8657 14.0263 18.5573 14.1111 18.2663C14.1312 18.1973 14.1347 18.1236 14.1458 18.0519C14.2376 18.1965 14.3297 18.341 14.4215 18.4852C14.3844 18.4505 14.3474 18.4158 14.3004 18.3719C14.2557 18.5141 14.3158 18.6047 14.3956 18.6884C14.4457 18.7412 14.502 18.7701 14.5733 18.7265C14.6273 18.7978 14.6813 18.8695 14.7348 18.9408Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M14.5733 18.7266C14.502 18.7701 14.4457 18.7412 14.3956 18.6884C14.3158 18.6048 14.2557 18.5142 14.3004 18.3719C14.3474 18.4159 14.3845 18.4506 14.4215 18.4853C14.4723 18.5658 14.5228 18.6464 14.5733 18.7266Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.22543 6.75323C7.22467 6.75361 7.22428 6.75399 7.22352 6.75437C7.21893 6.75284 7.21396 6.7517 7.20898 6.75055C7.21434 6.75131 7.22008 6.75208 7.22543 6.75323Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.22707 6.7525V6.75398H7.22559C7.22633 6.75324 7.22633 6.75324 7.22707 6.7525Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M18.3225 19.7087C18.3121 19.7107 18.3009 19.7118 18.2898 19.7118H17.2305C17.2309 19.7107 17.2312 19.7099 17.2316 19.7087H18.3225Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M19.997 6.81942L19.9932 6.81559V6.81521C19.9939 6.811 19.9951 6.80679 19.9966 6.80182C19.997 6.80717 19.997 6.81329 19.997 6.81942Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M19.9956 6.81942C19.9926 6.82016 19.9893 6.8209 19.9863 6.82127C19.9882 6.81942 19.9896 6.81758 19.9919 6.81573L19.9956 6.81942Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.60775 24.5993C7.58038 24.5939 7.5534 24.5885 7.51562 24.5812C7.61585 24.3148 7.82478 24.1949 8.07572 24.1391C8.35751 24.0766 8.60344 24.151 8.81815 24.3669C8.71677 24.4035 8.6416 24.4228 8.54523 24.3738C8.24495 24.2212 7.96663 24.2905 7.75963 24.5238C7.72417 24.5638 7.65748 24.5758 7.60467 24.6009C7.60428 24.6012 7.60775 24.5993 7.60775 24.5993Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M9.3014 17.5119C9.259 17.4757 9.22045 17.4333 9.17304 17.4055C9.14914 17.3917 9.10982 17.4044 9.07744 17.4051C9.08091 17.4368 9.07513 17.4749 9.09055 17.4988C9.11869 17.542 9.15993 17.5771 9.17998 17.6341C9.1476 17.6052 9.11907 17.5682 9.08129 17.5501C9.04313 17.532 8.9961 17.5324 8.95255 17.525C8.96218 17.5682 8.96334 17.616 8.98338 17.6538C9.00304 17.6916 9.04159 17.7193 9.07166 17.7513C9.06356 17.759 9.05508 17.7667 9.04699 17.774C8.99765 17.7193 8.94831 17.6646 8.89974 17.6098C8.89511 17.6048 8.8901 17.5952 8.89203 17.5906C8.90783 17.5539 8.92094 17.49 8.94329 17.4865C9.03966 17.4711 9.04544 17.2564 9.19424 17.3728C9.24011 17.4086 9.28097 17.4502 9.32414 17.4896C9.31643 17.4969 9.30873 17.5046 9.3014 17.5119Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M8.33095 18.4945C8.2924 18.459 8.2581 18.4155 8.21338 18.3916C8.18177 18.3746 8.13551 18.3842 8.09581 18.3819C8.10468 18.4182 8.10545 18.4594 8.12472 18.4887C8.14862 18.5253 8.18832 18.5515 8.22109 18.5824C8.21492 18.5897 8.20875 18.5974 8.20259 18.6047C8.16558 18.5731 8.13243 18.5334 8.09003 18.5118C8.05919 18.496 8.0164 18.5037 7.97863 18.501C7.98132 18.5392 7.97323 18.5831 7.9898 18.614C8.01216 18.6556 8.05341 18.6868 8.07499 18.7323C8.01178 18.676 7.8969 18.6306 7.92813 18.5361C7.95665 18.4502 8.0403 18.3522 8.12279 18.3222C8.22957 18.2832 8.27737 18.4139 8.34907 18.4741C8.3429 18.481 8.33673 18.4879 8.33095 18.4945Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M6.98778 19.4628C6.98277 19.4848 6.96774 19.5117 6.97545 19.5275C6.99588 19.5684 7.01939 19.6143 7.05524 19.6382C7.07297 19.6501 7.14159 19.6258 7.14891 19.6046C7.16163 19.5688 7.15778 19.5121 7.1358 19.4824C7.08415 19.4127 7.01823 19.3533 6.9581 19.2897C6.96658 19.2812 6.97506 19.2731 6.98393 19.2646C7.06025 19.3506 7.1412 19.4327 7.20905 19.5248C7.22485 19.5464 7.20943 19.6174 7.18553 19.6362C7.14891 19.6648 7.08454 19.6894 7.04599 19.6759C7.00127 19.6605 6.96273 19.6066 6.93921 19.5603C6.92649 19.5349 6.95039 19.4909 6.95771 19.4555C6.96774 19.4578 6.97776 19.4605 6.98778 19.4628Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M8.44531 17.9136C8.51932 17.8731 8.57869 17.8411 8.66118 17.796C8.61376 17.855 8.58177 17.8943 8.53282 17.9552C8.58678 17.9911 8.63497 18.0335 8.69163 18.0535C8.70589 18.0585 8.7456 17.9915 8.79301 17.934C8.77489 17.9926 8.77412 18.0485 8.7456 18.072C8.72016 18.0928 8.65347 18.0948 8.62533 18.0755C8.5571 18.0285 8.50044 17.9645 8.44531 17.9136Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.51936 19.1044C7.51396 19.0897 7.50895 19.0751 7.50355 19.0608C7.49739 19.0446 7.4916 19.0284 7.47773 18.993C7.42376 19.0492 7.40179 19.0951 7.44111 19.1556C7.48929 19.2289 7.53671 19.2188 7.70246 19.1267C7.66044 19.1641 7.62382 19.2161 7.57487 19.2343C7.53863 19.2478 7.4704 19.2308 7.44419 19.2023C7.41104 19.166 7.38868 19.102 7.39447 19.0539C7.39832 19.0219 7.45961 18.9972 7.49546 18.9691C7.51473 19.0095 7.53439 19.0504 7.55367 19.0909C7.54249 19.0955 7.53092 19.1001 7.51936 19.1044Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.86684 18.7539C7.69954 18.7 7.66369 18.7932 7.70417 18.9332C7.63285 18.8703 7.61975 18.8102 7.6741 18.7458C7.73077 18.6788 7.79784 18.6838 7.86684 18.7539Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M8.45753 18.3638C8.43132 18.3064 8.41166 18.2513 8.38236 18.2015C8.34998 18.1468 8.32493 18.0971 8.36656 18.0512C8.39817 18.1129 8.42669 18.1765 8.46177 18.2362C8.49569 18.2937 8.49261 18.3384 8.45753 18.3638Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.36331 19.4539C7.2041 19.3371 7.17481 19.2782 7.22107 19.2165C7.26424 19.2893 7.31204 19.3688 7.36331 19.4539Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M9.53836 17.2825C9.47283 17.3731 9.37338 17.37 9.3252 17.2825C9.38918 17.2825 9.46589 17.2825 9.53836 17.2825Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.46508 8.15022C7.46392 8.43701 7.22801 8.6737 6.94353 8.67408C6.64941 8.67485 6.41504 8.44125 6.41504 8.14791C6.41542 7.86188 6.65211 7.62366 6.9362 7.62366C7.23032 7.62366 7.46662 7.85841 7.46508 8.15022Z" />
                                                    <path fill="{{ isset($talentNeed['simple_housework']) ? '#FA9D6B' : '#DDDDDD' }}" d="M8.92105 12.3955C8.87865 12.4603 8.83624 12.525 8.79384 12.5902L8.75684 12.5693C8.79153 12.4757 8.82622 12.382 8.86593 12.2748C8.88751 12.3226 8.90447 12.3593 8.92105 12.3955Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['simple_housework']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Simple Housework</div>
                                            </div>
                                        </div>
                                            
                                        <div class="flex w-full py-4 px-5 space-x-8">
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['provide_transportation']) ? '#FA9D6B' : '#DDDDDD' }}" d="M25.5752 6.5102C25.5571 6.48932 25.5417 6.46898 25.5203 6.44865L24.5767 5.53805C25.3593 5.36054 26.2017 4.70493 26.2017 4.03228C26.2017 3.24862 25.1142 2.97055 24.186 2.97055C23.2155 2.97055 23.1028 3.63551 23.0913 4.10537L20.6568 1.75824C20.1622 1.2686 19.2241 0.883362 18.5229 0.883362H13.7813H13.7802H9.03764C8.33696 0.883362 7.39943 1.2686 6.90428 1.75824L4.47033 4.10537C4.45769 3.63551 4.34503 2.97055 3.37563 2.97055C2.44634 2.97055 1.35933 3.24862 1.35933 4.03228C1.35933 4.70493 2.20234 5.36054 2.9849 5.53805L2.04132 6.44865C2.01989 6.46898 2.00505 6.48932 1.98637 6.5102C0.976842 7.37299 0.317383 8.97328 0.317383 10.1345V13.5851C0.317383 14.4226 0.647662 15.1826 1.18127 15.7492V17.0874C1.18127 17.8699 1.83634 18.508 2.64198 18.508H4.40823C5.21387 18.508 5.86838 17.871 5.86838 17.0874V16.745H13.7802H13.7813H21.6927V17.0874C21.6927 17.871 22.3466 18.508 23.1534 18.508H24.9191C25.7253 18.508 26.3792 17.8699 26.3792 17.0874V15.7492C26.9134 15.1826 27.2431 14.4226 27.2431 13.5851V10.1345C27.2442 8.97328 26.5848 7.37299 25.5752 6.5102ZM7.7984 2.80129C8.14077 2.51607 8.73923 2.29955 9.03764 2.29955H13.7802H13.7813H18.524C18.8224 2.29955 19.4208 2.51607 19.7632 2.80129L22.9555 5.89525H13.7813H13.7802H4.60662L7.7984 2.80129ZM1.41264 9.61241C1.41264 8.7628 2.07759 8.07312 2.89862 8.07312C3.7191 8.07312 6.40035 9.64703 6.40035 10.4966C6.40035 11.3462 3.7191 11.1495 2.89862 11.1495C2.07759 11.1495 1.41264 10.4626 1.41264 9.61241ZM5.86893 15.2321H5.58592H5.3029L3.62402 15.2348C3.15801 15.0898 2.82937 14.9205 2.59691 14.7386C2.47931 14.6468 2.38918 14.5512 2.31884 14.4561C2.24795 14.36 2.19629 14.2654 2.16277 14.1709C1.95394 13.5807 2.38534 13.0383 2.38534 13.0383H5.25069L7.16092 15.231L5.86893 15.2321ZM17.9008 15.2332H13.7813H13.7802H9.66083C8.80188 15.2332 8.1045 14.5358 8.1045 13.6774H13.7802H13.7813H19.4571C19.4571 14.5369 18.7597 15.2332 17.9008 15.2332ZM18.2624 12.6157H13.7813H13.7802H9.29922C8.36499 12.6157 7.60661 11.4638 7.60661 10.0433H13.7802H13.7813H19.955C19.955 11.4644 19.1966 12.6157 18.2624 12.6157ZM25.3994 14.172C25.3653 14.2665 25.3136 14.3611 25.2428 14.4567C25.173 14.5518 25.0828 14.6474 24.9647 14.7392C24.7328 14.9211 24.4036 15.0914 23.9376 15.2354L22.2587 15.2327H21.9757H21.6927H20.3996L22.3109 13.0399H25.1757C25.1757 13.0394 25.6077 13.5807 25.3994 14.172ZM24.663 11.1495C23.8431 11.1495 21.1618 11.3451 21.1618 10.4966C21.1618 9.64813 23.8431 8.07312 24.663 8.07312C25.484 8.07312 26.149 8.7628 26.149 9.61241C26.149 10.4615 25.484 11.1495 24.663 11.1495Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['provide_transportation']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Provide Transportation</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['assist_feeding']) ? '#FA9D6B' : '#DDDDDD' }}" d="M19.118 12.0858L18.3891 15.3533C17.0496 15.323 16.4637 15.3091 16.4174 15.3091C15.2215 15.3091 14.1928 16.2284 14.0645 17.4238L13.6748 21.0595C14.3138 21.203 14.8939 21.4986 15.374 21.9177C15.6358 18.648 18.3027 16.2125 21.4396 16.0981L21.9287 13.9403C22.1747 12.8549 23.1239 12.0969 24.2368 12.0969H25.2808C25.0657 11.1211 24.4105 10.3095 23.4992 9.89655C25.2518 8.45217 24.5989 5.58115 22.3467 5.07848C20.863 4.74721 19.3867 5.68576 19.0553 7.17026C18.7792 8.40742 19.3787 9.61029 20.3996 10.1795C19.7457 10.6326 19.2922 11.3047 19.118 12.0858Z" />
                                                    <path fill="{{ isset($talentNeed['assist_feeding']) ? '#FA9D6B' : '#DDDDDD' }}" d="M26.236 15.2523C26.6717 15.2523 27.0249 14.8991 27.0249 14.4634C27.0249 14.0278 26.6717 13.6746 26.236 13.6746H24.2376C23.8691 13.6746 23.5497 13.9297 23.4682 14.289L22.6765 17.7812C18.9867 16.9732 15.9053 20.6232 17.2502 24.1087H15.0093C14.7592 23.3722 14.1427 22.7803 13.3271 22.5982C12.0858 22.3211 10.8505 23.1063 10.5733 24.3483V24.3484C10.2961 25.5904 11.0804 26.8263 12.3216 27.1033C13.4674 27.359 14.6054 26.7144 14.9934 25.6338H18.2038C20.7509 28.3714 25.441 27.1955 26.2802 23.435C26.7308 21.4163 25.8222 19.4118 24.1585 18.3806L24.8677 15.2523H26.236V15.2523ZM13.5356 25.0096C13.4474 25.4046 13.0571 25.651 12.6653 25.5634C12.2732 25.4759 12.0255 25.085 12.1131 24.692C12.2009 24.299 12.5915 24.0505 12.9835 24.1381C13.3762 24.2258 13.6236 24.6153 13.5356 25.0096ZM22.4344 22.5766C22.3394 23.0018 21.9178 23.2696 21.4926 23.1747C21.0674 23.0798 20.7996 22.6581 20.8945 22.2329C20.9894 21.8077 21.4111 21.5399 21.8363 21.6349C22.2615 21.7297 22.5293 22.1514 22.4344 22.5766Z" />
                                                    <path fill="{{ isset($talentNeed['assist_feeding']) ? '#FA9D6B' : '#DDDDDD' }}" d="M14.1868 6.24689C15.7632 5.51066 16.4468 3.6292 15.7105 2.05277C14.9743 0.476391 13.093 -0.207298 11.5164 0.528982C11.5164 0.528982 11.5164 0.528982 11.5163 0.528982C9.93989 1.26521 9.2563 3.14667 9.99253 4.7231C10.7312 6.30468 12.6151 6.98085 14.1868 6.24689Z" />
                                                    <path fill="{{ isset($talentNeed['assist_feeding']) ? '#FA9D6B' : '#DDDDDD' }}" d="M3.56957 26.4134C3.59256 26.8316 3.9384 27.159 4.35729 27.159H6.98686C7.40591 27.159 7.7518 26.8314 7.77458 26.413L7.90853 23.9509H3.43457L3.56957 26.4134Z" />
                                                    <path fill="{{ isset($talentNeed['assist_feeding']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.85374 9.1869L10.3158 11.1185H14.3701C14.7963 11.1185 15.175 10.9114 15.411 10.5926H17.1899C17.6256 10.5926 17.9788 10.2394 17.9788 9.80375C17.9788 9.36808 17.6256 9.01488 17.1899 9.01488H15.3795C15.1918 8.78069 14.9239 8.61124 14.6116 8.55197C11.8954 8.03057 11.973 8.06444 11.8371 8.00901C9.37611 7.46343 7.76844 5.09429 8.18218 2.61938C3.67293 2.92531 0.0976562 6.69086 0.0976562 11.2764V21.5843C0.0976562 22.02 0.450861 22.3732 0.886528 22.3732H8.82784C9.26351 22.3732 9.61671 22.02 9.61671 21.5843V12.7354L6.79876 10.5347C6.46711 10.2757 6.37298 9.814 6.57672 9.44581C6.83189 8.98474 7.43911 8.86162 7.85374 9.1869Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['assist_feeding']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Assist Feeding</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['laundry']) ? '#FA9D6B' : '#DDDDDD' }}" d="M19.2378 0.232544H3.24998C1.85578 0.232544 0.725586 1.36273 0.725586 2.75693V5.01837C0.725586 5.16357 0.843338 5.28133 0.988543 5.28133H21.4992C21.6444 5.28133 21.7622 5.16357 21.7622 5.01837V2.75693C21.7622 1.36273 20.632 0.232544 19.2378 0.232544ZM14.6097 3.5984H14.189C13.7241 3.5984 13.3475 3.22184 13.3475 2.75693C13.3475 2.29203 13.7241 1.91547 14.189 1.91547H14.6097C15.0746 1.91547 15.4512 2.29203 15.4512 2.75693C15.4512 3.22184 15.0746 3.5984 14.6097 3.5984ZM17.9756 3.5984H17.5549C17.09 3.5984 16.7134 3.22184 16.7134 2.75693C16.7134 2.29203 17.09 1.91547 17.5549 1.91547H17.9756C18.4405 1.91547 18.8171 2.29203 18.8171 2.75693C18.8171 3.22184 18.4405 3.5984 17.9756 3.5984Z" />
                                                    <path fill="{{ isset($talentNeed['laundry']) ? '#FA9D6B' : '#DDDDDD' }}" d="M0.725586 7.22719V26.3179C0.725586 26.7826 1.1023 27.1594 1.56705 27.1594H20.9207C21.3855 27.1594 21.7622 26.7826 21.7622 26.3179V7.22719C21.7622 7.08199 21.6444 6.96423 21.4992 6.96423H0.988543C0.843338 6.96423 0.725586 7.08199 0.725586 7.22719ZM11.2439 9.48862C14.9521 9.48862 17.9698 12.5026 17.9756 16.2098C18.0187 19.8218 15.0263 22.952 11.2439 22.952C7.49463 22.952 4.50586 19.887 4.51217 16.2198C4.51217 12.5084 7.53197 9.48862 11.2439 9.48862Z" />
                                                    <path fill="{{ isset($talentNeed['laundry']) ? '#FA9D6B' : '#DDDDDD' }}" d="M11.2442 21.2691C13.4252 21.2691 15.2872 19.8791 15.9917 17.939C16.0628 17.7431 15.8881 17.5451 15.6853 17.5928C15.0912 17.7323 14.5576 17.7913 14.0715 17.7913C10.8617 17.7913 10.0732 15.4563 6.42952 16.7061C6.30961 16.7472 6.23567 16.869 6.25502 16.9943C6.62863 19.412 8.7233 21.2691 11.2442 21.2691Z" />
                                                    <path fill="{{ isset($talentNeed['laundry']) ? '#FA9D6B' : '#DDDDDD' }}" d="M11.5754 15.4467C12.8377 15.9876 13.9454 16.4614 16.0588 15.7347C16.1786 15.6936 16.2526 15.5718 16.2332 15.4465C15.8596 13.0287 13.7649 11.1716 11.2441 11.1716C9.06356 11.1716 7.20161 12.5611 6.49668 14.5011C6.42526 14.6977 6.60107 14.8947 6.8046 14.847C8.98273 14.336 10.3451 14.9195 11.5754 15.4467Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['laundry']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Laundry</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['special_needs']) ? '#FA9D6B' : '#DDDDDD' }}" d="M21.4783 7.53872L14.4447 6.88637L11.6507 0.398515C11.4551 -0.0557712 10.811 -0.0557712 10.6154 0.398515L7.8214 6.88632L0.78775 7.53872C0.29523 7.58437 0.0962232 8.19695 0.467783 8.52339L5.77469 13.1854L4.22161 20.0764C4.11285 20.559 4.63398 20.9375 5.05924 20.685L11.133 17.0785L17.2068 20.685C17.6322 20.9376 18.1532 20.559 18.0445 20.0764L16.4913 13.1854L21.7983 8.52339C22.1699 8.19695 21.9708 7.58437 21.4783 7.53872Z" fill="#DDDDDD"/>
                                                </svg>
                                                <div class="{{ isset($talentNeed['special_needs']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Special Needs</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['prep_meal']) ? '#FA9D6B' : '#DDDDDD' }}" d="M24.7504 0.177648H25.1712V11.1167H21.8053V3.12277C21.8062 2.34194 22.1168 1.59335 22.6689 1.04122C23.221 0.489096 23.9696 0.178525 24.7504 0.177648ZM23.4882 19.5313C23.4882 19.7545 23.5769 19.9685 23.7347 20.1263C23.8925 20.2841 24.1065 20.3728 24.3297 20.3728C24.5529 20.3728 24.7669 20.2841 24.9247 20.1263C25.0825 19.9685 25.1712 19.7545 25.1712 19.5313V11.9581H23.4882V19.5313ZM3.29312 7.75082V11.1167H4.13458V7.75082H3.29312ZM13.3907 4.8057C12.2257 4.8057 11.0869 5.15115 10.1182 5.79838C9.14959 6.44561 8.39462 7.36554 7.9488 8.44184C7.50298 9.51814 7.38634 10.7025 7.61361 11.8451C7.84089 12.9877 8.40188 14.0372 9.22565 14.861C10.0494 15.6847 11.099 16.2457 12.2416 16.473C13.3841 16.7003 14.5685 16.5836 15.6448 16.1378C16.7211 15.692 17.641 14.937 18.2882 13.9684C18.9355 12.9997 19.2809 11.8609 19.2809 10.6959C19.2792 9.1343 18.658 7.63712 17.5538 6.53286C16.4495 5.42861 14.9523 4.80747 13.3907 4.8057ZM2.87238 19.5313C2.87238 19.7545 2.96104 19.9685 3.11884 20.1263C3.27665 20.2841 3.49068 20.3728 3.71385 20.3728C3.93702 20.3728 4.15105 20.2841 4.30885 20.1263C4.46666 19.9685 4.55531 19.7545 4.55531 19.5313V11.9581H2.87238V19.5313ZM4.13458 4.8057V1.41323C4.13458 1.30165 4.09025 1.19463 4.01135 1.11573C3.93245 1.03683 3.82543 0.992501 3.71385 0.992501C3.60226 0.992501 3.49525 1.03683 3.41635 1.11573C3.33744 1.19463 3.29312 1.30165 3.29312 1.41323V4.8057C3.29312 4.91728 3.33744 5.0243 3.41635 5.1032C3.49525 5.1821 3.60226 5.22643 3.71385 5.22643C3.82543 5.22643 3.93245 5.1821 4.01135 5.1032C4.09025 5.0243 4.13458 4.91728 4.13458 4.8057ZM22.561 11.9581C22.2983 13.8657 21.4473 15.6439 20.1264 17.0451C18.8055 18.4462 17.0805 19.4006 15.1917 19.7752C13.3029 20.1498 11.3443 19.9261 9.58862 19.1351C7.83295 18.3442 6.36765 17.0254 5.39678 15.3625V11.5374C5.39678 11.4258 5.35245 11.3188 5.27355 11.2399C5.19464 11.161 5.08763 11.1167 4.97604 11.1167V6.88979C4.88434 6.90271 4.79186 6.90925 4.69925 6.90936H2.72834C2.4613 6.90939 2.19707 6.85484 1.95188 6.74906C1.70668 6.64327 1.4857 6.48849 1.30249 6.29422C1.11928 6.09994 0.977708 5.87027 0.886472 5.6193C0.795237 5.36833 0.756259 5.10136 0.771933 4.83478L1.097 0.571769C1.10004 0.516283 1.11403 0.461947 1.13818 0.4119C1.16233 0.361853 1.19615 0.317085 1.2377 0.280182C1.27925 0.243279 1.32769 0.214972 1.38024 0.196895C1.43279 0.178818 1.48839 0.17133 1.54385 0.174862C1.59931 0.178394 1.65351 0.192878 1.70334 0.217475C1.75317 0.242073 1.79763 0.276297 1.83416 0.318173C1.87069 0.360049 1.89856 0.408746 1.91617 0.461453C1.93377 0.51416 1.94076 0.569832 1.93673 0.625254L1.61182 4.88622C1.60317 5.03817 1.62564 5.19029 1.67784 5.33326C1.73005 5.47623 1.81089 5.60704 1.91542 5.71767C2.01995 5.8283 2.14597 5.91643 2.28575 5.97665C2.42553 6.03687 2.57613 6.06792 2.72834 6.06789H4.69936C4.85172 6.06789 5.00246 6.03675 5.14235 5.97638C5.28224 5.91602 5.40831 5.8277 5.51284 5.71685C5.61736 5.606 5.69812 5.47496 5.75017 5.33177C5.80222 5.18858 5.82445 5.03626 5.81551 4.88416L5.49076 0.625254C5.4847 0.514489 5.52263 0.405813 5.5963 0.322876C5.66997 0.239938 5.77341 0.189451 5.88412 0.182399C5.99482 0.175348 6.10384 0.212303 6.18743 0.285224C6.27103 0.358145 6.32244 0.46113 6.33048 0.571769L6.62642 4.37829C7.5662 3.37185 8.71872 2.58782 9.99997 2.08333C11.2812 1.57884 12.6589 1.36662 14.0326 1.46213C15.4062 1.55765 16.7413 1.95849 17.9404 2.63545C19.1395 3.3124 20.1724 4.2484 20.9639 5.37521V11.5374C20.9639 11.649 21.0082 11.756 21.0871 11.8349C21.166 11.9138 21.273 11.9581 21.3846 11.9581H22.561ZM20.1224 10.6959C20.1224 9.36454 19.7276 8.06303 18.9879 6.95601C18.2482 5.84898 17.1969 4.98616 15.9668 4.47666C14.7367 3.96715 13.3832 3.83384 12.0774 4.09358C10.7716 4.35333 9.57209 4.99446 8.63064 5.93591C7.6892 6.87735 7.04806 8.07683 6.78832 9.38265C6.52857 10.6885 6.66188 12.042 7.17139 13.2721C7.6809 14.5021 8.54372 15.5535 9.65074 16.2932C10.7578 17.0328 12.0593 17.4277 13.3907 17.4277C15.1754 17.4256 16.8865 16.7157 18.1485 15.4537C19.4105 14.1917 20.1204 12.4807 20.1224 10.6959Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['prep_meal']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Prep Meal</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_102_7485)">
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M25.6589 13.6461H2.09797C1.17009 13.6461 0.415039 14.4011 0.415039 15.329C0.415039 16.2569 1.17009 17.0119 2.09797 17.0119H25.6589C26.5868 17.0119 27.3419 16.2569 27.3419 15.329C27.3419 14.4011 26.5868 13.6461 25.6589 13.6461Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M25.8144 15.9113C25.5104 15.826 25.2052 15.9988 25.1211 16.2973L25.0773 16.451H2.68202L2.63716 16.2973C2.55302 15.9988 2.24562 15.8283 1.9438 15.9113C1.64534 15.9965 1.47368 16.3074 1.55898 16.6047L3.10502 22.017C3.58407 23.6943 5.13689 24.8656 6.8804 24.8656H20.8767C22.6213 24.8656 24.173 23.6943 24.6521 22.017L26.1981 16.6047C26.2846 16.3073 26.1117 15.9965 25.8144 15.9113ZM6.88151 22.6216C6.13429 22.6216 5.46785 22.1201 5.26363 21.4009L4.5355 18.8496C4.45025 18.5512 4.62302 18.2415 4.92032 18.1563C5.22098 18.071 5.52954 18.2449 5.61368 18.5422L6.34181 21.0936C6.41139 21.3325 6.63238 21.5008 6.88145 21.5008C7.19111 21.5008 7.44245 21.7522 7.44245 22.0618C7.4425 22.3715 7.19116 22.6216 6.88151 22.6216Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M7.95723 23.8019C7.68013 23.6662 7.34465 23.775 7.20439 24.0533L6.08246 26.2972C5.94446 26.5743 6.05663 26.9109 6.33379 27.05C6.41567 27.0904 6.50098 27.1095 6.58512 27.1095C6.79044 27.1095 6.98792 26.9962 7.08664 26.7988L8.20857 24.5548C8.34657 24.2776 8.23434 23.941 7.95723 23.8019Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M21.6734 26.2983L20.5515 24.0544C20.4124 23.7761 20.0758 23.6651 19.7986 23.8031C19.5215 23.9422 19.4093 24.2787 19.5473 24.5559L20.6692 26.7998C20.7679 26.9961 20.9654 27.1095 21.1707 27.1095C21.2549 27.1095 21.3401 27.0904 21.4221 27.0512C21.6992 26.912 21.8114 26.5754 21.6734 26.2983Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M22.9496 0.282471C22.3774 0.282471 21.8389 0.505721 21.4339 0.910781L19.6533 2.69132C19.4346 2.9101 19.4346 3.26577 19.6533 3.48455C19.8721 3.70334 20.2278 3.70334 20.4466 3.48455L22.2271 1.70512C22.4189 1.51216 22.6758 1.40556 22.9552 1.40556C23.5184 1.40556 23.9762 1.86332 23.9762 2.42652V14.207C23.9762 14.5167 24.2275 14.768 24.5371 14.768C24.8468 14.768 25.0981 14.5167 25.0992 14.2059V2.42542C25.0993 1.244 24.1389 0.282471 22.9496 0.282471Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M21.0066 3.25231L19.8847 2.13038C19.7568 2.00248 19.5784 1.94299 19.3967 1.97329L16.5918 2.4333C16.3854 2.46696 16.2159 2.6128 16.1498 2.81028C16.0836 3.00776 16.1341 3.22765 16.2799 3.37685L19.6458 6.84368C19.7524 6.95475 19.8993 7.01423 20.0474 7.01423C20.1002 7.01423 20.154 7.0064 20.2067 6.99067C20.4064 6.93235 20.5579 6.76742 20.5983 6.56321L21.1593 3.75835C21.1962 3.57543 21.139 3.38579 21.0066 3.25231Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.713 7.07925C13.4943 6.86047 13.1386 6.86047 12.9198 7.07925L11.7979 8.20118C11.5791 8.41996 11.5791 8.77564 11.7979 8.99442C11.9078 9.10323 12.0514 9.15824 12.195 9.15824C12.3387 9.15824 12.4822 9.10328 12.5911 8.99442L13.713 7.87248C13.9318 7.65365 13.9318 7.29803 13.713 7.07925Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M15.9582 9.32314C15.7394 9.10436 15.3837 9.10436 15.1649 9.32314L14.043 10.4451C13.8242 10.6639 13.8242 11.0195 14.043 11.2383C14.153 11.3471 14.2965 11.4021 14.4402 11.4021C14.5838 11.4021 14.7274 11.3472 14.8362 11.2383L15.9582 10.1164C16.1769 9.8976 16.1769 9.54192 15.9582 9.32314Z" />
                                                    <path fill="{{ isset($talentNeed['assist_bathing']) ? '#FA9D6B' : '#DDDDDD' }}" d="M17.0793 5.9573C16.8605 5.73852 16.5048 5.73852 16.286 5.9573L15.1641 7.07923C14.9453 7.29801 14.9453 7.65369 15.1641 7.87247C15.2741 7.98128 15.4176 8.03629 15.5613 8.03629C15.7049 8.03629 15.8485 7.98133 15.9573 7.87247L17.0793 6.75053C17.298 6.53175 17.298 6.17608 17.0793 5.9573Z" />
                                                    </g>
                
                                                </svg>
                                                <div class="{{ isset($talentNeed['assist_bathing']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Assist Bathing</div>
                                            </div>
                                        </div>

                                        <div class="flex item-center  w-full py-4 px-5 space-x-8">
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['nanny']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['nanny']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Nanny</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['sister']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['sister']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Sister</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['maternity_care']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['maternity_care']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Maternity Care</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['at_home_daycare']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['at_home_daycare']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">At Home Daycare</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['infant']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['infant']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} overview-responsibilities-title max-w-[70px]">Infant</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['young_baby']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['young_baby']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Young Baby</div>
                                            </div>
                                        </div>
                                        <div class="flex item-center  w-full py-4 px-5 space-x-8">
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['toddler']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['toddler']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Toddler</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['press_schooler']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['press_schooler']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Press Schooler</div>
                                            </div>
            
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ isset($talentNeed['grade_schooler']) ? '#FA9D6B' : '#DDDDDD' }}" d="M13.9286 12.8571H20V1.07143C20 0.477679 19.5223 0 18.9286 0H1.07143C0.477679 0 0 0.477679 0 1.07143V18.9286C0 19.5223 0.477679 20 1.07143 20H12.8571V13.9286C12.8571 13.3393 13.3393 12.8571 13.9286 12.8571ZM19.6875 15.3125L15.3125 19.6875C15.1116 19.8884 14.8393 20 14.5536 20H14.2857V14.2857H20V14.558C20 14.8393 19.8884 15.1116 19.6875 15.3125Z" />
                                                </svg>
                                                <div class="{{ isset($talentNeed['grade_schooler']) ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Grade Schooler</div>
                                            </div>
                                        </div>
                                    </div>
            
                                    {{-- Pay --}}
                                    <div class="px-4 mt-6">
                                        <span class="overview-note">Pay Info</span>
                                        <div class="flex w-full py-4 px-5 space-x-16">
                                            <div class="flex flex-col items-center  space-y-4">
                                                <svg width="31" height="22" viewBox="0 0 31 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ $result->pay_with === 'cash' || $result->pay_with === 'any'  ? '#FA9D6B' : '#DDDDDD' }}" d="M1.96629 2.40039L2.68734 3.09327L2.68734 3.09327L1.96629 2.40039ZM1.96629 19.9328L1.24523 20.6256L1.24524 20.6256L1.96629 19.9328ZM29.1213 19.9328L29.8423 20.6256L29.8423 20.6256L29.1213 19.9328ZM29.1213 2.40039L28.4002 3.09327V3.09327L29.1213 2.40039ZM1.60576 2.05395L0.88471 1.36106L1.60576 2.05395ZM29.4818 2.05395L30.2029 1.36107L30.2029 1.36106L29.4818 2.05395ZM29.4818 20.2792L30.2029 20.9721L30.2029 20.9721L29.4818 20.2792ZM1.60576 20.2792L2.32681 19.5863L2.32681 19.5863L1.60576 20.2792ZM11.7372 7.18385L12.4598 7.87511L12.4604 7.87447L11.7372 7.18385ZM11.7369 7.1842L12.4587 7.87621L12.4595 7.87546L11.7369 7.1842ZM10.8644 14.6001C10.4657 14.9823 10.4523 15.6153 10.8345 16.014C11.2167 16.4127 11.8497 16.426 12.2484 16.0438L10.8644 14.6001ZM19.3442 15.1487L20.0648 15.8421L20.0662 15.8406L19.3442 15.1487ZM19.344 7.1842L20.0658 6.49218V6.49218L19.344 7.1842ZM11.3757 6.83838L12.0976 7.53037L12.0989 7.52902L11.3757 6.83838ZM19.7049 6.83819L18.983 7.5302H18.983L19.7049 6.83819ZM19.7049 15.495L20.4266 16.1872L20.4268 16.187L19.7049 15.495ZM19.7046 15.4953L20.4251 16.1887L20.4263 16.1875L19.7046 15.4953ZM11.3759 15.495L10.6839 14.7731C10.2852 15.1553 10.2719 15.7883 10.6541 16.187L11.3759 15.495ZM11.5531 15.3251L12.2451 16.047C12.6438 15.6648 12.6571 15.0318 12.275 14.6331C11.8928 14.2344 11.2597 14.2211 10.8611 14.6033L11.5531 15.3251ZM11.3759 15.495L10.654 16.187C11.0362 16.5857 11.6693 16.599 12.0679 16.2168L11.3759 15.495ZM2.78125 3.02256C2.78125 2.94102 2.79142 2.92104 2.78511 2.94067C2.77734 2.96486 2.75148 3.02652 2.68734 3.09327L1.24524 1.7075C0.89243 2.07465 0.78125 2.55936 0.78125 3.02256H2.78125ZM2.78125 19.3106V3.02256H0.78125V19.3106H2.78125ZM2.68734 19.2399C2.75148 19.3066 2.77734 19.3683 2.78512 19.3925C2.79142 19.4121 2.78125 19.3921 2.78125 19.3106H0.78125C0.78125 19.7738 0.892431 20.2585 1.24523 20.6256L2.68734 19.2399ZM2.55034 19.1211C2.48425 19.1211 2.48072 19.1122 2.51518 19.1242C2.55584 19.1384 2.62264 19.1726 2.68733 19.2399L1.24524 20.6256C1.60314 20.9981 2.08542 21.1211 2.55034 21.1211V19.1211ZM28.5372 19.1211H2.55034V21.1211H28.5372V19.1211ZM28.4002 19.2399C28.4649 19.1725 28.5317 19.1384 28.5724 19.1242C28.6069 19.1122 28.6033 19.1211 28.5372 19.1211V21.1211C29.0022 21.1211 29.4844 20.9981 29.8423 20.6256L28.4002 19.2399ZM28.3063 19.3106C28.3063 19.3921 28.2962 19.4121 28.3025 19.3925C28.3102 19.3683 28.3361 19.3066 28.4002 19.2399L29.8423 20.6256C30.1951 20.2585 30.3063 19.7738 30.3063 19.3106H28.3063ZM28.3063 3.02256V19.3106H30.3063V3.02256H28.3063ZM28.4002 3.09327C28.3361 3.02652 28.3102 2.96486 28.3025 2.94067C28.2962 2.92104 28.3063 2.94102 28.3063 3.02256H30.3063C30.3063 2.55937 30.1951 2.07465 29.8423 1.7075L28.4002 3.09327ZM28.5372 3.21204C28.6033 3.21204 28.6069 3.22092 28.5724 3.20892C28.5317 3.19477 28.4649 3.16059 28.4002 3.09327L29.8423 1.70751C29.4844 1.33505 29.0021 1.21204 28.5372 1.21204V3.21204ZM2.55034 3.21204H28.5372V1.21204H2.55034V3.21204ZM2.68734 3.09327C2.62265 3.16059 2.55584 3.19477 2.51519 3.20892C2.48072 3.22092 2.48425 3.21204 2.55034 3.21204V1.21204C2.08542 1.21204 1.60314 1.33505 1.24524 1.7075L2.68734 3.09327ZM2.55034 0.712036C2.00611 0.712036 1.37008 0.855966 0.88471 1.36106L2.32681 2.74683C2.32227 2.75156 2.32322 2.74627 2.34966 2.73711C2.38106 2.72625 2.44423 2.71204 2.55034 2.71204V0.712036ZM28.5372 0.712036H2.55034V2.71204H28.5372V0.712036ZM30.2029 1.36106C29.7175 0.855966 29.0815 0.712036 28.5372 0.712036V2.71204C28.6433 2.71204 28.7065 2.72625 28.7379 2.73711C28.7644 2.74627 28.7653 2.75156 28.7608 2.74683L30.2029 1.36106ZM30.8063 3.02256C30.8063 2.48942 30.6792 1.85673 30.2029 1.36107L28.7608 2.74683C28.7466 2.73206 28.8063 2.77648 28.8063 3.02256H30.8063ZM30.8063 19.3106V3.02256H28.8063V19.3106H30.8063ZM30.2029 20.9721C30.6792 20.4764 30.8063 19.8437 30.8063 19.3106H28.8063C28.8063 19.5567 28.7466 19.6011 28.7608 19.5863L30.2029 20.9721ZM28.5372 21.6211C29.0815 21.6211 29.7175 21.4772 30.2029 20.9721L28.7608 19.5863C28.7653 19.5816 28.7644 19.5869 28.7379 19.596C28.7065 19.6069 28.6433 19.6211 28.5372 19.6211V21.6211ZM2.55034 21.6211H28.5372V19.6211H2.55034V21.6211ZM0.884711 20.9721C1.37008 21.4772 2.00611 21.6211 2.55034 21.6211V19.6211C2.44423 19.6211 2.38106 19.6069 2.34966 19.596C2.32322 19.5869 2.32227 19.5816 2.32681 19.5863L0.884711 20.9721ZM0.28125 19.3106C0.28125 19.8437 0.408403 20.4764 0.884712 20.9721L2.32681 19.5863C2.341 19.6011 2.28125 19.5567 2.28125 19.3106H0.28125ZM0.28125 3.02256V19.3106H2.28125V3.02256H0.28125ZM0.88471 1.36106C0.408403 1.85673 0.28125 2.48942 0.28125 3.02256H2.28125C2.28125 2.77648 2.341 2.73206 2.32681 2.74683L0.88471 1.36106ZM12.4604 7.87447C13.3248 6.96924 14.3272 6.54034 15.5372 6.54034V4.54034C13.7699 4.54034 12.2482 5.20079 11.014 6.49323L12.4604 7.87447ZM12.4595 7.87546L12.4598 7.87511L11.0146 6.49259L11.0143 6.49293L12.4595 7.87546ZM11.1567 11.1666C11.1567 9.85831 11.5873 8.78528 12.4587 7.87621L11.015 6.49218C9.77823 7.78231 9.15674 9.35469 9.15674 11.1666H11.1567ZM12.4587 14.4569C11.5873 13.5479 11.1567 12.4748 11.1567 11.1666H9.15674C9.15674 12.9785 9.77823 14.5508 11.015 15.841L12.4587 14.4569ZM12.2484 16.0438L12.4289 15.8708L11.0448 14.4271L10.8644 14.6001L12.2484 16.0438ZM11.0448 14.4271L10.8644 14.6001L12.2484 16.0438L12.4289 15.8708L11.0448 14.4271ZM15.5372 15.7861C14.3256 15.7861 13.3227 15.3582 12.4587 14.4569L11.015 15.841C12.2494 17.1287 13.7708 17.7861 15.5372 17.7861V15.7861ZM18.6237 14.4552C17.7549 15.358 16.749 15.7861 15.5372 15.7861V17.7861C17.3035 17.7861 18.8264 17.1288 20.0648 15.8421L18.6237 14.4552ZM19.9241 11.1666C19.9241 12.4747 19.4936 13.5477 18.6223 14.4567L20.0662 15.8406C21.3027 14.5506 21.9241 12.9783 21.9241 11.1666H19.9241ZM18.6221 7.87621C19.4935 8.78528 19.9241 9.85832 19.9241 11.1666H21.9241C21.9241 9.35469 21.3026 7.78231 20.0658 6.49218L18.6221 7.87621ZM15.5372 6.54034C16.7474 6.54034 17.7528 6.96943 18.6221 7.87621L20.0658 6.49218C18.8278 5.20068 17.3045 4.54034 15.5372 4.54034V6.54034ZM15.5372 4.04034C13.6306 4.04034 11.9791 4.75864 10.6525 6.14774L12.0989 7.52902C13.0558 6.52707 14.188 6.04034 15.5372 6.04034V4.04034ZM20.4268 6.14617C19.0965 4.75852 17.4438 4.04034 15.5372 4.04034V6.04034C16.8866 6.04034 18.0215 6.52722 18.983 7.5302L20.4268 6.14617ZM22.4241 11.1666C22.4241 9.22882 21.7549 7.53159 20.4268 6.14617L18.983 7.5302C19.9458 8.53452 20.4241 9.73239 20.4241 11.1666H22.4241ZM20.4268 16.187C21.7549 14.8016 22.4241 13.1043 22.4241 11.1666H20.4241C20.4241 12.6008 19.9458 13.7986 18.983 14.8029L20.4268 16.187ZM20.4263 16.1875L20.4266 16.1872L18.9832 14.8028L18.9829 14.8031L20.4263 16.1875ZM15.5372 18.2861C17.4422 18.2861 19.0944 17.5715 20.4251 16.1887L18.984 14.8019C18.0228 15.8007 16.8876 16.2861 15.5372 16.2861V18.2861ZM10.6541 16.187C11.9811 17.5713 13.6321 18.2861 15.5372 18.2861V16.2861C14.1869 16.2861 13.0544 15.8008 12.0978 14.8029L10.6541 16.187ZM10.8611 14.6033L10.6839 14.7731L12.068 16.2168L12.2451 16.047L10.8611 14.6033ZM12.0679 16.2168L12.2451 16.047L10.8611 14.6033L10.6839 14.7731L12.0679 16.2168ZM8.65674 11.1666C8.65674 13.1043 9.32594 14.8016 10.654 16.187L12.0978 14.8029C11.135 13.7986 10.6567 12.6008 10.6567 11.1666H8.65674ZM10.6538 6.14639C9.32587 7.53177 8.65674 9.22893 8.65674 11.1666H10.6567C10.6567 9.73246 11.135 8.53465 12.0976 7.53037L10.6538 6.14639Z" />
                                                </svg>
                                                <div class="{{ $result->pay_with === 'cash' || $result->pay_with === 'any'  ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Cash</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ $result->pay_with === 'check' || $result->pay_with === 'any' ? '#FA9D6B' : '#DDDDDD' }}" d="M1.78403 2.36604L1.0656 1.67044L1.0656 1.67044L1.78403 2.36604ZM1.78403 18.3958L1.0656 19.0914H1.0656L1.78403 18.3958ZM1.42482 18.7436L2.14325 18.048H2.14325L1.42482 18.7436ZM1.42482 2.01824L2.14325 2.71384L1.42482 2.01824ZM26.5211 2.01824L27.2396 1.32265L27.2396 1.32264L26.5211 2.01824ZM26.5211 18.7436L27.2396 19.4392L27.2396 19.4392L26.5211 18.7436ZM26.1619 18.3958L25.4435 17.7002L26.1619 18.3958ZM26.1619 2.36604L25.4435 3.06164L25.4435 3.06164L26.1619 2.36604ZM21.687 13.9002L22.6416 14.1984V14.1984L21.687 13.9002ZM21.6234 13.6471L22.3231 12.9327L21.6234 13.6471ZM20.7219 16.9899L19.7674 16.6917C19.7653 16.6983 19.7633 16.705 19.7614 16.7116L20.7219 16.9899ZM20.67 17.0846L19.9175 16.426L19.9175 16.4261L20.67 17.0846ZM20.6613 17.0941L19.6981 16.8252C19.5751 17.2659 19.7669 17.7338 20.1637 17.9615C20.5605 18.1891 21.0612 18.1185 21.3795 17.7899L20.6613 17.0941ZM20.1335 16.9203L20.8517 17.6161C21.2277 17.228 21.2274 16.6113 20.8509 16.2237L20.1335 16.9203ZM11.0561 26.2896L11.7729 26.9869L11.7743 26.9854L11.0561 26.2896ZM11.0558 26.2899L10.339 25.5926L10.3387 25.5929L11.0558 26.2899ZM9.68063 27.7047L8.9622 28.4003C9.15034 28.5946 9.40918 28.7045 9.67966 28.7047C9.95014 28.705 10.2092 28.5957 10.3977 28.4017L9.68063 27.7047ZM7.999 25.9679L7.28115 25.2717C6.90518 25.6594 6.90492 26.2755 7.28057 26.6635L7.999 25.9679ZM18.4525 15.1893L19.1699 14.4926C18.9815 14.2986 18.7226 14.1892 18.4521 14.1893C18.1817 14.1893 17.9229 14.2989 17.7346 14.4931L18.4525 15.1893ZM21.0639 14.2183L22.0184 14.5165C22.1304 14.1579 22.032 13.7668 21.7636 13.5039C21.4952 13.241 21.1021 13.1508 20.7459 13.2702L21.0639 14.2183ZM20.3684 16.4445L19.651 17.1412C19.8966 17.3941 20.2573 17.499 20.6003 17.4173C20.9432 17.3355 21.2178 17.0792 21.3229 16.7427L20.3684 16.4445ZM18.9084 14.9411L18.5905 13.9929C18.2647 14.1022 18.0178 14.3711 17.9366 14.705C17.8555 15.039 17.9516 15.3912 18.191 15.6377L18.9084 14.9411ZM21.3689 13.5887L21.6869 14.5368L21.3689 13.5887ZM18.2887 14.6413L18.9439 15.3967L18.9439 15.3967L18.2887 14.6413ZM18.2782 14.6509L17.5815 13.9336L17.5815 13.9336L18.2782 14.6509ZM18.272 14.6571L18.9899 15.3533L18.9929 15.3501L18.272 14.6571ZM7.47142 25.7937L6.75356 25.0975H6.75356L7.47142 25.7937ZM7.47127 26.1416L6.75284 26.8372L6.75284 26.8372L7.47127 26.1416ZM9.50067 28.2377L8.78224 28.9333L8.78225 28.9333L9.50067 28.2377ZM9.68004 28.3138L9.68101 27.3138H9.681L9.68004 28.3138ZM9.85955 28.238L10.5766 28.935L9.85955 28.238ZM11.4146 26.6381L10.6978 25.9408L10.6975 25.9411L11.4146 26.6381ZM11.4149 26.6378L12.1317 27.3351L12.1331 27.3336L11.4149 26.6378ZM20.6609 17.0944L21.3791 17.7903C21.7468 17.4108 21.7558 16.8108 21.3997 16.4205L20.6609 17.0944ZM22.3599 13.2431L21.6414 12.5475L22.3599 13.2431ZM22.3542 12.8895L21.6586 13.608L22.3542 12.8895ZM21.6274 13.9996L22.3458 14.6952L21.6274 13.9996ZM21.2739 14.0053L21.9695 13.2869L21.2739 14.0053ZM21.2681 13.6518L20.5497 12.9562L21.2681 13.6518ZM22.0007 12.8953L22.7191 13.5909H22.7191L22.0007 12.8953ZM11.415 26.29L10.6966 26.9855L11.415 26.29ZM11.0615 26.2842L11.7571 27.0027L11.0615 26.2842ZM12.6699 27.586L13.3883 26.8904L12.6699 27.586ZM12.6688 27.935L11.9548 27.2348H11.9548L12.6688 27.935ZM12.2004 28.4125L12.9144 29.1127H12.9144L12.2004 28.4125ZM11.8469 28.4159L11.1467 29.1298L11.8469 28.4159ZM11.8435 28.0624L11.1295 27.3621L11.8435 28.0624ZM12.1412 27.7588L12.8551 28.459C13.2348 28.0719 13.2368 27.4527 12.8596 27.0632L12.1412 27.7588ZM11.0558 26.6378L10.3374 27.3333L11.0558 26.6378ZM14.7475 25.7817L14.0281 25.0872L14.7475 25.7817ZM14.7413 25.4282L15.4359 24.7088V24.7088L14.7413 25.4282ZM12.6701 27.9336L13.3895 28.6281L12.6701 27.9336ZM12.3166 27.9398L13.0112 27.2204L13.0112 27.2204L12.3166 27.9398ZM12.3104 27.5863L13.0298 28.2808L12.3104 27.5863ZM14.3878 25.4345L13.6684 24.7399L14.3878 25.4345ZM2.61426 2.93629C2.61426 2.86693 2.62302 2.8579 2.6136 2.887C2.60263 2.92087 2.5721 2.98972 2.50246 3.06164L1.0656 1.67044C0.721346 2.026 0.614258 2.49436 0.614258 2.93629H2.61426ZM2.61426 5.54082V2.93629H0.614258V5.54082H2.61426ZM2.61426 17.8255V5.54082H0.614258V17.8255H2.61426ZM2.50246 17.7002C2.57209 17.7721 2.60263 17.8409 2.6136 17.8748C2.62302 17.9039 2.61426 17.8949 2.61426 17.8255H0.614258C0.614258 18.2675 0.721347 18.7358 1.0656 19.0914L2.50246 17.7002ZM2.32492 17.5677C2.26768 17.5677 2.2717 17.56 2.31264 17.5742C2.35971 17.5904 2.43248 17.6279 2.50246 17.7002L1.0656 19.0914C1.41399 19.4512 1.88087 19.5677 2.32492 19.5677V17.5677ZM12.1477 17.5677H2.32492V19.5677H12.1477V17.5677ZM13.3977 18.8177C13.3977 18.1274 12.8381 17.5677 12.1477 17.5677V19.5677C11.7335 19.5677 11.3977 19.2319 11.3977 18.8177H13.3977ZM12.1477 20.0677C12.8381 20.0677 13.3977 19.5081 13.3977 18.8177H11.3977C11.3977 18.4035 11.7335 18.0677 12.1477 18.0677V20.0677ZM2.32492 20.0677H12.1477V18.0677H2.32492V20.0677ZM0.706383 19.4392C1.18249 19.9309 1.80272 20.0677 2.32492 20.0677V18.0677C2.22807 18.0677 2.17282 18.0548 2.14813 18.0463C2.12834 18.0395 2.13346 18.0379 2.14325 18.048L0.706383 19.4392ZM0.114258 17.8255C0.114258 18.3381 0.237659 18.955 0.706383 19.4392L2.14325 18.048C2.15259 18.0576 2.14757 18.0588 2.13822 18.0298C2.12745 17.9964 2.11426 17.9317 2.11426 17.8255H0.114258ZM0.114258 5.54082V17.8255H2.11426V5.54082H0.114258ZM0.114258 2.93629V5.54082H2.11426V2.93629H0.114258ZM0.706384 1.32265C0.237659 1.80676 0.114258 2.42375 0.114258 2.93629H2.11426C2.11426 2.83015 2.12745 2.76545 2.13822 2.73203C2.14757 2.703 2.15259 2.7042 2.14325 2.71384L0.706384 1.32265ZM2.32492 0.694092C1.80271 0.694092 1.18249 0.830909 0.706384 1.32265L2.14325 2.71384C2.13346 2.72395 2.12834 2.72228 2.14814 2.71547C2.17283 2.70699 2.22808 2.69409 2.32492 2.69409V0.694092ZM25.621 0.694092H2.32492V2.69409H25.621V0.694092ZM27.2396 1.32264C26.7635 0.83091 26.1432 0.694092 25.621 0.694092V2.69409C25.7179 2.69409 25.7731 2.70699 25.7978 2.71547C25.8176 2.72228 25.8125 2.72395 25.8027 2.71384L27.2396 1.32264ZM27.8317 2.93629C27.8317 2.42375 27.7083 1.80676 27.2396 1.32265L25.8027 2.71384C25.7934 2.7042 25.7984 2.703 25.8077 2.73203C25.8185 2.76545 25.8317 2.83015 25.8317 2.93629H27.8317ZM27.8317 5.54082V2.93629H25.8317V5.54082H27.8317ZM27.8317 17.8255V5.54082H25.8317V17.8255H27.8317ZM27.2396 19.4392C27.7083 18.955 27.8317 18.3381 27.8317 17.8255H25.8317C25.8317 17.9317 25.8185 17.9964 25.8077 18.0298C25.7984 18.0588 25.7934 18.0576 25.8027 18.048L27.2396 19.4392ZM25.621 20.0677C26.1432 20.0677 26.7635 19.9309 27.2396 19.4392L25.8027 18.048C25.8125 18.0379 25.8176 18.0395 25.7978 18.0463C25.7731 18.0548 25.7179 18.0677 25.621 18.0677V20.0677ZM21.0639 20.0677H25.621V18.0677H21.0639V20.0677ZM19.8139 18.8177C19.8139 19.5081 20.3735 20.0677 21.0639 20.0677V18.0677C21.4781 18.0677 21.8139 18.4035 21.8139 18.8177H19.8139ZM21.0639 17.5677C20.3735 17.5677 19.8139 18.1274 19.8139 18.8177H21.8139C21.8139 19.2319 21.4781 19.5677 21.0639 19.5677V17.5677ZM25.621 17.5677H21.0639V19.5677H25.621V17.5677ZM25.4435 17.7002C25.5135 17.6279 25.5862 17.5904 25.6333 17.5742C25.6743 17.56 25.6783 17.5677 25.621 17.5677V19.5677C26.0651 19.5677 26.532 19.4512 26.8804 19.0914L25.4435 17.7002ZM25.3317 17.8255C25.3317 17.8949 25.3229 17.9039 25.3324 17.8748C25.3433 17.8409 25.3739 17.7721 25.4435 17.7002L26.8804 19.0914C27.2246 18.7358 27.3317 18.2675 27.3317 17.8255H25.3317ZM25.3317 5.54082V17.8255H27.3317V5.54082H25.3317ZM25.3317 2.93629V5.54082H27.3317V2.93629H25.3317ZM25.4435 3.06164C25.3739 2.98972 25.3433 2.92087 25.3324 2.88701C25.3229 2.8579 25.3317 2.86693 25.3317 2.93629H27.3317C27.3317 2.49435 27.2246 2.026 26.8804 1.67044L25.4435 3.06164ZM25.621 3.19409C25.6783 3.19409 25.6743 3.20179 25.6333 3.18764C25.5862 3.17137 25.5135 3.13392 25.4435 3.06164L26.8804 1.67044C26.532 1.31062 26.0651 1.19409 25.621 1.19409V3.19409ZM2.32492 3.19409H25.621V1.19409H2.32492V3.19409ZM2.50246 3.06164C2.43248 3.13392 2.35971 3.17137 2.31264 3.18764C2.27171 3.20179 2.26768 3.19409 2.32492 3.19409V1.19409C1.88087 1.19409 1.41399 1.31062 1.0656 1.67044L2.50246 3.06164ZM22.6416 14.1984C22.7816 13.7502 22.6586 13.2613 22.3231 12.9327L20.9236 14.3615C20.7223 14.1643 20.6485 13.871 20.7325 13.6021L22.6416 14.1984ZM21.6764 17.2881L22.6416 14.1984L20.7325 13.602L19.7674 16.6917L21.6764 17.2881ZM21.4225 17.7432C21.5457 17.6024 21.6327 17.4395 21.6824 17.2682L19.7614 16.7116C19.7913 16.6085 19.8437 16.5103 19.9175 16.426L21.4225 17.7432ZM21.3795 17.7899C21.3942 17.7747 21.4086 17.7592 21.4226 17.7431L19.9175 16.4261C19.9259 16.4165 19.9344 16.4072 19.9431 16.3983L21.3795 17.7899ZM21.6245 17.3629L22.5865 13.9159L20.6602 13.3783L19.6981 16.8252L21.6245 17.3629ZM19.4153 16.2245L10.3379 25.5938L11.7743 26.9854L20.8517 17.6161L19.4153 16.2245ZM10.3393 25.5924L10.339 25.5926L11.7726 26.9871L11.7729 26.9868L10.3393 25.5924ZM10.3387 25.5929L8.96354 27.0077L10.3977 28.4017L11.7729 26.9869L10.3387 25.5929ZM10.3991 27.0091L8.71743 25.2723L7.28057 26.6635L8.9622 28.4003L10.3991 27.0091ZM8.71685 26.6641L19.1703 15.8855L17.7346 14.4931L7.28115 25.2717L8.71685 26.6641ZM17.7351 15.8859L19.4161 17.617L20.8509 16.2237L19.1699 14.4926L17.7351 15.8859ZM20.1093 13.9201L19.4139 16.1464L21.3229 16.7427L22.0184 14.5165L20.1093 13.9201ZM19.2263 15.8892L21.3818 15.1664L20.7459 13.2702L18.5905 13.9929L19.2263 15.8892ZM21.0858 15.7479L19.6258 14.2444L18.191 15.6377L19.651 17.1412L21.0858 15.7479ZM21.051 12.6405L18.0599 13.6435L18.6957 15.5397L21.6869 14.5368L21.051 12.6405ZM22.3231 12.9327C21.9876 12.6041 21.4963 12.4912 21.051 12.6405L21.6869 14.5368C21.4197 14.6263 21.1249 14.5586 20.9236 14.3615L22.3231 12.9327ZM21.3439 12.6869L18.0984 13.6314L18.6572 15.5518L21.9028 14.6073L21.3439 12.6869ZM18.0804 13.6369C17.9195 13.687 17.7667 13.7703 17.6336 13.8858L18.9439 15.3967C18.8641 15.4659 18.7721 15.5162 18.6752 15.5464L18.0804 13.6369ZM17.6336 13.8858C17.6159 13.9011 17.5985 13.9171 17.5815 13.9336L18.9749 15.3683C18.9648 15.3781 18.9544 15.3876 18.9439 15.3967L17.6336 13.8858ZM17.5815 13.9336C17.5712 13.9435 17.5611 13.9537 17.5511 13.9641L18.9929 15.3501C18.987 15.3564 18.9809 15.3624 18.9749 15.3683L17.5815 13.9336ZM17.5542 13.9609L6.75356 25.0975L8.18927 26.4899L18.9899 15.3533L17.5542 13.9609ZM6.75356 25.0975C6.2836 25.5821 6.28328 26.3523 6.75284 26.8372L8.1897 25.4461C8.47144 25.737 8.47125 26.1991 8.18927 26.4899L6.75356 25.0975ZM6.75284 26.8372L8.78224 28.9333L10.2191 27.5421L8.1897 25.446L6.75284 26.8372ZM8.78225 28.9333C9.01742 29.1762 9.34097 29.3134 9.67908 29.3138L9.681 27.3138C9.88387 27.314 10.078 27.3963 10.2191 27.5421L8.78225 28.9333ZM9.67907 29.3138C10.0172 29.3141 10.341 29.1775 10.5766 28.935L9.14247 27.541C9.28386 27.3956 9.47815 27.3136 9.68101 27.3138L9.67907 29.3138ZM10.5766 28.935L12.1317 27.3351L10.6975 25.9411L9.14247 27.541L10.5766 28.935ZM12.1315 27.3353L12.1317 27.3351L10.6981 25.9406L10.6978 25.9408L12.1315 27.3353ZM12.1331 27.3336L21.3791 17.7903L19.9427 16.3986L10.6967 25.942L12.1331 27.3336ZM21.3997 16.4205L19.1166 13.9177L17.639 15.2655L19.9221 17.7684L21.3997 16.4205ZM23.0783 13.9386C23.5585 13.4427 23.5457 12.6513 23.0498 12.1711L21.6586 13.608C21.361 13.3199 21.3533 12.845 21.6414 12.5475L23.0783 13.9386ZM22.3458 14.6952L23.0783 13.9386L21.6414 12.5475L20.9089 13.304L22.3458 14.6952ZM20.5783 14.7237C21.0742 15.204 21.8656 15.1912 22.3458 14.6952L20.9089 13.304C21.1971 13.0064 21.6719 12.9988 21.9695 13.2869L20.5783 14.7237ZM20.5497 12.9562C20.0695 13.4522 20.0823 14.2435 20.5783 14.7237L21.9695 13.2869C22.267 13.575 22.2747 14.0498 21.9866 14.3474L20.5497 12.9562ZM21.2822 12.1997L20.5497 12.9562L21.9866 14.3474L22.7191 13.5909L21.2822 12.1997ZM23.0498 12.1711C22.5538 11.6909 21.7624 11.7037 21.2822 12.1997L22.7191 13.5909C22.431 13.8884 21.9561 13.8961 21.6586 13.608L23.0498 12.1711ZM4.78662 7.9744C4.09627 7.9744 3.53662 8.53404 3.53662 9.2244H5.53662C5.53662 9.63861 5.20083 9.9744 4.78662 9.9744V7.9744ZM13.6007 7.9744H4.78662V9.9744H13.6007V7.9744ZM14.8507 9.2244C14.8507 8.53404 14.2911 7.9744 13.6007 7.9744V9.9744C13.1865 9.9744 12.8507 9.63861 12.8507 9.2244H14.8507ZM13.6007 10.4744C14.2911 10.4744 14.8507 9.91475 14.8507 9.2244H12.8507C12.8507 8.81018 13.1865 8.4744 13.6007 8.4744V10.4744ZM4.78662 10.4744H13.6007V8.4744H4.78662V10.4744ZM3.53662 9.2244C3.53662 9.91475 4.09627 10.4744 4.78662 10.4744V8.4744C5.20083 8.4744 5.53662 8.81018 5.53662 9.2244H3.53662ZM4.78662 11.3727C4.09627 11.3727 3.53662 11.9323 3.53662 12.6227H5.53662C5.53662 13.0369 5.20083 13.3727 4.78662 13.3727V11.3727ZM13.6007 11.3727H4.78662V13.3727H13.6007V11.3727ZM14.8507 12.6227C14.8507 11.9323 14.2911 11.3727 13.6007 11.3727V13.3727C13.1865 13.3727 12.8507 13.0369 12.8507 12.6227H14.8507ZM13.6007 13.8727C14.2911 13.8727 14.8507 13.313 14.8507 12.6227H12.8507C12.8507 12.2084 13.1865 11.8727 13.6007 11.8727V13.8727ZM4.78662 13.8727H13.6007V11.8727H4.78662V13.8727ZM3.53662 12.6227C3.53662 13.313 4.09627 13.8727 4.78662 13.8727V11.8727C5.20083 11.8727 5.53662 12.2084 5.53662 12.6227H3.53662ZM12.1334 25.5944C11.6532 25.0984 10.8619 25.0856 10.3659 25.5658L11.7571 27.0027C11.4595 27.2908 10.9847 27.2831 10.6966 26.9855L12.1334 25.5944ZM13.3883 26.8904L12.1334 25.5944L10.6966 26.9855L11.9514 28.2816L13.3883 26.8904ZM13.3827 28.6352C13.8573 28.1513 13.8598 27.3774 13.3883 26.8904L11.9514 28.2816C11.6686 27.9895 11.6701 27.5251 11.9548 27.2348L13.3827 28.6352ZM12.9144 29.1127L13.3827 28.6352L11.9548 27.2348L11.4865 27.7122L12.9144 29.1127ZM11.1467 29.1298C11.6395 29.6132 12.431 29.6055 12.9144 29.1127L11.4865 27.7122C11.7765 27.4165 12.2514 27.4119 12.5471 27.702L11.1467 29.1298ZM11.1295 27.3621C10.6461 27.855 10.6538 28.6464 11.1467 29.1298L12.5471 27.702C12.8428 27.992 12.8474 28.4669 12.5574 28.7626L11.1295 27.3621ZM11.4273 27.0586L11.1295 27.3621L12.5574 28.7626L12.8551 28.459L11.4273 27.0586ZM10.3374 27.3333L11.4228 28.4544L12.8596 27.0632L11.7742 25.9422L10.3374 27.3333ZM10.3659 25.5658C9.86994 26.046 9.85716 26.8374 10.3374 27.3333L11.7742 25.9422C12.0624 26.2397 12.0547 26.7146 11.7571 27.0027L10.3659 25.5658ZM1.36426 4.29083C0.673902 4.29083 0.114258 4.85048 0.114258 5.54083H2.11426C2.11426 5.95505 1.77847 6.29083 1.36426 6.29083V4.29083ZM26.5817 4.29083H1.36426V6.29083H26.5817V4.29083ZM27.8317 5.54083C27.8317 4.85048 27.2721 4.29083 26.5817 4.29083V6.29083C26.1675 6.29083 25.8317 5.95505 25.8317 5.54083H27.8317ZM26.5817 6.79083C27.2721 6.79083 27.8317 6.23119 27.8317 5.54083H25.8317C25.8317 5.12662 26.1675 4.79083 26.5817 4.79083V6.79083ZM1.36426 6.79083H26.5817V4.79083H1.36426V6.79083ZM0.114258 5.54083C0.114258 6.23119 0.673902 6.79083 1.36426 6.79083V4.79083C1.77847 4.79083 2.11426 5.12662 2.11426 5.54083H0.114258ZM18.0556 7.97439C17.3653 7.97439 16.8056 8.53403 16.8056 9.22439H18.8056C18.8056 9.6386 18.4699 9.97439 18.0556 9.97439V7.97439ZM23.6755 7.97439H18.0556V9.97439H23.6755V7.97439ZM24.9255 9.22439C24.9255 8.53404 24.3659 7.97439 23.6755 7.97439V9.97439C23.2613 9.97439 22.9255 9.6386 22.9255 9.22439H24.9255ZM23.6755 10.4744C24.3659 10.4744 24.9255 9.91475 24.9255 9.22439H22.9255C22.9255 8.81018 23.2613 8.47439 23.6755 8.47439V10.4744ZM18.0556 10.4744H23.6755V8.47439H18.0556V10.4744ZM16.8056 9.22439C16.8056 9.91475 17.3653 10.4744 18.0556 10.4744V8.47439C18.4699 8.47439 18.8056 8.81018 18.8056 9.22439H16.8056ZM15.467 26.4763C15.9465 25.9796 15.9325 25.1883 15.4359 24.7088L14.0468 26.1477C13.7488 25.86 13.7404 25.3852 14.0281 25.0872L15.467 26.4763ZM13.3895 28.6281L15.467 26.4763L14.0281 25.0872L11.9507 27.239L13.3895 28.6281ZM11.622 28.6592C12.1187 29.1387 12.91 29.1248 13.3895 28.6281L11.9507 27.239C12.2384 26.941 12.7132 26.9327 13.0112 27.2204L11.622 28.6592ZM11.5909 26.8917C11.1114 27.3884 11.1254 28.1797 11.622 28.6592L13.0112 27.2204C13.3092 27.508 13.3175 27.9829 13.0298 28.2808L11.5909 26.8917ZM13.6684 24.7399L11.5909 26.8917L13.0298 28.2808L15.1072 26.129L13.6684 24.7399ZM15.4359 24.7088C14.9392 24.2293 14.1479 24.2432 13.6684 24.7399L15.1072 26.129C14.8196 26.427 14.3448 26.4354 14.0468 26.1477L15.4359 24.7088Z" fill="#DDDDDD"/>
                                                </svg>
                                                <div class="{{ $result->pay_with === 'check' || $result->pay_with === 'any' ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Check</div>
                                            </div>
                                            <div class="flex flex-col items-center  space-y-2">
                                                <svg width="32" height="23" viewBox="0 0 32 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="{{ $result->pay_with === 'online_payment' || $result->pay_with === 'any' ? '#FA9D6B' : '#DDDDDD' }}" d="M2.11815 2.35451L2.46386 2.71574H2.46386L2.11815 2.35451ZM2.11815 20.5264L1.77244 20.8877L1.77245 20.8877L2.11815 20.5264ZM29.7616 20.5275L29.4148 20.1674L29.4148 20.1674L29.7616 20.5275ZM29.7616 2.35343L29.4148 2.71357L29.4148 2.71358L29.7616 2.35343ZM1.42674 1.63205L1.77245 1.99328L1.42674 1.63205ZM30.4553 1.63313L30.1085 1.99328L30.1085 1.99328L30.4553 1.63313ZM30.4553 21.2478L30.8021 21.608H30.8021L30.4553 21.2478ZM1.42674 21.2489L1.77245 20.8877H1.77244L1.42674 21.2489ZM2.5 2.77549C2.5 2.68418 2.51194 2.64963 2.51194 2.64963C2.51171 2.65029 2.50855 2.65893 2.49996 2.67237C2.49115 2.68618 2.4791 2.70116 2.46386 2.71574L1.77245 1.99328C1.59222 2.16576 1.5 2.42517 1.5 2.77549H2.5ZM2.5 5.16312V2.77549H1.5V5.16312H2.5ZM2.5 9.94493V5.16312H1.5V9.94493H2.5ZM2.5 20.1055V9.94493H1.5V20.1055H2.5ZM2.46386 20.1652C2.4791 20.1798 2.49115 20.1948 2.49996 20.2086C2.50855 20.222 2.51171 20.2307 2.51194 20.2313C2.51194 20.2313 2.5 20.1968 2.5 20.1055H1.5C1.5 20.4558 1.59222 20.7152 1.77244 20.8877L2.46386 20.1652ZM2.58978 20.1484C2.48254 20.1484 2.43189 20.1353 2.41797 20.1309C2.4067 20.1272 2.43002 20.1328 2.46385 20.1652L1.77245 20.8877C1.95314 21.0606 2.22465 21.1484 2.58978 21.1484V20.1484ZM29.2962 20.1484H2.58978V21.1484H29.2962V20.1484ZM29.4148 20.1674C29.4489 20.1345 29.473 20.1283 29.4633 20.1314C29.4508 20.1355 29.4018 20.1484 29.2962 20.1484V21.1484C29.6592 21.1484 29.929 21.0606 30.1085 20.8877L29.4148 20.1674ZM29.3792 20.1055C29.3792 20.1508 29.3763 20.1827 29.3732 20.2036C29.3701 20.2244 29.367 20.2332 29.3671 20.2332C29.3672 20.2328 29.3702 20.2244 29.3787 20.211C29.3874 20.1973 29.3994 20.1822 29.4148 20.1674L30.1085 20.8877C30.2876 20.7152 30.3792 20.4557 30.3792 20.1055H29.3792ZM29.3792 9.94493V20.1055H30.3792V9.94493H29.3792ZM29.3792 5.16312V9.94493H30.3792V5.16312H29.3792ZM29.3792 2.77549V5.16312H30.3792V2.77549H29.3792ZM29.4148 2.71358C29.3994 2.69873 29.3874 2.68364 29.3787 2.66993C29.3702 2.65658 29.3672 2.64813 29.3671 2.64777C29.367 2.64772 29.3701 2.65657 29.3732 2.67738C29.3763 2.69827 29.3792 2.73015 29.3792 2.77549H30.3792C30.3792 2.42522 30.2876 2.16578 30.1085 1.99328L29.4148 2.71358ZM29.2962 2.73254C29.4018 2.73254 29.4508 2.74548 29.4633 2.74952C29.473 2.75266 29.4489 2.7464 29.4148 2.71357L30.1085 1.99328C29.9289 1.82039 29.6592 1.73254 29.2962 1.73254V2.73254ZM2.58978 2.73254H29.2962V1.73254H2.58978V2.73254ZM2.46386 2.71574C2.43002 2.74812 2.4067 2.75371 2.41797 2.75009C2.43189 2.74562 2.48254 2.73254 2.58978 2.73254V1.73254C2.22466 1.73254 1.95314 1.82035 1.77245 1.99328L2.46386 2.71574ZM2.58978 0.732544C2.08379 0.732544 1.51788 0.852744 1.08103 1.27082L1.77245 1.99328C1.95372 1.81979 2.22581 1.73254 2.58978 1.73254V0.732544ZM29.2962 0.732544H2.58978V1.73254H29.2962V0.732544ZM30.8021 1.27299C30.3665 0.85349 29.8014 0.732544 29.2962 0.732544V1.73254C29.658 1.73254 29.9283 1.8198 30.1085 1.99328L30.8021 1.27299ZM31.3792 2.77549C31.3792 2.26482 31.2449 1.69934 30.8021 1.27299L30.1085 1.99328C30.2885 2.16666 30.3792 2.42694 30.3792 2.77549H31.3792ZM31.3792 5.16312V2.77549H30.3792V5.16312H31.3792ZM31.3792 9.94493V5.16312H30.3792V9.94493H31.3792ZM31.3792 20.1055V9.94493H30.3792V20.1055H31.3792ZM30.8021 21.608C31.2449 21.1816 31.3792 20.6161 31.3792 20.1055H30.3792C30.3792 20.454 30.2885 20.7143 30.1085 20.8877L30.8021 21.608ZM29.2962 22.1484C29.8014 22.1484 30.3665 22.0275 30.8021 21.608L30.1085 20.8877C29.9283 21.0611 29.658 21.1484 29.2962 21.1484V22.1484ZM2.58978 22.1484H29.2962V21.1484H2.58978V22.1484ZM1.08103 21.6101C1.51788 22.0282 2.08379 22.1484 2.58978 22.1484V21.1484C2.22581 21.1484 1.95372 21.0612 1.77245 20.8877L1.08103 21.6101ZM0.5 20.1055C0.5 20.6178 0.635857 21.1841 1.08103 21.6101L1.77244 20.8877C1.59129 20.7143 1.5 20.454 1.5 20.1055H0.5ZM0.5 9.94493V20.1055H1.5V9.94493H0.5ZM0.5 5.16312V9.94493H1.5V5.16312H0.5ZM0.5 2.77549V5.16312H1.5V2.77549H0.5ZM1.08103 1.27082C0.635858 1.69686 0.5 2.26315 0.5 2.77549H1.5C1.5 2.42693 1.59129 2.16665 1.77245 1.99328L1.08103 1.27082ZM5.08252 12.9396C4.53023 12.9396 4.08252 13.3873 4.08252 13.9396H5.08252V12.9396ZM11.7574 12.9396H5.08252V13.9396H11.7574V12.9396ZM12.7574 13.9396C12.7574 13.3873 12.3097 12.9396 11.7574 12.9396V13.9396H12.7574ZM11.7574 14.9396C12.3097 14.9396 12.7574 14.4919 12.7574 13.9396H11.7574V14.9396ZM5.08252 14.9396H11.7574V13.9396H5.08252V14.9396ZM4.08252 13.9396C4.08252 14.4919 4.53023 14.9396 5.08252 14.9396V13.9396H4.08252ZM5.08252 15.2026C4.53023 15.2026 4.08252 15.6503 4.08252 16.2026H5.08252V15.2026ZM7.21441 15.2026H5.08252V16.2026H7.21441V15.2026ZM8.21441 16.2026C8.21441 15.6503 7.76669 15.2026 7.21441 15.2026V16.2026H8.21441ZM7.21441 17.2026C7.76669 17.2026 8.21441 16.7549 8.21441 16.2026H7.21441V17.2026ZM5.08252 17.2026H7.21441V16.2026H5.08252V17.2026ZM4.08252 16.2026C4.08252 16.7549 4.53023 17.2026 5.08252 17.2026V16.2026H4.08252Z" />
                                                </svg>                                        
                                                <div class="{{ $result->pay_with === 'online_payment' || $result->pay_with === 'any' ? 'overview-responsibilities-title' : 'overview-responsibilities-title-muted' }} max-w-[70px]">Online Payment</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[60px]">
                                <div id="show_detail_jobs" class="flex justify-center items-center -space-x-1 p-2  hover:cursor-pointer" data-accordion-target="#job-detail" aria-expanded="false" aria-controls="job-detail">
                                    <span  class="overview-show-more">Show more</span>
                                    <svg data-accordion-icon="" width="25" height="15"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FA9D6B" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" ></path></svg>
                                </div>

                            </div>
                           
                        </div>

                        {{-- Matched Talent --}}
                        <div class="bg-bgbody rounded mt-3">
                            <div class="flex justify-between px-4 pt-[18.5px]">
                                <div class="flex space-x-2 ">
                                    <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                    <span class="text-[#222222] font-semibold">Matched Talent</span>
                                </div>
                                <div onclick="load_talent()" data-modal-toggle="modal-detail-add-match" class="flex justify-center items-center px-5 w-[99px] h-6 bg-hover rounded space-x-1 hover:cursor-pointer">
                                    <span class="overview-send-job text-palet">+ Add Talent</span>
                                </div>
                            </div>
                            <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                            <form id="form_match_talent" action="{{ route('jobboard.send_email')}}" method="POST">@csrf
                                <input type="hidden" name="email_client" value="{{ $result->client->email }}">
                                <input type="hidden" name="job_models_id" value="{{ $result->id }}">
                                <div class="status_all_select"></div>
                                <!--
                                <div class="space-y-6 mt-6">
                                    @foreach ($result->match_talents_add as $key => $talent )
                                        {{-- $talent->job_model_talent_status->status --}}
                                        <div  class="flex justify-between px-4">
                                            <div  class="flex space-x-2 items-center justify-center">
                                                <div class="">
                                                    <input  style="color: #3BD7CF" name="talent_name[]" type="checkbox" value="{{ $talent->talent->id }}" class="w-5 h-5 hover:cursor-pointer rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                </div>
                                                <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Talent attached file/avatar/'.$talent->talent->avatar) }}" alt="">
                                                <div data-modal-toggle="modal-overview-detail-talent" onclick="detail({{ $talent->talent->id }})" class="flex flex-col hover:cursor-pointer">
                                                    <div class="flex space-x-3 ">
                                                        <span class="overview-name-talent text-colortext">{{ $talent->talent->first_name }}</span>
                                                        <div class="text-white rounded-md bg-colorStatusCard1 flex items-center justify-center w-[85px] h-4 space-x-1">
                                                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.75 7C6.02614 7 6.25 6.77614 6.25 6.5C6.25 6.22386 6.02614 6 5.75 6V7ZM1.59203 6.71798L1.36504 6.27247L1.36503 6.27247L1.59203 6.71798ZM0.717988 7.59202L1.16349 7.81902L1.16349 7.81902L0.717988 7.59202ZM0.5 10H0C0 10.2761 0.223858 10.5 0.5 10.5L0.5 10ZM5.75 10.5C6.02614 10.5 6.25 10.2761 6.25 10C6.25 9.72386 6.02614 9.5 5.75 9.5V10.5ZM3.75 5C4.99264 5 6 3.99264 6 2.75H5C5 3.44036 4.44036 4 3.75 4V5ZM6 2.75C6 1.50736 4.99264 0.5 3.75 0.5V1.5C4.44036 1.5 5 2.05964 5 2.75H6ZM3.75 0.5C2.50736 0.5 1.5 1.50736 1.5 2.75H2.5C2.5 2.05964 3.05964 1.5 3.75 1.5V0.5ZM1.5 2.75C1.5 3.99264 2.50736 5 3.75 5V4C3.05964 4 2.5 3.44036 2.5 2.75H1.5ZM7.5 6.75V9.75H8.5V6.75H7.5ZM6.5 8.75H9.5V7.75H6.5V8.75ZM5.75 6H3.7V7H5.75V6ZM3.7 6C3.1482 6 2.70428 5.99961 2.3457 6.02891C1.98127 6.05868 1.66118 6.12158 1.36504 6.27247L1.81901 7.16348C1.95069 7.09639 2.12454 7.05031 2.42712 7.02559C2.73554 7.00039 3.1317 7 3.7 7V6ZM1.36503 6.27247C0.894613 6.51216 0.512162 6.89463 0.272483 7.36503L1.16349 7.81902C1.3073 7.53677 1.53678 7.30729 1.81902 7.16348L1.36503 6.27247ZM0.272484 7.36503C0.12159 7.66118 0.0586838 7.98127 0.028909 8.34569C-0.000388861 8.70428 0 9.1482 0 9.7H1C1 9.1317 1.00039 8.73554 1.02559 8.42713C1.05031 8.12454 1.0964 7.9507 1.16349 7.81902L0.272484 7.36503ZM0 9.7V10H1V9.7H0ZM0.5 10.5H5.75V9.5H0.5V10.5Z" fill="white"/>
                                                            </svg>
                                                            <span class="overview-add-talent">Talent Add</span>
                                                        </div>
                                                    </div>
                                                    <span class="overview-live-talent">Age {{ Carbon\Carbon::parse($talent->talent->day_of_birthday)->age }}, in {{ $talent->talent->address }}</span>
                                                    <span class="overview-experiance-talent">{{ $talent->talent->experience }} Year Experience, {{ Str::limit($talent->talent->about_talent , 25, $end='...') }}</span>
                                                </div>
                                            </div>
                                            <div class="h-4">
                                                <select data-talent="{{ $talent->talent->id }}" data-job-id="{{ $result->id }}" name="status_talents" class="status_talents p-2 text-xs text-[#5FCFFF] focus:ring-0 bg-gray-50 rounded border border-[#5FCFFF] outline-none hover:cursor-pointer">
                                                        <option>-- Select status --</option>
                                                        @if (!empty($talent->talent->job_model_talent_status->status))
                                                            @foreach ($status_talent as $value )
                                                                <option @if($value->status_name === $talent->talent->job_model_talent_status->status) selected @endif class="text-gray-500  border rounded-lg hover:cursor-pointer" value="{{ $value->status_name }}" >{{ $value->status_name }}</option>
                                                            @endforeach
                                                        @else
                                                            @foreach ($status_talent as $value )
                                                                <option class="text-gray-500  border rounded-lg hover:cursor-pointer" value="{{ $value->status_name }}" >{{ $value->status_name }}</option>
                                                            @endforeach
                                                        @endif
                                                </select>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                -->
                                <div class="space-y-6 mt-6 match_talent_hide">
                                    @foreach ($matchTalents as $key => $talent )
                                        {{-- $talent->job_model_talent_status->status --}}
                                        @if($loop->iteration > 10) @break @endif
                                        <div  class="flex justify-between px-4 hover:cursor-pointer">
                                            <div class="flex space-x-2 items-center justify-center">
                                                <div class="">
                                                    <input  style="color: #3BD7CF" name="talent_name[]" type="checkbox" value="{{ $talent->talent->id }}" class="w-5 h-5 hover:cursor-pointer rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                </div>
                                                <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Talent attached file/avatar/'.$talent->talent->avatar) }}" alt="">
                                                <div data-modal-toggle="modal-overview-detail-talent" onclick="detail({{ $talent->talent->id }})"  class="flex flex-col">
                                                    <span class="overview-name-talent text-colortext">{{ $talent->talent->first_name }}</span>
                                                    <span class="overview-live-talent">Age {{ Carbon\Carbon::parse($talent->talent->day_of_birthday)->age }}, in {{ $talent->talent->address }}</span>
                                                    <span class="overview-experiance-talent">{{ $talent->talent->experience }} Year Experience, {{ Str::limit($talent->talent->about_talent , 25, $end='...') }}</span>
                                                </div>
                                            </div>
                                            <div class="h-4">
                                                <select data-talent="{{ $talent->talent->id }}" data-job-id="{{ $result->id }}" name="status_talents" class="status_talents p-2 text-xs text-[#5FCFFF] focus:ring-0 bg-gray-50 rounded border border-[#5FCFFF] outline-none hover:cursor-pointer">
                                                    <option>-- Select status --</option>
                                                    @foreach ($status_talent as $value )
                                                        <option @if($value->status_name === $talent->status) selected @endif class="text-gray-500  border rounded-lg hover:cursor-pointer" value="{{ $value->status_name }}" >{{ $value->status_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                     @endforeach
                                    <div class="flex items-center justify-end px-6 space-x-2 rounded-b w-full ">
                                        <div id="dropdownDefault" data-dropdown-toggle="dropdown_select" class="flex justify-center items-center w-40 h-[42px] bg-colorStatusCard1 rounded-md hover:cursor-pointer">
                                            <span class="overview-attechment-btn-text">Select</span>
                                        </div>
                                        <div id="dropdown_select" class="hidden z-10 w-40 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                                                @foreach ($status_talent as $value )
                                                <li>
                                                    <label onclick="status_talents('{{ $value->status_name }}')" for="{{ $value->id }}"  class="hover:cursor-pointer">
                                                        <span class="block py-2 px-4 hover:bg-gray-100 ">{{ $value->status_name }}</span>
                                                    </label>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <button class="flex justify-center items-center w-40 h-[42px] bg-palet rounded-md">
                                            <span class="overview-attechment-btn-text">Send</span>
                                        </button>                          
                                    </div>
                                </div>
                                {{-- Show more and show less match talent --}}
                                <div  data-accordion="collapse">
                                    <div id="acording_match_talent" class="hidden space-y-6 mt-6" aria-labelledby="accordion-collapse-heading-2">
                                        
                                        @foreach ($matchTalents as $key => $talent )
                                            <div  class="flex justify-between px-4 hover:cursor-pointer">
                                                <div class="flex space-x-2 items-center justify-center">
                                                    <div class="">
                                                        <input  style="color: #3BD7CF" name="talent_name[]" type="checkbox" value="{{ $talent->talent->id }}" class="w-5 h-5 hover:cursor-pointer rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    </div>
                                                    <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Talent attached file/avatar/'.$talent->talent->avatar) }}" alt="">
                                                    <div data-modal-toggle="modal-overview-detail-talent" onclick="detail({{ $talent->talent->id }})" class="flex flex-col">
                                                        <span class="overview-name-talent text-colortext">{{ $talent->talent->first_name }}</span>
                                                        <span class="overview-live-talent">Age {{ Carbon\Carbon::parse($talent->talent->day_of_birthday)->age }}, in {{ $talent->talent->address }}</span>
                                                        <span class="overview-experiance-talent">{{ $talent->talent->experience }} Year Experience, {{ Str::limit($talent->talent->about_talent , 25, $end='...') }}</span>
                                                    </div>
                                                </div>
                                                <div class="h-4">
                                                    <select data-talent="{{ $talent->talent->id }}" data-job-id="{{ $result->id }}" name="status_talents" class="status_talents p-2 text-xs text-[#5FCFFF] focus:ring-0 bg-gray-50 rounded border border-[#5FCFFF] outline-none hover:cursor-pointer">
                                                        <option>-- Select status --</option>
                                                        @foreach ($status_talent as $value )
                                                            <option @if($value->status_name === $talent->status) selected @endif class="text-gray-500  border rounded-lg hover:cursor-pointer" value="{{ $value->status_name }}" >{{ $value->status_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="flex items-center justify-end px-6 space-x-2 rounded-b w-full ">
                                            <div id="dropdownDefault" data-dropdown-toggle="dropdown_select2" class="flex justify-center items-center w-40 h-[42px] bg-colorStatusCard1 rounded-md hover:cursor-pointer">
                                                <span class="overview-attechment-btn-text">Select</span>
                                            </div>
                                            <div id="dropdown_select2" class="hidden z-10 w-40 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                                                    @foreach ($status_talent as $value )
                                                    <li>
                                                        <label onclick="status_talents('{{ $value->status_name }}')" for="{{ $value->id }}"  class="hover:cursor-pointer">
                                                            <span class="block py-2 px-4 hover:bg-gray-100 ">{{ $value->status_name }}</span>
                                                        </label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <button class="flex justify-center items-center w-40 h-[42px] bg-palet rounded-md">
                                                <span class="overview-attechment-btn-text">Send</span>
                                            </button>                          
                                        </div>
                                    </div>
                                    <hr class="bg-[#ECECEC] h-[1px] w-full mt-[73px]">
                                    <div id="show_match_talent" class="flex justify-center items-center -space-x-1 p-2  hover:cursor-pointer" data-accordion-target="#acording_match_talent" aria-expanded="false" aria-controls="acording_match_talent">
                                        <span  class="overview-show-more">Show more</span>
                                        <svg data-accordion-icon="" width="25" height="15"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FA9D6B" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" ></path></svg>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="bg-bgbody rounded mt-3">
                            <div class="p-4">
                                <span class="overview-client-detail">CLIENT DETAIL</span>
                                <div class="w-full bg-[#F5F5F5] py-4 px-[24px]">
                                    <table width="500px">                                           
                                        <tr height="30px">
                                            <td >
                                                <div class="flex space-x-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.833008 8.00001C0.833008 4.04197 4.04163 0.833344 7.99967 0.833344C11.9577 0.833344 15.1663 4.04197 15.1663 8.00001C15.1663 11.9581 11.9577 15.1667 7.99967 15.1667C4.04163 15.1667 0.833008 11.9581 0.833008 8.00001ZM7.99967 1.83334C4.59392 1.83334 1.83301 4.59425 1.83301 8.00001C1.83301 11.4058 4.59392 14.1667 7.99967 14.1667C11.4054 14.1667 14.1663 11.4058 14.1663 8.00001C14.1663 4.59425 11.4054 1.83334 7.99967 1.83334Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83301 6.00001C5.83301 4.8034 6.80307 3.83334 7.99967 3.83334C9.19628 3.83334 10.1663 4.8034 10.1663 6.00001C10.1663 7.19662 9.19628 8.16668 7.99967 8.16668C6.80307 8.16668 5.83301 7.19662 5.83301 6.00001ZM7.99967 4.83334C7.35535 4.83334 6.83301 5.35569 6.83301 6.00001C6.83301 6.64433 7.35535 7.16668 7.99967 7.16668C8.644 7.16668 9.16634 6.64433 9.16634 6.00001C9.16634 5.35569 8.644 4.83334 7.99967 4.83334Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66684 10.1667C5.16583 10.1667 3.93711 11.3341 3.83976 12.8102C3.82158 13.0858 3.58348 13.2944 3.30793 13.2762C3.03239 13.2581 2.82375 13.02 2.84192 12.7444C2.97371 10.7462 4.63559 9.16666 6.66684 9.16666H9.33351C11.3621 9.16666 13.0223 10.7421 13.1579 12.7365C13.1767 13.012 12.9685 13.2505 12.693 13.2693C12.4175 13.288 12.179 13.0799 12.1602 12.8044C12.06 11.3311 10.8325 10.1667 9.33351 10.1667H6.66684Z" fill="#3BD7CF"/>
                                                    </svg>
                                                    <span class="overview-client-detail-table">Name</span>
                                                </div>
                                            </td>
                                            <td >
                                                <span class="overview-client-detail-table">{{ $result->client->first_name }} {{ $result->client->last_name }}</span>
                                            </td>
                                        </tr>
                                        <tr height="30px">
                                            <td >
                                                <div class="flex space-x-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.833008 3C0.833008 2.72386 1.05687 2.5 1.33301 2.5H14.6663C14.9425 2.5 15.1663 2.72386 15.1663 3V13C15.1663 13.2761 14.9425 13.5 14.6663 13.5H1.33301C1.05687 13.5 0.833008 13.2761 0.833008 13V3ZM1.83301 3.5V12.5H14.1663V3.5H1.83301Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.933037 2.7C1.09872 2.47909 1.41212 2.43431 1.63304 2.6L7.9997 7.375L14.3664 2.6C14.5873 2.43431 14.9007 2.47909 15.0664 2.7C15.2321 2.92091 15.1873 3.23431 14.9664 3.4L8.2997 8.4C8.12193 8.53333 7.87748 8.53333 7.6997 8.4L1.03304 3.4C0.812123 3.23431 0.767352 2.92091 0.933037 2.7Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.833008 3C0.833008 2.72386 1.05687 2.5 1.33301 2.5H7.99967C8.27582 2.5 8.49967 2.72386 8.49967 3C8.49967 3.27614 8.27582 3.5 7.99967 3.5H1.83301V8C1.83301 8.27614 1.60915 8.5 1.33301 8.5C1.05687 8.5 0.833008 8.27614 0.833008 8V3Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3C7.5 2.72386 7.72386 2.5 8 2.5H14.6667C14.9428 2.5 15.1667 2.72386 15.1667 3V8C15.1667 8.27614 14.9428 8.5 14.6667 8.5C14.3905 8.5 14.1667 8.27614 14.1667 8V3.5H8C7.72386 3.5 7.5 3.27614 7.5 3Z" fill="#3BD7CF"/>
                                                    </svg>
                                                    <span class="overview-client-detail-table">Email</span>
                                                </div>
                                            </td>
                                            <td >
                                                <span class="overview-client-detail-table">{{ $result->client->email }}</span>
                                            </td>
                                        </tr>
                                        <tr height="30px">
                                            <td >
                                                <div class="flex space-x-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.0566 2.99946C3.51916 2.99946 3.18391 3.48105 3.33744 3.93608C3.88796 5.5676 4.91384 8.02197 6.44372 9.55185C7.97361 11.0818 10.428 12.1076 12.0595 12.6581C12.5145 12.8117 12.9961 12.4765 12.9961 11.939V10.2823C12.9961 10.2231 12.964 10.1685 12.9122 10.1396L11.4692 9.33735C11.422 9.31114 11.365 9.3099 11.3168 9.33401L9.77788 10.1035C9.68165 10.1516 9.57225 10.1667 9.46658 10.1464L9.55884 9.66538C9.46658 10.1464 9.46674 10.1464 9.46658 10.1464L9.46517 10.1461L9.46334 10.1458L9.45841 10.1448L9.44364 10.1417C9.43165 10.1392 9.41541 10.1356 9.39526 10.1308C9.35497 10.1213 9.29894 10.1071 9.22988 10.0871C9.09197 10.0473 8.90087 9.98435 8.67879 9.88971C8.23653 9.70125 7.65923 9.38202 7.13639 8.8592C6.61363 8.33643 6.29351 7.7583 6.10416 7.31542C6.00907 7.09299 5.94562 6.90154 5.90546 6.76339C5.88535 6.69422 5.87098 6.63809 5.86135 6.59776C5.85653 6.57758 5.85289 6.56133 5.85031 6.54934L5.8472 6.53457L5.8462 6.52966L5.84584 6.52784L5.84569 6.52708C5.84566 6.52693 5.84556 6.52644 6.32635 6.43292L5.84569 6.52708C5.82506 6.42104 5.83995 6.3105 5.88826 6.21388L6.65783 4.67471C6.68191 4.62655 6.68071 4.56955 6.65455 4.52243L5.85575 3.0835C5.85574 3.0835 5.85575 3.08351 5.85575 3.0835C5.82693 3.03163 5.77226 2.99946 5.71299 2.99946H4.0566ZM6.84587 6.4891C6.84594 6.48937 6.84602 6.48964 6.8461 6.48992C6.87692 6.59592 6.92756 6.74945 7.00489 6.93034C7.1604 7.29408 7.41847 7.75592 7.82906 8.16651C7.82906 8.16651 7.82905 8.16651 7.82906 8.16651L7.48272 8.51285M7.82906 8.16651C8.2396 8.57704 8.70036 8.83408 9.06282 8.98853C9.24309 9.06536 9.39601 9.1155 9.50153 9.14596C9.50173 9.14602 9.50133 9.1459 9.50153 9.14596L10.8787 8.45787C10.8787 8.45786 10.8787 8.45787 10.8787 8.45787C11.2162 8.28907 11.6153 8.29781 11.9451 8.48118L13.3882 9.28346C13.7508 9.48509 13.9757 9.86739 13.9757 10.2823V11.939C13.9757 13.0888 12.89 13.9723 11.7463 13.5863C10.0943 13.0289 7.45172 11.9452 5.75105 10.2445C4.05037 8.54385 2.96669 5.90127 2.40926 4.24927C2.02335 3.10554 2.90677 2.01987 4.0566 2.01987H5.71299C6.12817 2.01987 6.51066 2.24503 6.71218 2.60799L7.51102 4.04698C7.69403 4.37666 7.70269 4.77545 7.53401 5.11279C7.534 5.1128 7.53401 5.11278 7.53401 5.11279L6.84587 6.4891" fill="#3BD7CF"/>
                                                    </svg>  
                                                    <span class="overview-client-detail-table">Phone</span>
                                                </div>
                                            </td>
                                            <td >
                                                <span class="overview-client-detail-table">{{ $result->client->phone }}</span>
                                            </td>
                                        </tr>
                                        <tr height="30px">
                                            <td >
                                                <div class="flex space-x-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33366 1.83333C3.24161 1.83333 3.16699 1.90795 3.16699 1.99999V14C3.16699 14.092 3.24161 14.1667 3.33366 14.1667H12.667C12.759 14.1667 12.8337 14.092 12.8337 14V1.99999C12.8337 1.90795 12.759 1.83333 12.667 1.83333H3.33366ZM2.16699 1.99999C2.16699 1.35566 2.68933 0.833328 3.33366 0.833328H12.667C13.3113 0.833328 13.8337 1.35566 13.8337 1.99999V14C13.8337 14.6443 13.3113 15.1667 12.667 15.1667H3.33366C2.68933 15.1667 2.16699 14.6443 2.16699 14V1.99999Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.16699 5.00001C6.16699 3.9875 6.98782 3.16667 8.00033 3.16667C9.01283 3.16667 9.83366 3.9875 9.83366 5.00001C9.83366 6.01251 9.01283 6.83334 8.00033 6.83334C6.98782 6.83334 6.16699 6.01251 6.16699 5.00001ZM8.00033 4.16667C7.5401 4.16667 7.16699 4.53978 7.16699 5.00001C7.16699 5.46023 7.5401 5.83334 8.00033 5.83334C8.46055 5.83334 8.83366 5.46023 8.83366 5.00001C8.83366 4.53978 8.46055 4.16667 8.00033 4.16667Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 8.33333C5.5 6.95262 6.61929 5.83333 8 5.83333C9.38071 5.83333 10.5 6.95262 10.5 8.33333C10.5 8.60947 10.2761 8.83333 10 8.83333C9.72386 8.83333 9.5 8.60947 9.5 8.33333C9.5 7.5049 8.82842 6.83333 8 6.83333C7.17158 6.83333 6.5 7.5049 6.5 8.33333C6.5 8.60947 6.27614 8.83333 6 8.83333C5.72386 8.83333 5.5 8.60947 5.5 8.33333Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 10.3333C5.5 10.0572 5.72386 9.83333 6 9.83333H10C10.2761 9.83333 10.5 10.0572 10.5 10.3333C10.5 10.6095 10.2761 10.8333 10 10.8333H6C5.72386 10.8333 5.5 10.6095 5.5 10.3333Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 12.3333C5.5 12.0572 5.72386 11.8333 6 11.8333H8.33333C8.60948 11.8333 8.83333 12.0572 8.83333 12.3333C8.83333 12.6095 8.60948 12.8333 8.33333 12.8333H6C5.72386 12.8333 5.5 12.6095 5.5 12.3333Z" fill="#3BD7CF"/>
                                                    </svg>
                                                    <span class="overview-client-detail-table">ID</span>
                                                </div>
                                            </td>
                                            <td >
                                                <span class="overview-client-detail-table">1992</span>
                                            </td>
                                        </tr>
                                        <tr height="30px">
                                            <td >
                                                <div class="flex space-x-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.3179 14.3118C13.4901 14.6885 13.9351 14.8543 14.3118 14.6821C14.6885 14.5099 14.8543 14.0649 14.6821 13.6882L13.3179 14.3118ZM7.98456 13.6882C7.81235 14.0649 7.97813 14.5099 8.35485 14.6821C8.73157 14.8543 9.17656 14.6885 9.34877 14.3118L7.98456 13.6882ZM11.3333 8L12.0199 7.6982C11.9002 7.42585 11.6308 7.25 11.3333 7.25C11.0358 7.25 10.7665 7.42585 10.6467 7.6982L11.3333 8ZM6.04485 1.76283C5.91386 1.36987 5.48912 1.1575 5.09616 1.28849C4.70321 1.41947 4.49084 1.84421 4.62182 2.23717L6.04485 1.76283ZM4.95515 3.23717C5.08614 3.63013 5.51088 3.8425 5.90384 3.71151C6.29679 3.58053 6.50917 3.15579 6.37818 2.76283L4.95515 3.23717ZM2 2.91667C1.58579 2.91667 1.25 3.25245 1.25 3.66667C1.25 4.08088 1.58579 4.41667 2 4.41667V2.91667ZM9.33333 4.41667C9.74755 4.41667 10.0833 4.08088 10.0833 3.66667C10.0833 3.25245 9.74755 2.91667 9.33333 2.91667V4.41667ZM4.05446 5.12722C3.94062 4.72896 3.52549 4.49838 3.12722 4.61221C2.72896 4.72604 2.49838 5.14118 2.61221 5.53945L4.05446 5.12722ZM5.42107 8.5797L5.88143 7.98761L5.88141 7.9876L5.42107 8.5797ZM9.06502 11.367C9.45182 11.5152 9.88551 11.3218 10.0337 10.935C10.1819 10.5482 9.98845 10.1145 9.60165 9.9663L9.06502 11.367ZM8.73282 3.82625C8.82096 3.42153 8.56431 3.02198 8.15959 2.93384C7.75486 2.8457 7.35531 3.10235 7.26718 3.50708L8.73282 3.82625ZM5.91227 7.92753L5.3766 7.4026L5.37659 7.40261L5.91227 7.92753ZM1.66307 9.99661C1.29301 10.1827 1.14386 10.6335 1.32994 11.0036C1.51602 11.3737 1.96687 11.5228 2.33693 11.3367L1.66307 9.99661ZM14.6821 13.6882L13.9202 12.0215L12.556 12.6452L13.3179 14.3118L14.6821 13.6882ZM9.34877 14.3118L10.1107 12.6452L8.74646 12.0215L7.98456 13.6882L9.34877 14.3118ZM10.1152 12.6351L12.0199 8.3018L10.6467 7.6982L8.74197 12.0315L10.1152 12.6351ZM10.6467 8.3018L12.5515 12.6351L13.9247 12.0315L12.0199 7.6982L10.6467 8.3018ZM13.2381 11.5833H9.42857V13.0833H13.2381V11.5833ZM4.62182 2.23717L4.95515 3.23717L6.37818 2.76283L6.04485 1.76283L4.62182 2.23717ZM2 4.41667H9.33333V2.91667H2V4.41667ZM3.33333 5.33333C2.61221 5.53945 2.61226 5.53963 2.61232 5.53983C2.61234 5.53991 2.6124 5.54011 2.61245 5.54027C2.61253 5.54057 2.61263 5.54091 2.61274 5.54128C2.61295 5.54202 2.6132 5.54289 2.61349 5.54389C2.61407 5.54588 2.6148 5.54838 2.61568 5.55137C2.61745 5.55736 2.61982 5.56533 2.62282 5.5752C2.62882 5.59494 2.63732 5.62227 2.64839 5.65644C2.67052 5.72475 2.70304 5.82068 2.74658 5.93816C2.83344 6.17256 2.96539 6.49598 3.14805 6.85892C3.50767 7.57345 4.09078 8.49544 4.96072 9.1718L5.88141 7.9876C5.26012 7.50456 4.79936 6.80336 4.48792 6.18457C4.33506 5.88084 4.22467 5.61005 4.1531 5.41691C4.11742 5.32063 4.09168 5.24445 4.07536 5.1941C4.06721 5.16895 4.06144 5.15031 4.05797 5.1389C4.05624 5.13321 4.05508 5.12932 4.0545 5.12734C4.05421 5.12635 4.05406 5.12584 4.05405 5.12582C4.05405 5.1258 4.05408 5.12591 4.05415 5.12615C4.05418 5.12626 4.05422 5.12641 4.05428 5.12659C4.0543 5.12668 4.05435 5.12684 4.05436 5.12688C4.05441 5.12705 4.05446 5.12722 3.33333 5.33333ZM4.96071 9.17179C5.77111 9.80189 6.80749 10.3513 7.61407 10.7352C8.02259 10.9296 8.38278 11.0866 8.64142 11.1952C8.77088 11.2495 8.87528 11.2919 8.94801 11.321C8.98439 11.3355 9.01287 11.3467 9.03264 11.3545C9.04252 11.3583 9.05023 11.3613 9.05566 11.3634C9.05838 11.3645 9.06052 11.3653 9.06209 11.3659C9.06287 11.3662 9.06351 11.3664 9.06399 11.3666C9.06424 11.3667 9.06445 11.3668 9.06462 11.3669C9.0647 11.3669 9.0648 11.3669 9.06485 11.367C9.06494 11.367 9.06502 11.367 9.33333 10.6667C9.60165 9.9663 9.60171 9.96633 9.60177 9.96635C9.60177 9.96635 9.60182 9.96637 9.60183 9.96637C9.60185 9.96638 9.60184 9.96638 9.60179 9.96636C9.60169 9.96632 9.60145 9.96623 9.60106 9.96608C9.60028 9.96578 9.59893 9.96526 9.59702 9.96452C9.5932 9.96304 9.58713 9.96068 9.57892 9.95747C9.5625 9.95105 9.53751 9.94121 9.50477 9.92812C9.43928 9.90194 9.34288 9.86282 9.22206 9.81209C8.98015 9.71053 8.64188 9.56314 8.25873 9.38077C7.48197 9.01105 6.56223 8.51694 5.88143 7.98761L4.96071 9.17179ZM8 3.66667C7.26718 3.50708 7.2672 3.50695 7.26723 3.50682C7.26724 3.50679 7.26726 3.50668 7.26727 3.50662C7.2673 3.50651 7.26731 3.50644 7.26732 3.50642C7.26733 3.50636 7.26731 3.50646 7.26725 3.50673C7.26713 3.50727 7.26687 3.50845 7.26646 3.51026C7.26565 3.51388 7.26426 3.52002 7.26228 3.52856C7.25832 3.54564 7.25203 3.5723 7.24332 3.60759C7.22588 3.67819 7.19886 3.78307 7.16172 3.91463C7.08726 4.17835 6.97301 4.54604 6.81507 4.95792C6.49258 5.79891 6.01524 6.7509 5.3766 7.4026L6.44794 8.45247C7.30053 7.58244 7.86706 6.40399 8.21563 5.49498C8.39321 5.03186 8.52129 4.61966 8.60528 4.32224C8.64735 4.17322 8.67858 4.05222 8.6996 3.96709C8.71011 3.9245 8.71808 3.89082 8.72359 3.86704C8.72635 3.85515 8.72849 3.84572 8.73002 3.83888C8.73079 3.83546 8.73141 3.83269 8.73187 3.83058C8.73211 3.82953 8.7323 3.82864 8.73246 3.82792C8.73254 3.82756 8.73261 3.82724 8.73267 3.82696C8.7327 3.82682 8.73274 3.82664 8.73275 3.82657C8.73279 3.82641 8.73282 3.82625 8 3.66667ZM5.37659 7.40261C4.69234 8.10087 3.77249 8.74881 2.99956 9.23167C2.61757 9.47031 2.28046 9.66309 2.03963 9.79579C1.91936 9.86207 1.82349 9.91314 1.7585 9.94724C1.72601 9.96428 1.70127 9.97707 1.68509 9.98538C1.677 9.98953 1.67105 9.99256 1.66735 9.99444C1.66549 9.99538 1.6642 9.99604 1.66349 9.9964C1.66313 9.99658 1.66291 9.99669 1.66284 9.99672C1.66281 9.99674 1.66281 9.99674 1.66285 9.99672C1.66287 9.99671 1.66292 9.99668 1.66293 9.99668C1.663 9.99665 1.66307 9.99661 2 10.6667C2.33693 11.3367 2.33702 11.3367 2.33712 11.3366C2.33717 11.3366 2.33728 11.3365 2.33737 11.3365C2.33756 11.3364 2.33778 11.3363 2.33804 11.3362C2.33856 11.3359 2.33922 11.3356 2.34003 11.3352C2.34166 11.3343 2.34386 11.3332 2.34664 11.3318C2.35218 11.329 2.36001 11.325 2.37002 11.3199C2.39003 11.3096 2.41876 11.2947 2.45539 11.2755C2.52862 11.2371 2.63354 11.1812 2.76355 11.1095C3.02327 10.9664 3.38463 10.7598 3.7943 10.5038C4.60471 9.99756 5.64099 9.27594 6.44794 8.45246L5.37659 7.40261Z" fill="#3BD7CF"/>
                                                    </svg>    
                                                    <span class="overview-client-detail-table">Language</span>
                                                </div>
                                            </td>
                                            <td >
                                                <span class="overview-client-detail-table">{{ $result->client->languages }}</span>
                                            </td>
                                        </tr>
                                        <tr height="30px">
                                            <td >
                                                <div class="flex space-x-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.06353 1.57883C1.20716 1.48694 1.38772 1.47457 1.54254 1.54602L5.67387 3.45279L10.136 1.54043C10.2662 1.48464 10.4139 1.48667 10.5425 1.54602L14.8759 3.54602C15.0529 3.62775 15.1663 3.80498 15.1663 4V14C15.1663 14.1705 15.0794 14.3293 14.9358 14.4212C14.7922 14.5131 14.6116 14.5254 14.4568 14.454L10.3255 12.5472L5.8633 14.4596C5.73313 14.5154 5.5854 14.5133 5.45681 14.454L1.12348 12.454C0.946404 12.3723 0.833008 12.195 0.833008 12V2C0.833008 1.82949 0.919902 1.67073 1.06353 1.57883ZM10.3255 2.54721L5.8633 4.45957C5.73313 4.51536 5.5854 4.51333 5.45681 4.45398L1.83301 2.78146V11.6801L5.67387 13.4528L10.136 11.5404C10.2662 11.4846 10.4139 11.4867 10.5425 11.546L14.1663 13.2185V4.31992L10.3255 2.54721Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.333 1.5C10.6092 1.5 10.833 1.72386 10.833 2V12C10.833 12.2761 10.6092 12.5 10.333 12.5C10.0569 12.5 9.83301 12.2761 9.83301 12V2C9.83301 1.72386 10.0569 1.5 10.333 1.5Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.66699 3.5C5.94313 3.5 6.16699 3.72386 6.16699 4V14C6.16699 14.2761 5.94313 14.5 5.66699 14.5C5.39085 14.5 5.16699 14.2761 5.16699 14V4C5.16699 3.72386 5.39085 3.5 5.66699 3.5Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1365 1.54043C10.2667 1.48464 10.4144 1.48667 10.543 1.54602L12.7096 2.54602C12.9604 2.66174 13.0698 2.9588 12.9541 3.20953C12.8384 3.46026 12.5413 3.5697 12.2906 3.45398L10.3259 2.54721L5.86375 4.45957C5.73357 4.51536 5.58585 4.51333 5.45726 4.45398L3.29059 3.45398C3.03987 3.33826 2.93042 3.0412 3.04614 2.79047C3.16186 2.53974 3.45892 2.4303 3.70965 2.54602L5.67432 3.45279L10.1365 1.54043Z" fill="#3BD7CF"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1365 11.5404C10.2667 11.4846 10.4144 11.4867 10.543 11.546L12.7096 12.546C12.9604 12.6617 13.0698 12.9588 12.9541 13.2095C12.8384 13.4603 12.5413 13.5697 12.2906 13.454L10.3259 12.5472L5.86375 14.4596C5.73357 14.5154 5.58585 14.5133 5.45726 14.454L3.29059 13.454C3.03987 13.3383 2.93042 13.0412 3.04614 12.7905C3.16186 12.5397 3.45892 12.4303 3.70965 12.546L5.67432 13.4528L10.1365 11.5404Z" fill="#3BD7CF"/>
                                                    </svg>    
                                                    <span class="overview-client-detail-table">Address</span>
                                                </div>
                                            </td>
                                            <td >
                                                <span class="overview-client-detail-table">{{ $result->client->address }}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="bg-bgbody  rounded mt-3 mb-7">
                            <span class="overview-client-detail border-b border-b-[#ECECEC] px-4 pt-[18.5px] pb-[14.5px]">Comments</span>
                            <div id="comment{{ $result->id }}" class="p-4">
                                {{-- Messages --}}
                                @foreach ($result->comment as $val )
                                
                                    <div class="flex space-x-2 mt-6">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Setting/avatar/'.$val->avatar) }}" alt="">
                                        <div class="w-full">
                                            <div class="flex space-x-4">
                                                <div class="flex space-x-1 justify-center items-center">
                                                    <div class="overview-comments-name text-colortext">{{ $val->name }}</div>
                                                    <div class="overview-comments-name text-colorStatusCard1">{{ Carbon\Carbon::parse($val->created_at)->format('d M Y') }} - {{ Carbon\Carbon::parse($val->created_at)->format('g:i A') }}</div>
                                                </div>
                                            </div>
                                            <span class="overview-comments-body">{{ $val->comment }}</span>
                                            
                                            <div onclick="reply({{ $val->id }})" class="flex justify-center items-center space-x-1 p-1 w-[57px] h-6 bg-[#EEEEEE] rounded-md hover:cursor-pointer my-4">
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89406 0.870148C7.0825 0.946764 7.20574 1.12991 7.20574 1.33333V4.23948C9.24219 4.36525 11.0006 5.17118 12.4587 6.6488C14.0264 8.23736 14.926 10.2167 15.1638 12.5616C15.186 12.781 15.0619 12.9892 14.8581 13.0738C14.6544 13.1584 14.4193 13.0995 14.2796 12.9289C12.6603 10.9523 11.3053 9.94268 10.2174 9.71184C9.16141 9.48779 8.15845 9.43122 7.20574 9.53692V12.6667C7.20574 12.8725 7.07957 13.0573 6.88786 13.1323C6.69614 13.2073 6.47806 13.1571 6.3384 13.0059L0.965671 7.18764C0.785295 6.99231 0.789334 6.68997 0.974862 6.49953L6.3476 0.984428C6.48954 0.838719 6.70562 0.793533 6.89406 0.870148ZM2.02208 6.85763L6.20574 11.3882V9.101C6.20574 8.85604 6.38321 8.64715 6.62495 8.60757C7.83739 8.40904 9.10543 8.45365 10.4249 8.73362C11.5084 8.96351 12.6472 9.72497 13.8426 10.9385C13.4471 9.55815 12.7479 8.36548 11.747 7.35119L11.7469 7.35119C10.3584 5.94402 8.68603 5.238 6.70179 5.22231C6.4272 5.22014 6.20574 4.99693 6.20574 4.72233V2.56311L2.02208 6.85763Z" fill="#AFABAB"/>
                                                </svg>
                                                <span class="overview-comments-reply">Reply</span>
                                            </div>

                                            {{-- Messages Reply --}}
                                            <div class="reply_your_comment{{ $val->id }} w-full space-y-4">
                                                @foreach ($val->job_models_comments_reply as $reply )
                                                    <div class="flex space-x-2">
                                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Setting/avatar/'.$reply->avatar) }}" alt="">
                                                        <div class="max-w-xl">
                                                            <div class="flex space-x-4">
                                                                <div class="flex space-x-1 justify-center items-center">
                                                                    <div class="overview-comments-name text-colortext">{{ $reply->name }}</div>
                                                                    <div class="overview-comments-name text-colorStatusCard1">{{ Carbon\Carbon::parse($reply->created_at)->format('d M Y') }} - {{ Carbon\Carbon::parse($reply->created_at)->format('g:i A') }}</div>
                                                                </div>
                                                            </div>
                                                            <span class="overview-comments-body">{{ $reply->comment }}</span>   
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <input class="comment_id{{ $val->id }}" type="hidden" value="{{ $val->id }}">
                                            <div class="add_reply{{ $val->id }}">

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="comment-text px-4 mt-6">
                                <span class="overview-comments-leave text-colortext">Leave Comments</span>
                                <div class="border w-full rounded-md text-xs ">
                                    <textarea id="message" rows="4" class="message block p-2.5 w-full text-sm text-colortext bg-[#F7F7F7] rounded  border-none outline-none focus:ring-0" placeholder="Enter a comments"></textarea>
                                </div>
                            </div>
                            <div class="buttton_comment flex justify-end px-4 mt-2 mb-8">
                                <button onclick="post_comment()" class="w-40 h-[42px] bg-palet rounded-md ">
                                    <span class="overview-attechment-btn-text justify-center">Post Comments</span>
                                </button>
                            </div>
                            <div class="flex mt-6"></div>
                        </div>
                    </div>

                    {{-- left --}}
                    <div class="w-[300px] xl:w-[30%] ">
                        {{-- Attechment --}}
                        <div class="bg-bgbody rounded">
                            <div class="flex justify-between px-4 pt-[18.5px]">
                                <div class="flex space-x-2 ">
                                    <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                    <span class="text-[#222222] font-semibold">Attachments</span>
                                </div>
                                <label for="file">
                                    <form id="upload-file" action="{{ route('jobboard.upload_file') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="flex justify-center items-center px-5 w-[99px] h-6 bg-hover rounded space-x-1 hover:cursor-pointer">
                                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 4.625C10.2071 4.625 10.375 4.79289 10.375 5V9.5C10.375 9.70711 10.2071 9.875 10 9.875H1C0.792893 9.875 0.625 9.70711 0.625 9.5V5.00208C0.625 4.79497 0.792893 4.62708 1 4.62708C1.20711 4.62708 1.375 4.79497 1.375 5.00208V9.125H9.625V5C9.625 4.79289 9.79289 4.625 10 4.625Z" fill="#3BD7CF"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23483 0.234835C5.38128 0.0883883 5.61872 0.0883883 5.76517 0.234835L8.01516 2.48483C8.16161 2.63128 8.16161 2.86872 8.01516 3.01517C7.86872 3.16161 7.63128 3.16161 7.48484 3.01517L5.5 1.03033L3.51517 3.01517C3.36872 3.16161 3.13128 3.16161 2.98483 3.01517C2.83839 2.86872 2.83839 2.63128 2.98483 2.48483L5.23483 0.234835Z" fill="#3BD7CF"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.49805 0.125C5.70515 0.125 5.87305 0.292893 5.87305 0.5V7C5.87305 7.20711 5.70515 7.375 5.49805 7.375C5.29094 7.375 5.12305 7.20711 5.12305 7V0.5C5.12305 0.292893 5.29094 0.125 5.49805 0.125Z" fill="#3BD7CF"/>
                                            </svg> 
                                            <span class="overview-send-job text-palet">Upload</span>
                                        </div>
                                        <input class="job_models_id" name="job_models_id" type="hidden" value="{{ $result->id }}">
                                        <input id="file" type="file" name="file" class="hidden">
                                    </form>
                                </label>
                            </div>
                            <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                            <div class="px-4 mt-4 space-y-3">
                                {{-- Download --}}
                                @foreach ($result->file as $val )
                                    <a href="{{ route('jobboard.download_file' , ['file' => $val->file]) }}" class="flex items-center justify-between w-full  h-[60px] border-[2px] border-dotted border-gray-300 px-3 hover:cursor-pointer">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center justify-center w-8 h-8 bg-[#F3F3F3] rounded-md">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M3.33301 12.1666C3.60915 12.1666 3.83301 12.3905 3.83301 12.6666V14.1666H12.1663V12.6666C12.1663 12.3905 12.3902 12.1666 12.6663 12.1666C12.9425 12.1666 13.1663 12.3905 13.1663 12.6666V14.6666C13.1663 14.9428 12.9425 15.1666 12.6663 15.1666H3.33301C3.05687 15.1666 2.83301 14.9428 2.83301 14.6666V12.6666C2.83301 12.3905 3.05687 12.1666 3.33301 12.1666Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M2.83301 1.33337C2.83301 1.05723 3.05687 0.833374 3.33301 0.833374H9.99967C10.1516 0.833374 10.2952 0.902419 10.3901 1.02103L13.0568 4.35436C13.1277 4.44302 13.1663 4.55317 13.1663 4.66671V6.66671C13.1663 6.94285 12.9425 7.16671 12.6663 7.16671C12.3902 7.16671 12.1663 6.94285 12.1663 6.66671V4.8421L9.75936 1.83337H3.83301V6.66671C3.83301 6.94285 3.60915 7.16671 3.33301 7.16671C3.05687 7.16671 2.83301 6.94285 2.83301 6.66671V1.33337Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M9.33301 0.833374C9.60915 0.833374 9.83301 1.05723 9.83301 1.33337V4.16671H12.6663C12.9425 4.16671 13.1663 4.39056 13.1663 4.66671C13.1663 4.94285 12.9425 5.16671 12.6663 5.16671H9.33301C9.05687 5.16671 8.83301 4.94285 8.83301 4.66671V1.33337C8.83301 1.05723 9.05687 0.833374 9.33301 0.833374Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M1.99967 7.16663C1.90763 7.16663 1.83301 7.24125 1.83301 7.33329V12C1.83301 12.092 1.90763 12.1666 1.99967 12.1666H13.9997C14.0917 12.1666 14.1663 12.092 14.1663 12V7.33329C14.1663 7.24125 14.0917 7.16663 13.9997 7.16663H1.99967ZM0.833008 7.33329C0.833008 6.68896 1.35534 6.16663 1.99967 6.16663H13.9997C14.644 6.16663 15.1663 6.68896 15.1663 7.33329V12C15.1663 12.6443 14.644 13.1666 13.9997 13.1666H1.99967C1.35534 13.1666 0.833008 12.6443 0.833008 12V7.33329Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M7 7.83337C7.27614 7.83337 7.5 8.05723 7.5 8.33337V11C7.5 11.2762 7.27614 11.5 7 11.5C6.72386 11.5 6.5 11.2762 6.5 11V8.33337C6.5 8.05723 6.72386 7.83337 7 7.83337Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M3.33301 7.83337C3.60915 7.83337 3.83301 8.05723 3.83301 8.33337V11C3.83301 11.2762 3.60915 11.5 3.33301 11.5C3.05687 11.5 2.83301 11.2762 2.83301 11V8.33337C2.83301 8.05723 3.05687 7.83337 3.33301 7.83337Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M10.167 8.33337C10.167 8.05723 10.3908 7.83337 10.667 7.83337H12.3337C12.6098 7.83337 12.8337 8.05723 12.8337 8.33337C12.8337 8.60952 12.6098 8.83337 12.3337 8.83337H11.167V11C11.167 11.2762 10.9431 11.5 10.667 11.5C10.3908 11.5 10.167 11.2762 10.167 11V8.33337Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M10.167 10C10.167 9.72386 10.3908 9.5 10.667 9.5H12.3337C12.6098 9.5 12.8337 9.72386 12.8337 10C12.8337 10.2761 12.6098 10.5 12.3337 10.5H10.667C10.3908 10.5 10.167 10.2761 10.167 10Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M2.83301 8.33337C2.83301 8.05723 3.05687 7.83337 3.33301 7.83337H4.49967C5.23605 7.83337 5.83301 8.43033 5.83301 9.16671C5.83301 9.90308 5.23605 10.5 4.49967 10.5H3.33301C3.05687 10.5 2.83301 10.2762 2.83301 10C2.83301 9.7239 3.05687 9.50004 3.33301 9.50004H4.49967C4.68377 9.50004 4.83301 9.3508 4.83301 9.16671C4.83301 8.98262 4.68377 8.83337 4.49967 8.83337H3.33301C3.05687 8.83337 2.83301 8.60952 2.83301 8.33337Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M6.5 8.33337C6.5 8.05723 6.72386 7.83337 7 7.83337H7.66667C8.67918 7.83337 9.5 8.6542 9.5 9.66671C9.5 10.6792 8.67918 11.5 7.66667 11.5H7C6.72386 11.5 6.5 11.2762 6.5 11C6.5 10.7239 6.72386 10.5 7 10.5H7.66667C8.12689 10.5 8.5 10.1269 8.5 9.66671C8.5 9.20648 8.12689 8.83337 7.66667 8.83337H7C6.72386 8.83337 6.5 8.60952 6.5 8.33337Z" />
                                                    <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M4.83301 4C4.83301 3.72386 5.05687 3.5 5.33301 3.5H6.66634C6.94248 3.5 7.16634 3.72386 7.16634 4C7.16634 4.27614 6.94248 4.5 6.66634 4.5H5.33301C5.05687 4.5 4.83301 4.27614 4.83301 4Z" />
                                                </svg> 
                                            </div>
                                            <div>
                                                <div class="overview-attechment-title text-colortext">{{ $val->file }}</div>
                                                <div class="overview-attechment-size text-[#AFABAB]">{{ number_format(Illuminate\Support\Facades\Storage::size('public/Jobs attached file/'.$val->file) / 1024 , 2) }} KB</div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center space-x-3">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path  fill-rule="evenodd" clip-rule="evenodd" d="M1.5 12.1018C1.5 11.8257 1.72386 11.6018 2 11.6018H14C14.2761 11.6018 14.5 11.8257 14.5 12.1018C14.5 12.3779 14.2761 12.6018 14 12.6018H2C1.72386 12.6018 1.5 12.3779 1.5 12.1018Z" fill="#222222"/>
                                                <path  fill-rule="evenodd" clip-rule="evenodd" d="M1.5 14C1.5 13.7239 1.72386 13.5 2 13.5H14C14.2761 13.5 14.5 13.7239 14.5 14C14.5 14.2761 14.2761 14.5 14 14.5H2C1.72386 14.5 1.5 14.2761 1.5 14Z" fill="#222222"/>
                                                <path  fill-rule="evenodd" clip-rule="evenodd" d="M5.64645 7.31307C5.84171 7.11781 6.15829 7.11781 6.35355 7.31307L8 8.95952L9.64645 7.31307C9.84171 7.11781 10.1583 7.11781 10.3536 7.31307C10.5488 7.50833 10.5488 7.82492 10.3536 8.02018L8.35355 10.0202C8.15829 10.2154 7.84171 10.2154 7.64645 10.0202L5.64645 8.02018C5.45118 7.82492 5.45118 7.50833 5.64645 7.31307Z" fill="#222222"/>
                                                <path  fill-rule="evenodd" clip-rule="evenodd" d="M8 1.5C8.27614 1.5 8.5 1.72386 8.5 2V9.66667C8.5 9.94281 8.27614 10.1667 8 10.1667C7.72386 10.1667 7.5 9.94281 7.5 9.66667V2C7.5 1.72386 7.72386 1.5 8 1.5Z" fill="#222222"/>
                                            </svg>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 9C4.55228 9 5 8.55228 5 8C5 7.44772 4.55228 7 4 7C3.44772 7 3 7.44772 3 8C3 8.55228 3.44772 9 4 9Z" fill="#827C7C"/>
                                                <path d="M8 9C8.55228 9 9 8.55228 9 8C9 7.44772 8.55228 7 8 7C7.44772 7 7 7.44772 7 8C7 8.55228 7.44772 9 8 9Z" fill="#827C7C"/>
                                                <path d="M12 9C12.5523 9 13 8.55228 13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8C11 8.55228 11.4477 9 12 9Z" fill="#827C7C"/>
                                            </svg>
                                        </div>
                                    </a>                                 
                                @endforeach
                                    @if ($result->client->attached_file)
                                        <a href="{{ route('jobboard.download_file' , ['file' => $result->client->attached_file->attached_file]) }}" class="flex items-center justify-between w-full  h-[60px] border-[2px] border-dotted border-gray-300 px-3 hover:cursor-pointer">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex items-center justify-center w-8 h-8 bg-[#F3F3F3] rounded-md">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M3.33301 12.1666C3.60915 12.1666 3.83301 12.3905 3.83301 12.6666V14.1666H12.1663V12.6666C12.1663 12.3905 12.3902 12.1666 12.6663 12.1666C12.9425 12.1666 13.1663 12.3905 13.1663 12.6666V14.6666C13.1663 14.9428 12.9425 15.1666 12.6663 15.1666H3.33301C3.05687 15.1666 2.83301 14.9428 2.83301 14.6666V12.6666C2.83301 12.3905 3.05687 12.1666 3.33301 12.1666Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M2.83301 1.33337C2.83301 1.05723 3.05687 0.833374 3.33301 0.833374H9.99967C10.1516 0.833374 10.2952 0.902419 10.3901 1.02103L13.0568 4.35436C13.1277 4.44302 13.1663 4.55317 13.1663 4.66671V6.66671C13.1663 6.94285 12.9425 7.16671 12.6663 7.16671C12.3902 7.16671 12.1663 6.94285 12.1663 6.66671V4.8421L9.75936 1.83337H3.83301V6.66671C3.83301 6.94285 3.60915 7.16671 3.33301 7.16671C3.05687 7.16671 2.83301 6.94285 2.83301 6.66671V1.33337Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M9.33301 0.833374C9.60915 0.833374 9.83301 1.05723 9.83301 1.33337V4.16671H12.6663C12.9425 4.16671 13.1663 4.39056 13.1663 4.66671C13.1663 4.94285 12.9425 5.16671 12.6663 5.16671H9.33301C9.05687 5.16671 8.83301 4.94285 8.83301 4.66671V1.33337C8.83301 1.05723 9.05687 0.833374 9.33301 0.833374Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M1.99967 7.16663C1.90763 7.16663 1.83301 7.24125 1.83301 7.33329V12C1.83301 12.092 1.90763 12.1666 1.99967 12.1666H13.9997C14.0917 12.1666 14.1663 12.092 14.1663 12V7.33329C14.1663 7.24125 14.0917 7.16663 13.9997 7.16663H1.99967ZM0.833008 7.33329C0.833008 6.68896 1.35534 6.16663 1.99967 6.16663H13.9997C14.644 6.16663 15.1663 6.68896 15.1663 7.33329V12C15.1663 12.6443 14.644 13.1666 13.9997 13.1666H1.99967C1.35534 13.1666 0.833008 12.6443 0.833008 12V7.33329Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M7 7.83337C7.27614 7.83337 7.5 8.05723 7.5 8.33337V11C7.5 11.2762 7.27614 11.5 7 11.5C6.72386 11.5 6.5 11.2762 6.5 11V8.33337C6.5 8.05723 6.72386 7.83337 7 7.83337Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M3.33301 7.83337C3.60915 7.83337 3.83301 8.05723 3.83301 8.33337V11C3.83301 11.2762 3.60915 11.5 3.33301 11.5C3.05687 11.5 2.83301 11.2762 2.83301 11V8.33337C2.83301 8.05723 3.05687 7.83337 3.33301 7.83337Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M10.167 8.33337C10.167 8.05723 10.3908 7.83337 10.667 7.83337H12.3337C12.6098 7.83337 12.8337 8.05723 12.8337 8.33337C12.8337 8.60952 12.6098 8.83337 12.3337 8.83337H11.167V11C11.167 11.2762 10.9431 11.5 10.667 11.5C10.3908 11.5 10.167 11.2762 10.167 11V8.33337Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M10.167 10C10.167 9.72386 10.3908 9.5 10.667 9.5H12.3337C12.6098 9.5 12.8337 9.72386 12.8337 10C12.8337 10.2761 12.6098 10.5 12.3337 10.5H10.667C10.3908 10.5 10.167 10.2761 10.167 10Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M2.83301 8.33337C2.83301 8.05723 3.05687 7.83337 3.33301 7.83337H4.49967C5.23605 7.83337 5.83301 8.43033 5.83301 9.16671C5.83301 9.90308 5.23605 10.5 4.49967 10.5H3.33301C3.05687 10.5 2.83301 10.2762 2.83301 10C2.83301 9.7239 3.05687 9.50004 3.33301 9.50004H4.49967C4.68377 9.50004 4.83301 9.3508 4.83301 9.16671C4.83301 8.98262 4.68377 8.83337 4.49967 8.83337H3.33301C3.05687 8.83337 2.83301 8.60952 2.83301 8.33337Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M6.5 8.33337C6.5 8.05723 6.72386 7.83337 7 7.83337H7.66667C8.67918 7.83337 9.5 8.6542 9.5 9.66671C9.5 10.6792 8.67918 11.5 7.66667 11.5H7C6.72386 11.5 6.5 11.2762 6.5 11C6.5 10.7239 6.72386 10.5 7 10.5H7.66667C8.12689 10.5 8.5 10.1269 8.5 9.66671C8.5 9.20648 8.12689 8.83337 7.66667 8.83337H7C6.72386 8.83337 6.5 8.60952 6.5 8.33337Z" />
                                                        <path fill="#FA9D6B" fill-rule="evenodd" clip-rule="evenodd" d="M4.83301 4C4.83301 3.72386 5.05687 3.5 5.33301 3.5H6.66634C6.94248 3.5 7.16634 3.72386 7.16634 4C7.16634 4.27614 6.94248 4.5 6.66634 4.5H5.33301C5.05687 4.5 4.83301 4.27614 4.83301 4Z" />
                                                    </svg> 
                                                </div>
                                                <div>
                                                    <div class="overview-attechment-title text-colortext">{{ $result->client->attached_file->attached_file }}</div>
                                                    <div class="overview-attechment-size text-[#AFABAB]">{{ number_format(Illuminate\Support\Facades\Storage::size('public/Jobs attached file/'.$result->client->attached_file->attached_file) / 1024 , 2) }} KB</div>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-center space-x-3">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M1.5 12.1018C1.5 11.8257 1.72386 11.6018 2 11.6018H14C14.2761 11.6018 14.5 11.8257 14.5 12.1018C14.5 12.3779 14.2761 12.6018 14 12.6018H2C1.72386 12.6018 1.5 12.3779 1.5 12.1018Z" fill="#222222"/>
                                                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M1.5 14C1.5 13.7239 1.72386 13.5 2 13.5H14C14.2761 13.5 14.5 13.7239 14.5 14C14.5 14.2761 14.2761 14.5 14 14.5H2C1.72386 14.5 1.5 14.2761 1.5 14Z" fill="#222222"/>
                                                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M5.64645 7.31307C5.84171 7.11781 6.15829 7.11781 6.35355 7.31307L8 8.95952L9.64645 7.31307C9.84171 7.11781 10.1583 7.11781 10.3536 7.31307C10.5488 7.50833 10.5488 7.82492 10.3536 8.02018L8.35355 10.0202C8.15829 10.2154 7.84171 10.2154 7.64645 10.0202L5.64645 8.02018C5.45118 7.82492 5.45118 7.50833 5.64645 7.31307Z" fill="#222222"/>
                                                    <path  fill-rule="evenodd" clip-rule="evenodd" d="M8 1.5C8.27614 1.5 8.5 1.72386 8.5 2V9.66667C8.5 9.94281 8.27614 10.1667 8 10.1667C7.72386 10.1667 7.5 9.94281 7.5 9.66667V2C7.5 1.72386 7.72386 1.5 8 1.5Z" fill="#222222"/>
                                                </svg>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 9C4.55228 9 5 8.55228 5 8C5 7.44772 4.55228 7 4 7C3.44772 7 3 7.44772 3 8C3 8.55228 3.44772 9 4 9Z" fill="#827C7C"/>
                                                    <path d="M8 9C8.55228 9 9 8.55228 9 8C9 7.44772 8.55228 7 8 7C7.44772 7 7 7.44772 7 8C7 8.55228 7.44772 9 8 9Z" fill="#827C7C"/>
                                                    <path d="M12 9C12.5523 9 13 8.55228 13 8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8C11 8.55228 11.4477 9 12 9Z" fill="#827C7C"/>
                                                </svg>
                                            </div>
                                        </a>  
                                    @endif
                                {{-- Button --}}
                                <button data-modal-toggle="upload_progress" class="flex items-center justify-center w-full xl:w-[268px] h-[42px] bg-palet rounded-md">
                                    <span class="overview-attechment-btn-text">View more</span> 
                                </button>
                                <div class="flex mt-2"></div>
                            </div>
                        </div>

                        {{-- Task --}}
                        <div class="bg-bgbody rounded mt-3 ">
                            <div class="px-4 pt-[18.5px]">
                                <div class="flex space-x-2 ">
                                    <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                    <span class="text-[#222222] font-semibold">Task</span>
                                </div>
                            </div>
                            <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                            <div class="px-4 mt-4 space-y-8 ">
                                {{-- Task body --}}

                                @foreach ($result->actifities as $val)
                                    @if ($val->type == 'TASK')
                                        <div class="flex items-center space-x-3">
                                            <div>
                                                <div class="flex justify-center items-center w-8 h-8 bg-palet rounded-full">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.83301 1.99992C1.83301 1.35559 2.35534 0.833252 2.99967 0.833252H9.66634C9.94248 0.833252 10.1663 1.05711 10.1663 1.33325C10.1663 1.60939 9.94248 1.83325 9.66634 1.83325H2.99967C2.90763 1.83325 2.83301 1.90787 2.83301 1.99992V13.9999C2.83301 14.092 2.90762 14.1666 2.99967 14.1666H12.333C12.4251 14.1666 12.4997 14.092 12.4997 13.9999V6.66812C12.4997 6.39198 12.7235 6.16812 12.9997 6.16812C13.2758 6.16812 13.4997 6.39198 13.4997 6.66812V13.9999C13.4997 14.6443 12.9774 15.1666 12.333 15.1666H2.99967C2.35535 15.1666 1.83301 14.6443 1.83301 13.9999V1.99992Z" fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 6C3.83301 5.72386 4.05687 5.5 4.33301 5.5H6.99967C7.27582 5.5 7.49967 5.72386 7.49967 6C7.49967 6.27614 7.27582 6.5 6.99967 6.5H4.33301C4.05687 6.5 3.83301 6.27614 3.83301 6Z" fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83301 9.33325C3.83301 9.05711 4.05687 8.83325 4.33301 8.83325H8.33301C8.60915 8.83325 8.83301 9.05711 8.83301 9.33325C8.83301 9.60939 8.60915 9.83325 8.33301 9.83325H4.33301C4.05687 9.83325 3.83301 9.60939 3.83301 9.33325Z" fill="white"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0198 1.64669C14.215 1.84195 14.215 2.15853 14.0198 2.3538L10.0215 6.35207C9.82626 6.54733 9.50968 6.54733 9.31442 6.35207C9.11915 6.15681 9.11915 5.84023 9.31441 5.64496L13.3126 1.64669C13.5079 1.45143 13.8245 1.45143 14.0198 1.64669Z" fill="white"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="space-y-1">

                                                <div class="text-sm  text-[#222222] font-semibold">Quote accept by {{ $val->name }}</div>
                                                <div class="text-sm"><span class="text-[#FA9D6B] ">{{ Carbon\Carbon::parse($val->created_at)->diffForHumans() }}</span> / {{ $val->name }}</div>
                                            </div>
                                        </div>
                                    @endif  
                                @endforeach
       
                                {{-- Button --}}
                                <a href="#" class="flex items-center justify-center w-full xl:w-[268px] h-[42px] bg-palet rounded-md mb-5">
                                    <span class="overview-attechment-btn-text">View more</span> 
                                </a>
                                <div class="flex mt-4"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                 {{-- Tabs Task --}}
                <div class="flex space-x-2 mt-6" id="task" role="tabpanel" aria-labelledby="task-tab">
                    <div class="w-[1016px] xl:w-full ">
                        <div class="bg-bgbody rounded">
                            <div class="flex items-center space-x-8 px-4 pt-[18.5px]">
                                <div class="flex space-x-2 ">
                                    <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                    <span class="text-[#222222] font-semibold">Task</span>
                                </div>
                                <div class="relative w-[340px] left-1">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                                        </svg>
                                    </div>
                                    <input type="text" class="search_task bg-gray-200 border-none  text-colortext text-xs rounded-lg w-full pl-10 p-2 outline-none focus:ring-0" placeholder="Search name task" required>
                                </div>
                            </div>
                            <div class="mt-[30px] px-4">
                                <table width="100%">
                                    <tr>
                                        <td height="66px" width="12%">

                                        </td>
                                        <td height="66px" width="40%">
                                            <span class="task-text">List of task</span>
                                        </td>
                                        <td height="66px" width="25%">
                                            <span class="task-text">Status of task</span>
                                        </td>
                                        <td height="66px">
                                            <span class="task-text">Assignee</span>
                                        </td>
                                    </tr>
                                    <tbody class="load-task">
                                        @foreach ($result->task as $task)
                                            <tr class="hover:bg-[#F7F7F7] cursor-pointer loader-checked{{ $task->id }}">
                                                <td height="66px" width="12%">
                                                    <div class="flex items-center justify-center space-x-2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                                        </svg>
                                                        <input onclick="check({{ $task->id }})" {{ $task->status == 'Done' ? 'checked disabled' : '' }} style="color: #3BD7CF" type="checkbox" value="{{ $task->id }}" class="check w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    </div>
                                                </td>
                                                <td height="66px" width="40%">
                                                    @if ($task->status == 'Done')
                                                        <s class="task-text-body text-[#AFABAB]">{{ $task->task }}</s>                                                  
                                                    @endif
                                                    @if ($task->status == 'Inprogress' OR $task->status == Null)
                                                        <span class="task-text-body text-[#222222]">{{ $task->task }}</span>
                                                    @endif
                                                </td>
                                                <td height="66px" width="25%">
                                                    @if ($task->status == null)
                                                        <span class="task-text-body text-colorStatusCard1 ">Inprogress</span>
                                                    @else
                                                        <span class="task-text-body {{ $task->status == 'Done' ? 'text-palet' : 'text-colorStatusCard1' }} ">{{ $task->status }}</span>    
                                                    @endif

                                                </td>
                                                <td height="66px">
                                                    <span class="task-text-body text-[#222222]">{{ $task->assignee }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-4 mt-5">
                                <div onclick="add_more()" class="w-[133px] h-10 bg-palet rounded-md task-btn-text flex items-center justify-center hover:cursor-pointer">
                                    + Add More
                                </div>
                            </div>
                            <div class="flex mt-8"></div>
                        </div>
                    </div>
                </div> 
                
                {{-- Tabs Talent --}}
                <div class="hidden" id="talent" role="tabpanel" aria-labelledby="talent-tab">
                    <div class="flex space-x-2 mt-6">
                        <div class="w-[1016px] xl:w-full ">
                            <div class="bg-bgbody rounded ">
                                <div class="px-8 pt-[18.5px]">
                                    <div class="flex space-x-2 ">
                                        <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                        <span class="text-[#222222] font-semibold">Matched Talent</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="space-y-8 mt-8 mb-8 px-8">

                                    @foreach ($matchTalents as $value )
                                        <div class="flex justify-between px-4">
                                            <div class="flex space-x-2">
                                                <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Talent attached file/avatar/'.$value->talent->avatar) }}" alt="">
                                                <div class="flex flex-col">
                                                    <span class="overview-name-talent text-colortext">{{ $value->talent->first_name }}</span>
                                                    <span class="overview-live-talent">Age {{ Carbon\Carbon::parse($value->talent->day_of_birthday)->age }}, in {{ $value->talent->address }}</span>
                                                    <span class="overview-experiance-talent">{{ $value->talent->experience }} Year Experience, {{ Str::limit($value->talent->about_talent , 25, $end='...') }}</span>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-center rounded space-x-1 w-[94px] h-8 border border-[#22CCE3]">
                                                <span class="overview-talent-status text-[#22CCE3]">Applying</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 1.33337C7.5 1.05723 7.72386 0.833374 8 0.833374C11.958 0.833374 15.1667 4.042 15.1667 8.00004C15.1667 11.9581 11.958 15.1667 8 15.1667C7.72386 15.1667 7.5 14.9429 7.5 14.6667C7.5 14.3906 7.72386 14.1667 8 14.1667C11.4058 14.1667 14.1667 11.4058 14.1667 8.00004C14.1667 4.59428 11.4058 1.83337 8 1.83337C7.72386 1.83337 7.5 1.60952 7.5 1.33337Z" fill="#22CCE3"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.64852 0.841849C7.76499 0.836219 7.88214 0.833374 7.99992 0.833374C8.27606 0.833374 8.49992 1.05723 8.49992 1.33337C8.49992 1.60952 8.27606 1.83337 7.99992 1.83337C7.89825 1.83337 7.79719 1.83583 7.6968 1.84068C7.42098 1.85402 7.18658 1.64123 7.17325 1.36541C7.15991 1.08959 7.3727 0.855181 7.64852 0.841849ZM6.22405 1.55293C6.31709 1.81293 6.18175 2.09912 5.92176 2.19216C5.731 2.26043 5.54457 2.33784 5.36299 2.42387C5.11344 2.5421 4.81529 2.43565 4.69705 2.1861C4.57882 1.93656 4.68527 1.63841 4.93482 1.52017C5.146 1.42012 5.36287 1.33006 5.58482 1.25064C5.84482 1.15759 6.13101 1.29294 6.22405 1.55293ZM3.89323 2.72441C4.07874 2.92897 4.0633 3.24517 3.85874 3.43068C3.70914 3.56635 3.56623 3.70926 3.43056 3.85887C3.24505 4.06342 2.92884 4.07886 2.72429 3.89335C2.51974 3.70785 2.5043 3.39164 2.6898 3.18709C2.84733 3.01339 3.01326 2.84745 3.18697 2.68993C3.39152 2.50442 3.70773 2.51986 3.89323 2.72441ZM2.18598 4.69718C2.43553 4.81541 2.54198 5.11356 2.42375 5.36311C2.33772 5.54469 2.26031 5.73112 2.19204 5.92188C2.099 6.18187 1.81281 6.31722 1.55281 6.22417C1.29282 6.13113 1.15747 5.84494 1.25051 5.58494C1.32994 5.36299 1.41999 5.14612 1.52005 4.93494C1.63828 4.68539 1.93643 4.57894 2.18598 4.69718ZM1.36528 7.17337C1.6411 7.1867 1.85389 7.42111 1.84056 7.69693C1.83571 7.79732 1.83325 7.89837 1.83325 8.00004C1.83325 8.10171 1.83571 8.20277 1.84056 8.30315C1.85389 8.57897 1.6411 8.81338 1.36528 8.82671C1.08946 8.84004 0.855059 8.62726 0.841727 8.35144C0.836097 8.23497 0.833252 8.11782 0.833252 8.00004C0.833252 7.88226 0.836097 7.76511 0.841727 7.64865C0.855059 7.37283 1.08946 7.16004 1.36528 7.17337ZM1.55281 9.77591C1.81281 9.68287 2.099 9.81821 2.19204 10.0782C2.26031 10.269 2.33772 10.4554 2.42375 10.637C2.54198 10.8865 2.43553 11.1847 2.18598 11.3029C1.93643 11.4211 1.63828 11.3147 1.52005 11.0651C1.41999 10.854 1.32994 10.6371 1.25051 10.4151C1.15747 10.1551 1.29282 9.86895 1.55281 9.77591ZM2.72429 12.1067C2.92884 11.9212 3.24505 11.9367 3.43056 12.1412C3.56623 12.2908 3.70914 12.4337 3.85874 12.5694C4.0633 12.7549 4.07874 13.0711 3.89323 13.2757C3.70773 13.4802 3.39152 13.4957 3.18697 13.3102C3.01326 13.1526 2.84733 12.9867 2.6898 12.813C2.5043 12.6084 2.51974 12.2922 2.72429 12.1067ZM4.69705 13.814C4.81529 13.5644 5.11344 13.458 5.36299 13.5762C5.54457 13.6622 5.731 13.7397 5.92176 13.8079C6.18175 13.901 6.31709 14.1872 6.22405 14.4471C6.13101 14.7071 5.84482 14.8425 5.58482 14.7494C5.36287 14.67 5.146 14.58 4.93482 14.4799C4.68527 14.3617 4.57882 14.0635 4.69705 13.814ZM7.17325 14.6347C7.18658 14.3589 7.42098 14.1461 7.6968 14.1594C7.79719 14.1643 7.89825 14.1667 7.99992 14.1667C8.27606 14.1667 8.49992 14.3906 8.49992 14.6667C8.49992 14.9429 8.27606 15.1667 7.99992 15.1667C7.88214 15.1667 7.76499 15.1639 7.64852 15.1582C7.3727 15.1449 7.15991 14.9105 7.17325 14.6347Z" fill="#22CCE3"/>
                                                </svg>
                                                    
                                            </div>
                                        </div>                                  
                                    @endforeach
                                    <button class="flex mx-auto items-center justify-center w-[268px] h-[42px] bg-palet rounded-md mt-8" data-modal-toggle="modal-detail-choice">
                                    {{-- <button class="flex mx-auto items-center justify-center w-[268px] h-[42px] bg-palet rounded-md mt-8" data-modal-toggle="modal-detail-add-match"> --}}
                                        <span class="overview-attechment-btn-text">View more</span>
                                    </button>
                                </div>
                                <div class="flex mt-8"></div>
                            </div>
                        </div>
                    </div>
        
                    <div class="flex space-x-2 mt-6">
                        <div class="w-[1016px] xl:w-full ">
                            <div class="bg-bgbody rounded">
                                <div class="px-8 pt-[18.5px]">
                                    <div class="flex justify-between space-x-2 ">
                                        <div class="flex space-x-2 ">
                                            <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                            <span class="text-[#222222] font-semibold">New applicants</span>
                                        </div>
                                        <div class="flex justify-center items-center px-5 w-[99px] h-6 bg-hover rounded space-x-1 hover:cursor-pointer">
                                        {{-- <div data-modal-toggle="modal-add-talent" class="flex justify-center items-center px-5 w-[99px] h-6 bg-hover rounded space-x-1 hover:cursor-pointer"> --}}
                                            <span class="overview-send-job text-palet">+ Add Talent</span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="space-y-8 mt-8 px-8">
                                    <div class="flex justify-between px-4">
                                        <div class="flex space-x-2">
                                            <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                            <div class="flex flex-col">
                                                <span class="overview-name-talent text-colortext">Falon Frazer</span>
                                                <span class="overview-live-talent">Age 65, in New York, NY, USA</span>
                                                <span class="overview-experiance-talent">10 Year Experience, Willing to relocate</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center rounded space-x-1 w-[94px] h-8 border border-[#5FCFFF]">
                                            <span class="overview-talent-status text-[#5FCFFF]">Interviewing</span>
                                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.979699 0.646447C1.17496 0.451184 1.49154 0.451184 1.68681 0.646447L5.33325 4.29289L8.9797 0.646447C9.17496 0.451184 9.49154 0.451184 9.68681 0.646447C9.88207 0.841709 9.88207 1.15829 9.68681 1.35355L5.68681 5.35355C5.49154 5.54882 5.17496 5.54882 4.9797 5.35355L0.979699 1.35355C0.784436 1.15829 0.784436 0.841709 0.979699 0.646447Z" fill="#5FCFFF"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex justify-between px-4">
                                        <div class="flex space-x-2">
                                            <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                            <div class="flex flex-col">
                                                <span class="overview-name-talent text-colortext">Falon Frazer</span>
                                                <span class="overview-live-talent">Age 65, in New York, NY, USA</span>
                                                <span class="overview-experiance-talent">10 Year Experience, Willing to relocate</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center rounded space-x-1 w-[94px] h-8 border border-[#5FCFFF]">
                                            <span class="overview-talent-status text-[#5FCFFF]">Interviewing</span>
                                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.979699 0.646447C1.17496 0.451184 1.49154 0.451184 1.68681 0.646447L5.33325 4.29289L8.9797 0.646447C9.17496 0.451184 9.49154 0.451184 9.68681 0.646447C9.88207 0.841709 9.88207 1.15829 9.68681 1.35355L5.68681 5.35355C5.49154 5.54882 5.17496 5.54882 4.9797 5.35355L0.979699 1.35355C0.784436 1.15829 0.784436 0.841709 0.979699 0.646447Z" fill="#5FCFFF"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center mx-auto mt-10 mb-6">
                                    <span class="overview-talent-otside-text text-[#222222]">Invite more talents outside the Ayiconnection system list</span>
                                </div>
                                <a href="{{ route('jobboard.send', ['uid' => $result->uid]) }}" class="flex mx-auto items-center justify-center w-[268px] h-[42px] bg-palet rounded-md space-x-2" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.90625 3.25C7.54381 3.25 7.25 3.54381 7.25 3.90625V6.2158C7.25 6.63001 6.91421 6.9658 6.5 6.9658C6.08579 6.9658 5.75 6.63001 5.75 6.2158V3.90625C5.75 2.71539 6.71539 1.75 7.90625 1.75H20.0938C21.2846 1.75 22.25 2.71539 22.25 3.90625V16.0938C22.25 17.2846 21.2846 18.25 20.0938 18.25H17.7582C17.3439 18.25 17.0082 17.9142 17.0082 17.5C17.0082 17.0858 17.3439 16.75 17.7582 16.75H20.0938C20.4562 16.75 20.75 16.4562 20.75 16.0938V3.90625C20.75 3.54381 20.4562 3.25 20.0938 3.25H7.90625Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75 7.90625C1.75 6.71539 2.71539 5.75 3.90625 5.75H16.0938C17.2846 5.75 18.25 6.71539 18.25 7.90625V20.0938C18.25 21.2846 17.2846 22.25 16.0938 22.25H3.90625C2.71539 22.25 1.75 21.2846 1.75 20.0938V7.90625ZM3.90625 7.25C3.54381 7.25 3.25 7.54381 3.25 7.90625V20.0938C3.25 20.4562 3.54381 20.75 3.90625 20.75H16.0938C16.4562 20.75 16.75 20.4562 16.75 20.0938V7.90625C16.75 7.54381 16.4562 7.25 16.0938 7.25H3.90625Z" fill="white"/>
                                    </svg>
                                    <span class="overview-attechment-btn-text">Copy link form add talent</span>
                                </a>
                                <div class="flex mt-10"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Document --}}
                <div class="hidden" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                    <div class="flex space-x-2 mt-6">
                        <div class="w-[1016px] xl:w-full ">
                            <div class="bg-bgbody rounded ">
                                <div class="px-8 pt-[18.5px]">
                                    <div class="flex space-x-2 ">
                                        <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                        <span class="text-[#222222] font-semibold">Attachments File</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="space-y-8 mt-8 mb-8 px-8">
                                    <table width="100%">
                                        <tr>
                                            <td height="66px" class=" ">
                                                <span class="task-text ml-2">File Name</span>
                                            </td>
                                            <td height="66px" class=" ">
                                                <span class="task-text ml-2">Type</span>
                                            </td>
                                            <td height="66px" class=" ">
                                                <span class="task-text ml-2">Size</span>
                                            </td>
                                            <td height="66px" class="">
                                                <span class="task-text ml-2">Upload Date</span>
                                            </td>
                                        </tr>
                                        @foreach ($result->file as $val )
                                            <tr onclick="window.location.href = '{{ route('jobboard.download_file' , ['file' => $val->file]) }}'" class="hover:bg-gray-100 hover:cursor-pointer">
                                                <td height="66px" class="border-t overview-talent-otside-text text-[#222222]">
                                                    <span class=" ml-2">{{ $val->file }}</span>
                                                </td>
                                                <td height="66px" class="border-t overview-talent-otside-text text-[#222222]">
                                                    <span class="ml-2">{{ pathinfo(storage_path().'public/Jobs attached file/'.$val->file)['extension'] }} File</span>
                                                </td>
                                                <td height="66px" class="border-t overview-talent-otside-text text-[#222222]">
                                                    <span class="ml-2">{{ number_format(Illuminate\Support\Facades\Storage::size('public/Jobs attached file/'.$val->file) / 1024 , 2) }} KB</span>
                                                </td>
                                                <td height="66px" class="border-t overview-talent-otside-text text-[#222222]">
                                                    <span class="ml-2">{{ $val->created_at->isoFormat('D, MMMM Y') }}</span>
                                                </td>
                                                <td height="66px" class="border-t ">
                                                    <div class="flex item-center justify-end">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 12.1018C1.5 11.8257 1.72386 11.6018 2 11.6018H14C14.2761 11.6018 14.5 11.8257 14.5 12.1018C14.5 12.3779 14.2761 12.6018 14 12.6018H2C1.72386 12.6018 1.5 12.3779 1.5 12.1018Z" fill="#3BD7CF"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 14C1.5 13.7239 1.72386 13.5 2 13.5H14C14.2761 13.5 14.5 13.7239 14.5 14C14.5 14.2761 14.2761 14.5 14 14.5H2C1.72386 14.5 1.5 14.2761 1.5 14Z" fill="#3BD7CF"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.64645 7.31307C5.84171 7.11781 6.15829 7.11781 6.35355 7.31307L8 8.95952L9.64645 7.31307C9.84171 7.11781 10.1583 7.11781 10.3536 7.31307C10.5488 7.50833 10.5488 7.82492 10.3536 8.02018L8.35355 10.0202C8.15829 10.2154 7.84171 10.2154 7.64645 10.0202L5.64645 8.02018C5.45118 7.82492 5.45118 7.50833 5.64645 7.31307Z" fill="#3BD7CF"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 1.5C8.27614 1.5 8.5 1.72386 8.5 2V9.66667C8.5 9.94281 8.27614 10.1667 8 10.1667C7.72386 10.1667 7.5 9.94281 7.5 9.66667V2C7.5 1.72386 7.72386 1.5 8 1.5Z" fill="#3BD7CF"/>
                                                        </svg>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="flex mt-8"></div>
                            </div>
                        </div>
                    </div>
        
                </div>
                {{-- Activities --}}
                <div class="hidden" id="activities" role="tabpanel" aria-labelledby="activities-tab">
                    <div class="flex space-x-2 mt-6">
                        <div class="w-[1016px] xl:w-full ">
                            <div class="bg-bgbody rounded ">
                                <div class="px-8 pt-[18.5px]">
                                    <div class="flex space-x-2 ">
                                        <div class="w-2 h-6 bg-colorStatusCard1 rounded-sm"></div>
                                        <span class="text-[#222222] font-semibold">Activities</span>
                                    </div>
                                </div>
                                <hr class="bg-[#ECECEC] h-[1px] w-full mt-[14.5px]">
                                <div class="space-y-8 mt-[22px] mb-8 px-8">
                                    <table width="100%">
                                        @foreach ($result->actifities as $val )
                                            @if ($val->type == 'ACTIVITIES')
                                                <tr class="hover:bg-gray-100 hover:cursor-pointer">
                                                    <td height="66px" class="border-b overview-talent-otside-text text-[#222222]">
                                                    <div class="flex items-center justify-start space-x-3">
                                                            <img class="w-8 h-8 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Setting/avatar/'.$val->avatar) }}" alt="">
                                                            <span class="overview-comments-name text-[#222222]">{{ $val->name }}</span>
                                                            <span class="overview-comments-name text-[#827C7C]">{{ Carbon\Carbon::parse($val->created_at)->diffForHumans() }} at {{ $val->created_at->format('H:i'); }} ({{ $val->body }})</span>
                                                        </div>
                                                    </td>
                                                    <td height="66px" class="border-b ">
                                                        <div class="flex item-center justify-end">
                                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.10531 0.870209C9.29375 0.793594 9.50982 0.83878 9.65177 0.98449L15.0245 6.49959C15.21 6.69003 15.2141 6.99237 15.0337 7.1877L9.66096 13.0059C9.5213 13.1572 9.30323 13.2074 9.11151 13.1324C8.91979 13.0574 8.79362 12.8726 8.79362 12.6667V9.53699C7.84091 9.43128 6.83795 9.48785 5.782 9.7119C4.69402 9.94275 3.33901 10.9524 1.71981 12.9289C1.58002 13.0996 1.34493 13.1585 1.14122 13.0738C0.937512 12.9892 0.813322 12.7811 0.835574 12.5617C1.07334 10.2167 1.97303 8.23742 3.54063 6.64886L3.89652 7.00006L3.54063 6.64886C4.99873 5.17124 6.75718 4.36531 8.79362 4.23954V1.33339C8.79362 1.12997 8.91686 0.946825 9.10531 0.870209ZM9.79362 2.56318V4.72239C9.79362 4.99699 9.57217 5.2202 9.29758 5.22237C7.31334 5.23806 5.64101 5.94408 4.25242 7.35125L3.92787 7.03099L4.25242 7.35125C3.25151 8.36554 2.55223 9.55822 2.15675 10.9385C3.35212 9.72503 4.49096 8.96357 5.57445 8.73368C6.89394 8.45371 8.16197 8.4091 9.37442 8.60763C9.61616 8.64721 9.79362 8.8561 9.79362 9.10106V11.3883L13.9773 6.85769L9.79362 2.56318Z" fill="#3BD7CF"/>
                                                            </svg>    
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </table>
                                </div>
                                <div class="flex mt-8"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="flex mt-8"></div>
            </div>
            
            <!-- Main modal Add match talent -->
            <div id="modal-detail-add-match" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full h-modal md:h-full">
                <form action="{{ route('jobboard.modal_add_match_talent') }}" method="post">@csrf
                    <input type="hidden" name="job_models_id" value="{{ $result->id }}">
                    <div class="relative p-4 w-[672px]">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow w-[672px]">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between  px-8 h-14 rounded-t border-b dark:border-gray-600">
                                <span class="overview-talent-modal-title text-[#222222]">
                                    Add Talent
                                </span>
                                <div type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:cursor-pointer"  data-modal-toggle="modal-detail-add-match">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </div>
                            </div>
                            <!-- Modal body -->
                            <div class="w-[672px]">
                                <div class="relative flex items-center justify-center w-[672px] py-[18px] px-6 border-b">
                                    <div class="flex absolute inset-y-0 left-8 items-center  pointer-events-none">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                                        </svg> 
                                    </div>
                                    <input id="search_talents_match" type="text" class=" pl-10 border-none bg-transparent overview-talent-otside-text text-[#827C7C] w-full  outline-none focus:ring-0" placeholder="Search">
                                </div>
                                <div class="space-y-8 mt-8 h-80 overflow-y-scroll w-[672px]">
                                    @foreach ($talents as $talent_value ) 
                                        <div id="data_di_cari" class="flex items-center justify-between px-6">
                                            <label for="{{ $talent_value->id }}">
                                                <div class="flex items-center space-x-2 hover:cursor-pointer">
                                                    <div class="">
                                                        <input name="id_talent_match[]" id="{{ $talent_value->id }}" style="color: #3BD7CF" type="checkbox" value="{{ $talent_value->id }}" class="w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    </div>
                                                    <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                                    <div class="flex flex-col">
                                                        <span class="overview-name-talent text-colortext">{{ $talent_value->first_name.' '.$talent_value->last_name }}</span>
                                                        <span class="overview-live-talent">Age {{ Carbon\Carbon::parse($talent_value->day_of_birthday)->age }}, in {{ $talent_value->address }}</span>
                                                        <span class="overview-experiance-talent">{{ $talent_value->experience }} Year Experience</span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end px-12 space-x-2 rounded-b  w-full h-[97px]">
                                <div data-modal-toggle="modal-detail-add-match" class="flex justify-center items-center w-40 h-[42px] bg-[#DCDCDC] rounded-md hover:cursor-pointer">
                                    <span class="overview-attechment-btn-text">Cancel</span>
                                </div>
                                <div  class="w-40 h-[42px]">
                                    <button  class="flex justify-center items-center w-40 h-[42px] bg-palet rounded-md">
                                        <span  class="overview-attechment-btn-text">Add</span>
                                    </button>                          
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Main modal detail choice -->
            <div id="modal-detail-choice" tabindex="-1" aria-hidden="true" class="hidden fixed top-5 right-0 left-0 z-50 w-[452px] mx-auto h-modal ">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <!-- Modal header -->
                        <form action="{{ route('jobboard.send_email')}}" method="POST">@csrf
                            <div class="flex items-center justify-between  px-8 h-14 rounded-t border-b ">
                                <span class="overview-talent-modal-title text-[#222222]">
                                    Send To Talent
                                </span>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"  data-modal-toggle="modal-detail-choice">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div>
                                <div class="relative flex items-center justify-center w-full py-[18px] px-6 border-b">
                                    <div class="flex absolute inset-y-0 left-8 items-center  pointer-events-none">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                                        </svg> 
                                    </div>
                                    <input type="text" class="pl-10 border-none bg-transparent overview-talent-otside-text text-[#827C7C] w-full  outline-none focus:ring-0" placeholder="Search">
                                </div>
                                <div class="mt-8 h-80 overflow-y-auto ">
                                    @foreach ($matchTalents as $value )
                                        <label for="send-email{{ $value->talent->id }}" class="hover:cursor-pointer">
                                            <div class="flex items-center justify-between px-6 mb-4">
                                                <div class="flex items-center space-x-2">
                                                    <div class="">
                                                        <input id="send-email{{ $value->talent->id }}" style="color: #3BD7CF" name="talent_name[]" type="checkbox" value="{{ $value->talent->id }}" class="w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                                    </div>
                                                    <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/Talent attached file/avatar/'.$value->talent->avatar) }}" alt="">
                                                    <div class="flex flex-col">
                                                        <span class="overview-name-talent text-colortext">{{ $value->talent->first_name }} {{ $value->talent->last_name }}</span>
                                                    </div>
                                                </div>
                                            </div>  
                                        </label>        
                                    @endforeach
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center justify-end px-6 space-x-2 rounded-b  w-full h-[97px]">
                                <div data-modal-toggle="modal-detail-choice" class="flex justify-center items-center w-40 h-[42px] bg-[#DCDCDC] rounded-md hover:cursor-pointer">
                                    <span class="overview-attechment-btn-text">Cancel</span>
                                </div>
                                <button class="flex justify-center items-center w-40 h-[42px] bg-palet rounded-md">
                                    <span class="overview-attechment-btn-text">Send</span>
                                </button>                          
                            </div>
                            <input type="hidden" name="email_client" value="{{ $result->client->email }}">
                            <input type="hidden" name="job_models_id" value="{{ $result->id }}">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main modal Add Talent -->
            <div id="modal-add-talent" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">  
                <div class="p-4 w-[852px] h-screen">
                    <div class="bg-white rounded-lg shadow ">
                        <div class="relative text-center pt-10">
                            <span class="overview-modal-add-talent-title mt-10 ml-10 text-[#222222]">Add New Talent</span>
                            <button type="button" class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"  data-modal-toggle="modal-add-talent">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <div class="px-[91px] mt-10">
                            <div class="flex justify-center  items-center space-x-10">
                                <div>
                                    <div class="flex justify-center  items-center w-28 h-28 bg-hover rounded-full hover:cursor-pointer">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6C3 4.34315 4.34315 3 6 3H26C27.6569 3 29 4.34316 29 6V26C29 27.6569 27.6569 29 26 29H6C4.34316 29 3 27.6569 3 26V6ZM6 5C5.44772 5 5 5.44772 5 6V26C5 26.5523 5.44771 27 6 27H26C26.5523 27 27 26.5523 27 26V6C27 5.44771 26.5523 5 26 5H6Z" fill="#3BD7CF"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.66675 12C7.66675 9.60674 9.60686 7.66663 12.0001 7.66663C14.3933 7.66663 16.3334 9.60674 16.3334 12C16.3334 14.3932 14.3933 16.3333 12.0001 16.3333C9.60686 16.3333 7.66675 14.3932 7.66675 12ZM12.0001 9.66663C10.7114 9.66663 9.66675 10.7113 9.66675 12C9.66675 13.2886 10.7114 14.3333 12.0001 14.3333C13.2887 14.3333 14.3334 13.2886 14.3334 12C14.3334 10.7113 13.2887 9.66663 12.0001 9.66663Z" fill="#3BD7CF"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9978 16.5901C20.3795 16.2465 20.9594 16.248 21.3394 16.5934L28.6727 23.2601C29.0814 23.6316 29.1115 24.2641 28.74 24.6727C28.3685 25.0814 27.736 25.1115 27.3274 24.74L20.6634 18.6818L14.669 24.0767C14.2956 24.4128 13.7307 24.4196 13.3493 24.0926L9.29165 20.6147L4.60006 24.1334C4.15823 24.4647 3.53143 24.3752 3.20006 23.9334C2.86869 23.4915 2.95823 22.8647 3.40006 22.5334L8.73339 18.5334C9.10835 18.2522 9.62832 18.2691 9.98418 18.5741L13.984 22.0025L19.9978 16.5901Z" fill="#3BD7CF"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-full flex flex-col ">
                                    <div class="flex items-center space-x-2">
                                        <div class="mb-6 w-[249px] ">
                                            <label for="first-name" class="block mb-2 overview-modal-add-talent-text text-[#222222]">Full Name</label>
                                            <div class="w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input type="text" id="first-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="mb-6 w-[249px]">
                                            <label for="last-name" class="invisible block mb-2 overview-modal-add-talent-text text-[#222222]">DoB</label>
                                            <div class="w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input type="text" id="last-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <div class="mb-6 w-[249px]">
                                            <label for="dob" class="block mb-2 overview-modal-add-talent-text text-[#222222]">DoB</label>
                                            <div class="w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input type="date" id="dob" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none text-[#222222] opacity-50">
                                            </div>
                                        </div>
                                        <div class="mb-6 w-[249px]">
                                            <label for="experience" class="block mb-2 overview-modal-add-talent-text text-[#222222]">Experience</label>
                                            <div class="w-[249px] h-[40px] border border-[#CCD3DC] flex items-center justify-center rounded">
                                                <input type="text" id="experience" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="10">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div></div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="overview-modal-add-talent-text text-[#222222]">Your contact information</span>
                                <div class="w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="Email">
                                </div>
                                <div class="w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input type="text" id="phone" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="Phone">
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="overview-modal-add-talent-text text-[#222222]">Type of Help Needed</span>
                                <div class="multiSelect mt-2">
                                    <select multiple class="multiSelect_field" data-placeholder="Add ss Browsers">
                                        <option value="chrome">Nanny</option>
                                        <option selected="select" value="firefox">Firefox</option>
                                        <option value="opera">Sister</option>
                                        <option value="safari">Maternity Care</option>
                                    </select>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                        <g stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </g>
                                    </symbol>
                                </svg>
                                {{-- <div class="w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="">
                                </div> --}}
                            </div>
                            <div class="mt-6">
                                <span class="overview-modal-add-talent-text text-[#222222]">Languages</span>
                                <div class="multiSelect mt-2">
                                    <select multiple class="multiSelect_field" data-placeholder="Add ss Browsers">
                                        <option value="chrome">English</option>
                                        <option value="firefox">Chines</option>
                                        <option value="opera">Indonesia</option>
                                        <option value="safari">Russian</option>
                                    </select>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                        <g stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </g>
                                    </symbol>
                                </svg>
                                {{-- <div class="w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="">
                                </div> --}}
                            </div>
                            <div class="mt-6">
                                <span class="overview-modal-add-talent-text text-[#222222]">Address</span>
                                <div class="w-[670px] h-10 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
                                    <input type="text" id="email" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="">
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="overview-modal-add-talent-text text-[#222222]">About talent</span>
                                <div class="w-[670px] h-[148px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
                                    <textarea id="message" rows="6" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none" placeholder="Enter referral"></textarea>
                                    <span class="overview-modal-add-talent-textarea-rule absolute bottom-2 right-2">125 characters</span>
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="overview-modal-add-talent-text text-[#222222]">Upload documents</span>
                                <div class="w-[670px] h-[109px] flex flex-col items-center justify-center space-x-[10.25px] border border-dotted border-[#CCD3DC] mt-2 rounded relative hover:cursor-pointer">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 18.6528C2.25 18.2386 2.58579 17.9028 3 17.9028H21C21.4142 17.9028 21.75 18.2386 21.75 18.6528C21.75 19.067 21.4142 19.4028 21 19.4028H3C2.58579 19.4028 2.25 19.067 2.25 18.6528Z" fill="#827C7C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 21.5C2.25 21.0858 2.58579 20.75 3 20.75H21C21.4142 20.75 21.75 21.0858 21.75 21.5C21.75 21.9142 21.4142 22.25 21 22.25H3C2.58579 22.25 2.25 21.9142 2.25 21.5Z" fill="#827C7C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 11.4697C8.76256 11.1768 9.23744 11.1768 9.53033 11.4697L12 13.9393L14.4697 11.4697C14.7626 11.1768 15.2374 11.1768 15.5303 11.4697C15.8232 11.7626 15.8232 12.2374 15.5303 12.5303L12.5303 15.5303C12.2374 15.8232 11.7626 15.8232 11.4697 15.5303L8.46967 12.5303C8.17678 12.2374 8.17678 11.7626 8.46967 11.4697Z" fill="#827C7C"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C12.4142 2.75 12.75 3.08579 12.75 3.5V15C12.75 15.4142 12.4142 15.75 12 15.75C11.5858 15.75 11.25 15.4142 11.25 15V3.5C11.25 3.08579 11.5858 2.75 12 2.75Z" fill="#827C7C"/>
                                    </svg>
                                    <span class="overview-modal-add-talent-upload-text text-[#827C7C]">Drop file here or click to upload.</span>
                                </div>
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

            <!-- Main modal overview detail Talent -->
            <div id="modal-overview-detail-talent" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">  
                <div class="p-4 w-[666px] h-screen">
                    <div class="bg-white rounded-lg shadow ">
                        <div class="relative py-3 border-b border-[#EFEFEF]">
                            <span class="overview-talent-modal-title mt-10 ml-[45px] text-[#222222]">Detail Talent</span>
                            <button type="button" class="absolute top-2 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"  data-modal-toggle="modal-overview-detail-talent">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <hr>
                        <div id="loads" class="px-[42px] mt-8"></div>
                    </div>
                </div>
            </div>

            {{-- Modal upload --}}
            <div id="upload_progress" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <div class="relative upload_kept h-80 bg-white rounded-lg shadow flex flex-col items-center justify-center">
                        <div role="status">
                            <svg class="inline mr-2 w-12 h-12 text-gray-200 animate-spin dark:text-gray-600 fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                        </div>
                        <div class="flex flex-col text-center w-2/4 mt-5">
                            {{-- <span class="text-2xl text-[#222222]">50%</span> --}}
                            <span class="text-[#222222] text-sm animate-pulse">Upload progress</span>
                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mt-1">
                                <div id="progress-bar" class="bg-palet h-2.5 rounded-full" style="width: 1%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
<script src="{{ asset('js/jQuery/jobBoardTab.js') }}"></script>
<script src="{{ asset('js/jQuery/jobBoardJquery.js') }}"></script>

<script>

    // Add Task
    var no = 0 ;
    function add_more(){
        const template =    '<tr id="" class="load'+no+' check hover:bg-[#F7F7F7] cursor-pointer">'+
                                '<td height="66px" width="12%">'+
                                    '<div class="flex items-center justify-center space-x-2">'+
                                        '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                                            '<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>'+
                                            '<path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>'+
                                        '</svg>'+
                                        '<input style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >'+
                                    '</div>'+
                                '</td>'+
                                '<td colspan="3" height="66px" width="40%">'+
                                    '<input id="input'+no+'"  name="task" type="text" class="enter'+no+' -ml-3 border bg-transparent border-none  text-[#222222] task-text-body w-full  outline-none focus:ring-0" placeholder="Enter a title for this task" required>'+
                                    '<input type="hidden" class="job_models_id" name="job_models_id" value="{{ $result->id }}">'+
                                '</td>'+
                            '</tr>';
        $(".load-task").append(template);
        $('#input'+no).keypress(function(e) {
            const val = $(this).val();
            const id = '{{ $result->id }}'
            if(e.which == 13) {
      
                $.ajax({
                    type:'POST',
                    url:'{{ route("jobboard.add_task") }}',
                    data:{_token: '{{ csrf_token() }}', val, id , sts:'created'},
                    success:function(data){
                        var loader = `<tr class="hover:bg-[#F7F7F7] cursor-pointer loader-checked${data.data.id}">
                                        <td height="66px" width="12%">
                                            <div class="flex items-center justify-center space-x-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                                </svg>
                                                <input onclick="check(${data.data.id})" style="color: #3BD7CF" type="checkbox" value="" class="check w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            </div>
                                        </td>
                                        <td height="66px" width="40%">
                                            <span class="task-text-body text-[#222222]">${data.data.task}</span>
                                        </td>
                                        <td height="66px" width="25%">
                                            <span class="task-text-body text-colorStatusCard1">${data.data.status}</span>
                                        </td>
                                        <td height="66px">
                                            <span class="task-text-body text-[#222222]">${data.data.assignee}</span>
                                        </td>
                                    </tr>`;
                    $(".load-task").append(loader);
                    }
                });
                $(this).parent().parent().remove();                    
            }
        });

    
        ++no;
    }

    function check(id){
        const job_models_id = '{{ $result->id }}';
        $.ajax({
                type:'POST',
                url:'{{ route("jobboard.add_task") }}',
                data:{_token: '{{ csrf_token() }}', id ,job_models_id,  sts:'updated'},
                success:function(data){
                    var loader_done = ` <td height="66px" width="12%">
                                            <div class="flex items-center justify-center space-x-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                                </svg>
                                                <input checked disabled style="color: #3BD7CF" type="checkbox" value="" class="w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                            </div>
                                        </td>
                                        <td height="66px" width="40%">
                                            <s class="task-text-body text-[#AFABAB]">${data.data.task}</a>
                                        </td>
                                        <td height="66px" width="25%">        
                                            <span class="task-text-body text-palet">${data.data.status}</span>
                                        </td>
                                        <td height="66px">
                                            <span class="task-text-body text-[#222222]">${data.data.assignee}</span>
                                        </td>`;
                    $('.loader-checked'+id).html(loader_done);
                }
        });
    }

    // Modal 
    const upload_modal = document.getElementById('upload_progress');
    const modal = new Modal(upload_modal, { });
    // Upload file
    $('#file').change(function(){
        const file = $(this).val();
        const job_models_id = $('.job_models_id').val();

        $.ajax({
            type: "POST",
            url: "{{ route('jobboard.upload_file') }}",
            enctype: 'multipart/form-data',
            data: new FormData($('#upload-file')[0]),
            processData: false,
            cache: false,
            contentType: false,
            beforeSend : function(xhr ,a){
                modal.show();
                const tmp = `<div role="status">
                                <svg class="inline mr-2 w-12 h-12 text-gray-200 animate-spin dark:text-gray-600 fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                            </div>
                            <div class="flex flex-col text-center w-2/4 mt-5">
                                {{-- <span class="text-2xl text-[#222222]">50%</span> --}}
                                <span class="text-[#222222] text-sm animate-pulse">Upload progress</span>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700 mt-1">
                                    <div id="progress-bar" class="bg-palet h-2.5 rounded-full" style="width: 1%"></div>
                                </div>
                            </div>`;
                $('.upload_kept').html(tmp)
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

                    
                    $("#progress-bar").css("width", + percent +"%");
                }, true);
              }
              return xhr;
            },
            error: function(e){
                modal.hide();
            },   
            success: function (res) {
               location.reload()
            }
        });
    })

    // Comments And Reply

    function post_comment(){
       const comment = $('#message').val()
       const job_models_id = "{{ $result->id }}"
       $.ajax({
            type: "POST",
            url: "{{ route('jobboard.comment') }}",
            beforeSend:function(){
                const btn_disable = `<button disabled class="w-40 h-[42px] bg-palet rounded-md flex items-center justify-center">
                                        <svg aria-hidden="true" role="status" class="inline mr-3 w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                        </svg>
                                        <span class="overview-attechment-btn-text justify-center">Waiting</span>
                                    </button>`;
                $('.buttton_comment').html(btn_disable);
            },
            data: {comment , job_models_id, _token: '{{ csrf_token() }}'},
            success: function (res, status ,xhr, ) {
                const template = `<span class="overview-comments-leave text-colortext">Leave Comments</span>
                                    <div class="border w-full rounded-md text-xs ">
                                        <textarea id="message" rows="4" class="message block p-2.5 w-full text-sm text-colortext bg-[#F7F7F7] rounded  border-none outline-none focus:ring-0" placeholder="Enter a comments"></textarea>
                                    </div>`;
                $('.comment-text').html(template);
                $('#message').val('')
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                const template = ` <span class="text-red-600 overview-comments-leave text-colortext">Leave Comments</span>
                                    <div class="border-red-600 border w-full rounded-md text-xs ">
                                        <textarea id="message" rows="4" class="message placeholder-red-600 block p-2.5 w-full text-sm text-colortext bg-[#F7F7F7] rounded  border-none outline-none focus:ring-0" placeholder="Enter a comments"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">${XMLHttpRequest.responseJSON.message}</p>`;
                $('.comment-text').html(template);
                const btn_enabled = `<button onclick="post_comment()" class="w-40 h-[42px] bg-palet rounded-md ">
                                        <span class="overview-attechment-btn-text justify-center">Post Comments</span>
                                    </button>`;
                $('.buttton_comment').html(btn_enabled);
   
            }
        });
    }

    function reply(id){
        const reply_template  = `<div class="reply_text${id} px-4 mt-4">
                                    <div class="w-full rounded-md text-xs ">
                                        <textarea id="reply_comment${id}" rows="2" class="block p-2.5 w-full text-sm text-colortext bg-[#F7F7F7] rounded  border-none outline-none focus:ring-0" placeholder="Enter a comments"></textarea>
                                    </div>
                                </div>
                                <div class="btn_reply${id} flex justify-end px-4 mt-2">
                                    <button onclick="submit(${id})"  class="submit${id} w-20 h-7 bg-palet rounded-md ">
                                        <span class="overview-attechment-btn-text text-xs justify-center">Reply</span>
                                    </button>
                                </div>`;
        $('.add_reply'+id).html(reply_template);
    }

    function submit(id){

        const job_comments_id = $('.comment_id'+id).val();
        const job_models_id = "{{ $result->id }}";
        const reply_comment = $('#reply_comment'+id).val();
        $.ajax({
            type: "POST",
            url: "{{ route('jobboard.reply') }}",
            data: {job_comments_id , job_models_id,reply_comment ,  _token: '{{ csrf_token() }}'},
            beforeSend:function(){
                const btn_disable = `<div class="w-20 h-7 bg-palet rounded-md flex items-center justify-center">
                                        <svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                                        </svg>
                                    </div>`;
                $('.btn_reply'+id).html(btn_disable);
            },
            success: function (res,sts,xhr) {

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                const reply_failed  = `<div class="w-full border-red-600 border rounded-md text-xs ">
                                            <textarea id="reply_comment${id}" rows="2" class="block placeholder-red-600 p-2.5 w-full text-sm text-colortext bg-[#F7F7F7] rounded  border-none outline-none focus:ring-0" placeholder="Enter a comments"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">${XMLHttpRequest.responseJSON.message}</p>`;
                $('.reply_text'+id).html(reply_failed);

                const btn_enable = `<button onclick="submit(${id})"  class="submit${id} w-20 h-7 bg-palet rounded-md ">
                                        <span class="overview-attechment-btn-text text-xs justify-center">Reply</span>
                                    </button>`;
                $('.btn_reply'+id).html(btn_enable);
                
                console.log(XMLHttpRequest.responseJSON.message)
            }
        });
    }

    // Search Task
    $('.search_task').keyup(function(){
        const search_task = $(this).val();
        const job_models_id = "{{ $result->id }}";
        $.ajax({
            type: "POST",
            url: "{{ route('jobboard.search_task') }}",
            data: {search_task, job_models_id,  _token: '{{ csrf_token() }}'},
            success: function(res){
                $('.load-task').html('');
                res.map(function(val){
                    let search_task, search_status ,search_asignee ;
                    if(val.status == 'Done'){
                        search_checked = `<input checked onclick="check(${val.id})" style="color: #3BD7CF" type="checkbox" value="" class="check w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >`;
                        search_task = `<s class="task-text-body text-[#AFABAB]">${val.task}</a>`;
                        search_status = `<span class="task-text-body text-palet">${val.status}</span>`;
                        search_asignee = `<span class="task-text-body text-[#222222]">${val.assignee}</span>`;
                    }else{
                        search_checked = `<input onclick="check(${val.id})" style="color: #3BD7CF" type="checkbox" value="" class="check w-5 h-5 rounded bg-gray-100 border-none outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >`;
                        search_task = `<span class="task-text-body text-[#222222]">${val.task}</span>`;
                        search_status = `<span class="task-text-body text-colorStatusCard1">${val.status}</span>`;
                        search_asignee = `<span class="task-text-body text-[#222222]">${val.assignee}</span>`;
                    }
                    const tmp_search = `<tr class="hover:bg-[#F7F7F7] cursor-pointer loader-checked${val.id}">
                                                    <td height="66px" width="12%">
                                                        <div class="flex items-center justify-center space-x-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5C9.5 6.10455 8.60455 7 7.5 7C6.39545 7 5.5 6.10455 5.5 5C5.5 3.89543 6.39545 3 7.5 3C8.60455 3 9.5 3.89543 9.5 5ZM7.5 14C8.60455 14 9.5 13.1046 9.5 12C9.5 10.8955 8.60455 10 7.5 10C6.39545 10 5.5 10.8955 5.5 12C5.5 13.1046 6.39545 14 7.5 14ZM7.5 21C8.60455 21 9.5 20.1045 9.5 19C9.5 17.8954 8.60455 17 7.5 17C6.39545 17 5.5 17.8954 5.5 19C5.5 20.1045 6.39545 21 7.5 21Z" fill="#827C7C"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 5C18.5 6.10455 17.6045 7 16.5 7C15.3954 7 14.5 6.10455 14.5 5C14.5 3.89543 15.3954 3 16.5 3C17.6045 3 18.5 3.89543 18.5 5ZM16.5 14C17.6045 14 18.5 13.1046 18.5 12C18.5 10.8955 17.6045 10 16.5 10C15.3954 10 14.5 10.8955 14.5 12C14.5 13.1046 15.3954 14 16.5 14ZM16.5 21C17.6045 21 18.5 20.1045 18.5 19C18.5 17.8954 17.6045 17 16.5 17C15.3954 17 14.5 17.8954 14.5 19C14.5 20.1045 15.3954 21 16.5 21Z" fill="#827C7C"/>
                                                            </svg>
                                                            ${search_checked}
                                                        </div>
                                                    </td>
                                                    <td height="66px" width="40%">
                                                        ${search_task}
                                                    </td>
                                                    <td height="66px" width="25%">
                                                        ${search_status}
                                                    </td>
                                                    <td height="66px">
                                                        ${search_asignee}
                                                    </td>
                                                </tr>`;
    
                    $('.load-task').append(tmp_search);
                })

                
            }
        })
    })

    $('.status_talents').change(function(){
        const status = $(this).val();
        const talent_id = $(this).attr("data-talent")
        const job_models_id  = $(this).attr("data-job-id")
        $.ajax({
            type: "POST",
            url: "{{ route('jobboard.talent_status') }}",
            data: {status, talent_id,job_models_id,  _token: '{{ csrf_token() }}'},
            success: function(res){
                
            }
        })
    })

    // Show more and show less detail job
    const accordionItems = [
        {
            id: 'show_detail_jobs',
            triggerEl: document.querySelector('#show_detail_jobs'),
            targetEl: document.querySelector('#job-detail'),
            active: false
        },

    ];

    const options_show_detail_job = {
        onOpen: (item) => {

            const tmp = `<span  class="overview-show-more">Show less</span>
            <svg  width="25" height="15" class="rotate-180"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FA9D6B" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" ></path></svg>`;
            $('#show_detail_jobs').html(tmp)
            
        },
        onClose: (item) => {
            const tmp = `<span  class="overview-show-more">Show more</span>
                        <svg data-accordion-icon="" width="25" height="15"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FA9D6B" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" ></path></svg>`;
            $('#show_detail_jobs').html(tmp)
          
        },

    };
    new Accordion(accordionItems, options_show_detail_job);


    // Acording Match talent
    const accordionItemsMatchTalent = [
        {
            id: 'show_match_talent',
            triggerEl: document.querySelector('#show_match_talent'),
            targetEl: document.querySelector('#acording_match_talent'),
            active: false
        },

    ];

    const options_show_match_talent = {
        onOpen: (item) => {
            const tmp = `<span  class="overview-show-more">Show less</span>
            <svg  width="25" height="15" class="rotate-180"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FA9D6B" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" ></path></svg>`;
            
            $('#show_match_talent').html(tmp);
        },
        onClose: (item) => {
            const tmp = `<span  class="overview-show-more">Show more</span>
                        <svg data-accordion-icon="" width="25" height="15"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FA9D6B" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" ></path></svg>`;
            
            $('#show_match_talent').html(tmp)
        },
        onToggle: (item) => {
            $('.match_talent_hide').toggleClass('hidden')
        },

    };
    const accordion = new Accordion(accordionItemsMatchTalent, options_show_match_talent);


    // add match talent
    function load_talent(){
        // $('.desc_view').toggleClass('hidden');
        // $('.editor').toggleClass('hidden');
        // $.ajax({
        //     type:'POST',
        //     url:'{{ route("jobboard.modal_add_match_talent") }}',
        //     data:{_token: '{{ csrf_token() }}'},
        //     success:function(data){
        //         console.log(data)
        //     }
        // });
    }


    // Select all status match Talent
    function status_talents(val){
        const tmp = `<input class="" id="{{ $value->id }}" type="hidden" name="status_name_match" value="${val}">`;
        $('.status_all_select').html(tmp)
        // var data = $('#form_match_talent').serialize();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url:'{{ route("jobboard.change_status_all_match_talent") }}',
            data:$('#form_match_talent').serialize(),
            success:function(data){
                location.reload()
            }
        });

    }

    // Show hide description
    function edit_desc(){
        $('.desc_view').toggleClass('hidden');
        $('.editor').toggleClass('hidden');
    }

   

</script>
<script type="text/javascript" src="{{ asset('js/jquery.quicksearch.js') }}"></script>
<script type="text/javascript">
	$('input#search_talents_match').quicksearch('div#data_di_cari');
</script>
<script>
    CKEDITOR.replace('editor1', {
      width: '100%',
      height: 350,
      removeButtons: 'PasteFromWord'
    });
  </script>
@endsection
