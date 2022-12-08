<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <title>GPdI Hebron</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-[#FFFFFF] text-[#222222] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- carousel --}}
        <div id="carousel">
            <img src="https://wallpaperaccess.com/full/5356640.jpg" alt="Picture" class="bg-no-repeat object-cover w-screen h-[500px]">
        </div>

        {{-- Welcome Page --}}
        <div class="grid justify-items-center md:flex mx-10 mt-20 justify-center ">
            <div class="grid justify-items-center md:w-1/4">
                <div class="flex justify-center">
                    </div>
                <div class="flex flex-col md:w-8/12 h-max text-center md:text-left items-center md:items-start md:w-1/2">
                    <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px] bg-no-repeat object-cover">
                    <h1 class="font-bold text-[30px] ">Welcome to GPdI Hebron</h1>
                    <p class="font-medium text-[20px]">Empowering Generations To Win Generations</p>
                </div>
            </div>
            <div class="flex flex-col pt-7 md:w-7/12 text-justify">
                <p class="md:mt-20">
                    Selamat datang kepada saudara di dalam keluarga GPdI Hebron. 
                    Menjadi sukacita kami sebagai hamba Tuhan yang dipercayakan 
                    Tuhan melayani pekerjaan Tuhan di tempat ini, dapat melihat 
                    saudara beribadah kepada Tuhan dan bertumbuh dalam kuasa Firman 
                    dan Roh Kudus.
                </p>
                <p class="mt-5 md:mt-5">
                    Biarlah setiap persekutuan kita dengan Tuhan membuat kita 
                    semakin dewasa dan kuat dalam kerohanian, terutama untuk 
                    mempersiapkan kita menjadi gereja Tuhan yang sempurna.
                </p>
                <p class="mt-5 md:mt-5">
                    Oleh sebab itu mari datang dengan setia dalam waktu-waktu 
                    ibadah dan bergandeng tangan melayani pekerjaan Tuhan dan 
                    biarlah nama Tuhan dipermuliakan.
                </p>
                <p class="mt-5 md:mt-5">
                    Haleluya. Tuhan Yesus memberkati!
                </p>
            </div>
        </div>

        {{-- Content --}}
        <div class="flex flex-row justify-center items-center text-[#222222] gap-20 h-[500px] mt-32 bg-[url('https://www.planetshakers.com/wp-content/uploads/2022/02/planetshakers-urbanlife-2022-bg.jpg')]">
                <div class="flex flex-col items-center">
                    <p class="text-[22px]">Lastest from GPDI Hebron</p>
                    <div class="flex flex-col mb-14">
                        <h1 class="text-[54px] text-center font-bold">KasihMu</h1>
                        <h1 class="text-[54px] text-center font-bold -mt-5">Sempurna</h1>
                    </div>
                    <x-content />
                </div>
                <img src="https://cdn.discordapp.com/attachments/1044637020380745830/1047701604306006126/image_5.png" class="hidden md:bg-no-repeat object-cover mt-8 md:block">
        </div>

        {{-- Contact Us --}}
        <div class="flex flex-row justify-center items-center text-[#222222] gap-20 h-[500px] my-5 bg-[#FFFFFF]">
                <div class="flex flex-col items-center">
                    <p class="text-[22px]">Get In Touch With Us</p>
                    <div class="flex flex-col mb-14">
                        <P class="text-[54px] text-center font-bold">GPdI</P>
                        <P class="text-[54px] text-center font-bold -mt-5">Hebron</P>
                    </div>
                    <button>
                        <div class="flex bg-[#434242] hover:bg-[#68B984] hover:text-[#000000] text-[#FFFFFF] w-[180px] h-[50px] items-center justify-center">
                            <a href="https://wa.me/+6281387243736" class="font-medium text-[18px]">
                                <span class="flex flex-row items-center gap-2">
                                    <iconify-icon icon="logos:whatsapp-icon"></iconify-icon>
                                    <span class="ml-2">Contact Us</span>
                                </span>
                            </a>
                        </div>
                    </button>
                </div>
                <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="hidden md:block w-[200px] bg-no-repeat object-cover">
        </div>

        {{-- Footer --}}
        <x-footer />
    </div>
</body>
</html>