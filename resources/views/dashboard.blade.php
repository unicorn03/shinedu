<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-4 p-8">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <div class="grid grid-cols-4 gap-4 mb-8">
            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Kuis Dikerjakan</h3>
                <p class="text-2xl font-bold">{{ $kuisDikerjakan }}</p>
            </div>

            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Materi Diselesaikan</h3>
                <p class="text-2xl font-bold">{{ $materiSelesai }}</p>
            </div>

            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Rata-rata Skor</h3>
                <p class="text-2xl font-bold">{{ $rataSkor }}</p>
            </div>

            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Topik Dipelajari</h3>
                <p class="text-2xl font-bold">{{ $topikDipelajari }}</p>
            </div>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h3 class="font-semibold mb-4">Log Aktivitas</h3>

            @forelse ($activityLogs as $log)
                <div class="border rounded p-3 mb-2">
                    <p><strong>{{ ucfirst($log->tipe) }}:</strong> {{ $log->nama }}</p>

                    @if ($log->tipe === 'kuis')
                        <p><strong>Skor:</strong> {{ $log->skor }}</p>
                    @endif

                    <p class="text-gray-500 text-sm">{{ $log->tanggal }}</p>
                </div>
            @empty
                <p class="text-gray-500">Belum ada aktivitas.</p>
            @endforelse
        </div>

</x-app-layout>
