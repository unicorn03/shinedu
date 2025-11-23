<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    protected $table = 'penghargaan';
    protected $primaryKey = 'penghargaan_id';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nama_penghargaan',
        'deskripsi'
    ];

    protected $dates = ['waktu_selesai'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}