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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/font-awesome.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="{{ asset('js/tagify/tagify.js') }}"></script>
    <script src="{{ asset('js/tagify/tagify-min.js') }}"></script>
    <link href="{{ asset('css/tagify/tagify.css') }}" rel="stylesheet" type="text/css" />
    <style>
        /* User Talent */
        .costum{
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
            padding: .5em .7em;
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 0 1em;
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
      
    </style>
    <script src="{{ asset('js/jQuery.js') }}"></script>
    
    <script src="{{ asset('js/jQuery/jQueryUi/jquery-ui.js') }}"></script>
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