<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sesión Golfa')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    @include('partials.navbar') <!-- Incluimos la barra de navegación -->

    <div class="container">
        @yield('content') <!-- Sección dinámica para cada vista -->
    </div>
</body>
</html>
