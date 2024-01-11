@extends('template')

@section('subtitle', 'Listado de partidos')

@section('content')
 
<main class="bg-gray-800 h-[380px] flex flex-col items-center justify-center">
    <div class="text-center p-6 bg-gray-300 rounded-lg shadow-md">
        <table class="mt-4 w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-4 px-12">id</th>
                    <th class="py-4 px-12">Fecha_hora</th>
                    <th class="py-4 px-12">Local</th>
                    <th class="py-4 px-12">Visitante</th>
                    <th class="py-4 px-12">goles local</th>
                    <th class="py-4 px-12">goles visitante</th>
                    <th class="py-4 px-12"> </th>
                    <th class="py-4 px-12"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game->id }}</td>
                        <td>{{ $game->fecha_hora }}</td>
                        <td>{{ $game->local }}</td>
                        <td>{{ $game->visitante }}</td>
                        <td>{{ $game->n_goles_local }}</td>
                        <td>{{ $game->n_goles_visitante }}</td>
                        <td><a href="{{url('games/'.$game->id.'/edit')}}" class="text-blue-500 hover:underline">Editar</a></td>
                        <td>
                            <form action="{{url('games/'.$game->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('') }}" class="text-orange-500 hover:underline mr-5">Regresar</a>
        <a href="{{ route('games.create') }}" class="bg-orange-500 text-white px-4 py-2 rounded-full mt-4 inline-block hover:bg-green-700 transition">Crear partido</a>

    </div>

    
</main>
@endsection