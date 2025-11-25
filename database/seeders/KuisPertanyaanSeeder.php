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
        $kuisMatematika = Kuis::where('judul', 'Kuis Penjumlahan')->first();
        $kuisBahasa = Kuis::where('judul', 'Kuis Frasa')->first();
        $kuisGeografi = Kuis::where('judul', 'Kuis Lapisan Bumi')->first();
        $kuisArtificial = Kuis::where('judul', 'Kuis Dasar AI')->first();

        
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

        if ($kuisMatematika) {
            KuisPertanyaan::create([
                'kuis_id' => $kuisMatematika->kuis_id,
                'pertanyaan' => '2 + 3 = ?',
                'jawaban_benar' => '5',
            ]);

            KuisPertanyaan::create([
                'kuis_id' => $kuisMatematika->kuis_id,
                'pertanyaan' => '10 + 5 = ?',
                'jawaban_benar' => '15',
            ]);
        }

        if ($kuisBahasa) {
            KuisPertanyaan::create([
                'kuis_id' => $kuisBahasa->kuis_id,
                'pertanyaan' => 'Apa itu frasa?',
                'jawaban_benar' => 'Frasa adalah gabungan dua kata atau lebih yang bersifat non-predikatif (tidak memiliki subjek dan predikat sekaligus) dan berfungsi sebagai satu kesatuan makna dalam kalimat',
            ]);

            KuisPertanyaan::create([
                'kuis_id' => $kuisBahasa->kuis_id,
                'pertanyaan' => 'Sebutkan contoh frasa!',
                'jawaban_benar' => 'Rumah Besar',
            ]);
        }

        if ($kuisGeografi) {
            KuisPertanyaan::create([
                'kuis_id' => $kuisGeografi->kuis_id,
                'pertanyaan' => 'Ada berapa lapisan utama bumi?',
                'jawaban_benar' => '3',
            ]);

            KuisPertanyaan::create([
                'kuis_id' => $kuisGeografi->kuis_id,
                'pertanyaan' => 'Sebutkan nama lapisan bumi!',
                'jawaban_benar' => 'Kerak, Mantel, Inti',
            ]);
        }

        if ($kuisArtificial) {
            KuisPertanyaan::create([
                'kuis_id' => $kuisArtificial->kuis_id,
                'pertanyaan' => 'Apa kepanjangan dari AI?',
                'jawaban_benar' => 'Artificial Intelligence',
            ]);

            KuisPertanyaan::create([
                'kuis_id' => $kuisArtificial->kuis_id,
                'pertanyaan' => 'Sebutkan salah satu aplikasi dari AI!',
                'jawaban_benar' => 'Chatbot',
            ]);
        }
    }
}
