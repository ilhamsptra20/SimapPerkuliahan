<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        Admin::create([
            'nama' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678'),
        ]);
        
        Dosen::create([
            'nip' => '123456789012',
            'nama' => 'dosen',
            'email' => 'dosen@email.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
