<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(){
        $daftar_materi = Materi::all();
        return view('materi.index',['daftarMateri'=>$daftar_materi]);
    }

    public function show(Materi $materi){
        $materi->load(  'subBabs', 'kuis');
        return view('materi.show',['materi'=>$materi]);
    }

    
}
