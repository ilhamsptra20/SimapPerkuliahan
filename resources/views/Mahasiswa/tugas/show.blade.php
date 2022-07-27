@extends('layouts.mahasiswa')

@section('content')
<div class=" border-b-2 border-slate-400 px-2 py-4 flex justify-between items-end">
    <h1 class="font-bold text-2xl">{{ $tugas->judul }}</h1>
    <h2 class="font-semibold">Deadline {{ $tugas->deadline }}</h2>
</div>
<hr>
<div class=" px-2 md:py-8 sm:py-4 py-2">
    <div class="mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="md:col-span-2 sm:col-span-1 flex justify-center text-md border-b border-gray-400 rounded-sm p-2 bg-white">
                {{ $tugas->deskripsi }}
            </div>
            <div class="col-span-1 flex justify-center text-lg p-4 bg-white shadow-md border border-gray-200 rounded-lg">       
                <div class="">
                    <form class="space-y-6" method="post" action="/mahasiswa/pengumpulan-tugas/{{ $tugas->id }}" enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-base text-center font-semibold text-slate-700 pb-4">Upload Tugas</h2>
                        <div class="w-full transform border-b-2 bg-transparent">
                            <input type="file" name="file" value="{{ old('file') }}" class="block w-full text-sm text-gray-500 file:py-2 file:px-6 file:rounded file:border file:bg-transparent file:border-gray-400" required="">
                        </div>
                        @error('file')
                        <p class="text-sm m-0">{{ $message }}</p>
                        @enderror
                        <div>
                            <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                        @if ($pengumpulan->count() > 0)
                            <h2 class="font-semibold text-base {{ $pengumpulan === true ? 'text-green-500' : 'text-red-500'}}">*Dikumpulkan dengan {{ $pengumpulan === true ? 'tepat waktu' : 'terlambat'}}</h2>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection