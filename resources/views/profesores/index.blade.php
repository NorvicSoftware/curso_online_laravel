@extends('layout')
@section('content')
    <h2>Listado de Profesores</h2>
    <a class="new-button" href="{{ route('profesores.create') }}"> Nuevo Profesor</a>
    <br/>
    <br/>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Profesión</th>
            <th>Grado Academico</th>
            <th>Teléfono</th>
            <th>Acción</th>
        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor->nombre_apellido }}</td>
                <td>{{ $profesor->profesion }}</td>
                <td>{{ $profesor->grado_academico }}</td>
                <td>{{ $profesor->telefono }}</td>
                <td>
                    <a href="{{ route('profesores.edit', $profesor->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
