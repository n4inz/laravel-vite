
@extends('family.layoutFamily.main')
@section('container')
<link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <main>
        <article class="pb-[207px]">
            <div class="w-[884px] bg-white h-full mx-auto mt-24 px-8 rounded-[10px] pb-6">
                <div class="mt-10 pt-10">
                    <span class="text-xl font-semibold text-colorFamilyText">Work Catergory</span>
                </div>
                <div class="flex mt-4">
                    <div class="w-[199px] bg-palet h-10 flex items-center text-white rounded-[5px] pl-4 text-base font-semibold">
                        Child care
                    </div>
                    <div class="w-[199px]  h-10 flex items-center text-neutral-900 rounded-[5px] pl-4 text-base font-normal">
                        Senior care
                    </div>
                    <div class="w-[199px]  h-10 flex items-center text-neutral-900 rounded-[5px] pl-4 text-base font-normal">
                        Home care
                    </div>
                    <div class="w-[199px]  h-10 flex items-center text-neutral-900 rounded-[5px] pl-4 text-base font-normal">
                        Other Services
                    </div>
                </div>
                <div class="px-5">
                    <div class="flex space-x-24 p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Nany/ Sitter</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('au_pair', old('chile_care')) ) checked @endif    value="au_pair" id="au-pair" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="au-pair" class="text-base text-[#404040] font-light hover:cursor-pointer">Au Pair</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('maternity_care', old('chile_care')) ) checked @endif value="maternity_care" id="maternity-care" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="maternity-care" class="text-base text-[#404040] font-light hover:cursor-pointer">Maternity Care</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('at_home_daycare', old('chile_care')) ) checked @endif value="at_home_daycare" id="at-home-daycare" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="at-home-daycare" class="text-base text-[#404040] font-light hover:cursor-pointer">At Home Daycare</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('at_home_daycare', old('chile_care')) ) checked @endif value="infant" id="infant" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="infant" class="text-base text-[#404040] font-light hover:cursor-pointer">Infant</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('young_baby', old('chile_care')) ) checked @endif  value="young_baby" id="young_baby" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="young_baby" class="text-base text-[#404040] font-light hover:cursor-pointer">Young Baby</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('toddler', old('chile_care')) ) checked @endif  value="toddler" id="toddler" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="toddler" class="text-base text-[#404040] font-light hover:cursor-pointer">Toddler</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('press_schooler', old('chile_care')) ) checked @endif value="press_schooler" id="press_schooler" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="press_schooler" class="text-base text-[#404040] font-light hover:cursor-pointer">Press Schooler</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('grade_schooler', old('chile_care')) ) checked @endif  value="grade_schooler" id="grade_schooler" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="grade_schooler" class="text-base text-[#404040] font-light hover:cursor-pointer">Grade Schooler</label>
                            </div>
                            <div class="flex items-center space-x-2 mt-[10px]">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('assist_bathing', old('chile_care')) ) checked @endif value="assist_bathing" id="assist_bathing" style="color: #3BD7CF" type="checkbox"  class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0" >
                                <label for="assist_bathing" class="text-base text-[#404040] font-light hover:cursor-pointer">Assist Bathing</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Times & Avaibility</span>
                </div>
                <div class="flex  space-x-[52px]">
                    <div>
                        <span class="text-sm font-normal text-[#171717]">Days</span>
                        <div class="flex space-x-4 mt-2">
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Mo</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Tu</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">We</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Th</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Fr</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Sa</span>
                            </div>
                            <div class="w-8 h-8 bg-colorStatusCard1 rounded flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">Su</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <div>
                            <label class="text-sm font-normal text-[#171717]">Start Date</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-normal text-[#171717]">End Date</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-normal text-[#171717]">Start Time</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="time" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-sm font-normal text-[#171717]">End Time</label>
                            <div class="flex space-x-4 mt-2">
                                <div class="flex justify-center items-center space-x-2">
                                    <div class=" w-[100px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="time" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="ASAP" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Type</span>
                </div>
                <div class="flex space-x-4 mt-4">
                   <div>
                        <label class="text-sm font-normal text-[#171717]">Work Type</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Full Time</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Part Time</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Desired Living</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Live In</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Live Out</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Any</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">English Level</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Basic</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Conversational</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Fluent Native</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Languages</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">English</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <label class="text-sm font-normal text-[#171717]" for="">Additional</label>
                    <div class="flex space-x-8">
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Comfortable with pets</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Has transportation</label>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 mt-[10px] w-full">
                                <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                                <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Has driver license</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Salary</span>
                </div>
                <div class="flex space-x-4 mt-4">
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Rate</label>
                        <div class="flex space-x-4 mt-2">
                            <div class="flex justify-center items-center space-x-2">
                                <div class=" w-[193]  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="$25" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Type</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Full time') selected @endif value="Full time">Hourly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Daily</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Weekly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Monthly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Year</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Pay frequency</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Daily</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Weekly</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Monthly</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-normal text-[#171717]">Pay With</label>
                        <div class="mt-2 w-[193px]  h-[38px] border border-neutral-400 flex items-center rounded px-2">
                            <select id="part-time" name="part_time" class="text-sm bg-transparent border-none text-gray-900 appearance-none rounded-lg block w-full focus:ring-0 outline-none">
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Any</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Check</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Cash</option>
                                <option @if(old('part_time') == 'Part time') selected @endif value="Part time">Online Payment</option>
                            </select>
                            <div>
                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.19141 0.916626L0.941406 2.16663L6 7.22522L11.0586 2.16663L9.80859 0.916626L6 4.72522L2.19141 0.916626Z" fill="#262626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-2 mt-[10px] w-full">
                    <input onclick="chileCare()" data-type="chile_care"  name="chile_care[]" @if(is_array(old('chile_care')) && in_array('nanny/_sitter', old('chile_care')) ) checked @endif  value="nanny/_sitter" id="nany-sitter" style="color: #3BD7CF" type="checkbox" class="subcategory w-5 h-5 rounded-md bg-white border border-[#DADADA] outline-none focus:outline:none focus:ring-transparent focus:border-current focus:ring-0">
                    <label for="nany-sitter" class="text-base text-[#404040] font-light hover:cursor-pointer">Rate Negotiable</label>
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Care Informations</span>
                </div>
                <div class="bg-palet mt-4 hover:cursor-pointer text-white text-base font-medium w-[226px] h-10 flex items-center justify-center rounded-[5px]" href="#">
                    Add Care Informations
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Address</span>
                </div>
                <div class="flex  mt-2">
                   <div class="bg-neutral-50 w-full h-[38px] flex items-center rounded-tl rounded-bl">
                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Add your locations" autocomplete="off">
                    </div>
                    <div class="w-[38px] h-[38px] bg-colorStatusCard1 rounded-tr-[5px] rounded-br-[5px] flex items-center justify-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.47396 0.446289L1.02409 2.22689C0.707422 2.35355 0.5 2.65917 0.5 3V14.6667C0.5 15.2558 1.09508 15.6589 1.64258 15.4398L5.52604 13.887L10.526 15.5537L14.9759 13.7731C15.2926 13.6464 15.5 13.3408 15.5 13V1.33333C15.5 0.744167 14.9049 0.341055 14.3574 0.560221L10.474 2.11296L5.47396 0.446289ZM6.33333 2.48893L9.66667 3.60059V13.5111L6.33333 12.3994V2.48893ZM4.66667 2.5638V12.4352L2.16667 13.4362V3.56478L4.66667 2.5638ZM13.8333 2.5638V12.4352L11.3333 13.4362V3.56478L13.8333 2.5638Z" fill="white"/>
                        </svg>
                    </div>
                </div>
                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Detailed Job Descriptions</span>
                </div>
                <div class="{{ $errors->has('about_talent') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[148px] flex items-center justify-center border border-neutral-400 mt-2 rounded relative">
                    <textarea name="about_talent" rows="6" class="{{ $errors->has('address') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="">
                    </textarea>
                </div>

                <div class="mt-10 ">
                    <span class="text-xl font-semibold text-colorFamilyText">Notes for agency</span>
                </div>
                <div class="{{ $errors->has('about_talent') ? 'border-red-500 ' : 'border-[#CCD3DC]' }} w-full h-[148px] flex items-center justify-center border border-neutral-400 mt-2 rounded relative">
                    <textarea name="about_talent" rows="6" class="{{ $errors->has('address') ? 'placeholder-red-600' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full h-full rounded p-1 pl-3 outline-none" placeholder="">
                    </textarea>
                </div>
                <div class="mt-10 flex space-x-6">
                    <button class="w-[124px] h-10 bg-palet rounded-[5px]">
                        <span class="text-base font-medium text-white">Add Job</span>
                    </button>
                    <button class="w-[254px] h-10 bg-colorStatusCard1 rounded-[5px]">
                        <span class="text-base font-medium text-white">Save and Add Another Job</span>
                    </button>
                </div>
            </div>
        </article>
    </main>
@endsection