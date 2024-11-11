@extends('layouts.auth.auth-layouts')

@section('content')
    <div class="border-2 w-2/4 m-auto py-16">
        <div class="flex flex-col items-center">
            <h1>Halaman Login</h1>
            <form class="flex flex-col gap-3" action="{{ $routeAction }}" method="post">
                @method('post')
                @csrf
                <input name="email"
                    class="bg-slate-200 px-2 py-2 pr-28 rounded-md outline-blue-600 shadow-md shadow-blue-300 @error('email') border-2 border-red-500 @enderror"
                    placeholder="Email" type="text" value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-600 -mt-3">{{ $message }}</div>
                @enderror
                <input name="password"
                    class="bg-slate-200 px-2 py-2 pr-28 rounded-md outline-blue-600 shadow-md shadow-blue-300 @error('password') border-2 border-red-500 @enderror"
                    placeholder="Password" type="password">
                @error('password')
                    <div class="text-red-600 -mt-3">{{ $message }}</div>
                @enderror
                <button class="bg-green-600 py-1 rounded-sm text-center" name="submit" type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
