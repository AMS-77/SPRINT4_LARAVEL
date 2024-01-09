@extends('template')

@section('subtitle', 'Listado de equipos')

@section('content')
 
<main>
    <div>
        <a href ="{{ route('teams.create') }}">crear equipo</a>

        <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Camiseta</th>
                <th>Fecha de Creación</th>
                <th>Última Actualización</th>
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
                    <td><a href="{{url('teams/'.$team->id.'/edit')}}">Editar</a> </td>
                    <td>
                        <form action="{{url('teams/'.$team->id)}}" method="POST">
                            @method ('DELETE')
                            @csrf
                            <button type="submit">Eliminar</button> 
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div> 

    <a href="{{ url('') }}">Regresar</a>
</main>
@endsection