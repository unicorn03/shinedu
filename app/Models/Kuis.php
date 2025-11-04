<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    public function pertanyaan(){
        return $this->hasMany(KuisPertanyaan::class, 'kuis_id', 'kuis_id');
    }
}
