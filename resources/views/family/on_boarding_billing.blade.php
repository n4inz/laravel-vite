
@extends('family.layoutFamily.main')
@section('container')
    <main>
        <article class="pb-[207px]">
            <div class="w-[925px] bg-neutral-50 h-full mx-auto mt-24 rounded-[10px] pb-6">
                <div class="px-8 mt-10 pt-12 flex flex-col bg-white rounded-[10px] pb-10">
                    <span class="text-2xl font-semibold text-colorFamilyText">Billing Methods</span>
                    <span class="text-sm font-light text-colorFamilyText">Add, update, or remove your billing methods</span>
                </div>

                <div class="flex items-center space-x-4 px-10 mt-[42px] border-b pb-2">
                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                    <div>
                        <div class="text-xl font-normal text-colorFamilyText">Cash</div>
                        <div class="text-sm font-light text-colorFamilyText">Pay using cash</div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 px-10 mt-4 pb-2">
                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                    <div>
                        <div class="text-xl font-normal text-colorFamilyText">Payment card</div>
                        <div class="text-sm font-light text-colorFamilyText">Visa, Mastercard, American Express, Discover, Diners</div>
                    </div>
                </div>

                <div class="px-8">
                    <div class="px-[60px] bg-white pt-8">
                        <div>
                            <label class="text-base font-medium text-colorFamilyText">Card Number</label>
                            <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="1231 1231 1231 1231" autocomplete="off">
                            </div>
                        </div>
                        <div class="flex space-x-6 mt-4">
                            <div class="w-full">
                                <label class="text-base font-medium text-colorFamilyText">First Name</label>
                                <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Your fist name" autocomplete="off">
                                </div>
                            </div>
                            <div class="w-full">
                                <label class="text-base font-medium text-colorFamilyText">Last Name</label>
                                <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Last Name" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-6 mt-4">
                            <div class="w-full">
                                <label class="text-base font-medium text-colorFamilyText">Expire On</label>
                                <div class="w-full flex space-x-4">
                                    <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="MM" autocomplete="off">
                                    </div>
                                    <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                        <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="YY" autocomplete="off">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="w-full">
                                <label class="text-base font-medium text-colorFamilyText">Security Code </label>
                                <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="CCV" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <label class="text-3xl font-medium text-colorFamilyText" for="">Billing Address</label>
                            <div class="mt-6">
                                <label class="text-base text-colorFamilyText" for="">Country</label>
                                <div class="mt-1 w-[358.5px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Country" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-base text-colorFamilyText" for="">Address</label>
                                <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="" autocomplete="off">
                                </div>
                                <div class="mt-1 w-full  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-6">
                                <label class="text-base text-colorFamilyText" for="">City</label>
                                <div class="mt-1 w-[358.5px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="City" autocomplete="off">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-base text-colorFamilyText" for="">Postal Code (Optional)</label>
                                <div class="mt-1 w-[358.5px]  h-[38px] border border-neutral-400 flex items-center rounded">
                                    <input type="text" name="rate" value="{{ old('rate') }}"  class=" text-sm text-[#171717] pl-2 block border-none bg-transparent focus:ring-0 w-full  outline-none " placeholder="Postal Code (Optional)" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button class="w-[99px] h-10 bg-palet rounded-[5px]">
                                <span class="text-base font-medium text-white">Save</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 px-10 mt-[42px] border-b pb-2">
                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                    <div>
                        <div class="text-xl font-normal text-colorFamilyText">Paypal</div>
                        <div class="text-sm font-light text-colorFamilyText">Pay using paypal</div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 px-10 mt-4 pb-2">
                    <input name="radio" class="w-5 h-5 accent-black" id="option_1" type="radio">
                    <div>
                        <div class="text-xl font-normal text-colorFamilyText">Others</div>
                        <div class="text-sm font-light text-colorFamilyText">Pay using other options</div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection