@extends('layouts.dashboard')

@section('content')
<div class="bg-gray-100 rounded-lg">
    <div class="container mx-auto p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <div class="w-full mx-2">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm my-2">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 border-b border-amber-500">
                        <span class="px-4">Data Mahasiswa</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nama</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->nama }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->jenis_kelamin === 'l' ? 'Laki - Laki' : 'Perempuan' }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">No. HP</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->no_hp }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Tempat Tanggal Lahir</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->tempat_lahir }}, {{ $dataMahasiswa->tanggal_lahir }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="{{ $dataMahasiswa->email }}/">{{ $dataMahasiswa->email }}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Alamat Rumah</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->tempat_tinggal }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-3 shadow-sm rounded-sm my-2">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 border-b border-amber-500">
                        <span class="px-4">Data Mahasiswa</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nama</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->nama }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->jenis_kelamin === 'l' ? 'Laki - Laki' : 'Perempuan' }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">No. HP</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->no_hp }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Tempat Tanggal Lahir</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->tempat_lahir }}, {{ $dataMahasiswa->tanggal_lahir }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="{{ $dataMahasiswa->email }}/">{{ $dataMahasiswa->email }}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Alamat Rumah</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->tempat_tinggal }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-3 shadow-sm rounded-sm my-2">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 border-b border-amber-500">
                        <span class="px-4">Data Mahasiswa</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Nama</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->nama }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->jenis_kelamin === 'l' ? 'Laki - Laki' : 'Perempuan' }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">No. HP</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->no_hp }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Tempat Tanggal Lahir</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->tempat_lahir }}, {{ $dataMahasiswa->tanggal_lahir }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="{{ $dataMahasiswa->email }}/">{{ $dataMahasiswa->email }}</a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Alamat Rumah</div>
                                <div class="px-4 py-2">{{ $dataMahasiswa->tempat_tinggal }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of about section -->

                <div class="flex justify-end gap-4">
                    <form action="{{ route('admin.data.cek', $dataMahasiswa->no_reg) }}" method="post">
                        @csrf
                        <input type="hidden" name="status" value="0">
                        <button type="submit" class="bg-red-600 text-white py-1 px-2 rounded-lg">Tolak</button>
                    </form>
                    <form action="{{ route('admin.data.cek', $dataMahasiswa->no_reg) }}" method="post">
                        @csrf
                        <input type="hidden" name="status" value={{ true }}>
                        <button type="submit" class="bg-green-600 text-white py-1 px-2 rounded-lg">Terima</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection