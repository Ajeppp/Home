<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    @vite('resources/css/app.css')
</head>
<body>
    {{-- <div class="md:container bg-[#ffffff] md:mx-auto">
        <div class="text-[#222222] flex flex-row px-52 my-12 justify-between gap-20">
            <form action="/register"  method="POST" class="flex flex-col w-3/5 gap-3">
                @csrf
             --}}
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
                        <label for="gender" class="text-[#000000]">Gender</label>
                        <div class="flex flex-row gap-3">
                            <input type="radio" name="gender" id="gender" value="male" checked /> Male
                            <input type="radio" name="gender" id="gender" value="female" /> Female
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="birthdate" class="text-[#000000]">Birth</label>
                        <input type="date" name="birthdate" id="birthdate" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="phone" class="text-[#000000]">Phone</label>
                        <input type="text" name="phone" id="phone" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="address" class="text-[#000000]">Address</label>
                        <input type="text" name="address" id="address" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="line" class="text-[#000000]">ID Line</label>
                        <input type="text" name="line" id="line" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="password" class="text-[#000000]">Password</label>
                        <input type="password" name="password" id="password" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2  @error('password') is-invalid @enderror" required>
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



        <div class="flex justify-center my-32 ">
            <div class="flex flex-col justify-center bg-white border-white lg:w-1/4 p-5 drop-shadow-2xl rounded-lg"> 
                <form action="/register" method="POST" class="grid justify-center">
                    @csrf
                    <div class="font-bold text-3xl text-black ">
                        Register
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="name" class="text-[#000000]">Name</label>
                        <input type="text" name="name" id="name" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('name') is-invalid @enderror" required value="{{ old('nama') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="email" class="text-[#000000]">Email</label>
                        <input type="email" name="email" id="email" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('email') is-invalid @enderror" required value="{{ old('nama') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="gender" class="text-[#000000]">Gender</label>
                        <div class="flex flex-row gap-10 ">
                            <div>
                                <input type="radio" name="gender" id="gender" value="male" /> Male
                            </div>
                            <div>
                                <input type="radio" name="gender" id="gender" value="female" /> Female
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="birthdate" class="text-[#000000]">Birth</label>
                        <input type="date" name="birthdate" id="birthdate" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="phone" class="text-[#000000]">Phone</label>
                        <input type="text" name="phone" id="phone" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="address" class="text-[#000000]">Address</label>
                        <input type="text" name="address" id="address" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="line" class="text-[#000000]">ID Line</label>
                        <input type="text" name="line" id="line" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="password" class="text-[#000000]">Password</label>
                        <input type="password" name="password" id="password" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('password') is-invalid @enderror" required>
                    </div>
                    <div class="flex flex-row mt-2">
                        <button class="btn btn-wide w-full bg-[#000000] mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                        </button>
                    </div>
                    <div class="flex justify-center mt-3">
                        <div class="text-[#646262] text-sm">
                            Already have an account?
                        </div>
                        <a href="/login" class="text-black font-bold text-sm ml-1">Sign in</a>
                    </div> 
                </form>
            </div>
        </div>




</body>
</html>