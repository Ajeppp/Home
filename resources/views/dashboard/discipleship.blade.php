<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-[#ffffff] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />
        @guest
        {{-- content --}}
        <div class="text-[#222222] flex flex-row h-max px-52 mt-32 justify-between gap-20 pb-32">
            <div class="flex flex-col justify-start w-2/5">
                <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px] bg-no-repeat object-cover -ml-12">
                <h1 class="font-bold text-[35px]">HOME</h1>
                <h1 class="font-bold text-[35px]">GPdI Hebron</h1>
            </div>
            <div class="flex flex-col w-3/5 gap-3">
                <h1 class="font-bold text-[22px]">Apa itu "HOME"?</h1>
                <p class="text-[20px] text-justify">
                    Setiap jemaat Hebron adalah jiwa yang dipercayakan oleh Tuhan kepada kita, dan Setiap
                    jiwa ini haruslah tertanam dan bertumbuh didalam sebuah wadah (Komunitas). HOME merupakan 
                    sebuah wadah dimana Sahabat Jiwa dapat melakukan pembapaan dan pemuridan untuk mengajarkan
                    mereka agar melakukan segala sesuatu yang telah diperintahkan Kristus kepada kita.
                </p>
                <div class="flex bg-[#f0f0f0] hover:bg-[#434242] hover:text-[#FFFFFF] text-[#000000] w-[180px] h-[50px] items-center justify-center">
                    <a href="/login" class="font-medium text-[18px]">
                        Join HOME
                    </a>
                </div>
            </div>
        </div>
        @endguest

        @auth
        <h1>Halo, ini dah login!</h1>
        @if(auth()->user()->cg_id != NULL)

            jadwal pertemuan
        @else
            pilih ketua
        @endif
        {{-- content --}}
        {{-- content --}}
        @endauth
    </div>
    <x-footer />
</body>
</html>