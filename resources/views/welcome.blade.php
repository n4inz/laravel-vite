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
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

    <link  href="{{ asset('css/testing-flowbite.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('css/test-select2.css') }}">
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/multiple-select-js@1.0.2/dist/multiple-select.css">
    <!-- JS -->
    <script src="https://unpkg.com/multiple-select-js@1.0.2/dist/assets/js/multiple-select.js"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/multiselect/style.css') }}">

</head>
<body>

    {{ auth()->guard('staf')->user()->full_name }}
      
{{-- 
    <select id="form-control" class="h-7 w-96">
        <option selected="selected">orange</option>
        <option >purple</option>
        <option >green</option>
        <option >yellow</option>
        <option >purple</option>
    </select> --}}
    <div class="multiSelect">
        <select multiple class="multiSelect_field" data-placeholder="Add ss Browsers">
          <option value="chrome">Nanny</option>
          <option selected="select" value="firefox">Firefox</option>
          <option value="opera">Sister</option>
          <option value="safari">Maternity Care</option>
        </select>
    </div>
      
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
        <g stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </g>
    </symbol>
    </svg>

    <script src="{{ asset('js/multiselect/multiselect.js') }}"></script>
  
{{-- <script>
    $(document).ready(function() {
    $('#form-control').select2({
        multiple: true,

    });
});
</script> --}}

</body>
</html>