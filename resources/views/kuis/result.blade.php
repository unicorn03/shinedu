<x-app-layout>
    <div class="mt-12 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h3 class="text-2xl font-bold">Skor Anda:</h3>
                <p class="text-8xl font-bold my-4">{{ $hasil->skor }}</p>
                <a href="{{ route('materi.index') }}" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded">
                    Kembali ke Materi
                </a>
            </div>
        </div>
    </div>
</x-app-layout>