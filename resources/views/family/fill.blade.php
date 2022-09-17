@extends('family.layoutFamily.main')
@section('container')
    <main>
        <article class="pb-20">
            <div class="mt-24 px-[72px] flex space-x-6">
                <div class="flex flex-col">
                    <img class="w-[526px] h-[382px]" src="{{ asset('images/family/home3.png') }}" alt="">
                    <span class="text-2xl font-semibold mt-8">Agency Branding Here</span>
                    <span class="text-base font-light mt-2">nannyagency@mail.com</span>
                    <div class="flex flex-col items-center justify-center mt-[100px]">
                        <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1110_11885)">
                            <path d="M56.25 1.25C56.25 1.94036 56.8096 2.5 57.5 2.5H58.75C59.4404 2.5 60 1.94036 60 1.25C60 0.559645 59.4404 0 58.75 0H57.5C56.8096 0 56.25 0.559645 56.25 1.25Z" fill="#212326"/>
                            <path d="M20 40H26.0723L24.3045 38.2322C23.8357 37.7634 23.1998 37.5 22.5368 37.5H20C10.335 37.5 2.5 29.665 2.5 20C2.5 10.335 10.335 2.50001 20 2.5H40C49.665 2.5 57.5 10.335 57.5 20C57.5 29.665 49.665 37.5 40 37.5H32.5184C31.5238 37.5 30.57 37.1049 29.8667 36.4017L27.7957 34.3306C26.6236 33.1585 25.0338 32.5 23.3762 32.5H20C13.0964 32.5 7.5 26.9036 7.5 20C7.5 13.0964 13.0964 7.5 20 7.5H40C46.9036 7.5 52.5 13.0964 52.5 20C52.5 26.9036 46.9036 32.5 40 32.5H35.1961C34.2015 32.5 33.2477 32.1049 32.5444 31.4017L30.4733 29.3306C29.3012 28.1585 27.7115 27.5 26.0539 27.5H20C15.8579 27.5 12.5 24.1421 12.5 20C12.5 15.8579 15.8579 12.5 20 12.5H40C44.1421 12.5 47.5 15.8579 47.5 20C47.5 24.0916 44.2235 27.418 40.1512 27.4985L40.1504 27.5H38.3211C37.3265 27.5 36.3727 27.1049 35.6694 26.4017L33.5983 24.3306C32.6366 23.3688 31.3937 22.7529 30.0628 22.5628L30 22.5H20C18.6193 22.5 17.5 21.3807 17.5 20C17.5 18.6193 18.6193 17.5 20 17.5H40C41.3807 17.5 42.5 18.6193 42.5 20C42.5 21.3807 41.3807 22.5 40 22.5H35L36.7678 24.2678C37.2366 24.7366 37.8725 25 38.5355 25H40C42.7614 25 45 22.7614 45 20C45 17.2386 42.7614 15 40 15H20C17.2386 15 15 17.2386 15 20C15 22.7614 17.2386 25 20 25H29.1789C30.1735 25 31.1273 25.3951 31.8306 26.0983L33.9017 28.1694C35.0738 29.3415 36.6635 30 38.3211 30H40.625V29.9808C45.8567 29.6582 50 25.3129 50 20C50 14.4772 45.5228 10 40 10H20C14.4772 10 10 14.4772 10 20C10 25.5229 14.4772 30 20 30H26.0539C27.0485 30 28.0023 30.3951 28.7056 31.0983L30.7767 33.1694C31.9488 34.3415 33.5385 35 35.1961 35H40C48.2843 35 55 28.2843 55 20C55 11.7157 48.2843 5 40 5H20C11.7157 5 5 11.7157 5 20C5 28.2843 11.7157 35 20 35H23.3762C24.3708 35 25.3246 35.3951 26.0279 36.0983L28.099 38.1694C29.2711 39.3415 30.8608 40 32.5184 40H40C51.0457 40 60 31.0457 60 20C60 8.9543 51.0457 -9.65645e-07 40 0L20 4.13264e-06C8.9543 5.09829e-06 -9.65645e-07 8.95431 0 20C9.65645e-07 31.0457 8.95431 40 20 40Z" fill="#212326"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_1110_11885">
                            <rect width="60" height="40" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span class="text-sm font-light">Powered by hirefact</span>
                    </div>
                </div>
                <div class="bg-white rounded-[10px] px-8 pb-8">
                    <span class="text-2xl font-semibold mt-6 flex">You can start here</span>
                    <span class="text-base font-light">We are here to help you find the perfect nanny for your family. Please fill out the application and we will be in touch shortly.</span>
                    <div class="mt-6">
                        <div>
                            <span class="text-base font-medium">Intended position *</span>
                            <div class="space-y-3 mt-[18px]">
                                <div class="flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                                    <label class="text-base font-light text-[#1C1C1E]" for="option_1">Service option 1</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_2" type="radio">
                                    <label class="text-base font-light text-[#1C1C1E]" for="option_2">Service option 2</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="radio" class="w-5 h-5 accent-black" id="option_3" type="radio">
                                    <label class="text-base font-light text-[#1C1C1E]" for="option_3">Service option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base font-medium ">Personal Information</span>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">Frist Name</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">Last Name</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-base font-normal" for="">Date of birth</label>
                                <div class="w-full h-[42px] border border-[#373737] rounded-[5px]">
                                    <input type="date" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">Email</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">Phone</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base font-medium ">Language Spoken</span>
                            <div class="space-y-4 mt-[18px]">
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_1" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_1">Language option 1</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_2" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_2">Language option 2</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_3" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_3">Language option 3</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_4" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_4">Language option 4</label>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <input name="checkbox" class="w-5 h-5 accent-black" id="checkbox_5" type="checkbox">
                                    <label class="text-base font-light text-[#1C1C1E]" for="checkbox_5">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base font-medium ">Address</span>
                            <div class="mt-4">
                                <label class="text-base font-normal" for="">Address 1*</label>
                                <div class="w-full h-[42px] border border-[#373737] rounded-[5px]">
                                    <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-base font-normal" for="">Address 2</label>
                                <div class="w-full h-[42px] border border-[#373737] rounded-[5px]">
                                    <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">City</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">State</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-6">
                                <div>
                                    <label class="text-base font-normal" for="">Country</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-base font-normal" for="">Zip/Postal Code</label>
                                    <div class="w-[333px] h-[42px] border border-[#373737] rounded-[5px]">
                                        <input type="text" class="w-full h-full pl-2 text-sm font-light border-none bg-transparent outline-none focus:ring-0" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button class="bg-btnDefault w-[109px] h-10 text-sm font-medium text-white rounded-[5px]">Submit</button>
                        </div>
                    </div> 
                </div>
            </div>
        </article>
    </main>
@endsection