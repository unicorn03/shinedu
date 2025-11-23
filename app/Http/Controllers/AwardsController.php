<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Penghargaan;

class AwardsController extends Controller
{
    
    private $availableAwards = [
        [
            'nama' => 'Pemula yang Rajin',
            'deskripsi' => 'Selesaikan 5 materi pertama Anda',
            'icon' => 'star',
            'type' => 'materi',
            'requirement' => 5
        ],
        [
            'nama' => 'Kuis Master',
            'deskripsi' => 'Selesaikan 10 kuis dengan nilai minimal 80',
            'icon' => 'trophy',
            'type' => 'kuis',
            'requirement' => 10
        ],
        [
            'nama' => 'Pelahap Ilmu',
            'deskripsi' => 'Selesaikan semua materi dalam 1 rumpun keilmuan',
            'icon' => 'medal',
            'type' => 'rumpun',
            'requirement' => 1
        ],
        [
            'nama' => 'Konsisten 7 Hari',
            'deskripsi' => 'Belajar selama 7 hari berturut-turut',
            'icon' => 'award',
            'type' => 'streak',
            'requirement' => 7
        ],
        [
            'nama' => 'Sempurna',
            'deskripsi' => 'Dapatkan nilai 100 pada 5 kuis',
            'icon' => 'star',
            'type' => 'perfect_quiz',
            'requirement' => 5
        ],
        [
            'nama' => 'Explorer',
            'deskripsi' => 'Jelajahi minimal 3 rumpun keilmuan berbeda',
            'icon' => 'trophy',
            'type' => 'explore',
            'requirement' => 3
        ],
    ];

    
    public function index()
    {
        $userId = Auth::id();
        $stats = $this->getUserStats($userId);

        $earnedAwards = Penghargaan::where('user_id', $userId)
            ->get()
            ->keyBy('nama_penghargaan');

        $processedAwards = collect($this->availableAwards)->map(function ($award) use ($earnedAwards, $stats) {
            $isEarned = isset($earnedAwards[$award['nama']]);
            return [
                'id' => $isEarned ? $earnedAwards[$award['nama']]->penghargaan_id : null,
                'nama_penghargaan' => $award['nama'],
                'deskripsi' => $award['deskripsi'],
                'icon' => $award['icon'],
                'earned' => $isEarned,
                'earned_date' => $isEarned ? $earnedAwards[$award['nama']]->created_at : null,
                'progress' => $this->calculateProgress($award['type'], $stats),
                'total' => $award['requirement'],
            ];
        });

        return response()->json([
            'success' => true,
            'awards' => $processedAwards->values(),
            'stats' => [
                'total' => $processedAwards->count(),
                'earned' => $processedAwards->where('earned', true)->count(),
            ]
        ]);
    }

   
    private function getUserStats($userId)
    {
        $completedMateri = DB::table('user_materi_progress')
            ->where('user_id', $userId)
            ->where('status', 'completed')
            ->count();

        $completedKuisHighScore = DB::table('kuis_jawaban_users')
            ->where('user_id', $userId)
            ->where('skor', '>=', 80)
            ->count();

        $completedRumpun = DB::table('user_materi_progress as ump')
            ->join('materis as m', 'ump.materi_id', '=', 'm.materi_id')
            ->where('ump.user_id', $userId)
            ->where('ump.status', 'completed')
            ->distinct()
            ->count('m.materi_id');

        $streakDays = DB::table('user_materi_progress')
            ->where('user_id', $userId)
            ->where('waktu_selesai', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL 7 DAY)'))
            ->distinct(DB::raw('DATE(waktu_selesai)'))
            ->count();

        $perfectQuizCount = DB::table('kuis_jawaban_users')
            ->where('user_id', $userId)
            ->where('skor', 100)
            ->count();

        $avgQuizScore = DB::table('kuis_jawaban_users')
            ->where('user_id', $userId)
            ->avg('skor') ?? 0;

        return [
            'completed_materi' => $completedMateri,
            'completed_kuis' => $completedKuisHighScore,
            'completed_rumpun' => $completedRumpun,
            'streak_days' => $streakDays,
            'perfect_quiz_count' => $perfectQuizCount,
            'avg_quiz_score' => $avgQuizScore,
        ];
    }

   
    private function calculateProgress($type, $stats)
    {
        return match ($type) {
            'materi'        => $stats['completed_materi'],   // FIXED
            'kuis'          => $stats['completed_kuis'],
            'rumpun'        => $stats['completed_rumpun'],
            'explore'       => $stats['completed_rumpun'],
            'streak'        => $stats['streak_days'],
            'perfect_quiz'  => $stats['perfect_quiz_count'],
            default         => 0,
        };
    }

    
    public function checkAndGrant()
    {
        $userId = Auth::id();
        $stats = $this->getUserStats($userId);

        $newAwards = [];

        foreach ($this->availableAwards as $award) {

            $already = Penghargaan::where('user_id', $userId)
                ->where('nama_penghargaan', $award['nama'])
                ->exists();

            if ($already) continue;

            $progress = $this->calculateProgress($award['type'], $stats);

            $qualified =
                match ($award['type']) {
                    'materi'        => $progress >= $award['requirement'],   // FIXED
                    'kuis'          => $progress >= $award['requirement'] && $stats['avg_quiz_score'] >= 80,
                    'rumpun'        => $progress >= $award['requirement'],
                    'explore'       => $progress >= $award['requirement'],
                    'streak'        => $progress >= $award['requirement'],
                    'perfect_quiz'  => $progress >= $award['requirement'],
                    default         => false,
                };

            if ($qualified) {
                Penghargaan::create([
                    'user_id' => $userId,
                    'nama_penghargaan' => $award['nama'],
                    'deskripsi' => $award['deskripsi'],
                ]);

                $newAwards[] = [
                    'nama' => $award['nama'],
                    'icon' => $award['icon'],
                ];
            }
        }

        return response()->json([
            'success' => true,
            'count' => count($newAwards),
            'newAwards' => $newAwards,
        ]);
    }

    
    public function show()
    {
        return view('awards.show');
    }
}
