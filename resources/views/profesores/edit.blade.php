@extends('layout')
@section('content')
    <h2>Editar Profesor</h2>
    <form action="{{ route('profesores.update', $profesor->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ old('nombre_apellido', $profesor->nombre_apellido) }}">
        @error('nombre_apellido')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Profesión:</label>
        <input type="text" name="profesion" placeholder="Profesión" value="{{ old('profesion', $profesor->profesion) }}">
        @error('profesion')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Grado Academico:</label>
        <input type="text" name="grado_academico" placeholder="Grado Academico" value="{{ old('grado_academico', $profesor->grado_academico) }}">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono', $profesor->telefono) }}">
        <input type="submit" value="Guardar">
    </form>
@endsection
