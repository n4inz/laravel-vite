<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" /> --}}
    {{-- <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script> --}}
    <link  href="{{ asset('css/testing-flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        .ipt{
            outline:none
        }
        .top-100 {top: 100%}
        .bottom-100 {bottom: 100%}
        .max-h-select {
            max-height: 300px;
        }
    </style>

</head>
<body>

    
<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"  >
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4  border-b-2  " id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4  border-b-2        " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4  border-b-2       " id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
        <li role="presentation">
            <button class="inline-block p-4  border-b-2       " id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
        </li>
    </ul>
</div>
<div >
    <div class="p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" >
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>




<div class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
    <div class="w-full px-4">
        <div class="flex flex-col items-center relative">
            <div class="w-full  svelte-1l8159u">
                <div class="my-2 p-1 flex border border-gray-200 bg-white rounded svelte-1l8159u">
                    <div class="flex flex-auto flex-wrap">
                        <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">HTML</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">Ruby</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-full text-teal-700 bg-teal-100 border border-teal-300 ">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial">Javascript</div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-teal-400 rounded-full w-4 h-4 ml-2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <input placeholder="" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800">
                        </div>
                    </div>
                    <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                        <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4">
                                <polyline points="18 15 12 9 6 15"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            {{-- <div class="absolute shadow top-100 bg-white z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
                <div class="flex flex-col w-full">
                    <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">Python </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative border-teal-600">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">Javascript </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative border-teal-600">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">Ruby </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">JAVA </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">ASP.Net </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">C++ </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 border-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">SQL </div>
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer w-full border-gray-100 rounded-b hover:bg-teal-100">
                        <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative border-teal-600">
                            <div class="w-full items-center flex">
                                <div class="mx-2 leading-6  ">HTML </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<select class="js-example-basic-multiple" name="states[]" multiple="multiple">
    <option value="AL">Alabama</option>

    <option value="WY">Wyoming</option>
  </select>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script>
  const tabElements = [
    {
        id: 'profile',
        triggerEl: document.querySelector('#profile-tab'),
        targetEl: document.querySelector('#profile')
    },
    {
        id: 'dashboard',
        triggerEl: document.querySelector('#dashboard-tab'),
        targetEl: document.querySelector('#dashboard')
    },
    {
        id: 'settings',
        triggerEl: document.querySelector('#settings-tab'),
        targetEl: document.querySelector('#settings')
    },
    {
        id: 'contacts',
        triggerEl: document.querySelector('#contacts-tab'),
        targetEl: document.querySelector('#contacts')
    }
];

// options with default values
const options = {
    defaultTabId: 'profile-tab',
    activeClasses: 'text-palet border-palet dark:border-blue-500',
    inactiveClasses: 'text-gray-500 hover:text-palet dark:text-gray-400 border-gray-100 hover:border-palet dark:border-gray-700 dark:hover:text-gray-300',
    onShow: () => {
       
    }
    
}

const tabs = new Tabs(tabElements, options);
    console.log(tabs.getActiveTab())
</script>
  


</body>
</html>