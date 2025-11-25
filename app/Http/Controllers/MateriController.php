<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\Materi;
use App\Models\SubBab;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $daftar_materi = Materi::all();
        return view('materi.index', ['daftarMateri' => $daftar_materi]);
    }
    public function showMateri(Materi $materi)
    {
        return view('materi.show', compact('materi'));
    }

    public function showSubbab(Materi $materi, SubBab $subbab)
    {
        if ($subbab->materi_id !== $materi->materi_id) {
            abort(404);
        }

        return view('subbab.show', [
            'materi'=>$materi,
            'subbab'=>$subbab
        ]);
    }

    public function showKuis(Materi $materi, Kuis $kuis){
        if ($kuis->materi_id !== $materi->materi_id) {
            abort(404);
        }

        return view('kuis.show', [
            'materi'=>$materi,
            'kuis'=>$kuis
        ]);
    }
}
