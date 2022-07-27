<?php

namespace App\Http\Controllers\User;

use App\Models\Krs;
use App\Models\Tugas;
use App\Models\Matkul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $matkul = Matkul::where('semester', auth('mahasiswa')->user()->semester)->get();
        $i = 0;
        foreach ($matkul as $data) {
            $tugas[$i] = Tugas::where('matkul_id', $data->id);
            $i++;
        }
        return view('mahasiswa.index', compact('matkul', 'tugas'));
    }

    public function krs_index()
    {
        $id_mahasiswa = auth('mahasiswa')->user()->semester;
        $krsMahasiswa = Krs::where('semester', $id_mahasiswa)->count();
        

        $semesterMahasiswa = auth('mahasiswa')->user()->semester;

        $matkul = Matkul::where('semester', $semesterMahasiswa)->get();
        

        return view('mahasiswa.krs.index', compact('matkul', 'krsMahasiswa', 'semesterMahasiswa'));
    }
}
