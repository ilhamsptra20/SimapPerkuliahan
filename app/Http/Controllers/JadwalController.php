<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::get();
        return view('dashboard.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'matkul_id' => 'required',
            'tanggal' => 'required',
            'ujian' => 'required',
            'waktu_masuk' => 'required',
            'waktu_keluar' => 'required',
        ]);

        Jadwal::create($data);
        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit(Jadwal $jadwal)
    {
        return view('home', compact('jadwal'));
    }

    public function update(Jadwal $jadwal, Request $request)
    {
        $data = $request->validate([
            'matkul_id' => 'required',
            'tanggal' => 'required',
            'ujian' => 'required',
            'waktu_masuk' => 'required',
            'waktu_keluar' => 'required',
        ]);

        $jadwal->update($data);
        return back()->with('success', 'Berhasil Merubah Data');
    }

    public function delete(Jadwal $jadwal)
    {
        $jadwal->delete();
        return back()->with('success', 'Berhasil Menghapus Data');
    }
}
