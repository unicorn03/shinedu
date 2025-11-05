<x-app-layout>
        <div class="max-w-7xl mx-auto px-8 py-8">
        <a href="{{ route('materi.index', $subBab->materi_id) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </a>
    </div>

    <div class="py-2">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8"> <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 md:p-10 text-gray-900">

                    <h1 class="text-4xl font-bold mb-4">
                        {!! $subBab->judul !!}
                    </h1>

                    <hr class="my-4">

                    <div class="prose max-w-none">
                        {!! $subBab->isi !!}
                    </div>

                    <div class="mt-10 pt-6 border-t border-gray-200 text-center">
                        <a href="#" class="inline-block bg-green-500 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-green-600 transition-colors">
                            Tandai Selesai Belajar
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>