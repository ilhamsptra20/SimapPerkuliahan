@extends('layouts.mahasiswa')

@section('content')

    <h1 class="mb-4 border-b text-2xl font-semibold">Tugas Matkul {{ $matkul->nama }}</h1>

    @foreach ($tugas as $data)
    <a href="/mahasiswa/tugas/{{ $data->id }}" class="">
        <div class="bg-white hover:bg-gray-50 mb-4 border shadow-lg p-5 rounded-xl">
            <h1 class="font-bold">{{ $data->judul }}</h1>
        </div>
    </a>
    @endforeach

@endsection