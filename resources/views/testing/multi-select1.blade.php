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
    
    {{-- <link rel="stylesheet" href="{{ asset('css/chosen/chosen.css') }}"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="{{ asset('css/multiselect/multi-select.css') }}" />
    <script src="{{ asset('js/multiselect/jquery.multi-select.js') }}"></script>
    
</head>
<body>


    <div class="example"></div>

    <script>
        	const myData = [
                {text:'jquery', value: 1},
                {text:'script', value: 4},
                {text:'html', value: 3},
                {text:'css', value: 2},
                {text:'ruby', value: 6},
                {text:'typeScript', value: 12},
                {text:'react', value: 5},
                {text:'vue', value: 8},
                {text:'angular', value: 7},
                {text:'golang', value: 10},
                {text:'python', value: 16},
            ],


            $('.example').multiSelect({

                data: myData

            });


    </script>
</body>
</html>