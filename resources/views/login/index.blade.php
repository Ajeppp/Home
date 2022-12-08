<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <title>Login</title>

    @vite('resources/css/app.css')
</head>
<body>
    <h1>Login</h1>
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

    <form action="/login"  method="POST" class="flex flex-col w-3/5 gap-3">
        @csrf
  
            <div class="flex flex-col gap-3">
                <label for="email" class="text-[#000000]">Email</label>
                <input type="email" name="email" id="email" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2" autofocus required value="{{ old('email') }}">
                {{-- @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>
            <div class="flex flex-col gap-3">
                <label for="password" class="text-[#000000]">Password</label>
                <input type="password" name="password" id="password" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2 @error('email') is-invalid @enderror" required>
            </div>
            <div class="flex flex-row gap-3">
                <button class="btn btn-wide w-full bg-[#000000] mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                </button>
            </div>
    </form>
    <a href="/register">Register Now!</a>

</body>
</html>