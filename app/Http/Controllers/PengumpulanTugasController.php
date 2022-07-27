<?php

namespace App\Http\Controllers;

use App\Models\PengumpulanTugas;
use App\Models\Tugas;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengumpulanTugasController extends Controller
{
    public function index(Tugas $tugas)
    {
        $pengumpulan = auth('mahasiswa')->user()->pengumpulantugas->where('tugas_id', $tugas->id);
        return view('mahasiswa.tugas.show', compact('tugas', 'pengumpulan'));
    }

    public function store(Request $request, Tugas $tugas)
    {
        $data = $request->validate([
            'file' => 'required|mimes:doc,docx,xls,xlsx,pdf,jpg,jpeg,png,bmp|file|max:51200'
        ]);
        $deadline = $tugas->deadline;
        $file = $request->file('file');
        $data['file'] = $file->store('tugas');
        $data['nama_file'] = $file->getClientOriginalName();
        $data['status'] = strtotime(Carbon::now()) < strtotime($deadline) ? true : false;
        $data['tugas_id'] = $tugas->id;

        auth('mahasiswa')->user()->pengumpulanTugas()->create($data);
        return back();
    }
    
    public function update(Request $request, PengumpulanTugas $pengumpulanTugas)
    {
        $attr = $request->all();
        $pengumpulanTugas->update($attr);
        return back();
    }

    public function destroy(PengumpulanTugas $pengumpulanTugas)
    {
        $pengumpulanTugas->delete();
        return back(); 
    }
}
