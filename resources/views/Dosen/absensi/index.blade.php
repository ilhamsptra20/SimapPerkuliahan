@extends('layouts.dosen')

@section('content')
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="/dosen/absensi/" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Absensi matkul {{ $matkul->nama }}</h1>
    </div>
</div>


<div class="flex flex-col mb-10">
    <div class="overflow-x-auto">
        <div class="py-2 inline-block min-w-full">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="border-b bg-slate-400">
                        <tr>
                            <th scope="col" class=" border text-sm font-medium text-gray-900 px-2 py-4 text-center">
                                No
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nama
                            </th> 
                            @foreach ($jadwal as $tanggal)
                                <th scope="col" class="border text-sm font-medium text-white text-center {{ strtotime($tanggal->tanggal) > strtotime(date('Y-m-d')) ? '' : 'lg:hover:text-blue-400' }}">
                                    @if ( strtotime($tanggal->tanggal) > strtotime(date('Y-m-d')))
                                        <p class="">
                                            {{ date('m/d', strtotime($tanggal->tanggal)) }}
                                        </p>
                                    @else
                                    <a href="/dosen/absensi/cek/{{$tanggal->id}}" class="w-full h-full underline">
                                        {{ date('m/d', strtotime($tanggal->tanggal)) }}
                                    </a>
                                    @endif
                                </th>
                            @endforeach
                            <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-center border">
                                M
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-center border">
                                I
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-center border">
                                S
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-center border">
                                A
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mahasiswa)
                            <tr class="border-b bg-white hover:bg-slate-100">
                                <td class="px-2 border py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">{{ $loop->iteration }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $mahasiswa->nama }}
                                </td>
                                @foreach ($jadwal as $tanggal)
                                <td class="text-center px-6 py-2 whitespace-nowrap border">
                                    @foreach ($absensi as $absen)
                                        @if ($absen->jadwal_id === $tanggal->id && $absen->mahasiswa_id === $mahasiswa->id)
                                            @if ($absen->status === 'm')
                                            <div class="text-green-500">
                                                <i class="fa-solid fa-m"></i>
                                            </div>
                                            @endif
                                            @if ($absen->status === 's')
                                            <div class="text-yellow-500">
                                                <i class="fa-solid fa-s"></i>
                                            </div>
                                            @endif
                                            @if ($absen->status === 'i')
                                            <div class="text-yellow-500">
                                                <i class="fa-solid fa-i"></i>
                                            </div>
                                            @endif
                                            @if ($absen->status === 'a')
                                            <div class="text-red-500">
                                                <i class="fa-solid fa-a"></i>
                                            </div>
                                            @endif
                                            @if ($absen->status === null )
                                            <div class="text-red-500">
                                                belum ada absen
                                            </div>
                                            @endif
                                        @endif
                                    @endforeach   
                                </td>
                                @endforeach
                                <td class="text-center px-2 py-4 whitespace-nowrap border">
                                    {{ $mahasiswa->absensi->where('status', 'm')->count() }}
                                </td>
                                <td class="text-center px-2 py-4 whitespace-nowrap border">
                                    {{ $mahasiswa->absensi->where('status', 'i')->count() }}
                                </td>
                                <td class="text-center px-2 py-4 whitespace-nowrap border">
                                    {{ $mahasiswa->absensi->where('status', 's')->count() }}
                                </td>
                                <td class="text-center px-2 py-4 whitespace-nowrap border">
                                    {{ $mahasiswa->absensi->where('status', 'a')->count() }}
                                </td>
                            </tr>    
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection