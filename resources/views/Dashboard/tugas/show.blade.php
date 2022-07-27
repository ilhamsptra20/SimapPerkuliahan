@extends('layouts.dashboard')

@section('content')
<div class="mt-5 mb-3">
    <h1 class="text-2xl font-semibold">{{ $tugas->judul }}</h1>
    {{-- <p class="text-sm font-extralight">dibuat {{ date('Y-m-d', strtotime($tugas->created_at)) }} --}}
</div>
<div class="">
    <p>{{ $tugas->deskripsi }}</p>
    <p class="my-2 font-semibold">deadline : {{ $tugas->deadline }}</p>
</div>
@endsection