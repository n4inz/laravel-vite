
@extends('family.layoutFamily.main')
@section('container')
    <main>
        <article class="pb-[207px]">
            <div class="w-[1080px]  bg-white mx-auto mt-24 rounded-[10px] shadow pb-[69px]">
                <div class="pt-6 flex flex-col justify-center items-center">
                    <span class="text-4xl leading-3 font-medium  mt-6 mb-2">Ready to get started?</span>
                    <span class="text-base font-light text-[#000000] mt-2">Your are geeting closer with your helper,  let’s connected with us to find out your needs. </span>
                </div>
                <div class="flex justify-center mt-14">
                    <div>
                        <img class="w-[462px] h-[300px]" src="{{ asset('images/family/home1.png') }}" alt="">
                        <div class="mt-6 flex flex-col">
                            <span class="text-base leading-8 text-[#000000] font-semibold">Know what you are looking for?</span>
                            <span class="text-base font-light max-w-[450px] font-roboto">We are here to help you find the perfect services for your family. Please fill out the application and we will be in touch shortly.</span>
                        </div>
                        <a href="">
                            <div class="bg-[#27C1B9]  w-28 h-10 text-sm text-white font-medium rounded-[5px] mt-[34px] flex items-center justify-center" >Start Here</div>
                        </a>
                    </div>
                    <div class="w-[92px]">
                        <div class="flex items-center justify-center mt-2">
                            <svg width="1" height="221" viewBox="0 0 1 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.5" y1="220.5" x2="0.5" stroke="black"/>
                            </svg>
                        </div>
                        <div class="flex items-center justify-center text-xs font-medium">
                            Or
                        </div>
                        <div class="flex items-center justify-center">
                            <svg width="1" height="221" viewBox="0 0 1 221" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.5" y1="220.5" x2="0.5" stroke="black"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <img class="w-[462px] h-[300px]" src="{{ asset('images/family/home2.png') }}" alt="">
                        <div class="mt-6 flex flex-col">
                            <span class="text-base leading-8 text-[#000000] font-semibold">Still not sure , let us help!</span>
                            <span class="text-base font-light max-w-[450px] font-roboto">Schedule a quick call here and we will talk through what you need."</span>
                        </div>
                        <a href="">
                            <div class="bg-btnOrange mt-[34px] w-28 h-10 text-sm text-white font-medium rounded-[5px] flex items-center justify-center" href="#">Contact Us</div>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection