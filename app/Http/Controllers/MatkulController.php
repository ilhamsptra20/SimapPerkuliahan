<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::get();
        return view('dashboard.matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:3',
            'semester' => 'required',
            'dosen_id' => 'required',
        ]);

        Matkul::create($data);
        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit(Matkul $matkul)
    {
        return view('home', compact('matkul'));
    }

    public function update(Matkul $matkul, Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:3',
            'semester' => 'required',
            'dosen_id' => 'required',
        ]);

        $matkul->update($data);
        return back()->with('success', 'Berhasil Merubah Data');
    }

    public function delete(Matkul $matkul)
    {
        $matkul->delete();
        return back()->with('success', 'Berhasil Menghapus Data');
    }
}
