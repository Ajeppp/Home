<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-[#FFFFFF] text-[#222222] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- Content --}}
        <div class="flex flex-col items-center gap-[70px] md:py-[70px]">
            <div class="flex md:flex-row flex-col md:gap-[70px] gap-[25px] items-center">
                <div class="flex flex-col">
                    <p class="font-bold text-[30px]">Sunday Service</p>
                    <p class="font-bold text-[30px]">GPdI Hebron</p>
                    <p>Ibadah Raya Umum GPdI Hebron dilakukan secara</p>
                    <p>On-Site & Youtube Live-Steaming (Ibadah ke-2)</p>
                </div>
                <img src="{{ asset('images/SundayService.png') }}" alt="Picture" class="bg-no-repeat object-cover w-[500px]">
            </div>
            <div class="flex md:flex-row flex-col md:gap-[70px] gap-[25px] items-center">
                <div class="flex flex-col">
                    <p class="font-bold text-[30px]">Sunday Service</p>
                    <p class="font-bold text-[30px]">GPdI Hebron</p>
                    <p>Ibadah Raya Umum GPdI Hebron dilakukan secara</p>
                    <p>On-Site & Youtube Live-Steaming (Ibadah ke-2)</p>
                </div>
                <img src="{{ asset('images/SPoT.png') }}" alt="Picture" class="bg-no-repeat object-cover w-[500px]">
            </div>
        </div>
       
        {{-- Footer --}}
        <x-footer />
    </div>
</body>
</html>