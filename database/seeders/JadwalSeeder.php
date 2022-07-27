<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-12')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-13')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-16')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-18')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-20')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-24')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-26')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-06-30')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-2')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-4')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-6')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-8')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-10')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-12')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-14')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
        Jadwal::create([
            'matkul_id' => 1,
            'tanggal' => date('Y-m-d', strtotime('2022-07-16')),
            'ujian' => false,
            'waktu_masuk' => 2,
            'waktu_keluar' => 9,
        ]);
    }
}
