<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;

class MateriSeeder extends Seeder
{
    public function run(): void
    {
        Materi::create([
        'judul' => 'Sains',
        'deskripsi' => 'Jelajahi dunia sains, alam, dan lingkungan sekitar.',
        'thumbnail' => '/thumbnails/ff.svg',
        'slug' => 'sains',
        ]);

        Materi::create([
        'judul' => 'Matematika',
        'deskripsi' => 'Konsep dasar penjumlahan, pengurangan, perkalian, dan pembagian.',
        'thumbnail' => 'thumbnails/mm.svg',
        'slug' => 'matematika',
        ]);

        Materi::create([
        'judul' => 'Bahasa',
        'deskripsi' => 'Tingkatkan kemampuan berbahasa dengan kosakata dan tata bahasa.',
        'thumbnail' => 'thumbnails/bahasa.svg',
        'slug' => 'bahasa',
        ]);

        Materi::create([
        'judul' => 'Geografi',
        'deskripsi' => 'Kenali benua, negara, dan ibu kota di seluruh dunia.',
        'thumbnail' => 'thumbnails/geografi.svg',
        'slug' => 'geografi',
        ]);

        Materi::create([
        'judul' => 'Artificial',
        'deskripsi' => 'Pahami tentang AI, Machine Learning, dan Deep Learning.',
        'thumbnail' => 'thumbnails/artificial.svg',
        'slug' => 'artificial',
        ]);
    }
}
