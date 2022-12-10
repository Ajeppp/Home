<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <title>Login</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFFFFF]">
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
            <span class="flex rounded-full bg-[#FF5177] uppercase px-2 py-1 text-xs font-bold mr-3">Login Failed</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session('loginError') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
        </div>
    @endif
    <div class="flex justify-center items-center h-screen">
        <div class="flex flex-col justify-center bg-white border-white lg:w-1/4 p-5 drop-shadow-2xl rounded-lg"> 
            <form action="/login" method="POST" class="grid justify-center">
                @csrf
                <div class="font-bold text-3xl text-black ">
                    Login
                </div>
                <div class="text-md mt-2">
                    Please enter your details
                </div>
                <div class="mt-5">
                    <input name="email" type="email" placeholder="Email" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" autofocus required value="{{ old('email') }}">
                </div>
                @error('email')
                        <span class="text-sm text-red-600 dark:text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                <div class="mt-3">
                    <input name="password" type="password" placeholder="Password" class="border-1 bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('email') is-invalid @enderror" autofocus required >
                </div>
                {{-- forgot password --}}
                <div class="flex justify-end mt-2">
                    <a href="#" class="text-[#646262] text-sm">Forgot Password?</a>
                </div>
                <div>
                    <button class="btn w-full bg-[#000000] mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                    </button>
                </div>
                <div class="flex justify-center mt-3">
                    <div class="text-[#646262] text-sm">
                        Don't have an account?
                    </div>
                    <a href="/register" class="text-black font-bold text-sm ml-1">Sign up</a>
                </div> 
            </form>
        </div>
    </div>
</body>
</html>