<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KuisPertanyaan extends Model
{
    protected $table = 'kuis_pertanyaans';
    protected $primaryKey = 'pertanyaan_id';
    public $timestamps = false;

    protected $fillable = [
        'kuis_id',
        'pertanyaan',
        'jawaban_benar',
    ];
}
