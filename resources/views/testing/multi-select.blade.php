<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/chosen/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/chosen/prism.css') }}"> --}}
    <style>
        .search-choice{
            position: relative;
            background-color: #EEEEEE !important;
            border: none !important;
            width: auto !important;
            height: 30px !important;
            color: #222222 !important;
            border-radius: 10px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important
        }
        .search-choice-close{
            width: 24px !important;
            height: 24px !important;
            border-radius: 99999px !important;
            background-color: #FFFFFF !important;
            display: flex;
            align-items: center !important;
            justify-content: center !important
        }
        .search-choice span {

            font-family: 'Roboto' !important;
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 13px !important;
            line-height: 18px !important;
            letter-spacing: -0.08px !important;
            color: #161616 !important;
            padding-right: 15px !important;
            padding-left: 7px !important;
        }
        .default{
            background-color: #161616 !important;
            border: 2px solid seagreen !important
        }

   
        /* .chosen-container{
            background-color: red !important;
           

        } */
    </style>
    <link rel="stylesheet" href="{{ asset('css/chosen/chosen.css') }}">


</head>
<body>
    <div>
        <em>Into This</em>
            @csrf
            <select name="pilih[]"  class="chosen-select w-96 h-96 selected" multiple tabindex="10">
              <option value=""></option>
              <option value="nain">Nanny</option>
              <option value="zul">Sister</option>
              <option value="zul">MetarnityCare</option>
            </select>

    </div>
    <script src="{{ asset('js/chosen/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ asset('js/chosen/prism.js') }}" type="text/javascript" charset="utf-8"></script> --}}
    <script src="{{ asset('js/chosen/init.js') }}" type="text/javascript" charset="utf-8"></script>
</body>
</html>