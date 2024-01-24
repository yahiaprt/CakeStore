<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

<style>
    .bg-brown {
    background-color: brown;
}
</style>

        
        <style>
    #myDiv {
      background-image: url('assets/img/ORFEYW0.jpg');
      background-size: cover;
      background-position: center;
      /* Add more styles or adjust as needed */
    }
  </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" id="myDiv">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  ">
            <div>
                <a href="/">
                <img src="assets/images/logo/logo.png" alt="Your Logo" class="w-120 h-20 fill-current text-gray-500" >
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-brown dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg" style="background-color: #413e3f;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
