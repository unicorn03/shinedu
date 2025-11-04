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
        'judul' => 'PAWL',
        'deskripsi' => 'Materi PAWL',
        'thumbnail' => '/thumbnails/awikwok.jpg'
        ]);

        Materi::create([
        'judul' => 'awikwok',
        'deskripsi' => 'rawr',
        'thumbnail' => 'thumbnails/pawl.png'
        ]);
    }
}
