<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-[#FFFFFF] text-[#222222] md:mx-auto">
        {{-- navbar --}}
        <x-navbar />

        {{-- content --}}
        <div class="flex justify-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.099070763325!2d106.62052151471683!3d-6.250675195475532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc76ad63a58b%3A0xb11a5c84cfc0f8db!2sGPDI%20Hebron%20Gading%20Serpong!5e0!3m2!1sid!2sid!4v1670507822206!5m2!1sid!2sid" class="w-full md:w-3/4 m-3" height="500" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       
        {{-- Footer --}}
        <x-footer />
    </div>
</body>
</html>