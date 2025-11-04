<x-app-layout>
    <h2 class="font-semibold text-5xl text-gray-900">{{ $materi->judul }}</h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <h3 class="font-bold text-2xl mb-4">Daftar Bab</h3>
                @foreach ($materi->subBabs->sortBy('urutan') as $subBab)
                    <a href="{{ route('subbab.show', $subBab->subbab_id) }}" class="block p-4 border-b hover:bg-gray-100">
                        {{ $subBab->urutan }}. {{ $subBab->judul }}
                    </a>
                @endforeach
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="font-bold text-2xl mb-4">Kuis</h3>
                @foreach ($materi->kuis as $itemKuis)
                    <a href="{{ route('kuis.show', $itemKuis->kuis_id) }}" class="block p-4 border-b hover:bg-gray-100">
                        {{ $itemKuis->judul }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>