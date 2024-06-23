<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Grupo 3GF</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <svg width="150px" height="150px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M969.536 402.944a22.4 22.4 0 0 0-22.336 22.08V273.088a22.4 22.4 0 0 0 44.736-0.128h0.064V160a22.4 22.4 0 0 0-22.4-22.4H54.4a22.528 22.528 0 0 0-22.4 22.4v604.608c0 12.288 10.112 22.4 22.4 22.4h915.2a22.4 22.4 0 0 0 22.4-22.4V425.344a22.4 22.4 0 0 0-22.464-22.4z" fill="" /><path d="M969.6 328m-22.4 0a22.4 22.4 0 1 0 44.8 0 22.4 22.4 0 1 0-44.8 0Z" fill="" /><path d="M77.44 631.168a0.64 0.64 0 0 1-0.64-0.64V189.376a0.64 0.64 0 0 1 0.64-0.64h869.184c0.256 0 0.64 0.256 0.64 0.64v441.152c0 0.32-0.384 0.64-0.64 0.64H77.44z" fill="#545454" /><path d="M77.44 740.032a0.64 0.64 0 0 1-0.64-0.64v-69.12a0.64 0.64 0 0 1 0.64-0.64h869.184c0.256 0 0.64 0.32 0.64 0.64v69.12c0 0.32-0.384 0.64-0.64 0.64H77.44z" fill="#E0E0E0" /><path d="M76.8 631.168h870.464v44.8H76.8zM637.12 875.776H386.816l19.264-88.768h211.904z" fill="" /><path d="M431.68 875.776l19.2-88.768h122.368l19.136 88.768z" fill="#E0E0E0" /><path d="M721.984 888a16 16 0 0 1-16 16H318.016a16 16 0 0 1 0-32h388.032a16 16 0 0 1 15.936 16z" fill="" /><path d="M512 706.688m-18.176 0a18.176 18.176 0 1 0 36.352 0 18.176 18.176 0 1 0-36.352 0Z" fill="" /><path d="M366.272 445.76a22.464 22.464 0 0 1-31.68 0 22.464 22.464 0 0 1 0-31.68l134.272-134.272a22.464 22.464 0 0 1 31.68 0 22.464 22.464 0 0 1 0 31.68L366.272 445.76z" fill="#FFFFFF" /><path d="M407.424 540.16a22.464 22.464 0 0 1-31.68 0 22.528 22.528 0 0 1 0-31.744l67.328-67.264a22.464 22.464 0 0 1 31.68 0 22.464 22.464 0 0 1 0 31.68L407.424 540.16z" fill="#FFFFFF" /></svg>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
