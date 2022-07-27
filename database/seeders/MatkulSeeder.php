<?php

namespace Database\Seeders;

use App\Models\Matkul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matkul::create([
            'nama' => 'Logika Matematika',
            'jumlah_sks' => 3,
            'semester' => 1,
            'dosen_id' => 1
        ]);

        Matkul::create([
            'nama' => 'Statistika',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Dasar Multimedia',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Sistem Informasi',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Technopreneurship',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Algoritma dan Pemrograman',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Praktikum Algoritma dan Pemrograman',
            'jumlah_sks' => 1,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Pengantar Teknologi Informasi',
            'jumlah_sks' => 2,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Kalkulus 1',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Praktikum Aplikasi Komputer',
            'jumlah_sks' => 2,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Bahasa Indonesia',
            'jumlah_sks' => 3,
            'semester' => 1
        ]);
        
        Matkul::create([
            'nama' => 'Pendidikan Agama',
            'jumlah_sks' => 2,
            'semester' => 1    
        ]);

        // semester 2
        Matkul::create([
            'nama' => 'Komputasi Numerik 1',
            'jumlah_sks' => 3,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Praktikum Komputasi Numerik',
            'jumlah_sks' => 1,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Jaringan Komputer',
            'jumlah_sks' => 2,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Praktikum Jaringan Komputer',
            'jumlah_sks' => 2,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Struktur Data',
            'jumlah_sks' => 3,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Praktikum Struktur Data',
            'jumlah_sks' => 1,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Sistem Digital',
            'jumlah_sks' => 3,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Matematika Diskret',
            'jumlah_sks' => 3,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Kalkulus2',
            'jumlah_sks' => 3,
            'semester' => 2
        ]);

        Matkul::create([
            'nama' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'jumlah_sks' => 3,
            'semester' => 2
        ]);
        
        // semester 3
        Matkul::create([
            'nama' => 'Komputasi Numerik 2',
            'jumlah_sks' => 2,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Inteligensi Buatan',
            'jumlah_sks' => 3,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Praktikum Intelegensi Buatan',
            'jumlah_sks' => 1,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Praktikum Sistem Digital',
            'jumlah_sks' => 2,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Pengantar Sistem Mobile dan Nirkabel',
            'jumlah_sks' => 2,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Interaksi Manusia dan Komputer',
            'jumlah_sks' => 3,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Arsitektur Komputer',
            'jumlah_sks' => 3,
            'semester' => 3,
        ]);

        Matkul::create([
            'nama' => 'Pemrograman Web',
            'jumlah_sks' => 3,
            'semester' => 3,
        ]);

        // semester 4
        Matkul::create([
            'nama' => 'Pemrograman Berorientasi Objek',
            'jumlah_sks' => 3,
            'semester' => 4,
        ]);

        Matkul::create([
            'nama' => 'Praktikum Pemrograman Berorientasi Objek',
            'jumlah_sks' => 3,
            'semester' => 4,
        ]);

        Matkul::create([
            'nama' => 'Basis Data',
            'jumlah_sks' => 3,
            'semester' => 4,
        ]);

        Matkul::create([
            'nama' => 'Praktikum Basis Data',
            'jumlah_sks' => 3,
            'semester' => 4,
        ]);

        Matkul::create([
            'nama' => 'Rekayasa Perangkat Lunak',
            'jumlah_sks' => 3,
            'semester' => 4,
        ]);

        Matkul::create([
            'nama' => 'Pemrograman Visual',
            'jumlah_sks' => 3,
            'semester' => 4,
        ]);

        // semester5
        Matkul::create([
            'nama' => 'Pemrograman Basis Data',
            'jumlah_sks' => 3,
            'semester' => 5,
        ]);

        Matkul::create([
            'nama' => 'Praktikum Aplikasi Mobile',
            'jumlah_sks' => 3,
            'semester' => 5,
        ]);

        Matkul::create([
            'nama' => 'Projek Pembangunan PL Profesional',
            'jumlah_sks' => 3,
            'semester' => 5,
        ]);

        Matkul::create([
            'nama' => 'Sistem Operasi',
            'jumlah_sks' => 3,
            'semester' => 5,
        ]);

        Matkul::create([
            'nama' => 'Matakuliah Pilihan 1 (dari konsentrasi bebas)',
            'jumlah_sks' => 3,
            'semester' => 5,
        ]);

        Matkul::create([
            'nama' => 'Matakuliah Pilihan 2 (dari konsentrasi bebas)',
            'jumlah_sks' => 3,
            'semester' => 5,
        ]);

        // semester6
        Matkul::create([
            'nama' => 'Perangkat Lunak Enterprise',
            'jumlah_sks' => 3,
            'semester' => 6,
        ]);
        Matkul::create([
            'nama' => 'Ekonomi Informatika',
            'jumlah_sks' => 3,
            'semester' => 6,
        ]);
        Matkul::create([
            'nama' => 'Grafika Komputer',
            'jumlah_sks' => 3,
            'semester' => 6,
        ]);
        Matkul::create([
            'nama' => 'Matakuliah Konsentrasi 1',
            'jumlah_sks' => 3,
            'semester' => 6,
        ]);
        Matkul::create([
            'nama' => 'Matakuliah Konsentrasi 2',
            'jumlah_sks' => 3,
            'semester' => 6,
        ]);
        Matkul::create([
            'nama' => 'Bahasa Inggris',
            'jumlah_sks' => 3,
            'semester' => 6,
        ]);
        
        // semester 7
        
        Matkul::create([
            'nama' => 'Kerja Praktek /Magang',
            'jumlah_sks' => 3,
            'semester' => 7,
        ]);
        Matkul::create([
            'nama' => 'Metodologi Penelitian dan Publikasi Ilmiah',
            'jumlah_sks' => 3,
            'semester' => 7,
        ]);
        Matkul::create([
            'nama' => 'Matakuliah Konsentrasi 3',
            'jumlah_sks' => 3,
            'semester' => 7,
        ]);
        Matkul::create([
            'nama' => 'Matakuliah Pilihan 3 (dari konsentrasinya)',
            'jumlah_sks' => 3,
            'semester' => 7,
        ]);
        Matkul::create([
            'nama' => 'Matakuliah Pilihan 4 (dari konsentrasinya)',
            'jumlah_sks' => 3,
            'semester' => 7,
        ]);
        Matkul::create([
            'nama' => 'Kuliah Kerja Nyata/KKN Informatika',
            'jumlah_sks' => 3,
            'semester' => 7,
        ]);


            



    }
}
