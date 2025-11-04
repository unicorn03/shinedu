<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-5xl text-gray-900">{{ $kuis->judul }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('kuis.submit', $kuis->kuis_id) }}">
                @csrf
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    @foreach ($kuis->pertanyaan as $soal)
                        <div class="mb-8">
                            <p class="font-semibold text-lg">{{ $loop->iteration }}. {{ $soal->pertanyaan }}</p>
                            <div class="mt-2 space-y-2">
                                <label class="block"><input type="radio" name="pertanyaan_{{ $soal->pertanyaan_id }}" value="Jawaban A"> Jawaban A</label>
                                <label class="block"><input type="radio" name="pertanyaan_{{ $soal->pertanyaan_id }}" value="{{ $soal->jawaban_benar }}"> Jawaban Benar</label>
                            </div>
                        </div>
                    @endforeach
                    
                    <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg font-bold">
                        Selesai Kuis
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>