@extends('layouts.mahasiswa')

@section('content')
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
                    <th scope="col" class="text-sm border font-medium text-gray-900 px-1 py-4 text-center">
                        Matkul
                    </th>
                    <th scope="col" class="text-sm border font-medium text-gray-900 px-1 py-4 text-center">
                        Rata Rata
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkul as $matkul)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium border text-gray-900">{{ $loop->iteration }}</td>
                    
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium border text-gray-900">
                        {{ $matkul->nama }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium border text-gray-900">
                        {{ $matkul->nilai->sum('nilai') > 0 ? $matkul->nilai->sum('nilai')/$matkul->nilai->count() : '0' }}
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