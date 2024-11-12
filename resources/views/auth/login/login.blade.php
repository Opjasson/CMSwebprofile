@extends('layouts.auth.auth-layouts')

@section('content')
    <div class="sm:w-10/12 md:w-2/3 lg:w-2/4 rounded-lg w-fit m-auto py-16 bg-gradient-to-r from-[#eeaeca] to-[#94bbe9]">
        <div class="flex flex-col items-center md:p-0 p-2">
            <img src="" alt="Logo">
            <h1 class="md:text-3xl sm:text-xl text-lg font-mono ">LOGIN ADMIN</h1>
            <form class="flex flex-col gap-3" action="{{ $routeAction }}" method="post">
                @method('post')
                @csrf
                <input name="email"
                    class="bg-slate-200 md:px-2 px-1 py-2 md:pr-28 pr-0 rounded-md md:w-full w-72 outline-blue-600 shadow-md shadow-blue-300 @error('email') border-2 border-red-500 @enderror"
                    placeholder="Email" type="text" value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
                @enderror
                <input name="password"
                    class="bg-slate-200 md:px-2 px-1 py-2 pr-28 rounded-md md:w-full w-72 outline-blue-600 shadow-md shadow-blue-300 @error('password') border-2 border-red-500 @enderror"
                    placeholder="Password" type="password">
                @error('password')
                    <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
                @enderror
                <button class="bg-blue-600 py-1 rounded-md md:w-full w-72 text-white hover:bg-blue-700 text-center" name="submit" type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
