<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discipleship</title>

    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <div class="text-[#222222] flex flex-row h-screen px-52 mt-36 justify-between gap-20">
        <div class="flex flex-col justify-start w-2/5">
            <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px] bg-no-repeat object-cover -ml-12">
            <h1 class="font-bold text-[35px]">HOME</h1>
            <h1 class="font-bold text-[35px]">GpDI Hebron</h1>
        </div>
        <div class="flex flex-col w-3/5 gap-3">
                    <h1 class="font-bold text-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    <p class="text-[20px]">
                        Selamat datang kepada saudara di dalam keluarga GPdI Hebron. 
                        Menjadi sukacita kami sebagai hamba Tuhan yang dipercayakan Tuhan melayani pekerjaan Tuhan 
                        di tempat ini, dapat melihat saudara beribadah kepada Tuhan dan bertumbuh dalam kuasa Firman 
                        dan Roh Kudus.
                    </p>
                    <button class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg w-[170px] h-[60px] bg-[#D9D9D9] text-[#000000] border-0 rounded-3xl">Join HOME</button>
        </div>
    </div>
</body>
</html>