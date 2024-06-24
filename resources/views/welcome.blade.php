<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/welcome.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col items-center bg-gray-100 min-h-screen">
    <header class="w-full bg-white shadow">
        @if (Route::has('login'))
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex justify-end space-x-4">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-gray-900">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">
                Log in
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <main class="flex-grow flex items-center justify-center mt-6">
        <button class="btn">
            Click me
        </button>
    </main>

    <footer class="py-16 text-center text-sm">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</body>

</html>
