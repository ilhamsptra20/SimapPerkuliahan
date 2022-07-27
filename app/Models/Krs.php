<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;

    protected $table = 'krs';
    protected $fillable = [
        'matkul_id',
        'mahasiswa_id',
        'semester',
    ];

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
