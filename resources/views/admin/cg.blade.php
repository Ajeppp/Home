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
    {{-- <div class="md:container bg-[#ffffff] md:mx-auto">
        <a href="/admin">back</a>
        <div class="text-[#222222] flex flex-row px-52 my-12 justify-between gap-20">
            <form action="/cg"  method="POST" class="flex flex-col w-3/5 gap-3">
                @csrf --}}
            
                    {{-- <h1 class="font-bold text-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    <p class="text-[20px]">
                        Selamat datang kepada saudara di dalam keluarga GPdI Hebron. 
                        Menjadi sukacita kami sebagai hamba Tuhan yang dipercayakan Tuhan melayani pekerjaan Tuhan 
                        di tempat ini, dapat melihat saudara beribadah kepada Tuhan dan bertumbuh dalam kuasa Firman 
                        dan Roh Kudus.
                    </p> --}}
                    {{-- <div class="flex flex-col gap-3">
                        <label for="name" class="text-[#000000]">Name</label>
                        <input type="text" name="name" id="name" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2 @error('name') is-invalid @enderror" required value="{{ old('nama') }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="email" class="text-[#000000]">Email</label>
                        <input type="email" name="email" id="email" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2  @error('email') is-invalid @enderror" required value="{{ old('nama') }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="date" class="text-[#000000]">CG Date</label>
                        <input type="date" name="date" id="date" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="time" class="text-[#000000]">CG Time</label>
                        <input type="time" name="time" id="time" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="phone" class="text-[#000000]">Phone</label>
                        <input type="text" name="phone" id="phone" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2 @error('phone') is-invalid @enderror" required value="{{ old('phone') }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="location" class="text-[#000000]">Location</label>
                        <input type="text" name="location" id="location" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-row gap-3">
                        <button class="btn btn-wide w-full bg-[#000000] mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                        </button>
                    </div>
            </form>
        </div>
    </div>
    <div> --}}
        

        <div class="flex justify-center items-center h-screen">
            
            <div class="flex flex-col justify-center bg-white border-white lg:w-1/4 p-5 drop-shadow-2xl rounded-lg"> 
                
                <form action="/login" method="POST" class="grid justify-center">
                    @csrf
                    <div class="flex flex-col mt-2">
                        <label for="name" class="text-[#000000]">Name</label>
                        <input type="text" name="name" id="name" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('name') is-invalid @enderror" required value="{{ old('nama') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="email" class="text-[#000000]">Email</label>
                        <input type="email" name="email" id="email" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('email') is-invalid @enderror" required value="{{ old('nama') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="date" class="text-[#000000]">CG Date</label>
                        <input type="date" name="date" id="date" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="time" class="text-[#000000]">CG Time</label>
                        <input type="time" name="time" id="time" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="phone" class="text-[#000000]">Phone</label>
                        <inp{{ ut type }}="text" name="phone" id="phone" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('phone') is-invalid @enderror" required value="{{ old('phone') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="location" class="text-[#000000]">Location</label>
                        <input type="text" name="location" id="location" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-row mt-2">
                        <button class="btn btn-wide w-full bg-[#000000] mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                        </button>
                    </div>

                    <div class="flex flex-row mt-2">
                        <a href="/admin" class="btn btn-wide w-full bg-[#000000] mt-3">
                            <iconify-icon icon="akar-icons:arrow-back-thick-fill"></iconify-icon>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>