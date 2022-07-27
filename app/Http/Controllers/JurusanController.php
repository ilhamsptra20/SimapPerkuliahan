<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('home');
    }

    public function show()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:3',
            'tipe' => 'required|max:1',
        ]);

        Jurusan::create($data);
        return back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit(Jurusan $jurusan)
    {
        return view('home', compact('jurusan'));
    }

    public function update(Jurusan $jurusan, Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:3',
            'tipe' => 'required|max:1',
        ]);

        $jurusan->update($data);
        return back()->with('success', 'Berhasil Merubah Data');
    }

    public function delete(Jurusan $jurusan)
    {
        $jurusan->delete();
        return back()->with('success', 'Berhasil Menghapus Data');
    }
}