<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-5xl text-gray-900">{{ $subBab->judul }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="prose max-w-none">
                     {!! $subBab->isi !!}
                </div>
                
                <a href="#" class="mt-6 inline-block bg-green-500 text-white py-2 px-4 rounded">
                    Tandai Selesai
                </a>
            </div>
        </div>
    </div>
</x-app-layout>