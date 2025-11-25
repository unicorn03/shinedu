<x-app-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #5B7FC7 0%, #7B9FE8 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            margin: 0 auto 1.5rem;
        }

        .btn-primary {
            background: white;
            color: #5B7FC7;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background: #EF4444;
            color: white;
            padding: 10px 28px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: #DC2626;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3);
        }

        .cta-section {
            background: linear-gradient(135deg, #7B9FE8 0%, #5B7FC7 100%);
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20 lg:py-32 relative overflow-hidden">
        <div class="absolute top-10 right-10 w-32 h-32 bg-white opacity-10 rounded-full animate-float"></div>
        <div class="absolute bottom-10 left-10 w-24 h-24 bg-white opacity-10 rounded-full animate-float"
            style="animation-delay: 1s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Shinedu
                </h1>
                <p class="text-xl sm:text-2xl mb-8 text-blue-100 max-w-2xl mx-auto">
                    Partner belajar terbaikmu!
                </p>
                <a href="{{ route('login') }}" class="btn-primary text-lg">
                    Dashboard
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    Mengapa memilih kami?
                </h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center card-hover p-8 rounded-xl bg-gray-50">
                    <div class="feature-icon bg-blue-100 text-blue-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fleksibel</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Belajar kapan saja dan dimana saja dengan materi yang dapat diakses 24/7 sesuai jadwal Anda
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center card-hover p-8 rounded-xl bg-gray-50">
                    <div class="feature-icon bg-green-100 text-green-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Interaktif</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pengalaman belajar yang menyenangkan dengan kuis interaktif dan materi yang mudah dipahami
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center card-hover p-8 rounded-xl bg-gray-50">
                    <div class="feature-icon bg-purple-100 text-purple-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Dashboard Pemantauan</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pantau progres belajar Anda dengan dashboard yang informatif dan mudah digunakan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    Statistik Pengguna
                </h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="stat-card text-center">
                    <div class="text-5xl font-bold text-blue-600 mb-3">5000+</div>
                    <p class="text-gray-600 text-lg font-medium">Pengguna aktif di seluruh Indonesia</p>
                </div>

                <div class="stat-card text-center">
                    <div class="text-5xl font-bold text-green-600 mb-3">12.000+</div>
                    <p class="text-gray-600 text-lg font-medium">Latihan efektif</p>
                </div>

                <div class="stat-card text-center">
                    <div class="text-5xl font-bold text-purple-600 mb-3">24/7</div>
                    <p class="text-gray-600 text-lg font-medium">Konsultasi dengan admin</p>
                </div>
            </div>
        </div>
    </section>

    @if (Route::has('login'))
        @auth
            <section class="cta-section text-white py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                        Mulai belajar hari ini!
                    </h2>
                    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                        Daftar sekarang dan dapatkan akses ke semua materi secara gratis
                    </p>
                    <a href="{{ route('materi.index') }}" class="btn-primary text-lg inline-flex items-center gap-2">
                        Mulai Belajar
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6">
                            </path>
                        </svg>
                    </a>
                </div>
            </section>
        @else
            <section class="cta-section text-white py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                        Mulai belajar hari ini!
                    </h2>
                    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                        Daftar sekarang dan dapatkan akses ke semua materi secara gratis
                    </p>
                    <a href="{{ route('register') }}" class="btn-primary text-lg inline-flex items-center gap-2">
                        Daftar Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6">
                            </path>
                        </svg>
                    </a>
                </div>
            </section>
        @endauth
    @endif
    </div>
    </section>

    <footer class="bg-gray-900 text-gray-300">
        <div class="border-t border-gray-800 text-center">
            <p class="text-gray-400 py-8">© 2024 Shinedu. All rights reserved.</p>
        </div>
    </footer>
</x-app-layout>