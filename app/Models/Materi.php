<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $primaryKey = 'materi_id';

    public function subBabs(){
        return $this->hasMany(SubBab::class,'materi_id', 'materi_id');
    }

    public function kuis(){
        return $this->hasMany(Kuis::class,'materi_id','materi_id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
