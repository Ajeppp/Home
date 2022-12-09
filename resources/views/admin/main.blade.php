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
    <div class="flex justify-center item-center h-screen ">
        <div class="flex flex-col p-5 justify-center bg-white drop-shadow-2xl rounded-lg lg:w-1/4">
            <button class="button-primary m-3">
                <a href="/">homepage</a> 
            </button>
            <button class="button-primary m-3">
                <a href="/cg">daftar cg</a> 
            </button>
            <button class="button-primary m-3">
                <a href="/admin/user">util user</a> 
            </button>
            <button class="button-primary m-3">
                <a href="/admin/cg">util cg</a> 
            </button>
            <button class="button-primary m-3">
                <a href="/post">make post</a>     
            </button>
            <button class="button-primary m-3">
                <a href="/admin/post">util post</a>
            </button>
        </div>
    </div>
    {{-- <div>
        @yield('container')
    </div> --}}
</body>
</html>