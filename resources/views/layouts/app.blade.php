<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'School Platform')</title>
    @vite(['resources/css/app.css']) <!-- Si usas Vite -->
</head>
<body class="bg-blue-100 font-sans text-gray-900">
    <!-- Menú -->
    <nav class="bg-blue-800 text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">School Platform</h1>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-blue-300">Inicio</a></li>
                <li><a href="{{ route('projects.index') }}" class="hover:text-blue-300">Proyectos</a></li>
                <li><a href="{{ route('profile.show')}}" class="hover:text-blue-300">Perfil</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-4 mt-12">
        <div class="container mx-auto text-center">
            <p>© 2024 School Platform. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
