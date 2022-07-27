<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Matkul;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        $data['mahasiswa_id'] =  auth('mahasiswa')->user()->id;
        $data['semester'] = auth('mahasiswa')->user()->semester;

        $matkul = Matkul::where('semester', auth('mahasiswa')->user()->semester)->get();
        
        foreach ($matkul as $matkul) {
            $data['matkul_id'] = $matkul->id;
            $data['sks'] = $matkul->jumlah_sks;
            Krs::create($data);
        }

        return back();
    }
}
