@extends('layout')
@section('content')
    <h2>Editar Profesor</h2>
    <form action="{{ route('profesores.update', $profesor->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ $profesor->nombre_apellido }}">
        <label>Profesión:</label>
        <input type="text" name="profesion" placeholder="Profesión" value="{{ $profesor->profesion }}">
        <label>Grado Academico:</label>
        <input type="text" name="grado_academico" placeholder="Grado Academico" value="{{ $profesor->grado_academico }}">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $profesor->telefono }}">
        <input type="submit" value="Guardar">
    </form>
@endsection
