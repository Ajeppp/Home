<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="mx-auto bg-cyan rounded-xl shadow-md overflow-hidden">
        <div class="p-2 m-10 md:flex justify-center">
            <div class="px-10 flex justify-items-center grid">
                <p class="text-sl">Lastest from GPDI Hebron</p>
                <h1 class="text-4xl text-center font-bold">KasihMu <br /> Sempurna</h1>
                <div class="hidden:underline flex"><x-content /></div>
            </div>
            <div class="md:shrink-0 ">
                <img src="https://i.ytimg.com/vi/JlBlOu1i_Jw/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBgxczX6CRFY00hsiaWvkI6_ymIfw">
            </div>
        </div>
    </div>
</body>
</html>