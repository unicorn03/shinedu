<x-app-layout>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-50 py-8 px-4">
    <div class="max-w-7xl mx-auto">

        
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                Penghargaan Saya
            </h1>
            <p class="text-gray-600 text-lg">
                Kumpulkan penghargaan dengan menyelesaikan materi dan kuis
            </p>
        </div>

        
        <div id="stats-container" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12"></div>

        
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div id="awards-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="col-span-full flex justify-center items-center py-12">
                    <div class="text-center">
                        <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-blue-600 mx-auto mb-4"></div>
                        <p class="text-gray-600">Memuat penghargaan...</p>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="mt-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl shadow-xl p-8 text-white text-center">
            <h2 class="text-2xl font-bold mb-2">Terus Semangat Belajar! 🚀</h2>
            <p class="text-blue-100">
                Setiap pencapaian kecil adalah langkah menuju kesuksesan besar
            </p>
        </div>
    </div>
</div>

<div id="award-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-2xl p-8 max-w-md mx-4 transform transition-all scale-95 opacity-0" id="modal-content">
        <div class="text-center">
            <div class="mb-4 text-6xl">🎉</div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat!</h2>
            <p class="text-gray-600 mb-4" id="modal-message"></p>
            <div id="new-awards-list" class="space-y-3 mb-6"></div>
            <button onclick="closeAwardModal()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                Tutup
            </button>
        </div>
    </div>
</div>


@push('scripts')
<script>

let awardsData = [];

async function fetchAwards() {
    try {
        const response = await fetch('/awards/data');

        if (!response.ok) throw new Error('Gagal mengambil data awards');

        const data = await response.json();

        console.log("DATA AWARDS TERAMBIL:", data);

        if (data.success) {
            awardsData = data.awards;
            displayStats(data.stats);
            displayAwards(data.awards);
        }
    } catch (err) {
        console.error(err);
        showError();
    }
}

// tampilin stats
function displayStats(stats) {
    const container = document.getElementById('stats-container');

    const progress = stats.total > 0
        ? Math.round((stats.earned / stats.total) * 100)
        : 0;

    container.innerHTML = `
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500">
            <p class="text-gray-500 text-sm mb-1">Total Penghargaan</p>
            <p class="text-3xl font-bold text-gray-800">${stats.total}</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
            <p class="text-gray-500 text-sm mb-1">Telah Diperoleh</p>
            <p class="text-3xl font-bold text-gray-800">${stats.earned}</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500">
            <p class="text-gray-500 text-sm mb-1">Progress</p>
            <p class="text-3xl font-bold text-gray-800">${progress}%</p>
        </div>
    `;
}


function displayAwards(awards) {
    const grid = document.getElementById('awards-grid');

    if (awards.length === 0) {
        grid.innerHTML = `
            <div class="col-span-full text-center py-12 text-gray-500">
                Belum ada penghargaan.
            </div>
        `;
        return;
    }

    grid.innerHTML = awards.map(award => createAwardCard(award)).join('');
}

function createAwardCard(award) {
    const isEarned = award.earned;
    const percent = award.total ? (award.progress / award.total) * 100 : 0;

    return `
        <div class="relative rounded-xl p-6 ${isEarned 
            ? 'bg-yellow-50 border-yellow-300 border-2 shadow-lg' 
            : 'bg-gray-100 border-2 border-gray-300 opacity-75'}">

            ${isEarned ? `
                <div class="absolute -top-3 -right-3 bg-green-500 text-white rounded-full p-2">
                    ✔️
                </div>` : ''}

            <h3 class="font-bold text-lg text-gray-800 text-center">${award.nama_penghargaan}</h3>
            <p class="text-sm text-gray-500 text-center mb-4">${award.deskripsi}</p>

            ${!isEarned ? `
                <div>
                    <div class="text-xs text-gray-500 mb-1">${award.progress}/${award.total}</div>
                    <div class="w-full bg-gray-300 h-2 rounded-full">
                        <div class="bg-blue-500 h-2 rounded-full" style="width:${percent}%"></div>
                    </div>
                </div>
            ` : ''}
        </div>
    `;
}

console.log("SCRIPT PENGHARGAAN JALAN");

// fetch data buat award 
fetchAwards();
</script>
@endpush

</x-app-layout>
