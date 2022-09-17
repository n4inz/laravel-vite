
@extends('family.layoutFamily.main')
@section('container')
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <main>
        <article class="pb-[207px]">
            <div class="w-[1240px]  mt-24 mx-auto ">
                <div class="bg-palet py-12 rounded-[10px] px-8 ">
                    <div class="flex flex-col text-white space-y-2">
                        <span class="text-5xl font-medium ">Documents</span>
                        <span class="text-xl font-light">Look up people you've worked with</span>
                    </div>
                </div>
                <div class="flex mt-5 space-x-[19px]">
                    <div>
                        <div class="w-[294px] bg-white shadow">
                            <div class="flex border-b items-center justify-between h-[94px] px-8">
                                <button class="w-[231px] h-[46px] bg-colorStatusCard1 flex items-center justify-center rounded-[5px] space-x-2">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0.585938L2.58594 8H7V14.5C7 15.3171 7.68294 16 8.5 16H11.5C12.3171 16 13 15.3171 13 14.5V8H17.4141L10 0.585938ZM10 3.41406L12.5859 6H11V14H9V6H7.41406L10 3.41406ZM0 19V21H20V19H0Z" fill="white"/>
                                    </svg>
                                   <span class="text-white text-sm font-medium">Upload Documents</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white flex flex-col  ">
                        <div class="w-full px-10 space-x-12 py-8 border-b">
                            <div class="flex space-x-[34px]">
                                <div class="">
                                    <svg width="100" height="126" viewBox="0 0 100 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 0.5C5.66091 0.5 0 6.16091 0 13V113C0 119.839 5.66091 125.5 12.5 125.5H87.5C94.3391 125.5 100 119.839 100 113V38L62.5 0.5H12.5ZM12.5 13H56.25V44.25H87.5V113H12.5V13ZM48.9502 44.25C45.5127 44.25 42.9379 46.584 42.4316 50.6465C41.9316 54.7027 43.9425 61.7958 47.4487 68.3833C45.9425 72.9458 44.4379 76.9979 42.4316 81.0542C35.9129 83.0792 29.8988 86.1159 27.3926 89.1597C23.3863 93.7159 25.3916 96.7596 26.3916 98.2783C27.3979 99.7971 28.902 100.5 30.9082 100.5C31.9145 100.5 32.9171 100.298 33.9233 99.792C37.9358 98.2732 41.9348 92.1885 45.9473 85.0947C49.4535 84.0822 52.9635 83.0741 56.4697 82.5679C59.976 86.6179 63.4977 89.1604 66.5039 90.1729C70.0102 91.1853 73.0177 89.6579 74.5239 86.1079C75.5239 83.0642 75.016 80.5406 72.5098 79.0156C69.4973 76.9906 64.4842 76.9835 58.4717 77.4897C56.4654 74.4522 54.4726 71.4148 52.9663 68.3711C55.4726 60.7711 56.4688 54.19 55.4688 50.1338C54.4625 46.5838 52.3877 44.25 48.9502 44.25Z" fill="black"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xl text-neutral-900 font-medium">Client Contract - Referral Fee Agreement </span>
                                    <span class="text-xs font-light text-neutral-700 mt-1">987 KB</span>
                                    <div class="text-sm font-light text-neutral-700 max-w-2xl mt-3">
                                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                    </div>
                                    <div class="mt-[18px] flex items-center justify-end">
                                        <div class="flex space-x-6 items-center">
                                            <div class="hover:cursor-pointer w-[153px] h-[44px] bg-palet rounded-[5px] text-base font-medium text-white flex items-center justify-center">
                                                View Document
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection