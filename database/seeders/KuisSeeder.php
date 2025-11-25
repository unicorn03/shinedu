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
    }
}
