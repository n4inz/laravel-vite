<div class="flex justify-center space-x-10">
    @if ($talent->avatar)
    
    <img class="w-28 h-28 border-2 border-white rounded-full dark:border-gray-800" src="{{ asset('storage/avatar/'.$talent->avatar) }}" alt="">
    @else
        <div class="w-32">
            <div class="w-28 h-28 flex items-center justify-center bg-[{{ $talent->color }}] rounded-full">
                <span class="text-white text-xl">{{ strtoupper(substr($talent->first_name, 0, 1)) }}{{ strtoupper(substr($talent->last_name, 0, 1)) }}</span>
            </div>

        </div>
    @endif
    <div class="w-full flex flex-col ">
        <div class="flex flex-col">
            <span class="overview-talent-modal-title text-[#2CA6A0]">{{ $talent->first_name }} {{ $talent->last_name }}</span>
            <span class="overview-client-detail-table">Female, @if($talent->day_of_birthday != 'null') {{ Carbon\Carbon::parse($talent->day_of_birthday)->age }} @endif  years old</span>
        </div>
        <div class="mt-6">
            <table width ="100%">
                <tr>
                    <td height="25px" width="150px" class="overview-modal-detail-talent text-[#AFABAB]">Location</td>
                    <td height="25px" class="overview-note-body text-[#222222]">{{ $talent->address }}</td>
                </tr>
                <tr>
                    <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Experience (Years)</td>
                    <td height="25px" class="overview-note-body text-[#222222]">{{ $talent->experience }}</td>
                </tr>
                <tr>
                    <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Language(s)</td>
                    <td height="25px" class="overview-note-body text-[#222222]">
                        @foreach ($talent->languages as $lang )
                            {{ $lang->languages }}, 
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Email</td>
                    <td height="25px" class="overview-note-body text-[#222222]">{{ $talent->email }}</td>
                </tr>
                <tr>
                    <td height="25px" class="overview-modal-detail-talent text-[#AFABAB]">Phone</td>
                    <td height="25px" class="overview-note-body text-[#222222]">{{ $talent->phone }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="py-6 mt-6 border-t">
    <span class="overview-talent-modal-title text-[#4F4F4F]"> <span class="text-[#CCD3DC]">&ldquo;</span> About talent <span class="text-[#CCD3DC]">&rdquo;</span> </span>
    <div class="overview-note-body text-[#827C7C] text-start mt-4">
        {{ $talent->about_talent }}
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

<div class="mt-[65px]">
    <span class="overview-talent-modal-title">Responsibilities</span>
    <div class="flex mt-6">

        <div class="flex flex-col w-full">
            @foreach ($talent->type_helper as $val )
            {{-- <span class="overview-comments-name w-[330px] text-[#222222]">Child Care</span> --}}
            <span class="overview-note-body text-[#827C7C]">{{ $val->name_type_helper }} </span>
            @endforeach
        </div>
    </div>
    {{-- <div class="flex mt-6">
        <div class="flex flex-col">
            <span class="overview-comments-name w-[330px] text-[#222222]">Child Care</span>
            <span class="overview-note-body text-[#827C7C] max-w-[205px]">Nanny, Sitter, Maternity Nanny</span>
        </div>
        <div class="flex flex-col">
            <span class="overview-comments-name text-[#222222]">Senior Care</span>
            <span class="overview-note-body text-[#827C7C] max-w-[205px]">Companion Care</span>
        </div>
    </div>
    <div class="flex mt-4">
        <div class="flex flex-col">
            <span class="overview-comments-name w-[330px] text-[#222222]">Learning</span>
            <span class="overview-note-body text-[#827C7C] max-w-[205px]">Language Tutor, Art/Music/Science, Health/Wellness</span>
        </div>
        <div class="flex flex-col">
            <span class="overview-comments-name text-[#222222]">Home Care</span>
            <span class="overview-note-body text-[#827C7C] max-w-[205px]">Cook, Cleaner</span>
        </div>
    </div> --}}
</div>

<div class="mt-8">
    <span class="overview-talent-modal-title">Feedback</span>
    <div id="images" class="flex flex-wrap mt-4">
        @foreach ($talent->attached_file as $talentFile )
            @if ($talentFile->extension == 'png' or $talentFile->extension == 'jpg' or $talentFile->extension == 'jpeg')
                <div class="flex mr-4 items-center justify-center space-x-[16.33px] w-[121px] h-32 hover:cursor-pointer">
                    <img src="{{ asset('storage/file/'.$talentFile->files) }}" alt="">
                </div>
            @endif
        @endforeach
        {{-- <div class="flex items-center space-x-[16.33px] ">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33301 4.00002C4.33301 2.71136 5.37768 1.66669 6.66634 1.66669H20.6663C20.9498 1.66669 21.22 1.78701 21.4096 1.99772L27.4096 8.66439C27.5749 8.84801 27.6663 9.08631 27.6663 9.33335V28C27.6663 29.2887 26.6217 30.3334 25.333 30.3334H6.66634C5.37769 30.3334 4.33301 29.2887 4.33301 28V4.00002ZM6.66634 3.66669C6.48225 3.66669 6.33301 3.81593 6.33301 4.00002V28C6.33301 28.1841 6.48224 28.3334 6.66634 28.3334H25.333C25.5171 28.3334 25.6663 28.1841 25.6663 28V9.71709L20.221 3.66669H6.66634Z" fill="#8A8888"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1.66669C20.5523 1.66669 21 2.1144 21 2.66669V8.33335H26.6667C27.219 8.33335 27.6667 8.78107 27.6667 9.33335C27.6667 9.88564 27.219 10.3334 26.6667 10.3334H20C19.4477 10.3334 19 9.88564 19 9.33335V2.66669C19 2.1144 19.4477 1.66669 20 1.66669Z" fill="#8A8888"/>
            </svg>
            <span class="overview-comments-name text-[#222222]">aa</span>
        </div> --}}
        {{-- <div class="flex items-center space-x-[16.33px] ml-[64.33px]">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33301 4.00002C4.33301 2.71136 5.37768 1.66669 6.66634 1.66669H20.6663C20.9498 1.66669 21.22 1.78701 21.4096 1.99772L27.4096 8.66439C27.5749 8.84801 27.6663 9.08631 27.6663 9.33335V28C27.6663 29.2887 26.6217 30.3334 25.333 30.3334H6.66634C5.37769 30.3334 4.33301 29.2887 4.33301 28V4.00002ZM6.66634 3.66669C6.48225 3.66669 6.33301 3.81593 6.33301 4.00002V28C6.33301 28.1841 6.48224 28.3334 6.66634 28.3334H25.333C25.5171 28.3334 25.6663 28.1841 25.6663 28V9.71709L20.221 3.66669H6.66634Z" fill="#8A8888"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1.66669C20.5523 1.66669 21 2.1144 21 2.66669V8.33335H26.6667C27.219 8.33335 27.6667 8.78107 27.6667 9.33335C27.6667 9.88564 27.219 10.3334 26.6667 10.3334H20C19.4477 10.3334 19 9.88564 19 9.33335V2.66669C19 2.1144 19.4477 1.66669 20 1.66669Z" fill="#8A8888"/>
            </svg>
            <span class="overview-comments-name text-[#222222]">Covid Card</span>
        </div>
        <div class="flex items-center space-x-[16.33px] ml-[64.33px]">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.33301 4.00002C4.33301 2.71136 5.37768 1.66669 6.66634 1.66669H20.6663C20.9498 1.66669 21.22 1.78701 21.4096 1.99772L27.4096 8.66439C27.5749 8.84801 27.6663 9.08631 27.6663 9.33335V28C27.6663 29.2887 26.6217 30.3334 25.333 30.3334H6.66634C5.37769 30.3334 4.33301 29.2887 4.33301 28V4.00002ZM6.66634 3.66669C6.48225 3.66669 6.33301 3.81593 6.33301 4.00002V28C6.33301 28.1841 6.48224 28.3334 6.66634 28.3334H25.333C25.5171 28.3334 25.6663 28.1841 25.6663 28V9.71709L20.221 3.66669H6.66634Z" fill="#8A8888"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1.66669C20.5523 1.66669 21 2.1144 21 2.66669V8.33335H26.6667C27.219 8.33335 27.6667 8.78107 27.6667 9.33335C27.6667 9.88564 27.219 10.3334 26.6667 10.3334H20C19.4477 10.3334 19 9.88564 19 9.33335V2.66669C19 2.1144 19.4477 1.66669 20 1.66669Z" fill="#8A8888"/>
            </svg>
            <span class="overview-comments-name text-[#222222]">CV.pdf</span>
        </div> --}}
    </div>
</div>
<div class="mt-8">
    <span class="overview-talent-modal-title">Document</span>
    <div class="flex flex-wrap mt-4">
        @foreach ($talent->attached_file as $talentFile )
            @if ($talentFile->extension == 'pdf')
            <a href="{{ route('jobboard.download_file' , ['file' => $talentFile->files , 'path' => 'file']) }}">
                <div class="mr-4 mb-4 flex flex-col items-center justify-center hover:cursor-pointer">
                    <i class="fa fa-2x fa-file-pdf-o text-red-600" aria-hidden="true"></i>
                    <span class="text-xs text-gray-400 mt-1">{{ $talentFile->files }}</span>
                </div>
            </a>
            @endif
        @endforeach
    </div>
</div>
<div class="mt-8 flex"></div>

<script>
    var $image = $('#image');

    $image.viewer({
    inline: true,
    viewed: function() {
        $image.viewer('zoomTo', 1);
    }
    });
    var viewer = $image.data('viewer');
    $('#images').viewer();
</script>