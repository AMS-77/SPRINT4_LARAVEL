@extends('template')

@section('subtitle', 'Listado de equipos')

@section('content')
 
<main class="bg-gray-800 h-[380px] flex flex-col items-center justify-center">
    <div class="text-center p-6 bg-gray-300 rounded-lg shadow-md">
        <table class="mt-4 w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-4 px-12">id</th>
                    <th class="py-4 px-12">Nombre</th>
                    <th class="py-4 px-12">Ciudad</th>
                    <th class="py-4 px-12">Camiseta</th>
                    <th class="py-4 px-12">Fecha de Creación</th>
                    <th class="py-4 px-12">Última Actualización</th>
                    <th class="py-4 px-12"></th>
                    <th class="py-4 px-12"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->nombre }}</td>
                        <td>{{ $team->ciudad }}</td>
                        <td>{{ $team->camiseta }}</td>
                        <td>{{ $team->created_at }}</td>
                        <td>{{ $team->updated_at }}</td>
                        <td><a href="{{url('teams/'.$team->id.'/edit')}}" class="text-blue-500 hover:underline">Editar</a></td>
                        <td>
                            <form action="{{url('teams/'.$team->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('') }}" class="text-orange-500 hover:underline">Regresar</a>
        <a href="{{ route('teams.create') }}" class="bg-orange-500 text-white px-4 py-2 rounded-full mt-4 inline-block hover:bg-green-700 transition">Crear equipo</a>

    </div>

    
</main>
@endsection