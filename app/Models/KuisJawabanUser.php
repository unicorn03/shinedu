<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KuisJawabanUser extends Model
{
    protected $table = 'kuis_jawaban_users';
    protected $primaryKey = 'hasil_id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'kuis_id',
        'skor',
        'waktu_selesai',
    ];
}
