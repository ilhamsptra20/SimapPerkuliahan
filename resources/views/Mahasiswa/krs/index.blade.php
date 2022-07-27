@extends('layouts.mahasiswa')

@section('content')
<div class="py-8">
    <h1 class="text-center font-bold text-3xl">KARTU RENCANA STUDI (KRS)</h1>
</div>
    <div class="sm:px-6 lg:px-8 py-4">
        <table border="0" cellpadding="0" border color="black">        
            <tr>
                <td class="align-left">
                    <p>NIM</p>
                </td>
                <td class="px-2">
                    <p class="">: {{ auth('mahasiswa')->user()->nim }}</p>
                </td>
            </tr>
            <tr>
                <td class="align-left">
                    <p>Nama Mahasiswa</p>
                </td>
                <td class="px-2">
                    <p class="">: {{ auth('mahasiswa')->user()->nama }}</p>
                </td>
            </tr>
            <tr>
                <td class="align-left">
                    <p>Program Studi</p>
                </td>
                <td class="px-2">
                    {{-- <p class="">: S1 - {{ auth('mahasiswa')->user()->jurusan->nama }}</p> --}}
                </td>
            </tr>
            <tr>
                <td class="align-left">
                    <p>Kelas - Semester</p>
                </td>
                <td class="px-2">
                    <p class="">: TI - {{ date('Y') }} - 01 - 1</p>
                </td>
            </tr>
            <tr>
                <td class="align-left">
                    <p>KRS Semester</p>
                </td>
                <td class="px-2">
                    <p class="">: {{ auth('mahasiswa')->user()->semester }}</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="pt-4 pb-12 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl rounded-md">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-slate-100">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                    No.
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                    ID Mata Kuliah
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                    Mata Kuliah
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                    Jumlah SKS
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($matkul as $data)
                            <tr class="bg-white border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{ $loop->iteration }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{ $data->id }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{ $data->nama }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">{{ $data->jumlah_sks }}</td>
                            </tr class="bg-white border-b">
                            @endforeach
                            
                            <tr class="bg-white border-b">
                                @if ($krsMahasiswa < 1)
                                    <td colspan="3" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap ">
                                        <label class="inline-flex items-center">
                                            <span class="mr-2">Dengan ini saya menyetujui mata kuliah tersebut akan saya pelajari selama 1 semester ke depan</span>
                                            <input type="checkbox" class="form-checkbox" id="setuju">
                                        </label>
                                    </td>
                                    <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                        <form action="/mahasiswa/krs/store" method="post">
                                            @csrf
                                            <button type="submit" id="btn" disabled="disabled" class="disabled:opacity-75 disabled:hover:bg-blue-500 disabled:hover:cursor-not-allowed bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-sm">Submit</button>
                                        </form>
                                    </td>
                                @else
                                <td colspan="5" class="text-sm text-gray-900 font-base px-6 py-4 whitespace-nowrap ">
                                    <label class="inline-flex items-center">
                                        <p>Anda sudah menyetujui KARTU RENCANA STUDI ini selma 1 semester kedepan</p>
                                    </label>
                                </td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script-footer')
<script>
    let btn = document.querySelector('#btn')
    let setuju = document.querySelector('#setuju')
    setuju.addEventListener('click', () => {
        if(setuju.checked){
            btn.disabled = false
        }else{
            btn.disabled = true
            // btn.classLis
        }

    })
</script>
@endsection