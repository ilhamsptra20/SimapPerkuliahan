<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $matkul = Matkul::get();
        return view('dashboard.absensi.index', compact('matkul'));
    }

    public function store_dosen(Request $request)
    {
        $i = 0;
        foreach ($request->mahasiswa_id as $mahasiswa ) {
            $dataAbsen[$i] = [
                'jadwal_id' => $request->jadwal_id,
                'mahasiswa_id' => $mahasiswa,
                'matkul_id' => $request->matkul_id,
                'status' => $request->$mahasiswa,
                'tanggal' => $request->tanggal,
            ];
            $cek = Absensi::where(['mahasiswa_id' => $mahasiswa, 'jadwal_id' =>  $request->jadwal_id])->find(1);
            if(isset($cek)){
                $cek->update($dataAbsen[$i]);
            }
            $i++;
        }


        return redirect('/dosen/absensi/'. $request->matkul_id);
    }


    public function show(Matkul $matkul)
    {
        $absensi = $matkul->absensi()->get();
        $now =  strtotime(Carbon::now());
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        $jadwal = $matkul->jadwal;
        return view('dashboard.absensi.show', compact('mahasiswa', 'matkul', 'jadwal', 'now', 'absensi'));
    }

    public function store(Request $request)
    {
        $i = 0;
        foreach ($request->mahasiswa_id as $mahasiswa ) {
            $dataAbsen[$i] = [
                'jadwal_id' => $request->jadwal_id,
                'mahasiswa_id' => $mahasiswa,
                'matkul_id' => $request->matkul_id,
                'status' => $request->$mahasiswa,
                'tanggal' => $request->tanggal,
            ];
            $cek = Absensi::where(['mahasiswa_id' => $mahasiswa, 'jadwal_id' =>  $request->jadwal_id])->find(1);
            if(isset($cek)){
                $cek->update($dataAbsen[$i]);
            }else{
                Absensi::create($dataAbsen[$i]);
            }
            $i++;
        }


        return redirect('/admin/absensi/'. $request->matkul_id);
    }

    public function cek(Matkul $matkul, Jadwal $jadwal)
    {
        $absensi = $matkul->absensi()->where('jadwal_id', $jadwal->id)->get();
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        return view('dashboard.absensi.create', compact('jadwal', 'matkul', 'mahasiswa'));
    }

    public function cek_dosen(Matkul $matkul, Jadwal $jadwal)
    {
        $absensi = $matkul->absensi()->where('jadwal_id', $jadwal->id)->get();
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        return view('dosen.absensi.create', compact('jadwal', 'matkul', 'mahasiswa'));
    }

    
}
