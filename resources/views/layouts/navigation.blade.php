<!DOCTYPE html>
<html>

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
            <div class="flex items-center space-x-8"> <a href="{{ route('dashboard') }}"
                    class="text-2xl font-semibold text-blue-800">Shinedu</a>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="font-semibold text-gray-700 hover:text-blue-800">Dashboard</a>
                    <a href="#" class="font-semibold text-gray-700 hover:text-blue-800">Materi</a>
                    <a href="#" class="font-semibold text-gray-700 hover:text-blue-800">Penghargaan</a>
                </div>

            </div>



            <div class="flex space-x-3 items-center">

                <a href="{{ route('profile.edit') }}"
                    class="text-white-800 font-semibold px-4 py-2 rounded-md hover:bg-gray-200 transition">
                    Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="text-center bg-red-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-red-800 transition">
                        Logout
                    </a>
                </form>
            </div>

        </div>
    </nav>
</body>

</html>