@extends('layout')
@section('content')
<h2>Ver Profesor</h2>
<br>
<label><strong>Nombres y Apellidos:</strong> {{ $profesor->nombre_apellido }}</label><br>
<label><strong>Profesión:</strong> {{ $profesor->profesion }}</label><br>
<label><strong>Grado Académico:</strong> {{ $profesor->grado_academico }}</label><br>
<label><strong>Teléfono:</strong> {{ $profesor->telefono }}</label><br>
@if($errors->any())
    <p class="error-message">{{$errors->first('mensaje')}}</p>
@endif
<br>
<form action="{{ route('profesores.destroy', $profesor->id) }}" method ="POST" >
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Profesor')">
</form>
@endsection
