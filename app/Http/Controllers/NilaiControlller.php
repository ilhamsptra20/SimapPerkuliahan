<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NilaiControlller extends Controller
{
    public function index()
    {
        $matkul = Matkul::get();
        return view('dashboard.nilai.index', compact('matkul'));
    }
   
    public function create(Matkul $matkul)
    {
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        return view('dashboard.nilai.create', compact('matkul', 'mahasiswa'));
    }

    public function store(Request $request)
    {
        foreach ($request->mahasiswa as $mahasiswa) {
            $data = [
                'mahasiswa_id' => $mahasiswa,
                'matkul_id' => $request->matkul_id,
                'nilai' => $request->$mahasiswa,
            ];
            Nilai::create($data);
        }

        return redirect('/admin/nilai/matkul/'.$request->matkul_id);
    }

    public function matkul(Matkul $matkul)
    {  
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        $nilai = $matkul->nilai;
        return view('dashboard.nilai.matkul', compact('matkul', 'mahasiswa', 'nilai'));
    }

    public function show(Nilai $nilai)
    {
        return view('dashboard.nilai.show', compact('nilai'));
    }

    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update($request->all());
        return back();
    }
    
    public function index_mahasiswa()
    {
        $nilai = auth('mahasiswa')->user()->nilai;
        $matkul = Matkul::where('semester', auth('mahasiswa')->user()->semester)->get();
        return view('mahasiswa.nilai.index', compact('nilai', 'matkul'));
    }

    public function index_dosen()
    {
        $matkul = auth('dosen')->user()->matkul;
        $mahasiswa = Mahasiswa::where('semester', auth('dosen')->user()->matkul->semester)->get();
        $nilai = $matkul->nilai;
        return view('dosen.nilai.matkul', compact('matkul', 'mahasiswa', 'nilai'));
    }

    public function create_dosen(Matkul $matkul)
    {
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        return view('dosen.nilai.create', compact('matkul', 'mahasiswa'));
    }

    public function store_dosen(Request $request)
    {
        foreach ($request->mahasiswa as $mahasiswa) {
            $data = [
                'mahasiswa_id' => $mahasiswa,
                'matkul_id' => $request->matkul_id,
                'nilai' => $request->$mahasiswa,
            ];
            Nilai::create($data);
        }

        return redirect('/dosen/nilai/');
    }

    public function show_dosen(Nilai $nilai)
    {
        return view('dosen.nilai.show', compact('nilai'));
    }

    public function update_dosen(Request $request, Nilai $nilai)
    {
        $nilai->update($request->all());
        return redirect('dosen/nilai');
    }
}
