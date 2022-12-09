<?php
// function get_CURL($url){
//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     $result = curl_exec($curl);
//     curl_close($curl);

//     return json_decode($result, true);
// }

// $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyBwKOhBps0NhNT6pAAwP2m5XdPgQUawcYo&part=snippet,statistics&id=UC0yIXtTIsphT_ruwKaNK2eg');

// profile
// $ytPic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
// $ytSubs = $result['items'][0]['statistics']['subscriberCount'];
// $ytTitle = $result['items'][0]['snippet']['title'];

// video
// $urlVid = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC0yIXtTIsphT_ruwKaNK2eg&maxResult=1&order=date&key=AIzaSyBwKOhBps0NhNT6pAAwP2m5XdPgQUawcYo";
// $result = get_CURL($urlVid);
// $ytVid = $result['items'][0]['id']['videoId'];

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')

    <style>
        .button-81 {
  background-color: #fff;
  border: 0 solid #e2e8f0;
  border-radius: 1.5rem;
  box-sizing: border-box;
  color: #0d172a;
  cursor: pointer;
  display: inline-block;
  font-family: "Basier circle",-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: 1.1rem;
  font-weight: 600;
  line-height: 1;
  padding: 1rem 1.6rem;
  text-align: center;
  text-decoration: none #0d172a solid;
  text-decoration-thickness: auto;
  transition: all .1s cubic-bezier(.4, 0, .2, 1);
  box-shadow: 0px 1px 2px rgba(166, 175, 195, 0.25);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-81:hover {
  background-color: #1e293b;
  color: #fff;
}

@media (min-width: 768px) {
  .button-81 {
    font-size: 1.125rem;
    padding: 1rem 2rem;
  }
}

    </style>
</head>
<body>
    <div class="bg-[#FFFFFF] text-[#222222] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- content --}}
        <div >
            <div class="grid md:flex gap-4">
                <div>
                    <div class="flex justify-center md:p-4 w-80">
                        <div class="p-8 bg-white rounded shadow-md">
                            <a href="https://www.youtube.com/@gpdihebrongadingserpong5298">
                            <img class="rounded-full" src="{{ asset('images/logoyt.jpg') }}" alt="">
                                <h2 class="text-2xl font-bold text-gray-800">GPdI Hebron Gading Serpong</h2>
                            </a>
                            {{-- <div class="g-ytsubscribe" data-channelid="UC0yIXtTIsphT_ruwKaNK2eg" data-layout="default" data-count="hidden"></div> --}}
                            <div class="g-ytsubscribe" data-channelid="UC0yIXtTIsphT_ruwKaNK2eg" data-layout="full" data-count="default"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <iframe class="w-full md:w-[560px] h-[315px] mt-5" src="https://www.youtube.com/embed/luag5yhhiSg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/luag5yhhiSg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                        </div>
                    </div>
                </div> 
            </div>
        </div>


        <div class="mt-5">
            <a href="https://www.instagram.com/gpdigadingserpong/?hl=id">
                <img src="{{ asset('images/ig.png') }}" alt="">
                <div class="justify-center">
                    <button class="button-81" role="button">Go to Instagram</button>
                </div>
            </a>
        </div>
        





        {{-- Footer --}}
        <x-footer />
    </div>
    <script src="https://apis.google.com/js/platform.js"></script>
</body>
</html>