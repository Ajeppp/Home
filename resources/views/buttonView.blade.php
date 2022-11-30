<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workspace</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="my-5 flex justify-center"> 
        <h1 class="font-bold text-[30px]">Test Your Component Here</h1>
    </div>
    <div class="my-5 flex flex-column justify-center"> 
        <div class="flex justify-center">
            <x-button />
        </div>
    </div>
</body>
</html>