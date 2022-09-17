
@extends('family.layoutFamily.main')
@section('container')
    <main>
        <article class="pb-[207px]">
            <div class="w-[1030px] px-10 bg-white h-full mx-auto mt-24 rounded-[10px] pb-6">
                <div class=" mt-10 pt-8 flex flex-col rounded-[10px]">
                    <span class="text-3xl font-semibold text-colorFamilyText">Add Care Information</span>
                </div>
                <div class="mt-4">
                    <div class="flex space-x-6">
                        <div class="w-full">
                            <label class="text-base font-medium text-colorFamilyText">First Name</label>
                            <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Input Your First Name" autocomplete="off">
                            </div>
                        </div>
                        <div class="w-full">
                            <label class="text-base font-medium text-colorFamilyText">Last Name</label>
                            <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Input Your Last Name" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-6 mt-8">
                        <div class="w-full">
                            <label class="text-base font-medium text-colorFamilyText">Date of Birth *</label>
                            <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Input date of birth" autocomplete="off">
                            </div>
                        </div>
                        <div class="w-full">
                            <label class="text-base font-medium text-colorFamilyText">Gender</label>
                            <div class="w-full flex space-x-10">
                                <div class="mt-1  h-[38px] flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                                    <label class="text-sm font-light text-[#1C1C1E]" for="option_1">Male</label>
                                </div>
                                <div class="mt-1  h-[38px] flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                                    <label class="text-sm font-light text-[#1C1C1E]" for="option_1">Female</label>
                                </div>
                                <div class="mt-1  h-[38px] flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                                    <label class="text-sm font-light text-[#1C1C1E]" for="option_1">Gender-Neutral</label>
                                </div>
                                <div class="mt-1  h-[38px] flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                                    <label class="text-sm font-light text-[#1C1C1E]" for="option_1">Other</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <label class="text-base font-medium text-colorFamilyText" for="">Please tell us about your care likes, dislikes, and interests.</label>
                        <div class="{{ $errors->has('about_talent') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[148px] flex items-center justify-center border border-neutral-400 mt-2 rounded relative">
                            <textarea name="about_talent" rows="6" class="text-sm border-none focus:ring-0 w-full h-full rounded p-5 pl-3 outline-none" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.">{{ old('about_talent') }}</textarea>
                        </div>
                    </div>
                    <div class="mt-8">
                        <label class="text-base font-medium text-colorFamilyText" for="">Please describe any of your care special information you'd like us to be made aware of:</label>
                        <div class="{{ $errors->has('about_talent') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[148px] flex items-center justify-center border border-neutral-400 mt-2 rounded relative">
                            <textarea name="about_talent" rows="6" class="text-sm border-none focus:ring-0 w-full h-full rounded p-5 pl-3 outline-none" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.">{{ old('about_talent') }}</textarea>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-between">
                        <div>
                            <button class="px-2 h-10 bg-colorStatusCard1 rounded-[5px]">
                                <span class="text-sm font-medium text-white">Cancel</span>
                            </button>
                        </div>
                        <div class="space-x-4">
                            <button class="w-[99px] h-10 bg-palet rounded-[5px]">
                                <span class="text-sm font-medium text-white">Save</span>
                            </button>
                            <button class="px-2 h-10 border border-palet rounded-[5px]">
                                <span class="text-sm font-medium text-colorFamilyText">Save and add another person</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection