<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex flex-col h-screen justify-center items-center">
            <div class="flex w-4/6">
                <img src="https://media.discordapp.net/attachments/943536943948513291/1047498370270363648/gpdi-hebron-gading-serpong-41181523042016.png" alt="logo" class="w-[150px]">
            </div>
            <div class="flex justify-center gap-x-[130px]">
                <div class="w-2/12 h-max">
                    <h1 class="font-bold text-[30px]">Welcome to GPdI Hebron</h1>
                    <p class="font-medium text-[20px]">Empowering Generations To Win Generations</p>
                </div>
                <div class="w-5/12 gap-[50px]">
                        <p class="mb-3">
                            Selamat datang kepada saudara di dalam keluarga GPdI Hebron. 
                            Menjadi sukacita kami sebagai hamba Tuhan yang dipercayakan 
                            Tuhan melayani pekerjaan Tuhan di tempat ini, dapat melihat 
                            saudara beribadah kepada Tuhan dan bertumbuh dalam kuasa Firman 
                            dan Roh Kudus.
                        </p>
                        <p class="py-3">
                            Biarlah setiap persekutuan kita dengan Tuhan membuat kita 
                            semakin dewasa dan kuat dalam kerohanian, terutama untuk 
                            mempersiapkan kita menjadi gereja Tuhan yang sempurna.
                        </p>
                        <p class="py-3">
                            Oleh sebab itu mari datang dengan setia dalam waktu-waktu 
                            ibadah dan bergandeng tangan melayani pekerjaan Tuhan dan 
                            biarlah nama Tuhan dipermuliakan.
                        </p>
                        <p class="mt-3">
                            Haleluya. Tuhan Yesus memberkati!
                        </p>
                </div>
            </div>
        </div>
    </body>
</html>
