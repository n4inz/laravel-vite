@extends('layouts.main')
@section('container')

<main class="flex">
    @include('layouts.sidebar')
    <article id="article" class=" ml-[310px] space-x-2 mt-[85px] px-5 w-[75%]">
        <div class="flex items-center justify-between mt-8 w-[1017px] xl:w-full">
            <span class="overview-modal-add-talent-title">Clients</span>
            <a href="{{ route('user_client.client_created') }}" class="w-[111px] h-10 bg-palet rounded-md flex items-center justify-center">
                <span class="task-btn-text">+ Create</span>
            </a>
        </div>
        <div class="mt-6 h-20 w-[1017px] xl:w-full bg-bgbody px-6 flex items-center justify-between rounded">
            <div class="flex items-center space-x-8 w-[1017px]">
                <div class="flex items-center space-x-2 ">
                    <div class="w-2 h-6 bg-palet rounded-sm"></div>
                    <span class="text-[#222222] user-talent-title">Clients</span>
                </div>
    
                <div class="relative w-80 left-1">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg width="15" height="15" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9ZM16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L17.2929 18.7071C17.6834 19.0976 18.3166 19.0976 18.7071 18.7071C19.0976 18.3166 19.0976 17.6834 18.7071 17.2929L16.0319 14.6177Z" fill="#827C7C"/>
                        </svg>
                    </div>
                    <div class="w-[340px] h-10 border-2 border-[#EFEFEF] rounded-md bg-[#EFEFEF] flex items-center">
                        <input id="search_clients" type="text"  class="border border-[#EFEFEF] text-colortext text-sm bg-transparent border-none outline-none  block w-full pl-10 p-2 focus:ring-0" placeholder="Search client" required>
                    </div>
                </div>
            </div>

            <div class="flex item-center justify-center">
                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.739031 1.13982C0.830853 0.940319 1.03039 0.8125 1.25001 0.8125H14.75C14.9696 0.8125 15.1692 0.940319 15.261 1.13982C15.3528 1.33933 15.3201 1.57402 15.1773 1.74085L9.91251 7.88958V13.75C9.91251 13.9445 9.81207 14.1251 9.64692 14.2278C9.48176 14.3304 9.2753 14.3405 9.10094 14.2544L6.40094 12.921C6.20901 12.8262 6.08751 12.6307 6.08751 12.4167V7.88958L0.822735 1.74085C0.679895 1.57402 0.647209 1.33933 0.739031 1.13982ZM2.47217 1.9375L7.07728 7.31582C7.16455 7.41774 7.21251 7.54749 7.21251 7.68167V12.0671L8.78751 12.8449V7.68167C8.78751 7.54749 8.83547 7.41774 8.92274 7.31582L13.5278 1.9375H2.47217Z" fill="#222222"/>
                </svg>   
            </div>
        </div>

        <div class="grid gap-4 grid-cols-3 mt-10 mb-20 w-[1017px] xl:w-full">   
        {{-- <div class="flex flex-wrap space-x-2 space-y-2  mt-10 mb-20 xl:w-full">    --}}
            @foreach ($client as $values )
                <div onclick="detail('{{ $values->id }}')" data-modal-toggle="modal-overview-detail-client" id="search_client" class="flex items-center w-[310px] h-[130px] bg-white rounded-lg pl-3 space-x-4 relative hover:cursor-pointer">
                    @if (now()->diffInMinutes($values->created_at) < 1)
                        <div class="absolute top-2 right-3 w-[39px] h-[15px] bg-red-700 animate-pulse flex items-center justify-center rounded-sm"> <span class="overview-label-text">New</span></div>
                    @endif
                    <div class="hidden">{{ $values->phone}} {{ $values->email }} {{ $values->address }} {{ $values->languages }} {{ $values->note }}</div>
                    {{-- <div class="hidden"></div> --}}
                    <div class="w-20">
                        @if ($values->avatar)
                            <img class="w-20 h-20 rounded-full" src="{{ asset('storage/avatar/'.$values->avatar) }}" alt="">
                        @else
                            <div class="w-20 h-20 flex items-center justify-center bg-[{{ $values->color }}] rounded-full">
                                <span class="text-white text-lg">{{ strtoupper(substr($values->first_name, 0, 1)) }}{{ strtoupper(substr($values->last_name, 0, 1)) }}</span>
                            </div>
                        @endif
                        {{-- <img class="w-20 h-20 rounded-full" src="{{ asset('storage/avatar/'.$values->avatar) }}" alt=""> --}}
                    </div>
                    <div class="flex flex-col text-[#827C7C] space-y-[0.5px]">
                        <span class="user-talent-name text-[#222222]">A{{ sprintf("%03s", $values->id )}} {{ $values->first_name }} {{ $values->last_name }}</span>
                        <span class="user-talent-live">Live in  {{ Str::limit($values->address, 20, $end='...') }}</span>
                        <span class="overview-note-body text-[#2CA6A0]">
                            {{ $values->languages }}
                        </span>
                        <div class="flex items-center space-x-[9.67px] ">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3337 4.1735V10.9585C17.3337 11.6503 17.069 12.3159 16.5939 12.8187C16.1188 13.3215 15.4693 13.6235 14.7787 13.6627L14.6253 13.6668H3.37533C2.68354 13.6669 2.01797 13.4022 1.51513 12.9271C1.0123 12.452 0.710324 11.8025 0.671159 11.1118L0.666992 10.9585V4.1735L8.71033 8.38683C8.79981 8.4337 8.89931 8.45818 9.00033 8.45818C9.10134 8.45818 9.20085 8.4337 9.29033 8.38683L17.3337 4.1735ZM3.37533 0.333496H14.6253C15.2966 0.333415 15.9441 0.582659 16.442 1.03289C16.94 1.48311 17.253 2.10223 17.3203 2.77016L9.00033 7.1285L0.680326 2.77016C0.744928 2.12876 1.0362 1.53143 1.50178 1.08555C1.96737 0.63967 2.57673 0.374485 3.22033 0.337663L3.37533 0.333496H14.6253H3.37533Z" fill="#3BD7CF"/>
                            </svg>
                            <span class="user-talent-live ">
                                {{ Str::limit($values->email, 20, $end='...') }}
                            </span>
                        </div>
                    </div>
                </div>         
            @endforeach
        </div>

        <!-- Main modal overview detail Client -->
        <div id="modal-overview-detail-client" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 w-full ">  
            <div class="p-4 w-[666px] h-screen ">
                <div class="bg-white rounded-lg shadow ">
                    <div class="relative py-3 border-b border-[#EFEFEF]">
                        <span class="overview-talent-modal-title mt-10 ml-[45px] text-[#222222]">Detail Client</span>
                        <button type="button" class="absolute top-2 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"  data-modal-toggle="modal-overview-detail-client">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <hr>
                    <div id="loads" class="px-[42px] mt-8"></div>
                </div>
            </div>
        </div>
    </article>
</main>
    {{-- Quick search --}}
    <script type="text/javascript" src="{{ asset('js/jquery.quicksearch.js') }}"></script>
    <script type="text/javascript">
        $('input#search_clients').quicksearch('div#search_client');
        $('input#simple-search').quicksearch('div#search_client');

        function detail(id){
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({ 
                type:'POST',
                url: '{{ route("user_client.user_client_datail_modal") }}',
                data:{id},
                // url:'/detail-match-talent/'+id,
                beforeSend: function(){
                    const loader = `<div class="flex justify-center w-full h-96 pt-24">
                                        <div role="status mt-12">
                                            <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin fill-palet" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                            </svg>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>`;
                    $('#loads').html(loader);             
                },
                success:function(res){
                    
                    $('#loads').html(res);
                }
            });
        }
        
    </script>

@endsection
