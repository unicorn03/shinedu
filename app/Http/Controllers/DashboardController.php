<?php

namespace App\Http\Controllers;

use App\Models\UserMateriProgress;
use App\Models\KuisJawabanUser;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

    
        $kuisDikerjakan = KuisJawabanUser::where('user_id', $userId)->count();
        $materiSelesai = UserMateriProgress::where('user_id', $userId)
                            ->where('status', 'completed')
                            ->count();
        $rataSkor = KuisJawabanUser::where('user_id', $userId)->avg('skor') ?? 0;
        $topikDipelajari = UserMateriProgress::where('user_id', $userId)->count();

        
        $activityLogs = $this->getActivityLogs($userId);

        return view('dashboard', [
            'kuisDikerjakan' => $kuisDikerjakan,
            'materiSelesai' => $materiSelesai,
            'rataSkor' => number_format($rataSkor, 2),
            'topikDipelajari' => $topikDipelajari,
            'activityLogs' => $activityLogs,  
        ]);
    }

    private function getActivityLogs($userId)
    {
        // Log Materi
        $materiLogs = DB::table('user_materi_progress AS ump')
            ->join('materis AS m', 'ump.materi_id', '=', 'm.materi_id')
            ->where('ump.user_id', $userId)
            ->where('ump.status', 'completed')
            ->select(
                'm.judul AS nama',
                DB::raw('NULL AS skor'),
                'ump.updated_at AS tanggal',
                DB::raw("'materi' AS tipe")
            );

        // Log Kuis
        $kuisLogs = DB::table('kuis_jawaban_users AS kuj')
            ->join('kuis AS k', 'kuj.kuis_id', '=', 'k.kuis_id')
            ->where('kuj.user_id', $userId)
            ->select(
                'k.judul AS nama',
                'kuj.skor',
                'kuj.waktu_selesai AS tanggal',
                DB::raw("'kuis' AS tipe")
            );

        // Gabungkan & urutkan
        return DB::query()
            ->fromSub(
                $materiLogs->unionAll($kuisLogs),
                'logs'
            )
            ->orderBy('tanggal', 'desc')
            ->limit(20)
            ->get();
    }
}
