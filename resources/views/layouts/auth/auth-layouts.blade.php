@php
    $app = [
        'name' => config('app.name')
    ]
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $app['name'] }} | @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <div class="mt-36">
            <main>
                {{-- Content --}}
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>