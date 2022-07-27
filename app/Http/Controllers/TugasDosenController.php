<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasDosenController extends Controller
{
    public function index()
    {
        $matkul = auth('dosen')->user()->matkul;
        $tugas = $matkul->tugas;
        return view('dosen.tugas.index', compact('matkul', 'tugas'));
    }

    public function show(Tugas $tugas)
    {
        return view('dosen.tugas.show', compact('tugas'));
    }

    public function create()
    {
        $matkul = auth('dosen')->user()->matkul;
        return view('dosen.tugas.create', compact('matkul'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'matkul_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $data['deadline'] = date("Y-m-d H:i:s", strtotime("$request->date $request->time"));

        Tugas::create($data);
        return redirect('dosen/tugas')->with('success', 'Berhasil Menambahkan Data');
    }
}
