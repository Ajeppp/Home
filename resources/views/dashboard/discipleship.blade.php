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
  <div class="text-[#222222] flex flex-col md:flex-row h-max md:px-52 items-center mt-32 md:justify-between gap-20 pb-32">
      <div class="flex flex-col items-center md:items-start w-5/6 md:w-2/5">
          <img src="{{ asset('images/logohebron.png') }}" alt="logo" class="w-[150px] bg-no-repeat object-cover md:-ml-12">
          <h1 class="font-bold text-[35px]">HOME</h1>
          <h1 class="font-bold text-[35px]">GPdI Hebron</h1>
      </div>
      <div class="flex flex-col w-5/6 md:w-3/5 gap-3">
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
  @if(auth()->user()->cg_id != NULL)
      @php
          $cg = App\Models\CgHead::find(auth()->user()->cg_id);
      @endphp
      <div class="overflow-x-auto w-full">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th class="bg-[#F0F0F0]">
                <label>
                  <input type="checkbox" class="checkbox border-[#312626] border-2" />
                </label>
              </th>
              <th class="bg-[#F0F0F0] text-black">Name</th>
              <th class="bg-[#F0F0F0] text-black">Email</th>
              <th class="bg-[#F0F0F0] text-black">Date</th>
              <th class="bg-[#F0F0F0] text-black">Time</th>
              <th class="bg-[#F0F0F0] text-black">Location</th>
              <th class="bg-[#F0F0F0] text-black">Contact</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            <tr>
              <th class="bg-[#FFFFFF] text-[#312626]">
                <label>
                  <input type="checkbox" class="checkbox border-[#312626] border-2" />
                </label>
              </th>
              <td class="bg-[#FFFFFF] text-[#312626]">
                <div class="flex items-center space-x-3">
                  <div class="avatar">
                    <div class="mask mask-squircle w-12 h-12">
                      <img src="https://gpdi-hebron.com/website/images/banner/gpdi-hebron-gading-serpong-41181523042016.png" alt="" />
                    </div>
                  </div>
                  <div>
                    <div class="font-bold">{{ $cg -> name }}</div>
                  </div>
                </div>
              </td>
              <td class="bg-[#FFFFFF] text-[#312626]">
                {{ $cg -> email }}
                <br/>
                <span class="badge badge-ghost badge-sm border-[#F0F0F0] bg-[#F0F0F0] text-[#312626]">
                    {{ $cg -> id }}
                </span>
              </td>
              <th class="bg-[#FFFFFF] text-[#312626]">
                {{ $cg -> date }}
              </th>
              <th class="bg-[#FFFFFF] text-[#312626]">{{ $cg -> time }}</th>
              <th class="bg-[#FFFFFF] text-[#312626]">{{ $cg -> location }}</th>
              <th class="bg-[#FFFFFF] text-[#312626]">
                <a href="https://wa.me/{{ $cg->phone }}">
                  Click to chat!    
                </a>
              </th>
            </tr>
          </tbody>
          <!-- foot -->
          <tfoot>
            <tr>
              <th class="bg-[#F0F0F0] text-black"></th>
              <th class="bg-[#F0F0F0] text-black">Name</th>
              <th class="bg-[#F0F0F0] text-black">Email</th>
              <th class="bg-[#F0F0F0] text-black">Date</th>
              <th class="bg-[#F0F0F0] text-black">Time</th>
              <th class="bg-[#F0F0F0] text-black">Location</th>
              <th class="bg-[#F0F0F0] text-black">Contact</th>
            </tr>
          </tfoot>
        </table>
      </div>
  @else
      <div class="overflow-x-auto w-full">
          <table class="table w-full">
            <!-- head -->
            <thead >
              <tr >
                <th class="bg-[#F0F0F0]">
                  <label>
                    <input type="checkbox" class="checkbox border-[#312626] border-2" />
                  </label>
                </th>
                <th class="bg-[#F0F0F0] text-black">Name</th>
                <th class="bg-[#F0F0F0] text-black">Email</th>
                <th class="bg-[#F0F0F0] text-black">Date</th>
                <th class="bg-[#F0F0F0] text-black">Time</th>
                <th class="bg-[#F0F0F0] text-black">Location</th>
                <th class="bg-[#F0F0F0] text-black">Choose</th>
              </tr>
            </thead>
            <tbody>
              <!-- row 1 -->
              @foreach($cgs as $cg)
              <tr>
                <th class="bg-[#FFFFFF]">
                  <label>
                    <input type="checkbox" class="checkbox border-[#312626] border-2" />
                  </label>
                </th>
                <td class="bg-[#FFFFFF] text-[#312626]">
                  <div class="flex items-center space-x-3">
                    <div class="avatar">
                      <div class="mask mask-squircle w-12 h-12">
                        <img src="https://gpdi-hebron.com/website/images/banner/gpdi-hebron-gading-serpong-41181523042016.png" alt="" />
                      </div>
                    </div>
                    <div>
                      <div class="font-bold">{{ $cg -> name }}</div>
                    </div>
                  </div>
                </td>
                <td class="bg-[#FFFFFF] text-[#312626]">
                  {{ $cg -> email }}
                  <br/>
                  <span class="badge badge-ghost badge-sm border-[#F0F0F0] bg-[#F0F0F0] text-[#312626]">
                      {{ $cg -> id }}
                  </span>
                </td>
                <th class="bg-[#FFFFFF] text-[#312626]">
                  {{ $cg -> date }}
                </th>
                <th class="bg-[#FFFFFF] text-[#312626]">{{ $cg -> time }}</th>
                <th class="bg-[#FFFFFF] text-[#312626]">{{ $cg -> location }}</th>
                <th class="bg-[#FFFFFF] text-[#312626]">
                  <a href="/discipleship/{{ $cg->id }}">
                      <button class="btn btn-ghost btn-xs bg-[#F0F0F0]">Select</button>
                  </a>
                </th>
              </tr>
              @endforeach
            </tbody>
            <!-- foot -->
            <tfoot>
              <tr >
                  <th class="bg-[#F0F0F0] text-black"></th>
                  <th class="bg-[#F0F0F0] text-black">Name</th>
                  <th class="bg-[#F0F0F0] text-black">Phone</th>
                  <th class="bg-[#F0F0F0] text-black">Date</th>
                  <th class="bg-[#F0F0F0] text-black">Time</th>
                  <th class="bg-[#F0F0F0] text-black">Location</th>
                  <th class="bg-[#F0F0F0] text-black">Choose</th>
              </tr>
            </tfoot>
            
          </table>
        </div>
  @endif
  @endauth
</div>
<x-footer />
</body>
</html>