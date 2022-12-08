<?php
function get_CURL($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyDh2x0dtok5-dKQxQHk0bINlCLMW9z7qXQ&part=snippet,statistics&id=UC0yIXtTIsphT_ruwKaNK2eg');

// profile
$ytPic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$ytSubs = $result['items'][0]['statistics']['subscriberCount'];
$ytTitle = $result['items'][0]['snippet']['title'];

// video
$urlVid = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC0yIXtTIsphT_ruwKaNK2eg&maxResult=1&order=date&key=AIzaSyDh2x0dtok5-dKQxQHk0bINlCLMW9z7qXQ";
$result = get_CURL($urlVid);
$ytVid = $result['items'][0]['id']['videoId'];

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-[#FFFFFF] text-[#222222] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- content --}}
        <div >
            <h1>YOUTUBE</h1>
            <div class="flex gap-4">
                <div>
                    <div class="p-4 w-80">
                        <div class="p-8 bg-white rounded shadow-md">
                            <a href="https://www.youtube.com/@gpdihebrongadingserpong5298">
                            <img class="rounded-full" src="<?= $ytPic; ?>" alt="">
                                <h2 class="text-2xl font-bold text-gray-800"><?= $ytTitle; ?></h2>
                            </a>
                            <p class="text-gray-700"><?= $ytSubs; ?> Subscribers</p>
                            <div class="g-ytsubscribe" data-channelid="UC0yIXtTIsphT_ruwKaNK2eg" data-layout="default" data-count="hidden"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div>
                            <iframe width="854" height="480" src="https://www.youtube.com/embed/<?= $ytVid; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <x-footer />
    </div>
    <script src="https://apis.google.com/js/platform.js"></script>
</body>
</html>