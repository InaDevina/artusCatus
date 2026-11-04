<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Artus Catus')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="site-header">
        <nav class="navbar">
            <a href="/" class="navbar-logo">
                <img src="{{ asset('images/products/logo artuscatus.png') }}" alt="Artus Catus Logo" class="logo-image">
                <span class="logo-text">ARTUS CATUS</span>
            </a>

            <div class="navbar-menu">
                <a href="/">Home</a>
                <a href="/catalog">Catalog</a>
                <a href="/about">About Us</a>
                <a href="/contact">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>
            &copy; {{ date('Y') }} Artus Catus. All rights reserved.
        </p>
    </footer>
</body>
</html>
