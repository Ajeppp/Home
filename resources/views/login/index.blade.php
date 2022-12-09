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
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session()->has('loginError'))
        <div class="alert alert-danger">
            {{ session('loginError') }}
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
                    <input name="email" type="email" placeholder="Input Email" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" autofocus required value="{{ old('email') }}">
                </div>
                {{-- @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}
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