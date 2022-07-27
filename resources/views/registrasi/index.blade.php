@extends('layouts.app')

@section('style')
    <style>
        body{
            background-color: orange
        }
    </style>
@endsection

@section('app')
    <div class="font-sans">
        <!-- Content -->
        <div class="w-full">
            <div class="mx-auto py-8">
                <div class="w-full mx-auto my-5 max-w-2xl">
                    <h1 class="font-semibold text-white text-2xl mb-4 border-b-2 border-white">Cari</h1>
                    <div class="relative mx-auto w-full max-w-2xl focus-within:text-blue-700">
                        <form action="/registrasi/" method="get">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="flex gap-2">
                                <input name="no_reg" class="w-full py-1 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-white shadow-md border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-blue-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search for projects" aria-label="Search" />
                                <button type="submit" class="bg-blue-700 text-white rounded-md py-0 px-1">cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full lg:w-3/4 mx-auto bg-white rounded shadow-lg shadow-gray-400 py-4">
                    <div class="py-4 px-4">
                        <h1 class="font-semibold text-2xl mb-4 border-b-2 border-blue-600">Data Pribadi</h1>
                        <form action="/registrasi" method="post">
                            @csrf
                            <div class="flex flex-col mb-4 lg:flex-row">
                                <div class="mb-4 lg:w-2/3 lg:mr-1 lg:mb-0">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama">Nama Lengkap</label>
                                    <input class="appearance-none border border-b rounded w-full py-2 px-3 text-grey-darker" id="nama" name="nama" type="text" placeholder="Nama Lengkap">
                                </div>
                                <div class="lg:w-1/3 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">Jenis Kelamin</label>
                                    <div class="flex my-5">
                                        <div class="flex items-center mr-4">
                                            <input id="l" type="radio" value="l" name="jenis_kelamin"class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="l" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pria</label>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <input id="p" type="radio" value="p" name="jenis_kelamin"class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="p" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wanita</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col mb-4 lg:flex-row">
                                <div class="lg:w-1/2 lg:mr-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="tempatLahir">Tempat Lahir</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="tempatLahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir">
                                </div>
                                <div class="lg:w-1/2 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="tanggal_lahir" name="tanggal_lahir" type="date" placeholder="Tanggal lahir">
                                </div>
                            </div>
                            <div class="flex flex-col mb-4 lg:flex-row">
                                <div class="mb-4 lg:w-1/3 lg:mr-1 lg:mb-0">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="agama">agama</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="agama" name="agama" type="text" placeholder="agama">
                                </div>
                                <div class="mb-4 lg:mb-0 lg:w-1/3 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="">Status Martial</label>
                                    <div class="flex my-5">
                                        <div class="flex items-center mr-4">
                                            <input id="t" type="radio" value="1" name="status_martial" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="t" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menikah</label>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <input id="f" type="radio" value="0" name="status_martial" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="f" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Belum / Tidak Menikah</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:w-1/3 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="">Kewarganegaraan</label>
                                    <div class="flex my-5">
                                        <div class="flex items-center mr-4">
                                            <input id="wni" type="radio" value="wni" name="kewarganegaraan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="wni" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">WNI</label>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <input id="wna" type="radio" value="wna" name="kewarganegaraan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="wna" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">WNA</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="tempat_tinggal">Alamat Tempat Tinggal</label>
                                <textarea class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="tempat_tinggal" name="tempat_tinggal" placeholder="Alamat Tempat Tinggal"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="no_hp">Nomor HP</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="no_hp" name="no_hp" type="text" placeholder="nomor hp">
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" name="email" type="email" placeholder="Email">
                            </div>

                            <h1 class="font-semibold text-2xl mt-10 mb-4 border-b-2 border-blue-600">Data Asal Sekolah</h1>
                            <div class="flex flex-col my-4 lg:flex-row">
                                <div class="lg:w-2/3 mb-4 lg:mb-0 lg:mr-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="nama_sekolah">Nama Sekolah</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="nama_sekolah" name="nama_sekolah" type="text" placeholder="Nama Lengkap">
                                </div>
                                <div class="lg:w-1/3 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">Skolah</label>
                                    <div class="flex my-5">
                                        <div class="flex items-center mr-4">
                                            <input id="sma" type="radio" value="sma" name="sekolah"class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="sma" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">SMA</label>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <input id="smk" type="radio" value="smk" name="sekolah"class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="smk" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">SMK</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="jurusan_sekolah">Jurusan Skolah</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="jurusan_sekolah" name="jurusan_sekolah" type="text" placeholder="Jurusan Sekolah">
                            </div>

                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="alamat_sekolah">Alamat Sekolah</label>
                                <textarea class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah"></textarea>
                            </div>
                            <div class="flex flex-col mb-4 lg:flex-row">
                                <div class="mb-4 lg:mb-0 lg:w-1/2 lg:mr-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="lulus">Tahun Lulus</label>
                                    {{-- <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="lulus" name="tahun_lulus" type="month" placeholder="Tahun Lulus"> --}}
                                    <select class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="lulus" name="tahun_lulus" placeholder="Tahun Lulus">
                                        <option selected disabled>--Pilih Tahun--</option>
                                        @for ($i = date('Y'); $i >= 1970; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="lg:w-1/2 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="no_ijazah">No. Ijazah</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="no_ijazah" name="no_ijazah" type="text" placeholder="No Ijazah">
                                </div>
                            </div>
                            
                            <h1 class="font-semibold text-2xl mt-10 mb-4 border-b-2 border-blue-600">Data Orang Tua</h1>
                            <div class="my-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="nama_orangtua">Nama Orang Tua</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="nama_orangtua" name="nama_orangtua" type="text" placeholder="Nama Orang Tua">
                            </div>
                            <div class="flex flex-col mb-4 lg:flex-row">
                                <div class="mb-4 lg:mb-0 lg:w-1/2 lg:mr-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="no_hp_ortu">Nomor HP</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="no_hp_ortu" name="no_hp_orangtua" type="text" placeholder="Nomor HP">
                                </div>
                                <div class="lg:w-1/2 lg:ml-1">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="email_orangtua">Email</label>
                                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email_orangtua" name="email_orangtua" type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="instansi">Nama Instansi</label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="instansi" name="instansi_orangtua" type="text" placeholder="Nama Instansi">
                            </div>
                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="">Pendidikan Terakhir</label>
                                <div class="flex my-5">
                                    <div class="flex items-center mr-4">
                                        <input id="s3" type="radio" value="s3" name="pendidikan_orangtua" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="s3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">S3</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="s2" type="radio" value="s2" name="pendidikan_orangtua" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="s2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">S2</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="s1" type="radio" value="s1" name="pendidikan_orangtua" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="s1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">S1</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="diploma" type="radio" value="diploma" name="pendidikan_orangtua" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="diploma" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Diploma</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="slta" type="radio" value="slta" name="pendidikan_orangtua" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="slta" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">SLTA</label>
                                    </div>
                                </div>
                            </div>
                            
                            <h1 class="font-semibold text-2xl mt-10 mb-4 border-b-2 border-blue-600">Pilih Kelas Dan Jurusan</h1>

                            <div class="my-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Kelas</label>
                                <div class="flex mb-2">
                                    <div class="flex items-center mr-4">
                                        <input id="reguler" type="radio" value="reguler" name="kelas" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="reguler" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Regular</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="karyawan" type="radio" value="karyawan" name="kelas" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="karyawan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Karyawan</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="eksekutif" type="radio" value="eksekutif" name="kelas" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="eksekutif" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eksekutif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Ekonomi & Manajemen</label>
                                <div class="grid grid-cols-3 gap-4 mb-2">
                                    @foreach ($jurusan as $data)
                                        @if ($data->tipe == 'e')
                                        <div class="flex items-center mr-4">
                                            <input id="{{ $data->id }}" type="radio" value="{{ $data->nama }}" name="jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="{{ $data->id }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $data->nama }}</label>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="my-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Informatika</label>
                                <div class="flex mb-2">
                                    @foreach ($jurusan as $data)
                                        @if ($data->tipe == 'i')
                                        <div class="flex items-center mr-4">
                                            <input id="{{ $data->id }}" type="radio" value="{{ $data->nama }}" name="jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="{{ $data->id }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $data->nama }}</label>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex justify-end mt-8">
                                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                    type="submit">
                                    Daftar
                                </button>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection