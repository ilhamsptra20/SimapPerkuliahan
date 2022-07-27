<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswa';

    protected $fillable = [
        'no_reg',
        'status',
        'semester',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'status_martial',
        'kewarganegaraan',
        'agama',
        'tempat_tinggal',
        'no_hp',
        'email',
        'sekolah',
        'nama_sekolah',
        'jurusan_sekolah',
        'alamat_sekolah',
        'tahun_lulus',
        'no_ijazah',
        'nama_orangtua',
        'no_hp_orangtua',
        'email_orangtua',
        'pekerjaan_orangtua',
        'instansi_orangtua',
        'pendidikan_orangtua',
    ];

    public function getRouteKeyName()
    {
        return 'no_reg';
    }

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }

}
