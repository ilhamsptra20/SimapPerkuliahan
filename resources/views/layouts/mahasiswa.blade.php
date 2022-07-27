@extends('layouts.app')

@section('app')
<nav class="w-full bg-orange-500 py-4 px-5 fixed z-20 shadow-lg border-b border-blue-300">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-extrabold">UT</h1>
        <ul class="gap-10 hidden md:flex">
            <li class=""><a href="/mahasiswa/tugas" class="font-semibold text-white hover:text-gray-400">Tugas</a></li>
            <li class=""><a href="" class="font-semibold text-white hover:text-gray-400">Jadwal</a></li>
            <li class=""><a href="" class="font-semibold text-white hover:text-gray-400">Nilai</a></li>
            <li class=""><a href="/mahasiswa/krs" class="font-semibold text-white hover:text-gray-400">KRS</a></li>
        </ul>
        <a class="w-9 h-9 bg-white rounded-full" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                
        </a>
        
        <form class="hidden" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
<!-- nav mobile -->
<nav class="w-full md:hidden bottom-0 bg-orange-500 py-4 px-5 fixed z-20 shadow-t-lg border-t border-blue-300">

</nav>


<section class="lg:mx-44 sm:mx-4 px-2 py-24">
    @yield('content')
</section>
@endsection