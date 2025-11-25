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
    }
}
