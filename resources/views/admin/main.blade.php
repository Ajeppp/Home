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
    
    <div class="flex justify-center my-40">
        <div class="grid justify-items-center p-5 bg-white drop-shadow-2xl rounded-[24px] w-1/4">
            <div class="text-2xl font-bold mb-5">
                ADMIN
            </div>
            <div class="border rounded-full p-1 m-2 w-72 h-10 text-center bg-stone-100 hover:bg-slate-300">
                <button class="button-primary "><a href="/">HomePage</a> </button>
            </div>
            <div class="border rounded-full p-1 m-2 w-72 h-10 text-center bg-stone-100 hover:bg-slate-300">
                <button class="button-primary"><a href="/cg">CG Register</a> </button>
            </div>
            <div class="border rounded-full p-1 m-2 w-72 h-10 text-center bg-stone-100 hover:bg-slate-300">
                <button class="button-primary"><a href="/admin/user">Utilize User</a> </button>
            </div>
            <div class="border rounded-full p-1 m-2 w-72 h-10 text-center bg-stone-100 hover:bg-slate-300">
                <button class="button-primary"><a href="/admin/cg">Utilize CG</a> </button>
            </div>
            <div class="border rounded-full p-1 m-2 w-72 h-10 text-center bg-stone-100 hover:bg-slate-300">
                <button class="button-primary"><a href="/post">Post</a> </button>
            </div>
            <div class="border rounded-full p-1 m-2 w-72 h-10 text-center bg-stone-100 hover:bg-slate-300">
                <button class="button-primary"><a href="/admin/post">Utilize Post</a> </button>
            </div>
        </div>
    </div>

    {{-- <div>
        @yield('container')
    </div> --}}
</body>
</html>