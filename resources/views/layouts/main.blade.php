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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
    
    {{-- <style>
        costum{
            --tags-focus-border-color: none;
            --tags-border-color : none;
            --tags-hover-border-color	:none;
        }
    </style> --}}
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/jQuery.js') }}"></script>
</head>
<body class="bg-backround font-roboto ">
    @include('layouts.navbar')

    <div>
       
        @yield('container')
        
    </div>
    <script src="{{ asset('js/sideNav.js') }}"></script>
    {{-- <script src="{{ asset('js/multiselect/multiselect.js') }}"></script>
    <script src="{{ asset('js/chosen/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/chosen/init.js') }}" type="text/javascript" charset="utf-8"></script> --}}
</body>
</html>