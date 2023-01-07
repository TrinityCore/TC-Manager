{{--<!doctype html>--}}
{{--<html class="dark">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--@yield('content')--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Night Admin Template: Tailwind Toolbox</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
</head>
<body class="bg-black-alt font-sans leading-normal tracking-normal">

@include('partials.navbar')

<div class="container w-full mx-auto pt-20 ">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal h-full">
        @yield('content')
    </div>
</div>

@include('partials.footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
