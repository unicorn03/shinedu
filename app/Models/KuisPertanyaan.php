<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function kuis(){
        return $this->belongsTo(Kuis::class, 'kuis_id', 'kuis_id');
    }
}