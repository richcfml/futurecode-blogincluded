<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <script src="https://kit.fontawesome.com/06d1db45b2.js" crossorigin="anonymous"></script>

</head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] ">
        @include('components.header')

        <div class="mb-20">
            {{ $slot }}
        </div>

        @include('components.footer')
    </body>
</html>
