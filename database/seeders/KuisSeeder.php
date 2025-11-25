<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;
use App\Models\Kuis;

class KuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiSains = Materi::where('judul', 'Sains')->first();

        if($materiSains){
            Kuis::create([
                'materi_id' => $materiSains->materi_id,
                'judul' => 'Kuis Sains Dasar',
                'deskripsi' => 'Kuis ini akan menguji kemampuan pemahaman anda tentang Sains dasar',
                'slug' => 'kuis-sains-dasar',
            ]);
        }

        $materiMatematika = Materi::where('judul', 'Matematika')->first();

        if($materiMatematika){
            Kuis::create([
                'materi_id' => $materiMatematika->materi_id,
                'judul' => 'Kuis Penjumlahan',
                'deskripsi' => 'Kuis ini akan menguji kemampuan pemahaman anda tentang Penjumlahan',
                'slug' => 'kuis-penjumlahan',
            ]);
        }

        $materiBahasa = Materi::where('judul', 'Bahasa')->first();

        if($materiBahasa){
            Kuis::create([
                'materi_id' => $materiBahasa->materi_id,
                'judul' => 'Kuis Frasa',
                'deskripsi' => 'Kuis ini akan menguji kemampuan pemahaman anda tentang Frasa',
                'slug' => 'kuis-frasa',
            ]);
        }

        $materiGeografi = Materi::where('judul', 'Geografi')->first();

        if($materiGeografi){
            Kuis::create([
                'materi_id' => $materiGeografi->materi_id,
                'judul' => 'Kuis Lapisan Bumi',
                'deskripsi' => 'Kuis ini akan menguji kemampuan pemahaman anda tentang Lapisan Bumi',
                'slug' => 'kuis-lapisan-bumi',
            ]);
        }

        $materiArtificial = Materi::where('judul', 'Artificial')->first();

        if($materiArtificial){
            Kuis::create([
                'materi_id' => $materiArtificial->materi_id,
                'judul' => 'Kuis Dasar AI',
                'deskripsi' => 'Kuis ini akan menguji kemampuan pemahaman anda tentang dasar-dasar AI',
                'slug' => 'kuis-dasar-ai',
            ]);
        }
    }
}
