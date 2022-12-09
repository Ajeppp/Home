<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-[#ffffff] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />
        @guest
        {{-- content --}}
        <div class="text-[#222222] flex flex-row h-max px-52 mt-32 justify-between gap-20 pb-32">
            <div class="flex flex-col justify-start w-2/5">
                <img src="{{ asset('images/logohebron.png') }}" alt="logo" class="w-[150px] bg-no-repeat object-cover -ml-12">
                <h1 class="font-bold text-[35px]">HOME</h1>
                <h1 class="font-bold text-[35px]">GPdI Hebron</h1>
            </div>
            <div class="flex flex-col w-3/5 gap-3">
                <h1 class="font-bold text-[22px]">Apa itu "HOME"?</h1>
                <p class="text-[20px] text-justify">
                    Setiap jemaat Hebron adalah jiwa yang dipercayakan oleh Tuhan kepada kita, dan Setiap
                    jiwa ini haruslah tertanam dan bertumbuh didalam sebuah wadah (Komunitas). HOME merupakan 
                    sebuah wadah dimana Sahabat Jiwa dapat melakukan pembapaan dan pemuridan untuk mengajarkan
                    mereka agar melakukan segala sesuatu yang telah diperintahkan Kristus kepada kita.
                </p>
                <div class="flex bg-[#f0f0f0] hover:bg-[#434242] hover:text-[#FFFFFF] text-[#000000] w-[180px] h-[50px] items-center justify-center">
                    <a href="/login" class="font-medium text-[18px]">
                        Join HOME
                    </a>
                </div>
            </div>
        </div>
        @endguest

        @auth
        <h1>Halo, ini dah login!</h1>
        @if(auth()->user()->cg_id != NULL)
            <h1>Anda sudah terdaftar di CG</h1>
            @php
                $cg = App\Models\CgHead::find(auth()->user()->cg_id);
            @endphp
            <div>
                <h1>CG Name: {{ $cg -> name }}</h1>
                <h1>CG Phone: {{ $cg -> phone }}</h1>
                <h1>CG Date: {{ $cg -> date }}</h1>
                <h1>CG Time: {{ $cg -> time }}</h1>
                <h1>CG Location: {{ $cg -> location }}</h1>

            </div>
            
        @else
            <h1>Anda belum terdaftar di CG</h1>

            <div class="overflow-x-auto w-full mb-5">
                <table class="table w-full">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>
                        <label>
                          <input type="checkbox" class="checkbox" />
                        </label>
                      </th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Location</th>
                      <th>Choose</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    @foreach($cgs as $cg)
                    <tr>
                      <th>
                        <label>
                          <input type="checkbox" class="checkbox" />
                        </label>
                      </th>
                      <td>
                        <div class="flex items-center space-x-3">
                          <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                              <img src="https://gpdi-hebron.com/website/images/banner/gpdi-hebron-gading-serpong-41181523042016.png" alt="" />
                            </div>
                          </div>
                          <div>
                            <div class="font-bold">{{ $cg -> name }}</div>
                            <div class="text-sm opacity-50">United States</div>
                          </div>
                        </div>
                      </td>
                      <td>
                        {{ $cg -> email }}
                        <br/>
                        <span class="badge badge-ghost badge-sm">
                            hai
                        </span>
                      </td>
                      <th>
                        {{ $cg -> date }}
                      </th>
                      <th>{{ $cg -> time }}</th>
                      <th>{{ $cg -> location }}</th>
                      <th>
                        <a href="/discipleship/{{ $cg->id }}">
                            <button class="btn btn-ghost btn-xs">Select</button>
                        </a>
                   
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                  <!-- foot -->
                  <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Choose</th>
                    </tr>
                  </tfoot>
                  
                </table>
              </div>
        @endif
        {{-- content --}}
        {{-- content --}}
        @endauth
    </div>
    <x-footer />
</body>
</html>