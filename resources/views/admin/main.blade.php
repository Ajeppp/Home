<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    
    @if(auth()->user()->role != 1 ) 
        <script>window.location.href = "/";</script>
    @endif
    
    <div class="flex flex-col h-screen items-center justify-center md:items-center md:justify-center">
        <div class="flex flex-col justify-center p-5 bg-white drop-shadow-2xl rounded-lg md:w-3/12 w-5/6">
            <div class="text-2xl text-center font-bold mb-5">
                ADMIN
            </div>
            <a href="/">
                <div class="border rounded-lg p-1 m-2 text-center bg-stone-100 hover:bg-slate-300">
                    <button class="button-primary ">Home Page</button>
                </div>
            </a> 
            <a href="/cg">
                <div class="border rounded-lg p-1 m-2 text-center bg-stone-100 hover:bg-slate-300">
                    <button class="button-primary">Sahabat Jiwa Register</button>
                </div>
            </a>
            <a href="/admin/user">
                <div class="border rounded-lg p-1 m-2 text-center bg-stone-100 hover:bg-slate-300">
                    <button class="button-primary">Utilize User</button>
                </div>
            </a>
            <a href="/admin/cg">
                <div class="border rounded-lg p-1 m-2 text-center bg-stone-100 hover:bg-slate-300">
                    <button class="button-primary">Utilize Sahabat Jiwa</button>
                </div>
            </a>
            <a href="/post">
                <div class="border rounded-lg p-1 m-2 text-center bg-stone-100 hover:bg-slate-300">
                    <button class="button-primary">Post</button>
                </div>
            </a>
            <a href="/admin/post">
                <div class="border rounded-lg p-1 m-2 text-center bg-stone-100 hover:bg-slate-300">
                    <button class="button-primary">Utilize Post</button> 
                </div>
            </a>
        </div>
    </div>
</body>
</html>