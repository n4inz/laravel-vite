                    <div class="flex justify-center space-x-10">
                        @if ($client->avatar)
                            <img class="w-28 h-28 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/avatar/'.$client->avatar) }}" alt="">
                        @else
                            <div class="w-32">
                                <div class="w-28 h-28 flex items-center justify-center bg-[{{ $client->color }}] rounded-full">
                                    <span class="text-white text-xl">{{ strtoupper(substr($client->first_name, 0, 1)) }}{{ strtoupper(substr($client->last_name, 0, 1)) }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="w-full flex flex-col ">
                            <div class="flex flex-col">
                                <span class="overview-talent-modal-title text-[#2CA6A0]">{{ $client->first_name }} {{ $client->last_name }}</span>
                            </div>
                            <div class="mt-6">
                                <table width ="100%">
                                    <tr>
                                        <td height="25px" width="150px" class="overview-modal-detail-talent text-[#AFABAB]">Location</td>
                                        <td height="25px" class="overview-note-body text-[#222222]">{{ $client->address }}</td>
                                    </tr>
                                    <tr>
                                        <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Language(s)</td>
                                        <td height="25px" class="overview-note-body text-[#222222]">
                                            {{$client->languages }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Email</td>
                                        <td height="25px" class="overview-note-body text-[#222222]">{{$client->email }}</td>
                                    </tr>
                                    <tr>
                                        <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Phone</td>
                                        <td height="25px" class="overview-note-body text-[#222222]">{{$client->phone }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 mt-6 border-t">
                        <span class="overview-talent-modal-title text-[#4F4F4F]"> <span class="text-[#CCD3DC]">&ldquo;</span> Note <span class="text-[#CCD3DC]">&rdquo;</span> </span>
                        <div class="overview-note-body text-[#827C7C] text-start mt-4">
                            {{$client->note }}
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-[17.71px] ">
                            <img width="30" height="32" src="{{ asset('images/icon/email-verifed.png') }}" alt="404">
                            <span class="overview-note-body">Email Verified</span>                                        
                        </div>
                        <div class="flex items-center space-x-[17.71px] ">
                            <img width="31" height="31" src="{{ asset('images/icon/bg-check.png') }}" alt="404">
                            <span class="overview-note-body max-w-[120px]">Background Check Self Reported</span>                                        
                        </div>
                        <div class="flex items-center space-x-[17.71px] ">
                            <img width="32" height="32" src="{{ asset('images/icon/vacination.png') }}" alt="404">
                            <span class="overview-note-body  max-w-[80px]">Vaccination Up-to-date</span>                                        
                        </div>
                    </div>
                    
                    
                    <div class="mt-8">
                        <span class="overview-talent-modal-title">Document</span>
                        <div class="flex flex-wrap mt-4">
                            @isset($client->attached_file)
                                <a href="{{ route('jobboard.download_file' , ['file' => $client->attached_file->attached_file , 'path' => 'file']) }}">
                                    <div class="mr-4 mb-4 flex flex-col items-center justify-center hover:cursor-pointer">
                                        <i class="fa fa-2x fa-file-pdf-o text-red-600" aria-hidden="true"></i>
                                        <span class="text-xs text-gray-400 mt-1">{{ $client->attached_file->attached_file }}</span>
                                    </div>
                                </a>
                            @endisset
                        </div>
                    </div>
                    <div class="mt-8 flex"></div>