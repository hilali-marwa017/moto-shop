<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MotoShop')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="d-flex">

    @include('layouts.sidebar')

    <div class="flex-grow-1 d-flex flex-column" style="min-height:100vh;">
        <main class="flex-grow-1 p-4 fade-in">
            @if(session('success'))
                <div class="alert alert-success" >
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</div>
</body>
</html>