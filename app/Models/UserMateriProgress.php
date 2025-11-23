<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMateriProgress extends Model
{
    protected $table = 'user_materi_progress';

    protected $fillable = [
        'user_id',
        'materi_id',
        'status',
        'waktu_selesai',
    ];

    protected $casts = [
        'waktu_selesai' => 'datetime',
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke materi
    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
