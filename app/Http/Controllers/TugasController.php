<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $matkul = Matkul::get();
        return view('dashboard.tugas.index', compact('matkul'));
    }

    public function show_matkul(Matkul $matkul)
    {
        $tugas = $matkul->tugas;
        return view('dashboard.tugas.matkul', compact('matkul', 'tugas'));
    }

    public function show(Tugas $tugas)
    {
        return $tugas;
        return view('dashboard.tugas.show', compact('tugas'));
    }

    public function create(Matkul $matkul)
    {
        return view('dashboard.tugas.create', compact('matkul'));
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
        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit(Tugas $tugas)
    {
        return view('home', compact('tugas'));
    }

    public function update(Tugas $tugas, Request $request)
    {
        $data = $request->validate([
            'matkul_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
        ]);

        $tugas->update($data);
        return back()->with('success', 'Berhasil Merubah Data');
    }

    public function delete(Tugas $tugas)
    {
        $tugas->delete();
        return back()->with('success', 'Berhasil Menghapus Data');
    }

    public function show_matkul_tugas_mahasiswa(Matkul $matkul)
    {
        $tugas = $matkul->tugas;
        return view('mahasiswa.tugas.matkul', compact('matkul', 'tugas'));
    }

    public function show_mahasiswa(Tugas $tugas)
    {
        return view('mahasiswa.tugas.show', compact('tugas'));
    }

    public function index_dosen()
    {
        $matkul = Matkul::get();
        return view('dosen.tugas.index', compact('matkul'));
    }
}