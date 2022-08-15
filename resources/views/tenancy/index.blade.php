<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/jQuery.js') }}"></script>
</head>
<body>
<script>
    $(document).ready(function() {
        $.ajax({
               type:'POST',
               url:'{{ route("login.store") }}',
               data:{_token: '{{ csrf_token() }}'},
               success:function(data){
                if(data.status == 200){
                    window.location.replace('{{ config("app.uri") }}'+data.domain+'{{ App\Providers\RouteServiceProvider::HOME }}');
                }
                    if(data.status == 401){
                        window.location.href = "{{ route('fail') }}";
                    }
               }
        });
    });
</script>
</body>
</html>