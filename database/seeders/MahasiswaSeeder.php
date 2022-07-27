<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\DataMahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataMahasiswa::create([
            'no_reg' => 'REG22031000003',
            // 'status' => ,
            'nama' => 'muhamad santoso',
            'jenis_kelamin' => 'l',
            'tempat_lahir' => 'bogor',
            'tanggal_lahir' => date('Y-m-d', strtotime('2004-05-20')),
            'status_martial' => false,
            'kewarganegaraan' => 'wni',
            'agama' => 'islam',
            'tempat_tinggal' => 'bogor',
            'no_hp' => '085893712445',
            'email' => 'santoso@email.com',
            'sekolah' => 'smk',
            'nama_sekolah' => 'smk wikrama',
            'jurusan_sekolah' => 'rpl',
            'alamat_sekolah' => 'bogor',
            'tahun_lulus' => date('Y'),
            'no_ijazah' => '123456789012349',
            'nama_orangtua' => 'ayah',
            // 'no_hp_orangtua' => ,
            // 'email_orangtua' => ,
            'pekerjaan_orangtua' => 'buruh',
            // 'instansi_orangtua' => ,
            // 'pendidikan_orangtua' => ,
        ]);

        DataMahasiswa::create([
            'no_reg' => 'REG22031000004',
            'status' => false,
            'nama' => 'aryanto',
            'jenis_kelamin' => 'l',
            'tempat_lahir' => 'bogor',
            'tanggal_lahir' => date('Y-m-d', strtotime('2004-05-20')),
            'status_martial' => false,
            'kewarganegaraan' => 'wni',
            'agama' => 'islam',
            'tempat_tinggal' => 'bogor',
            'no_hp' => '085893712440',
            'email' => 'aryanto@email.com',
            'sekolah' => 'smk',
            'nama_sekolah' => 'smk wikrama',
            'jurusan_sekolah' => 'rpl',
            'alamat_sekolah' => 'bogor',
            'tahun_lulus' => date('Y'),
            'no_ijazah' => '123456789012340',
            'nama_orangtua' => 'ayah',
            // 'no_hp_orangtua' => ,
            // 'email_orangtua' => ,
            'pekerjaan_orangtua' => 'buruh',
            // 'instansi_orangtua' => ,
            // 'pendidikan_orangtua' => ,
        ]);

        DataMahasiswa::create([
            'no_reg' => 'REG22031000001',
            'status' => true,
            'nama' => 'muhamad ilham saputra',
            'jenis_kelamin' => 'l',
            'tempat_lahir' => 'bogor',
            'tanggal_lahir' => date('Y-m-d', strtotime('2004-05-20')),
            'status_martial' => false,
            'kewarganegaraan' => 'wni',
            'agama' => 'islam',
            'tempat_tinggal' => 'bogor',
            'no_hp' => '085893712441',
            'email' => 'muhamadilhamsptra@gmail.com',
            'sekolah' => 'smk',
            'nama_sekolah' => 'smk wikrama',
            'jurusan_sekolah' => 'rpl',
            'alamat_sekolah' => 'bogor',
            'tahun_lulus' => date('Y'),
            'no_ijazah' => '123456789012345',
            'nama_orangtua' => 'ayah',
            // 'no_hp_orangtua' => ,
            // 'email_orangtua' => ,
            'pekerjaan_orangtua' => 'buruh',
            // 'instansi_orangtua' => ,
            // 'pendidikan_orangtua' => ,
        ]);
        
        DataMahasiswa::create([
            'no_reg' => 'REG22031000002',
            'status' => true,
            'nama' => 'muhamad hanif',
            'jenis_kelamin' => 'l',
            'tempat_lahir' => 'bogor',
            'tanggal_lahir' => date('Y-m-d', strtotime('2003-11-12')),
            'status_martial' => false,
            'kewarganegaraan' => 'wni',
            'agama' => 'islam',
            'tempat_tinggal' => 'bogor',
            'no_hp' => '085893712442',
            'email' => 'muahamdhanif@gmail.com',
            'sekolah' => 'smk',
            'nama_sekolah' => 'smk wikrama',
            'jurusan_sekolah' => 'rpl',
            'alamat_sekolah' => 'bogor',
            'tahun_lulus' => date('Y'),
            'no_ijazah' => '123456789012344',
            'nama_orangtua' => 'ayah',
            // 'no_hp_orangtua' => ,
            // 'email_orangtua' => ,
            'pekerjaan_orangtua' => 'karyawan',
            // 'instansi_orangtua' => ,
            // 'pendidikan_orangtua' => ,
        ]);

        Mahasiswa::create([
            'data_id' => 1,
            'nim' => '2205200001',
            'nama' => 'muhamad ilham saputra',
            'email' => 'muhamadilhamsptra@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Mahasiswa::create([
            'data_id' => 2,
            'nim' => '2205200002',
            'nama' => 'muhamad hanif',
            'email' => 'mhamadhanif@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }

}
