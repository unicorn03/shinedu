<x-app-layout>
    <h2 class="text-[45px] max-w-7xl mx-auto px-8 py-8 flex items-center justify-between font-bold">Materi Pembelajaran</h2>

    <div class="pb-[50px]">
        <div class="max-w-7xl mx-auto sm:px-[15px] lg:py-[15px] bg-white px-10 rounded-xl">
            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid gap-[15px]">

                @forelse ($daftarMateri as $materi)
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        
                        <img src="{{ asset($materi->thumbnail) }}" alt="Thumbnail {{ $materi->judul }}" class="w-full h-48 object-cover">

                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="font-bold text-xl text-gray-900">{{ $materi->judul }}</h3>
                            <p class="text-gray-600 mt-2 text-sm">{{ $materi->deskripsi }}</p>

                            <div class="flex-grow"></div>

                            <a href="{{ route('materi.show', $materi->slug) }}" class="inline-block mt-4 text-blue-600 hover:text-blue-800 font-semibold text-sm">
                                Lihat Materi & Kuis &rarr;
                            </a>
                        </div>
                    </div>
                
                @empty
                    <div class="col-span-3 bg-white p-6 rounded-lg shadow-md text-center text-gray-500">
                        <p>Belum ada materi yang tersedia.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>