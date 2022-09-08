<div class="flex items-center justify-between px-8 h-14 rounded-t border-b dark:border-gray-600">
    <span class="overview-talent-modal-title text-colortext">
        Create Job
    </span>
    <button onclick="close_modal()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
    </button>
    <input type="hidden"  name="job_models_uid" value="{{ $detailJob->uid }}" >
</div>
<div class="px-8 mt-[34px] flex items-center space-x-16">
    <div class="flex items-center justify-center space-x-3">
        <input onclick="onlyOneJob(this, 'onlyOneStatus')" id="active" name="onlyOneStatus" checked style="color: #3BD7CF" type="checkbox" value="active" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
        <label for="active" class="overview-note-body text-colortext" >Active</label>
    </div>
    <div class="flex items-center justify-center space-x-3">
        <input onclick="onlyOneJob(this, 'onlyOneStatus')" id="archived" name="onlyOneStatus" style="color: #3BD7CF" type="checkbox" value="archived" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
        <label  for="archived" class="overview-note-body text-colortext">Archived</label>
    </div>
</div>
<div class="px-8 mt-4 family-errors">
    <label class="{{ $errors->has('family') ? 'text-red-600' : '' }} mb-2 overview-note-body block text-colortext">Family*</label>
    <div class="{{ $errors->has('family') ? 'border-red-500' : 'border-[#CCD3DC]' }} w-[670px] h-8 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
        <input  name='family' value="{{ old('family' ,$detailJob->client->email) }} " type="text" class="costums-family overview-modal-add-talent-text  border-none rounded focus:ring-0 w-full p-1 outline-none" autocomplete="off">
        <a href="{{ route('user_client.client_created') }}" class="flex px-2">
            <div class="hover:cursor-pointer w-10 h-5 rounded-lg bg-palet flex items-center justify-center">
                <span class="text-xs font-semibold text-white text-center">+</span>
            </div>
        </a>
    </div>
    @if($errors->has('family'))
        <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('family') }}</p>
    @endif
</div>
<div class="px-8 mt-4 title-errors">
    <label class="{{ $errors->has('title') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">Title*</label>
    <div class="{{ $errors->has('title') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} relative flex flex-col items-center justify-center space-x-3 w-[670px] h-8 border border-[#CCD3DC] rounded py-4">
        <input name="title" value="{{ old('title' , $detailJob->title) }}" type="text" class="h-8  block border-none bg-transparent focus:ring-0 w-full outline-none rounded" autocomplete="off">
    </div>
    @if($errors->has('title'))
        <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('title') }}</p>
    @endif
</div>
<div class="px-8 mt-4 description-errors">
    <label for="description-label" class="{{ $errors->has('description') ? 'text-red-600' : '' }} mb-2 block overview-note-body text-colortext">Description*</label>
    <div class="{{ $errors->has('description') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[670px] flex items-center justify-center border border-[#CCD3DC] mt-2 rounded relative">
        {{-- <input name="description" value="{{ old('description') }}" type="text" id="description" class="h-8 overview-note-body block border-none bg-transparent focus:ring-0 w-full outline-none rounded" placeholder=""> --}}
        <textarea id="editor1" name="description" rows="3" class="{{ $errors->has('description') ? 'placeholder-red-600' : '' }}  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none">{{ old('description', $detailJob->description) }}</textarea>
    </div>
    @if($errors->has('description'))
        <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('description') }}</p>
    @endif
