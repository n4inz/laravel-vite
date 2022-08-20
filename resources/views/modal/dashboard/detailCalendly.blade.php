<div class="w-80 flex flex-col mt-8 space-y-14">
    <div class="space-y-2 pb-2 px-5 flex flex-col items-center justify-center">
        <a href="{{ $val['reschedule_url'] }}" class="flex items-center justify-center space-x-2 w-32 h-8 border border-colortext opacity-90 rounded-full" target="_blank">
            <i class="fa fa-refresh text-colortext opacity-90" aria-hidden="true"></i>
            <span class="text-sm text-colortext opacity-90">Reschedule</span>
        </a>
        <a href="{{ $val['cancel_url'] }}" class="flex items-center pl-4 space-x-2 w-32 h-8 border border-colortext opacity-90 rounded-full" target="_blank">
            <i class="fa fa-trash-o text-colortext opacity-90" aria-hidden="true"></i>
            <span class="text-sm text-colortext opacity-90">Cancel</span>
        </a>
    </div>
    <div class="px-8">
        <span class="text-sm font-semibold text-colortext opacity-90">QUESTIONS</span>
        <div class="text-sm text-colortext opacity-70">
            @foreach ($val['questions_and_answers'] as $val_questions )
            <div class=" flex flex-col mb-1">
                {{ $val_questions->question }}
                <span class="text-xs text-colortext opacity-60">Answer : {{ $val_questions->answer }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="mt-8 w-96">
    <div class="border-b w-full pb-4">
        <span class="font-semibold text-colortext opacity-90">{{ $val['name'] }}</span>
        <div class="text-gray-400">Event Type <span class="font-semibold text-colortext opacity-90">{{ $val['event'] }}</span></div>
    </div>
    <div class="mt-4">
        <span class="text-sm font-semibold text-colortext opacity-90">EMAIL</span>
        <div class="text-sm">{{ $val['email_talent'] }}</div>
    </div>
    <div class="mt-4">
        <span class="text-sm font-semibold text-colortext opacity-90">LOCATION</span>
        @if ($val['location_meet']->type == "google_conference")
            <div class="text-sm">This is a Google Meet web conference. <a href="{{ $val['location_meet']->join_url }}" target="_blank" class="text-blue-500">Join now</a></div>
        @endif
        @if ($val['location_meet']->type == "zoom")
            <div class="text-sm">This is a Zoom web conference. <a href="{{ $val['location_meet']->join_url }}" target="_blank" class="text-blue-500">Join now</a></div>
        @endif
        @if ($val['location_meet']->type == "physical")
            <div class="text-sm">{{ $val['location_meet']->location }}</div>
        @endif
        @if ($val['location_meet']->type == "outbound_call")
            <div class="text-sm">{{ $val['location_meet']->location }}</div>
        @endif
        @if ($val['location_meet']->type == "microsoft_teams_conference")
            <div class="text-sm">This is a Microsoft teams conference. <a href="{{ $val['location_meet']->join_url }}" target="_blank" class="text-blue-500">Join now</a></div>
        @endif
        @if ($val['location_meet']->type == "webex_conference")
        <div class="text-sm">This is a Webex conference. <a href="{{ $val['location_meet']->join_url }}" target="_blank" class="text-blue-500">Join now</a></div>
        @endif
        @if ($val['location_meet']->type == "gotomeeting")
        <div class="text-sm">This is a Goto meet. <a href="{{ $val['location_meet']->join_url }}" target="_blank" class="text-blue-500">Join now</a></div>
        @endif
        
        
    </div>
    <div class="mt-4">
        <span class="text-sm font-semibold text-colortext opacity-90">INVITEE TIME ZONE</span>
        <div class="text-sm">{{ $val['time_zone'] }}</div>
    </div>
    <div class="mt-4">
        <i class="text-sm font-semibold text-colortext opacity-60">created {{ $val['created_at'] }}</i>
    </div>
</div>