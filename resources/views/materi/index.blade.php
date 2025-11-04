<x-app-layout>
    <h2 class="font-semibold text-5xl text-gray-900">Materi Pembelajaran</h2>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($daftarMateri as $materi)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="font-bold text-xl">{{ $materi->judul }}</h3>
                        <p class="text-gray-600">{{ $materi->deskripsi }}</p>
                        <a href="{{ route('materi.show', $materi->materi_id) }}" class="inline-block mt-4 bg-blue-500 text-white py-2 px-4 rounded">
                            Mulai Belajar
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>