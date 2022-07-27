@extends('layouts.dashboard')

@section('content')
<div class="flex items-center justify-between border-b pb-1" id="title">
    <div class="flex items-center gap-4">
        <a href="" class="text-xl rotate-90 mt-2 text-sky-400 hover:text-sky-200">
            <i class="fa-solid fa-arrow-turn-down"></i>
        </a>
        <h1 class="text-2xl font-semibold">Matkul</h1>
    </div>
    
    <button class="modal-open p-1 px-3 rounded-lg text-white bg-green-500">Tambah Data</button>
</div>

<div class="w-ful px-5">
    @foreach ($matkul as $data)
    <a href="/admin/tugas/matkul/{{ $data->id }}">
        <div class="w-full py-2 px-2 bg-white my-2 rounded-xl shadow-md">{{ $data->nama }}</div>
    </a>
    @endforeach
</div>
@endsection