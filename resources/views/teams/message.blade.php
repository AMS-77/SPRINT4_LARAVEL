@extends('template')

@section('subtitle', 'Crear equipo')

@section('content')
<main class="bg-gray-800 h-[300px] flex items-center justify-center">
    <div class="text-center p-6 bg-gray-300 rounded-lg shadow-md flex flex-col justify-between" style="height: 200px;">
        <h1 class="text-3xl font-bold mb-4 text-red-600">{{ $msg }}</h1>

        <a href="{{ route('teams.index') }}" class="inline-block px-4 py-2 text-white bg-black rounded-full hover:bg-gray-700 transition">Volver</a>
    </div>
</main>
@endsection