<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Jadwal;

class AbsensiDosenController extends Controller
{
    public function index()
    {
        $matkul = auth('dosen')->user()->matkul;
        $absensi = $matkul->absensi()->get();
        $now =  strtotime(Carbon::now());
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        $jadwal = $matkul->jadwal;
        return view('dosen.absensi.index', compact('mahasiswa', 'matkul', 'jadwal', 'now', 'absensi'));
    }

    public function show(Jadwal $jadwal)
    {
        $matkul = auth('dosen')->user()->matkul;
        $absensi = $matkul->absensi()->where('jadwal_id', $jadwal->id)->get();
        $mahasiswa = Mahasiswa::where('semester', $matkul->semester)->get();
        return view('dosen.absensi.create', compact('jadwal', 'matkul', 'mahasiswa'));
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


        return redirect('/dosen/absensi/');
    }
}
