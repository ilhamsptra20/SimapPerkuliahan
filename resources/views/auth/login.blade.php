@extends('layouts.app')

@section('app')

<div class="mt-20 min-h-full flex-initial w-96 max-w-2xl mx-auto items-center justify-center ">
	<div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm p-4 sm:p-6 lg:p-8 light:bg-dark-800 light:border-dark-700">
        <form method="POST" class="space-y-6" action="{{ route('login') }}">
            @csrf
			<h5 class="text-3xl text-center font-bold text-dark-900 light:text-black">Selamat Datang</h5>
			<h2 class="text-base text-center font-semibold text-slate-500">Masuk Ke Akun Anda</h2>
			<div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-orange-500">
				<input type="email" name="email"  class="border-b-2 border-none bg-transparent border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-500 focus:outline-none block w-full p-2.5 light:bg-dark-600 light:border-dark-500 light:placeholder-dark-400 light:text-dark @error('email') text-red-500 focus:text-gray-900 @enderror" placeholder="Email" required="" autocomplete="off" value="{{ old('email') }}">
            </div>
            @error('email')
                <span class="italic my-0 font-light text-sm text-red-600">*{{ $message }}</span>
            @enderror
            <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-orange-500">
                <input type="password" name="password" id="password" placeholder="Password" class="border-b-2 border-none bg-transparent border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 focus:outline-none block w-full p-2.5 light:bg-dark-600 light:border-dark-500 light:placeholder-dark-400 light:text-dark" required="">
            </div>
            @error('email')
                <span class="italic my-0 font-light text-sm text-red-600">*{{ $message }}</span>
            @enderror

            <div class="flex items-center h-5">
                <a href="#" class="text-sm text-orange-700 hover:underline ml-auto dark:text-orange-500">Lupa 
                    Password?</a>
            </div>
            <button type="submit" class="w-full text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-500 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Masuk</button>
						<!-- component -->
            </div>		
		</form>
	</div>
</div>
@endsection
