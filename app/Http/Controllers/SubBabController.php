<?php

namespace App\Http\Controllers;

use App\Models\SubBab;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AwardsController;
use App\Models\UserSubBabProgress;
use App\Models\UserMateriProgress;

class SubBabController extends Controller
{
    public function show(SubBab $subBab)
    {
        $userId = Auth::id();

        // Update progress sub bab
        UserSubBabProgress::updateOrCreate(
            ['user_id' => $userId, 'sub_bab_id' => $subBab->subbab_id],
            ['status' => 'completed', 'waktu_selesai' => now()]
        );
        

        // Check awards
        $awardsController = new AwardsController();
        $awards = $awardsController->checkAndGrant(request())->getData();

        $materi = $subBab->materi;

        return view('subbab.show', [
            'subBab' => $subBab,
            'materi' => $materi,
            'awards' => $awards
        ]);
    }


    public function completeMateri($id)
    {
        $userId = Auth::id();

        // Mark materi as completed
        UserMateriProgress::updateOrCreate(
            ['user_id' => $userId, 'materi_id' => $id],
            ['status' => 'completed', 'waktu_selesai' => now()]
        );

        // Check awards
        $awardsController = new AwardsController();
        $awards = $awardsController->checkAndGrant(request())->getData();

        return response()->json([
            'success' => true,
            'message' => 'Materi berhasil diselesaikan',
            'awards' => $awards
        ]);
    }
}
