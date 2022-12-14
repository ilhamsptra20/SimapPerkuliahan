<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
        'matkul_id',
        'tanggal',
        'ujian',
        'waktu_masuk',
        'waktu_keluar',
    ];
 
    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
}