</div>
<div class="px-8 mt-4 address-errors">
    <label class="mb-2 block overview-note-body text-colortext">Address(city/state/country)</label>
    <div class="flex items-center">
        <div class="w-8 h-[34px] flex items-center justify-center rounded-l bg-[#CCD3DC]">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.09993 5.65006C4.37886 5.13849 6.1114 4.83325 7.99967 4.83325C9.88795 4.83325 11.6205 5.13849 12.8994 5.65006C13.5375 5.90529 14.0874 6.22171 14.486 6.59865C14.8856 6.97659 15.1663 7.44994 15.1663 7.99992C15.1663 8.54989 14.8856 9.02325 14.486 9.40119C14.0874 9.77813 13.5375 10.0945 12.8994 10.3498C11.6205 10.8613 9.88795 11.1666 7.99967 11.1666C6.1114 11.1666 4.37886 10.8613 3.09993 10.3498C2.46186 10.0945 1.91193 9.77813 1.51335 9.40119C1.11372 9.02325 0.833008 8.54989 0.833008 7.99992C0.833008 7.44994 1.11372 6.97659 1.51335 6.59865C1.91193 6.22171 2.46186 5.90529 3.09993 5.65006ZM2.20046 7.32521C1.9254 7.58534 1.83301 7.81351 1.83301 7.99992C1.83301 8.18633 1.9254 8.4145 2.20046 8.67463C2.47658 8.93576 2.90297 9.19396 3.47132 9.4213C4.60525 9.87487 6.20605 10.1666 7.99967 10.1666C9.7933 10.1666 11.3941 9.87487 12.528 9.4213C13.0964 9.19396 13.5228 8.93576 13.7989 8.67463C14.074 8.4145 14.1663 8.18633 14.1663 7.99992C14.1663 7.81351 14.074 7.58534 13.7989 7.32521C13.5228 7.06407 13.0964 6.80588 12.528 6.57854C11.3941 6.12497 9.7933 5.83325 7.99967 5.83325C6.20605 5.83325 4.60525 6.12497 3.47132 6.57854C2.90297 6.80588 2.47658 7.06407 2.20046 7.32521Z" fill="#222222"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.57829 3.47157C6.12472 4.6055 5.83301 6.20629 5.83301 7.99992C5.83301 9.79354 6.12472 11.3943 6.57829 12.5283C6.80563 13.0966 7.06383 13.523 7.32496 13.7991C7.58509 14.0742 7.81327 14.1666 7.99967 14.1666C8.18608 14.1666 8.41425 14.0742 8.67439 13.7991C8.93552 13.523 9.19372 13.0966 9.42106 12.5283C9.87463 11.3943 10.1663 9.79354 10.1663 7.99992C10.1663 6.20629 9.87463 4.6055 9.42106 3.47157C9.19372 2.90322 8.93552 2.47683 8.67439 2.20071C8.41425 1.92564 8.18608 1.83325 7.99967 1.83325C7.81327 1.83325 7.58509 1.92564 7.32496 2.20071C7.06383 2.47683 6.80563 2.90322 6.57829 3.47157ZM6.59841 1.5136C6.97635 1.11396 7.4497 0.833252 7.99967 0.833252C8.54965 0.833252 9.023 1.11396 9.40094 1.5136C9.77788 1.91218 10.0943 2.4621 10.3495 3.10018C10.8611 4.37911 11.1663 6.11164 11.1663 7.99992C11.1663 9.8882 10.8611 11.6207 10.3495 12.8997C10.0943 13.5377 9.77788 14.0877 9.40094 14.4862C9.023 14.8859 8.54965 15.1666 7.99967 15.1666C7.4497 15.1666 6.97635 14.8859 6.59841 14.4862C6.22147 14.0877 5.90505 13.5377 5.64982 12.8997C5.13824 11.6207 4.83301 9.8882 4.83301 7.99992C4.83301 6.11164 5.13824 4.37911 5.64982 3.10018C5.90505 2.4621 6.22147 1.91218 6.59841 1.5136Z" fill="#222222"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.83325C4.59392 1.83325 1.83301 4.59416 1.83301 7.99992C1.83301 11.4057 4.59392 14.1666 7.99967 14.1666C11.4054 14.1666 14.1663 11.4057 14.1663 7.99992C14.1663 4.59416 11.4054 1.83325 7.99967 1.83325ZM0.833008 7.99992C0.833008 4.04188 4.04163 0.833252 7.99967 0.833252C11.9577 0.833252 15.1663 4.04188 15.1663 7.99992C15.1663 11.958 11.9577 15.1666 7.99967 15.1666C4.04163 15.1666 0.833008 11.958 0.833008 7.99992Z" fill="#222222"/>
            </svg> 
        </div>
        <div class="flex relative items-center justify-center space-x-3 w-[638px] h-8 border border-[#CCD3DC] rounded-r py-4">
            <input name="address" value="{{ old('address' ,$detailJob->location ) }}" type="text" class="placepicker overview-note-body text-sm block border-none bg-transparent focus:ring-0 w-full outline-none " placeholder="Enter Location" autocomplete="off">
        </div>
        @if($errors->has('address'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('address') }}</p>
        @endif
    </div>
