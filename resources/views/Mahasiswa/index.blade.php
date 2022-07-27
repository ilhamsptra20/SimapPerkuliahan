@extends('layouts.mahasiswa')

@section('content')

    @foreach ($matkul as $data)
    <a href="mahasiswa/tugas/matkul/{{ $data->id }}" class="">
        <div class="bg-white hover:bg-gray-50 mb-4 border shadow-lg p-5 rounded-xl">
            <h1 class="font-bold">{{ $data->nama }}</h1>
        </div>
    </a>
    @endforeach

@endsection