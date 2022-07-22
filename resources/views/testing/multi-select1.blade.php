<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Suggestions items */
    /* .tagify__dropdown.users-list .tagify__dropdown__item{
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
    } */

    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   
    <script src="https://unpkg.com/@yaireo/tagify"></script>
    <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <style>
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
</head>
<body>
    <form action="{{ route('test.multi_select_store') }}" method="POST">
        @csrf
        <div class="w-[670px] h-8 flex items-center justify-center border border-[#CCD3DC] mt-2 rounded">
            <input id="type_helper" name='family' value="" type="text" id="email" class="costums-family overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 outline-none" placeholder="">
        </div>
        <input type="submit" name="" id="">
    </form>
    <!--
    <div class="bg-slate-400 h-7 flex items-center space-x-2 rounded-md pl-1">
        <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>

        <img width="25" height="25" src="${tagData.avatar}" class="rounded-full" alt="">
        <span class="text-xs text-gray-200 pr-2">${tagData.name}</span>
    </div>
-->
    <script>
        var input = document.querySelector('input[name=family]');

        function tagTemplate(tagData){
            return `
            <div class="bg-palet h-7 flex items-center space-x-2 rounded-md pl-1">
                <x title='' class='tagify__tag__removeBtn text-white' role='button' aria-label='remove tag'></x>

                <img width="20" height="20" src="{{ asset('storage/Talent attached file/avatar/${tagData.avatar}') }}" class="rounded-full" alt="">
                <span class="text-xs text-white pr-2">${tagData.name}</span>
            </div>
            `
        }
        function suggestionItemTemplate(tagData){
            return `
                <div ${this.getAttributes(tagData)}
                    class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                    tabindex="0"
                    role="option">
                    ${ tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap'>
                        <img onerror="this.style.visibility='hidden'" src="{{ asset('storage/Talent attached file/avatar/${tagData.avatar}') }}">
                    </div>` : ''
                    }
                    <strong>${tagData.name}</strong>
                    <span>${tagData.email}</span>
                </div>
            `
        }

        new Tagify(input,{
            maxTags:1,
            whitelist : <?=  json_encode($json) ?>,

            dropdown: {
                closeOnSelect: true,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['first_name', 'email']  // very important to set by which keys to search for suggesttions when typing
            },

            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate,
                // dropdownHeader: dropdownHeaderTemplate
            },

        })
    </script>

    
</body>
</html>