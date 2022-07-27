<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama' => 'D3 Keuangan Perbankan',
            'tipe' => 'e',
        ]);

        Jurusan::create([
            'nama' => 'D3 Akutansi',
            'tipe' => 'e',
        ]);

        Jurusan::create([
            'nama' => 'S1 Akutansi',
            'tipe' => 'e',
        ]);

        Jurusan::create([
            'nama' => 'S1 Manajemen',
            'tipe' => 'e',
        ]);

        Jurusan::create([
            'nama' => 'D3 Manajemen Perpajakan',
            'tipe' => 'e',
        ]);

        Jurusan::create([
            'nama' => 'S1 Teknik Informatika',
            'tipe' => 'i',
        ]);

        Jurusan::create([
            'nama' => 'D3 Komputerisasi Akutansi',
            'tipe' => 'i',
        ]);

        Jurusan::create([
            'nama' => 'D3 Manajemen Informatika',
            'tipe' => 'i',
        ]);
    }
}
