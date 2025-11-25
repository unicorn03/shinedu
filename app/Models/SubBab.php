<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubBab extends Model
{
    protected $primaryKey = 'subbab_id';

    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'materi_id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
