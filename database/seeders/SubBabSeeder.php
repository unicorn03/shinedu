<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materi;
use App\Models\SubBab;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;

class SubBabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiSains = Materi::where('judul', 'Sains')->first();

        if ($materiSains) {

            $isiMateriSains = <<<HTML
            <h2><span style="font-size: 1.5em;">😃</span>Planet Terdekat dengan Matahari: Merkurius</h2>
            
            <p><strong>1. Nama Planet:</strong></p>
            <ul>
                <li>Merkurius</li>
            </ul>

            <p><strong>2. Jarak dari Matahari:</strong></p>
            <ul>
                <li>Sekitar <strong>58 juta kilometer</strong></li>
            </ul>

            <p><strong>3. Waktu Revolusi (mengelilingi Matahari):</strong></p>
            <ul>
                <li><strong>88 hari</strong> Bumi</li>
            </ul>

            <p><strong>4. Waktu Rotasi (berputar pada porosnya):</strong></p>
            <ul>
                <li>Sekitar <strong>59 hari</strong> Bumi</li>
            </ul>

            <p><strong>5. Fakta Menarik:</strong></p>
            <ul>
                <li>Walaupun Merkurius adalah planet <strong>paling dekat dengan Matahari, bukan</strong> dia yang paling panas.</li>
                <li><span style="font-size: 1.2em;">🔥</span> Planet terpanas adalah <strong>Venus</strong>, karena atmosfernya sangat tebal dan mengandung banyak <strong>gas rumah kaca</strong>.</li>
            </ul>
        HTML;

            SubBab::create([
                'materi_id' => $materiSains->materi_id,
                'judul' => 'Sains Dasar',
                'isi' => $isiMateriSains,
                'urutan' => 1,
                'slug' => 'sains-dasar',
            ]);
        }

        $materiMatematika = Materi::where('judul', 'Matematika')->first();

        if ($materiMatematika) {

            $isiMateriMatematika = <<<HTML
            <h2><span style="font-size: 1.5em;">😃</span>Matematika Ilmu Yang Menyenangkan</h2>
            
            <p><strong>Aku sangat suka</strong></p>
        HTML;

            SubBab::create([
                'materi_id' => $materiMatematika->materi_id,
                'judul' => 'Matematika Dasar',
                'isi' => $isiMateriMatematika,
                'urutan' => 1,
                'slug' => 'matematika-dasar',
            ]);
        }

        $materiBahasa = Materi::where('judul', 'Bahasa')->first();

        if ($materiBahasa) {

            $isiMateriBahasa = <<<HTML
            <h2><span style="font-size: 1.5em;">😃</span>Dasar Frasa</h2>
            
            <p><strong>Frasa adalah kalimat yang memiliki makna tertentu</strong></p>
        HTML;

            SubBab::create([
                'materi_id' => $materiBahasa->materi_id,
                'judul' => 'Dasar Frasa',
                'isi' => $isiMateriBahasa,
                'urutan' => 1,
                'slug' => 'dasar-frasa',
            ]);
        }

        $materiGeografi = Materi::where('judul', 'Geografi')->first();

        if ($materiGeografi) {

            $isiMateriGeografi = <<<HTML
            <h2><span style="font-size: 1.5em;">😃</span>Lapisan Bumi</h2>
            
            <p><strong>Bumi terdiri dari beberapa lapisan</strong></p>
        HTML;

            SubBab::create([
                'materi_id' => $materiGeografi->materi_id,
                'judul' => 'Lapisan Bumi',
                'isi' => $isiMateriGeografi,
                'urutan' => 1,
                'slug' => 'lapisan-bumi',
            ]);
        }

        $materiArtificial = Materi::where('judul', 'Artificial')->first();

        if ($materiArtificial) {

            $isiMateriArtificial = <<<HTML
            <h2><span style="font-size: 1.5em;">😃</span>Dasar AI</h2>
            
            <p><strong>AI singkatan dari Artificial Intelligence</strong></p>
        HTML;

            SubBab::create([
                'materi_id' => $materiArtificial->materi_id,
                'judul' => 'Dasar AI',
                'isi' => $isiMateriArtificial,
                'urutan' => 1,
                'slug' => 'dasar-ai',
            ]);
        }
    }
}
