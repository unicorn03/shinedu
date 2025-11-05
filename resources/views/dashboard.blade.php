<x-app-layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <div class="grid grid-cols-4 gap-4 mb-8">
            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Kuis Dikerjakan</h3>
                <p class="text-2xl font-bold">0</p>
            </div>
            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Materi Diselesaikan</h3>
                <p class="text-2xl font-bold">0</p>
            </div>
            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Rata-rata Skor</h3>
                <p class="text-2xl font-bold">0.00</p>
            </div>
            <div class="bg-white p-4 shadow rounded">
                <h3 class="font-semibold">Topik Dipelajari</h3>
                <p class="text-2xl font-bold">0</p>
            </div>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h3 class="font-semibold mb-4">Log Aktivitas</h3>
            <div class="border rounded p-3 mb-2">
                <p><strong>Kuis:</strong> "Nama Kuis" selesai</p>
                <p><strong>Topik:</strong> "Nama Topik" | <strong>Skor:</strong> 100</p>
                <p class="text-gray-500 text-sm">03 November 2025</p>
            </div>
        </div>
    </div>
</x-app-layout>
