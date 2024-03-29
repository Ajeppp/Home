<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col bg-[#FFFFFF]">
        <div class="flex justify-center my-32 bg-[#FFFFFF]">
            <div class="flex flex-col justify-center bg-white border-white md:w-1/4 p-5 drop-shadow-2xl rounded-lg"> 
                <form action="/register" method="POST" class="grid justify-center">
                    @csrf
                    <div class="font-bold text-3xl text-black ">
                        Register
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="name" class="text-[#000000]">Name</label>
                        <input placeholder="Name" type="text" name="name" id="name" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 @error('name') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" required value="{{ old('name') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="email" class="text-[#000000]">Email</label>
                        <input placeholder="Email" type="email" name="email" id="email" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('email') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" required value="{{ old('email') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="gender" class="text-[#000000]">Gender</label>
                        <div class="flex flex-row gap-10 ">
                            <div>
                                <input type="radio" name="gender" id="gender" value="male" required/> Male
                            </div>
                            <div>
                                <input type="radio" name="gender" id="gender" value="female" required/> Female
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="birthdate" class="text-[#000000]">Birth</label> 
                        <input type="date" name="birthdate" id="birthdate" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" required>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="phone" class="text-[#000000]">Phone</label>
                        <input placeholder="Phone Number" type="text" name="phone" id="phone" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5 " value="{{ old('phone') }}" required>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="address" class="text-[#000000]">Address</label>
                        <input placeholder="Address" type="text" name="address" id="address" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5" value="{{ old('address') }}" required>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="line" class="text-[#000000]">ID Line</label>
                        <input placeholder="ID Line" type="text" name="line" id="line" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('line') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" required value="{{ old('line') }}">
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="password" class="text-[#000000]">Password</label>
                        <input placeholder="Password" type="password" name="password" id="password" class="border-1  bg-[#D9D9D9] text-[#312626]  rounded-lg w-72 h-10 p-5  @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 @enderror" required>
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
    </div>
</body>
</html>