</div>

{{-- Category --}}
<div class="px-8 mt-8 ">
    <span class="overview-comments-name text-colortext">Category</span>
    <div class="p-2 mt-4">
        <label for="category" class="overview-note-body text-colortext mb-2 block">Category</label>
        <div class="w-[316px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
            <select name="category" id="category" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                
                @if($category->count() == 0)
                    <option value="">Category is empty</option>
                @endif
                @foreach ($category as $val )
                    <option @if(old('category') == $val->id) selected @endif value="{{ $val->id }}">{{ $val->category_name }}</option>
                @endforeach
               
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
        <div class="sub_categorys grid grid-cols-3">
        </div>
        <div class="sub_categorys_error">
            @if($errors->has('subcategory'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('subcategory') }}</p>
            @endif
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
                <select id="part-time" name="part_time" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                    <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Part Time</option>
                    <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Full Time</option>
                </select>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                        <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                    </svg> 
                </div>
            </div>
            <div class="flex items-center space-x-3 mt-[13px]">
                <input id="comfortable-with-pets" @if(old('comfortable_with_pets')) checked @endif name="comfortable_with_pets" style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="comfortable-with-pets" class="overview-note-body text-colortext">Comfortable with pets</label>
            </div>
        </div>
        <div>
            <label for="desired-living" class="overview-note-body text-colortext mb-2 block">Desired Living</label>
            <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                <select id="desired-living" name="desired_living" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                    <option @if(old('desired_living') == 'any') selected @endif value="Any" >Any</option>
                    <option @if(old('desired_living') == 'Live in') selected @endif value="Live in" >Live in</option>
                    <option @if(old('desired_living') == 'Live out') selected @endif value="Live out" >Live out</option>
                </select>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                        <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                    </svg> 
                </div>
            </div>
            <div class="flex items-center space-x-3 mt-[13px]">
                <input id="has-transportation" name="has_transportation" @if(old('has_transportation')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="has-transportation" class="overview-note-body text-colortext">Has transportation</label>
            </div>
        </div>
        <div>
            <label for="english-level" class="overview-note-body text-colortext mb-2 block">English Level</label>
            <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                <select id="english-level" name="english_level" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                    <option @if(old('english_level') == 'Basic') selected @endif value="Basic">Basic</option>
                    <option  @if(old('english_level') == 'Conversational') selected @endif value="Conversational" >Conversational</option>
                    <option @if(old('english_level') == 'Fluent native') selected @endif value="Fluent native" >Fluent native</option>
                </select>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                        <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                    </svg> 
                </div>
            </div>
            <div class="flex items-center space-x-3 mt-[13px]">
                <input id="has-driver-license" name="has_driver_license" @if(old('has_driver_license')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
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
                <input id="english" name="language[]" @if(is_array(old('language')) && in_array('English', old('language')) ) checked @endif style="color: #3BD7CF" type="checkbox" value="English" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="english" class="overview-note-body text-colortext">English</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="french" name="language[]" style="color: #3BD7CF" type="checkbox" value="French" @if(is_array(old('language')) && in_array('French', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="french" class="overview-note-body text-colortext">French</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="tagalog" name="language[]" style="color: #3BD7CF" type="checkbox" value="Tagalog" @if(is_array(old('language')) && in_array('Tagalog', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="tagalog" class="overview-note-body text-colortext">Tagalog</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="thai" name="language[]" style="color: #3BD7CF" type="checkbox" value="Thai" @if(is_array(old('language')) && in_array('Thai', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="thai" class="overview-note-body text-colortext">Thai</label>
            </div>
        </div>
        <div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="chinese-mandarin" name="language[]" style="color: #3BD7CF" type="checkbox" value="Chinese Mandarin" @if(is_array(old('language')) && in_array('Chinese Mandarin', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="chinese-mandarin" class="overview-note-body text-colortext">Chinese Mandarin</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="hindi" name="language[]" style="color: #3BD7CF" type="checkbox" value="Hindi" @if(is_array(old('language')) && in_array('Hindi', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="hindi" class="overview-note-body text-colortext">Hindi</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="polish" name="language[]" style="color: #3BD7CF" type="checkbox" value="Polish" @if(is_array(old('language')) && in_array('Polish', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="polish" class="overview-note-body text-colortext">Polish</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="vietnamese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Vietnamese" @if(is_array(old('language')) && in_array('Vietnamese', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="vietnamese" class="overview-note-body text-colortext">Vietnamese</label>
            </div>
        </div>
        <div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="chinese-cantonese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Chinese Cantonese" @if(is_array(old('language')) && in_array('Chinese Cantonese', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="chinese-cantonese" class="overview-note-body text-colortext">Chinese Cantonese</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="japanese" name="language[]" style="color: #3BD7CF" type="checkbox" value="Japanese" @if(is_array(old('language')) && in_array('Japanese', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="japanese" class="overview-note-body text-colortext">Japanese</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="russian" name="language[]" style="color: #3BD7CF" type="checkbox" value="Russian" @if(is_array(old('language')) && in_array('Russian', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="russian" class="overview-note-body text-colortext">Russian</label>
            </div>
        </div>
        <div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="ethiopian" name="language[]" style="color: #3BD7CF" type="checkbox" value="Ethiopian" @if(is_array(old('language')) && in_array('Ethiopian', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="ethiopian" class="overview-note-body text-colortext">Ethiopian</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="korean" name="language[]" style="color: #3BD7CF" type="checkbox" value="Korean" @if(is_array(old('language')) && in_array('Korean', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="korean" class="overview-note-body text-colortext">Korean</label>
            </div>
            <div class="flex items-center space-x-3 mt-[10px]">
                <input id="spanish" name="language[]" style="color: #3BD7CF" type="checkbox" value="Spanish" @if(is_array(old('language')) && in_array('Spanish', old('language')) ) checked @endif class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                <label for="spanish" class="overview-note-body text-colortext">Spanish</label>
            </div>
        </div>
    </div>
</div>

{{-- Children/ seniors --}}
<div class="px-8 mt-8 ">
    <span class="overview-comments-name text-colortext">Childrens/ Seniors</span>
    <div class="flex mt-4 px-2">
        <div onclick="addChile()" class="hover:cursor-pointer w-[71px] h-8 rounded-lg bg-palet flex items-center justify-center">
            <span class="overview-attechment-btn-text text-center">Add</span>
        </div>
    </div>

    <div class="append_chile px-2 mt-8 flex flex-wrap justify-around">
    </div>

</div>




{{-- availability --}}
<div class="px-8 mt-8 ">
    <span class="overview-comments-name text-colortext">Availability</span>
    <div class="mt-4 px-2 ">
        <div class="flex space-x-[110px]">
            <div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="all-days" name="all_days"  @if(old('all_days')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="all-days" class="overview-note-body text-colortext">All days</label>
                </div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="monday" name="monday" @if(old('monday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="monday" class="overview-note-body text-colortext">Monday</label>
                </div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="tuesday" name="tuesday" @if(old('tuesday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="tuesday" class="overview-note-body text-colortext">Tuesday</label>
                </div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="wednesday" name="wednesday" @if(old('wednesday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="wednesday" class="overview-note-body text-colortext">Wednesday</label>
                </div>
            </div>
            <div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="thursday" name="thursday" @if(old('thursday')) checked @endif  style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="thursday" class="overview-note-body text-colortext">Thursday</label>
                </div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="friday" name="friday" @if(old('friday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="friday" class="overview-note-body text-colortext">Friday</label>
                </div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="saturday" name="saturday" @if(old('saturday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="saturday" class="overview-note-body text-colortext">Saturday</label>
                </div>
                <div class="flex items-center space-x-3 mt-[10px]">
                    <input id="sunday" name="sunday" @if(old('sunday')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="check w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="sunday" class="overview-note-body text-colortext">Sunday</label>
                </div>
            </div>
        </div>
        <div class="flex space-x-4 mt-8">
            <div class="start-time-errors">
                <label class="{{ $errors->has('start_time') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Start time*</label>
                <div class="{{ $errors->has('start_time') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                    <input type="time" name="start_time" value="{{ old('start_time') }}" style="font-weight: 400; font-size: 13.7px;line-height: 18px;letter-spacing: -0.08px;" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="" autocomplete="off">
                </div>
                @if($errors->has('start_time'))
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('start_time') }}</p>
                @endif
            </div>
            <div class="end-time-errors">
                <label  class="{{ $errors->has('end_time') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">End time*</label>
                <div class="{{ $errors->has('end_time') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                    <input type="time" name="end_time" value="{{ old('end_time') }}" style="font-weight: 400; font-size: 13.7px;line-height: 18px;letter-spacing: -0.08px;" class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " placeholder="" autocomplete="off">
                </div>
                @if($errors->has('end_time'))
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('end_time') }}</p>
                @endif
            </div>
            <div>
                <label for="duration" class="overview-note-body text-colortext mb-2 block">Duration</label>
                <div class="w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                    <select id="duration" name="duration" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                        <option @if(old('duration') == '1 Month') selected @endif value="1 Month">1 Month</option>
                        <option @if(old('duration') == '3 Month') selected @endif value="3 Month">3 Month</option>
                        <option @if(old('duration') == '6 Month') selected @endif value="6 Month">6 Month</option>
                        <option @if(old('duration') == '1 Year') selected @endif value="1 Year">1 Year</option>
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

        <div class="flex space-x-[165px] mt-6">
            <div>
                <label for="start-date" class="{{ $errors->has('start_date') ? 'text-red-600' : '' }} overview-note-body text-colortext block">Start date*</label>
                <div class="flex items-center space-x-3 py-2 ">
                    <input id="asap" name="asap" @if(old('asap')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="asap" class="overview-note-body text-colortext">ASAP</label>
                </div>
            </div>
            <div>
                <label for="end-date" class="{{ $errors->has('end_date') ? 'text-red-600' : '' }} overview-note-body text-colortext block">End date*</label>
                <div class="flex items-center space-x-3 py-2 ">
                    <input id="tbd" name="tbd" @if(old('tbd')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="tbd" class="overview-note-body text-colortext">TBD</label>
                </div>
            </div>
        </div>

        {{-- Ngak bisa datepicker, coba cari solusi --}}
        <div date-rangepicker datepicker-format="mm/dd/yyyy" class="flex space-x-4 relative ">
            <div class="start-date-errors">
                <div class="input_asap relative w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                    <input name="start_date" type="date" value="{{ old('start_date') }}" style="font-weight: 400; font-size: 13.7px;line-height: 18px;letter-spacing: -0.08px;" class="start_date overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none " autocomplete="off">
                </div>
                @if($errors->has('start_date'))
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('start_date') }}</p>
                @endif
            </div>
            <div class="end-date-errors">
                <div class="input_tbd relative w-[214px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                    <input name="end_date" type="date" value="{{ old('end_date') }}" style="font-weight: 400; font-size: 13.7px;line-height: 18px;letter-spacing: -0.08px;" class="end_date overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-5 outline-none" autocomplete="off">
                </div>
                @if($errors->has('end_date'))
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('end_date') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Salary --}}
<div class="px-8 mt-8 ">
    <span class="overview-comments-name text-colortext">Salary</span>
    <div class="mt-4 px-2 ">
        <div class="flex space-x-2 ">
            <div>
                <label for="start-date" class="overview-note-body text-colortext mb-2 block">Type</label>
                <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center justify-center rounded">
                    <select id="duration" name="salary_type" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                        <option @if(old('salary_type') == 'Hourly') selected @endif value="Hourly">Hourly</option>
                        <option @if(old('salary_type') == 'Daily') selected @endif value="Daily" >Daily</option>
                        <option @if(old('salary_type') == 'Weekly') selected @endif value="Weekly" >Weekly</option>
                        <option @if(old('salary_type') == 'Monthly') selected @endif value="Monthly" >Monthly</option>
                        <option @if(old('salary_type') == 'Year') selected @endif value="Year" >Year</option>
                    </select>
                    <div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.99312 5.80669C3.76419 6.04169 3.4001 6.0417 3.17116 5.80671C2.94768 5.57732 2.94235 5.19978 3.15927 4.96344C3.16318 4.95922 4.49742 3.58936 7.16198 0.853876L7.99005 0L8.82187 0.849745L12.8284 4.96674C13.0525 5.19676 13.0578 5.57532 12.8403 5.81228C12.599 6.06042 12.234 6.06046 12.0045 5.82485L7.98992 1.70379L3.99312 5.80669Z" fill="#3BD7CF"/>
                            <path d="M12.0069 10.1933C12.2358 9.95831 12.5999 9.9583 12.8288 10.1933C13.0523 10.4227 13.0576 10.8002 12.8407 11.0366C12.8368 11.0408 11.5026 12.4106 8.83802 15.1461L8.00995 16L7.17813 15.1503L3.1716 11.0333C2.94753 10.8032 2.9422 10.4247 3.15972 10.1877C3.40099 9.93958 3.76603 9.93954 3.99554 10.1751L8.01008 14.2962L12.0069 10.1933Z" fill="#3BD7CF"/>
                        </svg> 
                    </div>
                </div>
                <div class="flex items-center space-x-3 mt-[13px] ">
                    <input id="rate-negotible" name="rate_negotiable" @if(old('rate_negotiable')) checked @endif style="color: #3BD7CF" type="checkbox" value="1" class="w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                    <label for="rate-negotible" class="overview-note-body text-colortext">Rate negotiable</label>
                </div>
            </div>
            <div class="rate-errors">
                <label class="{{ $errors->has('rate') ? 'text-red-600' : '' }} overview-note-body text-colortext mb-2 block">Rate*</label>
                <div class="{{ $errors->has('rate') ? 'border-red-500 ' : 'border-[#CCD3DC]'}} w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                    <input type="text" name="rate" value="{{ old('rate') }}"  class="overview-note-body block border-none bg-transparent focus:ring-0 w-full -ml-3 outline-none " autocomplete="off">
                </div>
                @if($errors->has('family'))
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $errors->first('rate') }}</p>
                @endif
            </div>
            <div>
                <label for="daily" class="overview-note-body text-colortext mb-2 block">Pay frequency</label>
                <div class="w-[167px] p-3 h-8 border border-[#ECECEC] flex items-center rounded">
                    <select id="daily" name="pay_frequency" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                        <option @if(old('pay_frequency') == 'Daily') selected @endif value="Daily" >Daily</option>
                        <option @if(old('pay_frequency') == 'Weekly') selected @endif value="Weekly" >Weekly</option>
                        <option @if(old('pay_frequency') == 'Monthly') selected @endif value="Monthly" >Monthly</option>
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
                    <select id="pay-with" name="pay_with" class="overview-note-body bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                        <option @if(old('pay_with') == 'any') selected @endif value="any">Any</option>
                        <option @if(old('pay_with') == 'check') selected @endif value="check">Check</option>
                        <option @if(old('pay_with') == 'cash') selected @endif value="cash">Cash</option>
                        <option @if(old('pay_with') == 'online_payment') selected @endif value="online_payment">Online Payment</option>
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


<script>
    var input = document.querySelector('input[name=family]');

    function tagTemplate(tagData){
        var avatar
        if(tagData.avatar != null){
            avatar = `<img  src="{{ asset('storage/avatar/${tagData.avatar}') }}" class="rounded-full h-5 w-5" alt="">`;
        }else{
            avatar = tagData.tagTemplate
        }
        return `
        <div class="bg-palet h-6 flex items-center space-x-2 rounded-md pl-1">
            <x title='' class='tagify__tag__removeBtn text-white' role='button' aria-label='remove tag'></x>
            ${avatar}
            
            <span class="text-xs text-white pr-2">${tagData.first_name}</span>
        </div>
        `
    }
    function suggestionItemTemplate(tagData){
        
        var avatar
        if(tagData.avatar != null){
            avatar = `<div class="w-10">
                        <img class="w-10 h-10 rounded-full mt-1" src="{{ asset('storage/avatar/${tagData.avatar}') }}">
                    </div>`;
        }else{
            avatar = tagData.avatar1
        }
        return `
            <div ${this.getAttributes(tagData)}
                class='tagify__dropdown__item flex items-center space-x-1 ${tagData.class ? tagData.class : ""}'
                tabindex="0"
                role="option">
            
                ${avatar}
            
                <div class="flex flex-col">
                    <strong>${tagData.first_name}</strong>
                    <span>${tagData.email}</span>
                </div>
            </div>
        `
    }

    new Tagify(input,{
        enforceWhitelist : true,
        whitelist : <?=  json_encode($json) ?>,
        maxTags:1,
        skipInvalid: true,
        dropdown: {
            closeOnSelect: true,
            enabled: 0,
            classname: 'users-list',
            searchKeys: ['first_name', 'email']  // very important to set by which keys to search for suggesttions when typing
        },

        templates: {
            tag: tagTemplate,
            dropdownItem: suggestionItemTemplate,
            // dropdownHeader: dropdownHeaderTemplate
        },

    })
    function subCategorys(id){
        $.ajax({
            type:'POST',
            url:'{{ route("jobboard.get_subcategory_ajax") }}',
            data:{id , _token: '{{ csrf_token() }}'},
            success:function(res){
                    $('.sub_categorys').html('')
                
                res.sub_categorys.map(function(e){
                    var tmp = `<div  class=" items-center space-x-3 mt-[10px]">
                                    <input id="${e.sub_category_key}" name="subcategory[]" {{ is_array(old('subcategory')) && in_array($val->sub_category_key, old('subcategory')) ? 'checked' : ''}} style="color: #3BD7CF" type="checkbox" value="${e.sub_category_key}" class="{{ $errors->has('subcategory') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-5 h-5 rounded bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                    <label for="${e.sub_category_key}" class="{{ $errors->has('subcategory') ? 'text-red-600' : '' }} overview-note-body text-colortext">${e.sub_category_name}</label>
                                </div>`;
                                $('.sub_categorys').append(tmp)
                })
            }
        });
    }
    $('#category').change(function(){
        const id = $(this).val()
        subCategorys(id)
    })
    subCategorys($('#category').val())

    // ASAP & TBD
    $('#asap').click(function(){
        $('.input_asap').toggleClass('bg-gray-200');
        if (this.checked) {
            $('.start_date').prop('disabled', true);
            $('.start_date').attr("type", "date")
            $('.start_date').addClass("text-gray-200");
        } else {
            $('.start_date').prop('disabled', false);
            $('.start_date').attr("type", "date")
            $('.start_date').removeClass("text-gray-200");          
        }
    })

    $('#tbd').click(function(){
        $('.input_tbd').toggleClass('bg-gray-200');
        
        if (this.checked) {
            $('.end_date').prop('disabled', true);
            $('.end_date').attr("type", "date")
            $('.end_date').addClass("text-gray-200");
        } else {
            $('.end_date').prop('disabled', false);
            $('.end_date').attr("type", "date")
            $('.end_date').removeClass("text-gray-200");      
        }
    })

    $('.family_email_send').val('{{ $detailJob->client->email }}');

</script>
<script src="{{ asset('js/jQuery/jobBoardJquery.js') }}"></script>
<script src="{{ asset('js/placePicker.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".placepicker").placepicker();
    }); 
</script>
<script>
    CKEDITOR.replace('editor1', {
      width: '100%',
      height: 100,
      removeButtons: 'PasteFromWord'
    });

</script>