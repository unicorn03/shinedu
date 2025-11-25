<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <div class="flex items-center space-x-8">
            <a href="{{ route('landing') }}" class="text-2xl font-semibold text-blue-800">Shinedu</a>

            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="font-semibold text-gray-700 hover:text-blue-800">Dashboard</a>
                <a href="{{ route('materi.index') }}" class="font-semibold text-gray-700 hover:text-blue-800">Materi</a>
                <a href="{{ route('awards.show') }}"
                    class="font-semibold text-gray-700 hover:text-blue-800">Penghargaan</a>
            </div>
        </div>

        @if (Route::has('login'))
            @auth
                <div class="flex space-x-3 items-center">
                    <a href="{{ route('profile.edit') }}" class="font-semibold px-4 py-2 rounded-md hover:bg-gray-200 hover:text-blue-600 transition">
                        {{ Auth::user()->username }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="bg-red-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-red-800 transition">
                            Logout
                        </a>
                    </form>
                </div>
            @else
                    <div class="flex space-x-3">
                        <a href="{{ route('login') }}"
                            class="bg-blue-700 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-800 transition">Login</a>
                        <a href="{{ route('register') }}"
                            class="bg-gray-100 text-blue-800 font-semibold px-4 py-2 rounded-md hover:bg-gray-200 transition">Sign
                            Up</a>
                    </div>
            @endauth
        @endif

    </div>
</nav>