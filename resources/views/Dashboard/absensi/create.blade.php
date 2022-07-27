@extends('layouts.dashboard')

@section('content')
    
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="/admin/absensi/{{ $matkul->id }}" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Absensi matkul {{ $matkul->nama }} Tanggal {{ $jadwal->tanggal }}</h1>
    </div>
</div>

<div class="flex flex-col mb-10">
    <div class="overflow-x-auto">
        <div class="py-2 inline-block min-w-full">
            <div class="overflow-x-auto">
                <form action="{{ route('absensi.store') }}" method="post">
                    @csrf
                    <table class="min-w-full">
                        <thead class="border-b bg-slate-400">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 py-4 text-center">
                                    No
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Nama
                                </th> 
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    {{ $jadwal->tanggal }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mahasiswa)
                                <tr class="border-b bg-white hover:bg-slate-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $mahasiswa->nama }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-900">
                                        <div class="flex gap-3">
                                            <div class="flex items-center gap-1">
                                                <label for="m{{ $loop->iteration }}">M</label>
                                                <input type="radio" name="{{ $mahasiswa->id }}" id="m{{ $loop->iteration }}" value="m" checked>
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <label for="i{{ $loop->iteration }}">I</label>
                                                <input type="radio" name="{{ $mahasiswa->id }}" id="i{{ $loop->iteration }}" value="i">
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <label for="s{{ $loop->iteration }}">S</label>
                                                <input type="radio" name="{{ $mahasiswa->id }}" id="s{{ $loop->iteration }}" value="s">
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <label for="a{{ $loop->iteration }}">A</label>
                                                <input type="radio" name="{{ $mahasiswa->id }}" id="a{{ $loop->iteration }}" value="a">
                                            </div>
                                        </div>
                                    </td>
                                </tr>    
                                <input type="hidden" name="mahasiswa_id[]" value="{{ $mahasiswa->id }}">
                            @endforeach
                        </tbody>
                    </table>
                    <div class="w-full flex justify-end my-6">
                        <input type="hidden" name="matkul_id" value="{{ $matkul->id }}">
                        <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}">
                        <input type="hidden" name="tanggal" value="{{ $jadwal->tanggal }}">
                        <button type="submit" class="px-3 py-1 rounded-lg text-lg text-white font-semibold bg-green-500 hover:bg-green-700">Absen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection