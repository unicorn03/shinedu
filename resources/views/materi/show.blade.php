<x-app-layout>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <a href="{{ route('materi.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </a>
        
        <h2 class="font-bold text-4xl text-gray-900 mt-2">
            {{ $materi->judul }}
        </h2>
        
        <p class="text-gray-600 text-lg mt-1">
            {{ $materi->deskripsi }}
        </p>
    </div>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-2xl mb-4">Materi</h3>
                    
                    <div class="space-y-2"> @foreach ($materi->subBabs->sortBy('urutan') as $subBab)
                            <a href="{{ route('subbab.show', [$materi, $subBab]) }}" 
                               class="block p-4 rounded-md border border-gray-200 hover:bg-gray-100 transition-colors">
                                <span class="font-medium text-gray-800">{{ $subBab->urutan }}. {{ $subBab->judul }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-2xl mb-4">Kuis</h3>
                    
                    <div class="space-y-2">
                        @foreach ($materi->kuis as $itemKuis)
                            <a href="{{ route('kuis.show', [$materi, $itemKuis]) }}" 
                               class="flex justify-between items-center p-4 rounded-md border border-gray-200 hover:bg-gray-100 transition-colors">
                                
                                <span class="font-medium text-gray-800">{{ $itemKuis->judul }}</span>
                                
                                <span class="text-blue-600 font-semibold text-sm">
                                    Mulai Kuis &rarr;
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div> </div>
    </div>
</x-app-layout>