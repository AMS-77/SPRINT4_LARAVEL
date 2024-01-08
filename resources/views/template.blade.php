<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIGA-FUTBOL-APP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="bg-black p-4 text-orange-500 text-center">
        <h1 class="text-4xl font-bold">LIGA-FUTBOL-APP</h1>
    </div>

    <div class="container mx-auto my-8">
        @yield('content')
    </div>

    <footer class="bg-black py-4 text-center text-orange-500">
        <p>&copy; 2024 LIGA-FUTBOL-APP. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
