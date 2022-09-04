{{-- {{ dd(session()) }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link  href="{{ asset('css/flowbite.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</head>
<body class="bg-bgbody font-roboto ">
    <main>
        <div class="flex">
            <div class=" flex items-center justify-center w-[555px]  ">
                <div class=" h-full xl:fixed top-0 bottom-0 w-[555px] bg-[#F3FFFE] z-20">
                    <img src="{{ asset('images/bg-1.png') }}" alt="">
                </div>
            </div>
            <div class="mt-[61px] pl-[58px] w-[680px] flex flex-col items-center">
                <span class="overview-send-title text-palet w-[650px] text-2xl text-center">Login For Agency </span>
                <form action="{{ route('login.tenancy') }}" method="POST">
                    @csrf
                    <div class="mt-10 w-[27rem]">
                        <label for="first-name" class="{{ $errors->has('email') ? 'text-red-600' : '' }} block overview-modal-add-talent-text text-[#222222] mb-2">Email</label>
                        <div class="{{ $errors->has('email') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center justify-center w-full h-10 border border-[#CCD3DC] rounded text-[#222222]">
                            <input type="text" name="email" value="{{ old('email')}}" id="first-name" class="{{ $errors->has('email') ? 'placeholder-red-700 text-red-900 bg-red-100' : '' }} overview-modal-add-talent-text h-full  border-none focus:ring-0 w-full p-1 pl-3 rounded outline-none " placeholder="Email">
                        </div>
                        @if($errors->has('email'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mt-4 w-[27rem]">
                        <label for="" class="{{ $errors->has('password') ? 'text-red-600' : '' }} block overview-modal-add-talent-text text-[#222222] mb-2">Password</label>
                        <div class="{{ $errors->has('password') ? 'border-red-500 bg-red-100' : 'border-[#CCD3DC]' }} flex items-center w-full h-10 rounded border border-[#CCD3DC]">
                            <input type="password" name="password" value="{{ old('password') }}" id="last-name" class="{{ $errors->has('password') ? 'placeholder-red-700 text-red-900 bg-red-100' : '' }} overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 pl-3 rounded outline-none " placeholder="Password">
                        </div>
                        @if($errors->has('password'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $errors->first('password') }}</p>
                        @endif
                        @if (session()->has('Failed'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ session()->get('Failed') }}</p>
                        @endif
                    </div>
                    <div class="w-[27rem] mt-4">
                        <a class="float-right text-palet opacity-70"  href="{{ route('register') }}">Register</a>
                    </div>
                    <button class="w-[27rem] h-10 bg-palet rounded-lg mt-6 mb-8">
                        <span class="overview-talent-modal-title text-white">Login</span>
                    </button>
                </form>               
            </div>
        </div>
    </main>
</body>
</html>