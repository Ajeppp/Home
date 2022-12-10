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
    @if(session()->has('success'))
        <div class="bg-[#015E36] text-center py-4 lg:px-4">
            <div class="p-2 bg-[#04A559] items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-[#00D872] uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
        </div>
    @endif
    @if(session()->has('loginError'))
        <div class="bg-[#851D40] text-center py-4 lg:px-4">
            <div class="p-2 bg-[#C72C4E] items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-[#FF5177] uppercase px-2 py-1 text-xs font-bold mr-3">Failed</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session('loginError') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
        </div>
    @endif
    <div class="md:mx-auto h-screen flex flex-col items-center justify-center w-2/6">
        <div class="flex flex-col items-center bg-white w-5/6 md:w-4/6 border-white p-5 drop-shadow-2xl rounded-lg">
            <div class="flex flex-col w-full justify-left items-left">
                <a href="/admin"><iconify-icon icon="humbleicons:arrow-go-back" width="40"></iconify-icon></a>
            </div>
            <div class="flex flex-col w-5/6 items-left">
                <div class="flex flex-col w-6/6 items-left">
                    <div class="flex flex-col gap-3">
                        <p class="text-3xl text-black font-bold">Make Post</p>
                    </div>
                    <form action="/post" method="POST" class="flex flex-col gap-3">
                        @csrf
                        <div class="flex flex-col gap-3 mt-3">
                            <label for="title" class="text-[#000000]">Title</label>
                            <input placeholder="Title" type="text" name="title" id="title" class="border-2 border-[#D9D9D9] text-[#312626] bg-white rounded-lg p-2 @error('title') is-invalid @enderror" required value="{{ old('title') }}">
                       </div>
                        <div class="flex flex-col gap-3">
                            <p for="content" class="text-[#000000]">Content</p>
                            <textarea placeholder="Description" type="content" name="content" id="content" class="border-2 border-[#D9D9D9] text-[#312626] bg-white rounded-lg p-2 @error('content') is-invalid @enderror" required value="{{ old('content') }}"></textarea>
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
    </div>
</body>
</html>