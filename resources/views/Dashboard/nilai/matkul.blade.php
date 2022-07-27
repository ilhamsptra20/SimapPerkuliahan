@extends('layouts.dashboard')

@section('content')
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="/dashboard" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Daftar Nilai Matkul {{ $matkul->nama }}</h1>
    </div>
    <a href="/admin/nilai/create/{{ $matkul->id }}" class="p-1 px-3 rounded-lg text-white bg-green-500">Tambah Data</a>
</div>

<div class="flex flex-col mb-10">
    <div class="overflow-x-auto">
      <div class="py-2 inline-block min-w-full">
        <div class="overflow-x-auto">
          <table class="min-w-full">
            <thead class="border-b bg-slate-400">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        No
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        NIM
                    </th> 
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Nama
                    </th> 
                    <th scope="col" class="text-sm border font-medium text-gray-900 px-1 py-4 text-center">
                        Rata Rata
                    </th>
                    <th scope="col" colspan="{{ $nilai->count() }}" class="text-sm font-medium border text-gray-900 px-6 py-4 text-left">
                        Nilai
                    </th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $data)
                    <tr class="border-b bg-white hover:bg-slate-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $data->nim }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $data->nama }}
                        </td>
                        <td class="text-sm border text-center text-gray-900 font-light px-1 py-4 whitespace-nowrap">
                            {{ $data->nilai->sum('nilai') !== 0 ? $data->nilai->sum('nilai') / $data->nilai->count() : '0' }}
                        </td>
                        @foreach ($data->nilai as $nilai)
                        <td class="text-sm border text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                            <a href="/admin/nilai/{{ $nilai->id }}">
                                {{ $nilai->nilai }}
                            </a>
                        </td>
                        @endforeach
                        
                    </tr>    
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@endsection