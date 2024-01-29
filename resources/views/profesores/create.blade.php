@extends('layout')
@section('content')
<h2>Nuevo Profesor</h2>
<form action="{{ route('profesores.store') }}" method ="POST">
    @csrf
    <label>Nombres y Apellidos:</label>
    <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ old('nombre_apellido') }}">
    @error('nombre_apellido')
        <p class="error-message">{{ $message }}</p>
    @enderror
    <label>Profesión:</label>
    <input type="text" name="profesion" placeholder="Profesión" value="{{ old('profesion') }}">
    @error('profesion')
    <p class="error-message">{{ $message }}</p>
    @enderror
    <label>Grado Academico:</label>
    <input type="text" name="grado_academico" placeholder="Grado Academico" value="{{ old('grado_academico') }}">
    <label>Teléfono:</label>
    <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
    <input type="submit" value="Guardar">
</form>
@endsection
