<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // CRUD MAHASISWA
    public function index_mahasiswa()
    {
        $mahasiswa = Mahasiswa::get();
        return view('dashboard.mahasiswa.index', compact('mahasiswa'));
    }

    public function show_mahasiswa(Mahasiswa $mahasiswa)
    {
        return view('dashboard', compact('mahasiswa'));
    }

    public function update_mahasiswa(Request $request, Mahasiswa $mahasiswa)
    {
        $data = $request->all();
        $mahasiswa->update($data);
        return back()->with('success', 'Berhasil Merubah Data Mahasiswa dengan nim ' . $data['nim']);
    }

    public function delete_mahasiswa(Mahasiswa $mahasiswa)
    {
        $nim = $mahasiswa->nim;
        $mahasiswa->delete();
        return back()->with('success', 'Berhasil Menghapus Data Mahasiswa dengan nim ' . $nim);
    }

    // CRUD DOSEN
    public function index_dosen()
    {
        $dosen = Dosen::get();
        return view('dashboard.dosen.index', compact('dosen'));
    }

    public function show_dosen(Dosen $dosen)
    {
        return view('dashboard', compact('Dosen'));
    }

    public function update_dosen(Request $request, Dosen $dosen)
    {
        $data = $request->all();
        $dosen->update($data);
        return back()->with('success', 'Berhasil Merubah Data Dosen dengan nip ' . $data['nip']);
    }

    public function delete_dosen(Dosen $dosen)
    {
        $nip = $dosen->nip;
        $dosen->delete();
        return back()->with('success', 'Berhasil Menghapus Data Dosen dengan nip ' . $nip);
    }
}
