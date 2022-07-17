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
                <span class="overview-send-title text-palet w-[650px] text-center">Login For Agency {{ session('status') }}</span>
                    <form action="{{ route('login.tenancy') }}" method="POST">
                        @csrf
                        <div class="mt-10 w-[27rem]">
                            <label for="first-name" class="block overview-modal-add-talent-text text-[#222222] mb-2">Email</label>
                            <div class="flex items-center justify-center w-full h-10 border border-[#CCD3DC] rounded text-[#222222]">
                                <input type="text" name="email" value="{{ session('status')}}" id="first-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Email">
                            </div>
                        </div>
                        <div class="mt-4 w-[27rem]">
                            <label for="" class="block overview-modal-add-talent-text text-[#222222] mb-2">Password</label>
                            <div class="flex items-center w-full h-10 rounded border border-[#CCD3DC]">
                                <input type="password" name="password" value="{{ old('password') }}" id="last-name" class="overview-modal-add-talent-text  border-none focus:ring-0 w-full p-1 ml-3 outline-none " placeholder="Password">
                            </div>
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