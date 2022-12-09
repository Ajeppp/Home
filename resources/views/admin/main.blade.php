<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <a href="/">homepage</a> |
        <a href="/cg">daftar cg</a> |
        <a href="/admin/user">util user</a> |
        <a href="/admin/cg">util cg</a> |
        <a href="/post">make post</a> |
        <a href="/admin/post">util post</a> 
    </div>
    {{-- <div>
        @yield('container')
    </div> --}}
</body>
</html>