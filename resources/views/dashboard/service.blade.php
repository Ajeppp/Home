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
        <div class="flex flex-col items-center gap-[70px] mb-10 md:py-[70px]">
            <div class="flex md:flex-row flex-col md:gap-16 mt-10 items-center md:justify-center">
                <div class="flex flex-col md:w-1/6 w-5/6">
                    <p class="font-bold text-[30px] text-center md:text-left">Sunday Service</p>
                    <p class="font-bold text-[30px] text-center md:text-left">GPdI Hebron</p>
                    <p class="text-justify">
                        Ibadah Raya Umum GPdI Hebron dilakukan secara 
                        On-Site & Youtube Live-Steaming (Ibadah ke-2).
                    </p>
                </div>
                <div class="md:w-2/6 w-5/6 mt-10">
                    <img src="{{ asset('images/SundayService.png') }}" alt="Picture" class="bg-no-repeat object-cover">
                </div>
            </div>
            <div class="flex md:flex-row flex-col md:gap-16 items-center md:justify-center">
                <div class="flex flex-col md:w-1/6 w-5/6">
                    <p class="font-bold text-[30px] text-center md:text-left">Speaker Of Truth</p>
                    <p class="font-bold text-[30px] text-center md:text-left">SPoT</p>
                    <p class="text-justify">
                        SPoT adalah ibadah bagi pemuda-pemudi GPdI Hebron 
                        sebagai wadah untuk membangun iman.
                    </p>
                </div>
                <div class="md:w-2/6 w-5/6 mt-10">
                    <img src="{{ asset('images/SPoT.png') }}" alt="Picture" class="bg-no-repeat object-cover">
                </div>
            </div>
            <div class="flex md:flex-row flex-col md:gap-16 items-center md:justify-center">
                <div class="flex flex-col md:w-1/6 w-5/6">
                    <p class="font-bold text-[30px] text-center md:text-left">Descendants Of Truth's DoT's</p>
                    <p class="text-justify">
                        DoT's adalah ibadah bagi remaja GPdI Hebron sebagai 
                        tempat untuk membangun iman bersama.
                    </p>
                </div>
                <div class="md:w-2/6 w-5/6 mt-10">
                    <img src="{{ asset('images/dots.png') }}" alt="Picture" class="bg-no-repeat object-cover">
                </div>
            </div>
            <div class="flex md:flex-row flex-col md:gap-16 items-center md:justify-center">
                <div class="flex flex-col md:w-1/6 w-5/6">
                    <p class="font-bold text-[30px] text-center md:text-left">Hebron Kids</p>
                    <p class="text-justify">
                        Hebron Kids adalah ibadah bagi anak-anak GPdI Hebron sebagai 
                        tempat untuk membangun iman dan mengenal Tuhan.
                    </p>
                </div>
                <div class="md:w-2/6 w-5/6 mt-10">
                    <img src="{{ asset('images/kids.png') }}" alt="Picture" class="bg-no-repeat object-cover">
                </div>
            </div>
        </div>
        {{-- Footer --}}
        <x-footer />
    </div>
</body>
</html>