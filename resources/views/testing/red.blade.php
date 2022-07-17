<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ session('status') }}
    @if (session()->has('status'))
    <h1>Hello</h1>
        
    @endif
    {{-- <h1>{{ $user }}</h1>
    <h1>{{ $password }}</h1> --}}
</body>
</html>