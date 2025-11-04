<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $primaryKey = 'kuis_id';
    public function pertanyaan(){
        return $this->hasMany(KuisPertanyaan::class, 'kuis_id', 'kuis_id');
    }
}
