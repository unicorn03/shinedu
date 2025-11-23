<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSubBabProgress extends Model
{
    protected $table = 'user_sub_bab_progress';

    protected $fillable = [
        'user_id',
        'sub_bab_id',
        'status',
        'waktu_selesai',
    ];
}
