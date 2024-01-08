<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" bg-no-repeat w-full h-full" style="background-image: url(https://cdn.pixabay.com/photo/2016/05/20/21/57/football-1406106_1280.jpg);">
    <div class="flex items-center justify-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-6 mt-8" style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);">Administra tu liga de fútbol</h1>
            <div class="flex flex-col items-center">
                <a href="{{ route('equipos.index') }}" class="bg-orange-500 text-white font-bold py-3 px-6 rounded mb-4 text-lg w-full">
                    Gestionar Equipos
                </a>
                <a href="{{ route('partidos.index') }}" class="bg-orange-500 text-white font-bold py-3 px-6 rounded text-lg w-full">
                    Ir a Partidos
                </a>
            </div>
        </div>
    </div>
</body>
</html>