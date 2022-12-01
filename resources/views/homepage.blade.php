<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:container md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- carousel --}}
        <div id="carousel">
            <img src="https://wallpaperaccess.com/full/5356640.jpg" alt="Picture" class="bg-no-repeat object-cover w-screen h-[500px]">
        </div>
        {{-- Welcome Page --}}
        <div class="flex flex-row h-[600px] px-32 pt-10 justify-between gap-20">
            <div class="flex flex-col justify-start w-1/6">
                <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px] bg-no-repeat object-cover">
                <h1 class="font-bold text-[30px]">Welcome to GPdI Hebron</h1>
                <p class="font-medium text-[20px]">Empowering Generations To Win Generations</p>
            </div>
            <div class="flex flex-col w-5/6 pl-60 pt-28 gap-5">
                        <p>
                            Selamat datang kepada saudara di dalam keluarga GPdI Hebron. 
                            Menjadi sukacita kami sebagai hamba Tuhan yang dipercayakan 
                            Tuhan melayani pekerjaan Tuhan di tempat ini, dapat melihat 
                            saudara beribadah kepada Tuhan dan bertumbuh dalam kuasa Firman 
                            dan Roh Kudus.
                        </p>
                        <p>
                            Biarlah setiap persekutuan kita dengan Tuhan membuat kita 
                            semakin dewasa dan kuat dalam kerohanian, terutama untuk 
                            mempersiapkan kita menjadi gereja Tuhan yang sempurna.
                        </p>
                        <p>
                            Oleh sebab itu mari datang dengan setia dalam waktu-waktu 
                            ibadah dan bergandeng tangan melayani pekerjaan Tuhan dan 
                            biarlah nama Tuhan dipermuliakan.
                        </p>
                        <p>
                            Haleluya. Tuhan Yesus memberkati!
                        </p>
            </div>
        </div>
        {{-- Content --}}
        <div class="flex flex-row justify-center items-center gap-20 h-[500px] -mt-32 bg-[url('https://www.planetshakers.com/wp-content/uploads/2022/02/planetshakers-urbanlife-2022-bg.jpg')]">
                <div class="flex flex-col items-center">
                    <p class="text-[22px]">Lastest from GPDI Hebron</p>
                    <div class="flex flex-col">
                        <h1 class="text-[54px] text-center font-bold">KasihMu</h1>
                        <h1 class="text-[54px] text-center font-bold -mt-5">Sempurna</h1>
                    </div>
                    <x-content />
                </div>
                <img src="https://cdn.discordapp.com/attachments/1044637020380745830/1047701604306006126/image_5.png" class="bg-no-repeat object-cover mt-8">
        </div>
        {{-- Footer --}}
        <x-footer />
    </div>
</body>
</html>