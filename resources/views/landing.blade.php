@section('content')
<section class="text-center py-20 bg-blue-800 text-white rounded-xl">
    <h1 class="text-4xl font-bold mb-2">Shinedu</h1>
    <p class="text-lg mb-4">Partner belajar terbaikmu!</p>
    <a href="{{ route('dashboard') }}" class="bg-white text-blue-800 px-4 py-2 rounded shadow">Dashboard</a>
</section>

<section class="py-16 text-center">
    <h2 class="text-2xl font-bold mb-6">Mengapa memilih kami?</h2>
    <div class="grid grid-cols-3 gap-4 max-w-4xl mx-auto">
        <div class="p-4 bg-white shadow rounded">Fleksibel</div>
        <div class="p-4 bg-white shadow rounded">Interaktif</div>
        <div class="p-4 bg-white shadow rounded">Dashboard Pemantauan</div>
    </div>
</section>

<section class="py-16 bg-white text-center">
    <h2 class="text-2xl font-bold mb-4">Statistik Pengguna</h2>
    <div class="flex justify-center space-x-10">
        <div>5000+ Pengguna aktif</div>
        <div>12000+ Lencana diterbitkan</div>
        <div>24/7 Layanan</div>
    </div>
</section>
@endsection
