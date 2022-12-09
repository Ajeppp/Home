<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:container bg-[#ffffff] md:mx-auto">
        <div class="text-[#222222] flex flex-row px-52 my-12 justify-between gap-20">
            <form action="/admin/user/{{ $user->id }}"  method="POST" class="flex flex-col w-3/5 gap-3">
                @csrf
                @method('PUT')
            
                    {{-- <h1 class="font-bold text-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    <p class="text-[20px]">
                        Selamat datang kepada saudara di dalam keluarga GPdI Hebron. 
                        Menjadi sukacita kami sebagai hamba Tuhan yang dipercayakan Tuhan melayani pekerjaan Tuhan 
                        di tempat ini, dapat melihat saudara beribadah kepada Tuhan dan bertumbuh dalam kuasa Firman 
                        dan Roh Kudus.
                    </p> --}}
                    <div class="flex flex-col gap-3">
                        <label for="name" class="text-[#000000]">Name</label>
                        <input type="text" name="name" id="name" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2" required value="{{ $user -> name }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="birthdate" class="text-[#000000]">Birth</label>
                        <input type="date" name="birthdate" id="birthdate" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2" required value="{{ $user -> birthdate }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="phone" class="text-[#000000]">Phone</label>
                        <input type="text" name="phone" id="phone" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2" required value="{{ $user -> phone }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="address" class="text-[#000000]">Address</label>
                        <input type="text" name="address" id="address" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2" required value="{{ $user -> address }}">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="line" class="text-[#000000]">ID Line</label>
                        <input type="text" name="line" id="line" class="border-2 border-[#D9D9D9] rounded-3xl px-3 py-2" required value="{{ $user -> line }}">
                    </div>
                    <div class="flex flex-row gap-3">
                        <button class="btn btn-wide w-full bg-[#000000] mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M9.4 18L8 16.6l4.6-4.6L8 7.4L9.4 6l6 6Z"/></svg>
                        </button>
                    </div>
            </form>
        </div>
    </div>
    <div />
</body>
</html>