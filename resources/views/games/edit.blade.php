@extends('template')

@section('subtitle', 'Editar partido')

@section('content')

<main class="bg-gray-800 h-[350px] flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-gray-300 rounded-lg shadow-md">
        @if ($errors->any())
            <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <form action="{{ url('games/' . $game->id) }}" method="POST" class="mt-4">
            @method("PUT")    
            @csrf

            <div class="mb-4">
                <label for="fecha_hora" class="block text-sm font-medium text-gray-600">Fecha_hora</label>
                <input type="datatime" id="fecha_hora" name="fecha_hora" value="{{ $game->fecha_hora }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="local_id" class="block text-sm font-medium text-gray-600">Local</label>
                <input type="text" id="local_id" name="local_id" value="{{ $game->local_id }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="visitante_id" class="block text-sm font-medium text-gray-600">Visitante</label>
                <input type="text" id="visitante_id" name="visitante_id" value="{{ $game->visitante_id }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="n_goles_local" class="block text-sm font-medium text-gray-600">goles local</label>
                <input type="int" id="n_goles_local" name="n_goles_local" value="{{ $game->n_goles_local }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="n_goles_visitante" class="block text-sm font-medium text-gray-600">goles visitante</label>
                <input type="int" id="n_goles_visitante" name="n_goles_visitante" value="{{ $game->n_goles_visitante }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="flex justify-between">
                <a href="{{ url('games') }}" class="text-orange-500 hover:underline">Regresar</a>
                <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-700 transition">Guardar</button>
            </div>
        </form>
    </div>
</main>
@endsection