@extends('layouts.dashboard')

@section('content')
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="/dashboard" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Nilai {{ $nilai->mahasiswa->nama }}</h1>
    </div>
</div>

<div class="flex flex-col mb-10">
    <div class="overflow-x-auto">
        <div class="py-2 inline-block min-w-full">
            <div class="overflow-x-auto">
                <form action="/admin/nilai/update/{{ $nilai->id }}" method="post">
                @csrf
                    <table class="min-w-full">
                        <thead class="border-b bg-slate-400">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    NIM
                                </th> 
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Nama
                                </th> 
                                <th scope="col" class="text-sm border font-medium text-gray-900 px-0 py-4 text-center">
                                    Nilai
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b bg-white hover:bg-slate-100">
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $nilai->mahasiswa->nim }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $nilai->mahasiswa->nama }}
                                </td>
                                <td class="text-sm border text-center text-gray-900 font-light px-0 py-4 whitespace-nowrap">
                                    <input type="number" name="nilai" value=0 maxlength="3" class="w-14 h-10 text-center text-lg font-semibold">
                                </td>
                            </tr>    
                            <input type="hidden" name="mahasiswa_id" value="{{ $nilai->mahasiswa->id }}">
                        </tbody>
                    </table>
                    <div class="flex justify-end my-5">
                        <input type="hidden" name="matkul_id" value="{{ $nilai->matkul_id }}">
                        <button type="submit" class="px-4 py-1 rounded-lg text-white bg-green-500 lg:hover:text-gray-400 lg:hover:bg-green-600">Nilai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection