<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kuis;
use App\Models\KuisPertanyaan;

class KuisPertanyaanSeeder extends Seeder
{
    public function run(): void
    {
        // Cari kuis dulu
        $kuisSains = Kuis::where('judul', 'Kuis Sains Dasar')->first();
        $kuisMath = Kuis::where('judul', 'Kuis Penjumlahan')->first();

        
        if ($kuisSains) {
            KuisPertanyaan::create([
                'kuis_id' => $kuisSains->kuis_id,
                'pertanyaan' => 'Apa planet terbesar di Tata Surya?',
                'jawaban_benar' => 'Jupiter',
            ]);

            KuisPertanyaan::create([
                'kuis_id' => $kuisSains->kuis_id,
                'pertanyaan' => 'Air mendidih pada suhu berapa derajat Celsius?',
                'jawaban_benar' => '100',
            ]);
        }

        if ($kuisMath) {
            KuisPertanyaan::create([
                'kuis_id' => $kuisMath->kuis_id,
                'pertanyaan' => '2 + 3 = ?',
                'jawaban_benar' => '5',
            ]);

            KuisPertanyaan::create([
                'kuis_id' => $kuisMath->kuis_id,
                'pertanyaan' => '10 + 5 = ?',
                'jawaban_benar' => '15',
            ]);
        }
    }
}
