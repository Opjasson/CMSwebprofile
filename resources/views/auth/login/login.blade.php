@extends('layouts.auth.auth-layouts')

@section('content')
    <div class="border-2 w-2/4 m-auto py-16">
        <div class="flex flex-col items-center">
            <h1>Halaman Login</h1>
            <form class="flex flex-col gap-3" action="{{ $routeAction }}">
                <input class="bg-slate-200 px-2 py-2 pr-28 rounded-sm" placeholder="Email" type="text">
                <input class="bg-slate-200 px-2 py-2 pr-28 rounded-sm" placeholder="Password" type="password">
                <button class="bg-green-600 py-1 rounded-sm text-center" type="submit">Login</button>
        </div>
    </div>
@endsection
