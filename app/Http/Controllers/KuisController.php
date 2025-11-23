<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\KuisJawabanUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AwardsController;

class KuisController extends Controller
{
    public function show(Kuis $kuis){
        $kuis->load('pertanyaan');
        return view('kuis.show', compact('kuis'));
    }

    public function submit(Request $request, Kuis $kuis)
    {
        $kuis->load('pertanyaan');

        $skor = 0;
        $totalSoal = $kuis->pertanyaan->count();

        if ($totalSoal == 0) {
            return back()->with('error', 'Kuis ini belum memiliki pertanyaan.');
        }

        foreach ($kuis->pertanyaan as $soal) {
            $jawabanUser = $request->input('pertanyaan_' . $soal->pertanyaan_id);

            if ($jawabanUser == $soal->jawaban_benar) {
                $skor++;
            }
        }

        $skorPersen = ($skor / $totalSoal) * 100;

        $hasil = KuisJawabanUser::create([
            'user_id' => Auth::id(),
            'kuis_id' => $kuis->kuis_id,
            'skor' => $skorPersen,
            'waktu_selesai' => now(),
        ]);

        // Check awards
        $awardsController = new AwardsController();
        $awards = $awardsController->checkAndGrant(request())->getData();

        if ($awards->count > 0) {
            session()->flash('new_awards', $awards);
        }

        return redirect()->route('kuis.result', $hasil->hasil_id);
    }


    public function result(KuisJawabanUser $hasil){
        if($hasil->user_id != Auth::id()){
            abort(403);
        }

        return view('kuis.result', compact('hasil'));
    }
}
