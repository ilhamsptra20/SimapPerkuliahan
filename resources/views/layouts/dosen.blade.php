@extends('layouts.app')

@section('app')
    <!-- Sidebar -->
    <aside class="z-20 overflow-y-auto pt-16 h-screen w-64 bg-white absolute lg:z-30 lg:pt-0 deactive lg:translate-x-0" id="sidebar">
        <div class="py-6">
            <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                Universitas Tertutup
            </a>
            <ul class="mt-3">
                <li class="relative px-6 py-3 hover:bg-slate-100">
                    @if (request()->is('dosen'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-orange-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a href="/dosen" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                        <i class="fa fa-home"></i>
                        <span class="ml-4 {{ request()->is('dosen') ? 'font-bold' : '' }}">Home</span>
                    </a>
                </li>
                
                <li class="relative px-6 py-3 hover:bg-slate-100">
                    @if (request()->is('dosen/tugas*'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-orange-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a href="/dosen/tugas" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                        <i class="fa-solid fa-file-pen"></i>
                        <span class="ml-4 {{ request()->is('dosen/tugas*') ? 'font-bold' : '' }}">Tugas</span>
                    </a>
                </li>
                <li class="relative px-6 py-3 hover:bg-slate-100">
                    @if (request()->is('dosen/nilai*'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-orange-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a href="/dosen/nilai" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span class="ml-4 {{ request()->is('dosen/nilai*') ? 'font-bold' : '' }}">Nilai</span>
                    </a>
                </li>
                <li class="relative px-6 py-3 hover:bg-slate-100">
                    @if (request()->is('dosen/absensi*'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-orange-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a href="/dosen/absensi" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                        <i class="fa-solid fa-list-check"></i>
                        <span class="ml-4 {{ request()->is('dosen/absensi*') ? 'font-bold' : '' }}">Absensi</span>
                    </a>
                </li>
                <li class="relative px-6 py-3 hover:bg-slate-100">
                    @if (request()->is('dosen/jadwal*'))
                        <span class="absolute inset-y-0 left-0 w-1 bg-orange-500 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                    @endif
                    <a href="/dosen/jadwal" class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                        <i class="fa-solid fa-calendar"></i>
                        <span class="ml-4 {{ request()->is('dosen/jadwal*') ? 'font-bold' : '' }}">Jadwal</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Header -->
    <header class="z-20 fixed py-4 bg-blue-700 w-full">
        <div class="container flex items-center justify-between h-full px-6 mx-auto lg:justify-end dark:text-purple-300">
            <button class="lg:hidden text-2xl text-white" id="btn-sidebar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="flex items-center justify-between" id="notif">
                <button class="w-7 h-7 rounded-full text-white text-xl" id="btn-theme">
                    <i class="fa-solid fa-moon" id="icon-theme"></i>
                </button>
                <button class="w-8 h-8 bg-red-600 rounded-full ml-2 lg:ml-5" id="btn-profile"></button>
                <div class="w-48 bg-white absolute right-20 lg:right-24 top-14 rounded-xl shadow-xl hidden" id="toggle">
                    <ul class="p-2 flex flex-col gap-2">
                        <li class="w-full p-1 hover:bg-slate-100 rounded-md font-semibold flex items-center gap-2">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <a class="" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span>logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Badrop -->
    <div class="w-full h-screen z-10 bg-gray-400 opacity-50 absolute hidden" id="badrop"></div>

    <!-- Main Content -->
    <main class="w-full h-screen bg-gray-100 pt-20 pb-1 px-4 lg:pl-72 overflow-auto" id="content">
        
        @yield('content')

    </main>

    
@endsection

@section('script-footer')
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
@endsection