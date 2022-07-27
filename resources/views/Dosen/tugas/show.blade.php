@extends('layouts.dosen')

@section('content')
<div class="mt-5 mb-3">
    <h1 class="text-2xl font-semibold">{{ $tugas->judul }}</h1>
    {{-- <p class="text-sm font-extralight">dibuat {{ date('Y-m-d', strtotime($tugas->created_at)) }} --}}
</div>
<div class="">
    <p>{{ $tugas->deskripsi }}</p>
    <p class="my-2 font-semibold">deadline : {{ $tugas->deadline }}</p>
</div>

<div class="flex flex-col mb-10">
    <div class="overflow-x-auto">
        <div class="py-2 inline-block min-w-full">
            <div class="overflow-x-auto">
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
                                Nama File
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Dikirim
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tugas->pengumpulan as $jawaban)
                            <tr class="border-b bg-white hover:bg-slate-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-left font-medium text-gray-900">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-left font-medium text-gray-900">{{ $jawaban->mahasiswa->nama }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-left font-medium text-gray-900">{{ $jawaban->nama_file }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-left font-medium text-gray-900">{{ $jawaban->created_at }}</td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection