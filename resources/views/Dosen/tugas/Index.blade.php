@extends('layouts.dosen')

@section('content')
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Tugas {{ $matkul->nama }}</h1>
    </div>
    
    <a href="/dosen/tugass/create/" class=" p-1 px-3 rounded-lg text-white bg-green-500">Tambah Data</a>
</div>

<div class="w-ful px-5">
    @foreach ($tugas as $data)
    <a href="/dosen/tugas/{{ $data->id }}">
        <div class="w-full py-4 px-4 bg-white my-2 rounded-xl shadow-md">{{ $data->judul }}</div>
    </a>
    @endforeach
</div>
@endsection