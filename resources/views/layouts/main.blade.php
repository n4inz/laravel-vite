<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{ asset('css/calender/theme2.css') }}">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFLOYUbtIHVDqMQ2lVhWcPa3234FlpzlI&libraries=places"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/datepicker.js"></script>
    <script src="//cdn.ckeditor.com/4.19.1/basic/ckeditor.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="{{ asset('js/tagify/tagify.js') }}"></script>
    <script src="{{ asset('js/tagify/tagify-min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/tagify/tagify.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .iti__country-list{
            width: 310px;
        }
        /* User Talent */
        .costum{
            /* --tag--max-width:500px;
            height: 200%; */
            --tags-focus-border-color: none;
            --tags-border-color : none;
            --tags-hover-border-color	:none;
        }

        /* Jobs */
        .costums-family{
            --tags-border-color	: none;
            --tags-hover-border-color:none;
            --tags-focus-border-color:none;
            --tags-disabled-bg;
            --tag-hover	: none;
            height:  38px;
            display: flex,
            justify-content:center;
            align-items:center;
            padding-left:10px
        }
        .users-list{
            border:red;
        }
        .tagify__dropdown.users-list .tagify__dropdown__item{
            /* padding: .5em .7em; */
            /* display: grid;
            grid-template-columns: auto 1fr;
            gap: 0 1em; */
            grid-template-areas: "avatar name"
                                "avatar email";
        }

        .tagify__dropdown.users-list .tagify__dropdown__item:hover .tagify__dropdown__item__avatar-wrap{
            transform: scale(1.2);
        }

        .tagify__dropdown.users-list .tagify__dropdown__item__avatar-wrap{
            grid-area: avatar;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            overflow: hidden;
            background: #EEE;
            transition: .1s ease-out;
        }

        .tagify__dropdown.users-list img{
            width: 100%;
            vertical-align: top;
        }

        .tagify__dropdown.users-list strong{
            grid-area: name;
            width: 100%;
            align-self: center;
        }

        .tagify__dropdown.users-list span{
            grid-area: email;
            width: 100%;
            font-size: .9em;
            opacity: .6;
        }

        .tagify__dropdown.users-list .tagify__dropdown__item__addAll{
            border-bottom: 1px solid #DDD;
            gap: 0;
        }

        .tagify__tag__removeBtn{
            color: rgb(148 163 184 / var(--tw-bg-opacity));;
            background: white;
        }
        .tagify__input{
            font-size: 11px
        }
      
    </style>
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
    <script src="{{ asset('js/placePicker.js') }}"></script>
    <script src="{{ asset('js/jQuery/jQueryUi/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/celender/caleandar.min.js') }}"></script>

</head>
<body class="bg-backround font-roboto ">
   
    @include('layouts.navbar')
    <div class="inset-0 bg-gray-800 opacity-30 fixed z-20 hide_body hidden"></div>

    <div>
       
        @yield('container')
        
    </div>
    <script src="{{ asset('js/sideNav.js') }}"></script>
    
</body>
</html>