<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Shinedu') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <style>
            .swal2-container {
                z-index: 999999 !important;
            }

            .swal2-popup {
                font-size: 1.2rem !important;
                border-radius: 16px !important;
                padding: 25px 32px !important;
                box-shadow: 0 10px 40px rgba(0,0,0,0.18) !important;
            }

            /* Jetstream override fix */
            .swal2-popup[role="alert"] {
                all: initial !important;
                font-family: inherit !important;
                display: block !important;
                background: #fff !important;
                padding: 32px !important;
                border-radius: 20px !important;
                text-align: center !important;
                box-shadow: 0 12px 45px rgba(0, 0, 0, 0.15) !important;
                width: auto !important;
            }

            /* SweetAlert text reset */
            .swal2-title,
            .swal2-html-container {
                all: unset !important;
                display: block !important;
                font-family: inherit !important;
                color: #333 !important;
                margin-bottom: 10px !important;
            }

            .swal2-confirm {
                all: unset !important;
                padding: 10px 20px !important;
                background: #28a745 !important;
                color: white !important;
                border-radius: 10px !important;
                cursor: pointer !important;
                font-weight: bold !important;
                font-size: 1rem !important;
            }
        </style>
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

        @if(session('new_awards'))
        <script>
            Swal.fire({
                title: "🎉 Achievement Baru!",
                html: `
                    <div style="font-size: 20px; font-weight:700; margin-bottom:10px;">
                        Materi berhasil diselesaikan! 🎖️
                    </div>
                    <div style="font-size:16px;">
                        Lanjutkan belajar untuk membuka penghargaan lainnya 🔥
                    </div>
                `,
                showConfirmButton: true,
                confirmButtonText: "Mantap!",
                background: "#fff",
            });

            setTimeout(() => {
                confetti({ particleCount: 150, spread: 70, origin: { x: 1, y: 0 } });
                confetti({ particleCount: 150, spread: 70, origin: { x: 0, y: 0 } });
                confetti({ particleCount: 200, spread: 100, origin: { x: 0.5, y: 0 } });
            }, 300);
        </script>
        @endif

        @stack('scripts')
    </body>
</html>
