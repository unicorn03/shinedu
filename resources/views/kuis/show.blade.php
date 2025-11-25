<x-app-layout>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <a href="{{ route('materi.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium inline-flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('kuis.submit', $kuis->slug) }}">
                @csrf
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-6 text-3xl font-bold text-gray-800">{{ $kuis->judul }}</div>
                    <div class="w-full h-2 bg-gradient-to-r from-blue-500 to-purple-500 my-6 rounded-full"></div>
                    @foreach ($kuis->pertanyaan as $soal)
                        <div class="mt-8 mb-8">
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