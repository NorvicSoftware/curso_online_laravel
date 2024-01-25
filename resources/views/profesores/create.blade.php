@extends('layout')
@section('content')
<h2>Nuevo Profesor</h2>
<form action="{{ route('profesores.store') }}" method ="POST">
    @csrf
    <label>Nombres y Apellidos:</label>
    <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos">
    <label>Profesión:</label>
    <input type="text" name="profesion" placeholder="Profesión">
    <label>Grado Academico:</label>
    <input type="text" name="grado_academico" placeholder="Grado Academico">
    <label>Teléfono:</label>
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="submit" value="Guardar">
</form>
@endsection
