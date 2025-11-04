<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;
use App\Models\SubBab;

class SubBabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiSains = Materi::where('judul', 'Sains')->first();

        if($materiSains){
            SubBab::create([
                'materi_id' => $materiSains->materi_id,
                'judul' => 'Sains Dasar',
                'isi' => '<h1>Sains Materi</h1>',
                'urutan' => 1,
            ]);
        }

        $materiMatematika = Materi::where('judul', 'Matematika')->first();

        if($materiMatematika){
            SubBab::create([
                'materi_id' => $materiMatematika->materi_id,
                'judul' => 'Matematika Dasar',
                'isi' => '<h1>Matematika Materi</h1>',
                'urutan' => 1,
            ]);
        }
    }
}
