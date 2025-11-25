<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Shinedu') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans text-gray-900 antialiased min-h-screen flex flex-col bg-gray-100">
        
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <a href="{{ route('landing') }}" class="text-2xl font-semibold text-blue-800">Shinedu</a>
    
                <div class="flex space-x-3">
                    <a href="{{ route('login') }}" class="bg-blue-700 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-800 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-gray-100 text-blue-800 font-semibold px-4 py-2 rounded-md hover:bg-gray-200 transition">Sign Up</a>
                </div>

            </div>
        </nav>

        <div class="flex-grow flex flex-col justify-center items-center p-6">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        
    </body>
</html>