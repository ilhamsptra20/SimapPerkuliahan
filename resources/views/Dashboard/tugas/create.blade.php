@extends('layouts.dashboard')

@section('content')
<div class="border-b-2 mt-8">
    <h1 class="font-bold text-xl my-2 mx-2">
        Buat Tugas
    </h1>
</div>
<div class="d-flex mx-2">
    <form action="/admin/tugas/store" method="post">
        @csrf
        <div class="mb-5">
            <label class="text-xl font-semibold my-2" for="username">
                <label for="judul" class="font-semibold text-lg my-2">
                    Judul Tugas
                </label>
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="judul" name="judul" type="text">
        </div>
        <div class="mb-5">
            <label for="deskripsi" class="font-semibold text-lg my-2">
                Deskripsi
            </label>
            <input id="deskripsi" type="hidden" name="deskripsi">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        
        <div class="mb-5 flex gap-4">
            <div>
                <label for="deadline">Deadline</label>
                <input type="date" name="date" id="deadline">
            </div>
            <div>
                <label for="deadline">Deadline</label>
                <input type="time" name="time" id="deadline">
            </div>
        </div>
        <input type="hidden" name="matkul_id" value="{{ $matkul->id }}">
        <div class="flex items-center justify-end my-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Buat    
            </button>
        </div>


    </form> 
</div>
@endsection