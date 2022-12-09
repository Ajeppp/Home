<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body class="bg-[#FFFFFF]">
    @if(auth()->user()->role != 1 ) 
        <script>window.location.href = "/";</script>
    @endif
    <div class="md:mx-auto h-screen flex flex-col items-center justify-center">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session()->has('loginError'))
            <div class="alert alert-danger">
                {{ session('loginError') }}
            </div>
        @endif
        <div class="flex flex-col justify-center bg-white border-white w-5/6 p-5 drop-shadow-2xl rounded-lg">
            <div>
                <a href="/admin"><iconify-icon icon="humbleicons:arrow-go-back" width="40"></iconify-icon></a>
            </div>
            <div class="mt-7">
                <h1 class="text-2xl text-[#000000] font-bold text-center">Make Post</h1>
            </div>
            <div class="flex justify-center">
                <form action="/post"  method="POST" class="flex flex-col w-3/5 gap-3">
                    @csrf
                    <div class="flex flex-col gap-3">
                        <p for="title" class="text-[#000000] font-bold text-[20px]">Title</p>
                        <input type="text" name="title" id="title" class="border-2 border-[#D9D9D9] bg-white rounded-3xl px-3 py-2 @error('title') is-invalid @enderror" required value="{{ old('title') }}">
                   </div>
                    <div class="flex flex-col gap-3">
                        <p for="content" class="text-[#000000] font-bold text-[20px]">Content</p>
                        <textarea type="content" name="content" id="content" class="border-2 border-[#D9D9D9] bg-white rounded-3xl px-3 py-2  @error('content') is-invalid @enderror" required value="{{ old('content') }}">
                    </div>
                    <div class="flex flex-row gap-3">
                        <button class="btn btn-wide w-full bg-[#000000] mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>