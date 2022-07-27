@extends('layouts.dashboard')

@section('content')
    <div class="flex justify-between mt-8 mb-4">
        <h1 class="text-2xl font-semibold">Daftar Dosen</h1>
        {{-- <a href="admin/matkul/create" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah data</a> --}}
        <button class="modal-open inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah data</button>
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
                                    Nama
                                </th> 
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Jumlah SKS
                                </th> 
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Semester
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Dosen
                                </th> 
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Action
                                </th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matkul as $data)
                                <tr class="border-b bg-white hover:bg-slate-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $data->nama }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $data->jumlah_sks }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $data->semester }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $data->dosen_id == null ? '-' : $data->dosen->nama }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href="" class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded-full">Detail</a> |
                                        <a href="" class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded-full">Detail</a> |
                                        <a href="" class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-600 text-white rounded-full">Detail</a>
                                    </td>
                                    
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Modal-->
    <div class="modal opacity-0 pointer-events-none lg:pl-72 fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        
        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-close absolute top-14 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path></svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Tambah Data Matkul</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <!--Body-->
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Matkul</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                        id="no_ruangan" type="text" placeholder="No Ruangan">
                </div>

                <div class="lg:flex mb-4">
                    <div class="lg:w-1/2 lg:mr-2">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="nama">Jumlah SKS</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            id="nama" type="text" placeholder="Nama Lengkap">
                    </div>
                    <div class="lg:w-1/2 lg:ml-2">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="last_name">Semester</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                            id="no_hp" type="text" placeholder="Nomor Hp">
                    </div>
                </div>

                <div class="flex justify-end mt-8">
                    <button class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                        type="submit">
                        Submit
                    </button>
                </div>

                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection