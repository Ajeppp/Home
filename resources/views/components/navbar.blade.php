  <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>

    <body>
        <!-- header/navigation -->
        <div x-data="{ isOpen: false }" class="flex justify-between p-4 bg-[#1F1D16] text-[#FFFFFF] lg:p-8 ">
          <a href="/" class="flex items-center">
            <img src="{{ asset('images/logohebron.png') }}" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-bold whitespace-nowrap tracking-widest">GPDI HEBRON</span>
          </a>

            <!-- left header section -->
            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="hidden space-x-6 lg:inline-block">
                  <ul class="flex flex-col mt-4 md:flex-row md:space-x-3 md:mt-0 md:text-sm md:font-medium md:border-0">
                    <li>
                      <a href="/" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">HOME</a>
                    </li>
                    <li>
                      <a href="/aboutus" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">ABOUT US</a>
                    </li>
                    <li>
                      <a href="/discipleship" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">DISCIPLESHIP</a>
                    </li>
                    <li>
                      <a href="/service" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">SERVICE</a>
                    </li>
                    <li>
                      <a href="/location" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">LOCATION</a>
                    </li>
                    <li>
                      @auth
                      <a href="/logout" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">LOGOUT </a>
                      @else
                      <a href="/login" class="block py-2 pl-3 pr-4 text-[#ffffff] tracking-wide hover:text-gray-500">LOGIN </a> 
                      @endauth
                    </li>
          
                    {{-- <p>Welcome back, {{ auth()->user()->name }}</p> --}}
                  </ul>
                </div>

                <!-- mobile navbar -->
                <div class="mobile-navbar">
                    <!-- navbar wrapper -->
                    <div class="fixed left-0 w-full h-50 p-5 bg-[#1F1D16] rounded-lg shadow-xl top-16" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col space-y-6">
                            <a href="/" class="text-sm text-white">HOME</a>
                            <a href="/aboutus" class="text-sm text-white">ABOUT US</a>
                            <a href="/discipleship" class="text-sm text-white">DISCIPLESHIP</a>
                            <a href="/service" class="text-sm text-white">SERVICE</a>
                            <a href="/location" class="text-sm text-white">LOCATION</a>
                            @auth
                            <a href="/logout" class="text-sm text-white">LOGOUT</a>
                            @else
                            <a href="/login" class="text-sm text-white">LOGIN</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <!-- end mobile navbar -->
            </div>
            <!-- right header section -->

        </div>

    </body>

</html>