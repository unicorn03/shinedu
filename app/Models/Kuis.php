<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $primaryKey = 'kuis_id';

    public function materi(){
        return $this->belongsTo(Materi::class, 'materi_id', 'materi_id');
    }
    
    public function pertanyaan(){
        return $this->hasMany(KuisPertanyaan::class, 'kuis_id', 'kuis_id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
