<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>
<body class="bg-backround font-roboto ">
    @include('layouts.navbar')

    <div>
       
        @yield('container')
        
    </div>
    <script src="{{ asset('js/sideNav.js') }}"></script>
    {{-- <script>
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
          activeClasses: 'text-nain hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-[#3BD7CF] dark:border-blue-500',
          inactiveClasses: 'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
          onShow: () => {
              console.log('tab is shown');
          }
          
      }
      
      const tabs = new Tabs(tabElements, options);
    
      </script> --}}
</body>
</html>