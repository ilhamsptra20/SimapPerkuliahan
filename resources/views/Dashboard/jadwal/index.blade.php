@extends('layouts.dashboard')

@section('content')
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Jadwal</h1>
    </div>
    
    <button class="modal-open p-1 px-3 rounded-lg text-white bg-green-500">Tambah Data</button>
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
                                Nip
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nama
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th> 
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Action
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $data)
                            <tr class="border-b bg-white hover:bg-slate-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $data->tanggal }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $data->waktu_masuk }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $data->waktu_keluar }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                                    <a href="" class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded-full">Detail</a> |
                                    <a href="" class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full">Hapus</a>
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