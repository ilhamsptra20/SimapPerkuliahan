<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index_data()
    {
        $data = DataMahasiswa::where('status', null)->orWhere('status', false)->get();
        return view('dashboard.registrasi.index', compact('data'));
    }

    public function show_data(DataMahasiswa $dataMahasiswa)
    {
        return view('dashboard.registrasi.show', compact('dataMahasiswa'));
    }

    public function chek_data(Request $request, DataMahasiswa $dataMahasiswa)
    {
        $dataMahasiswa->update(['status' => $request->status]);

        if ($request->status == 1 ) {
            $nim = date('y') . date('m', strtotime($dataMahasiswa->tanggal_lahir)) . date('d', strtotime($dataMahasiswa->tanggal_lahir)) . sprintf('%04d', random_int(1, 9999));
            $data = [
                'data_id' => $dataMahasiswa->id,
                'nim' => $nim,
                'nama' => $dataMahasiswa->nama,
                'email' => $dataMahasiswa->email,
                'password' => bcrypt($nim),
            ];
            Mahasiswa::create($data);
        }
        return redirect(route('admin.data.mahasiswa'));
    }

    public function index()
    {
        if( isset($_GET['no_reg'])){
            
        }else {
            $jurusan = Jurusan::get();
            return view('registrasi.index', compact('jurusan'));
        }
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_martial' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'tempat_tinggal' => 'required',
            'no_hp' => 'required|min:10',
            'email' => 'required|email',
            'sekolah' => 'required',
            'nama_sekolah' => 'required',
            'jurusan_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'tahun_lulus' => 'required',
            'no_ijazah' => 'required|min:13',
            'nama_orangtua' => 'required',
            'no_hp_orangtua' => 'min:10',
            'email_orangtua' => 'email',
        ]);

        $data['tahun_lulus'] = date('Y', strtotime($request->tahun_lulus));
        $data['no_reg'] = 'REG' . date('y') . date('y', strtotime($data['tanggal_lahir'])) . sprintf('%07d', random_int(0, 9999999));

        DataMahasiswa::create($data);

        return back()->with('success', 'Berhasil mendaftar dengan no registrasi ' . $data['no_reg']);
    }

    public function show()
    {
        
    }
}
