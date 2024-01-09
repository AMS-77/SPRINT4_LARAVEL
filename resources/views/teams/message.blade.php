@extends('template')

@section('subtitle', 'Crear equipo')

@section('content')
<main>
    <div>
        <h1>{{ $msg }}</h1>

        <a href="{{ route('teams.index') }}">Volver</a>
    </div>
</main>
@endsection