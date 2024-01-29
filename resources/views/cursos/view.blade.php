<x-layout>
    <h2>Ver Curso</h2>
    <br>
    <label>Materia: {{ $curso->materia }}</label><br>
    <label>Nivel: {{ $curso->nivel }}</label><br>
    <label>Horas Academicas: {{ $curso->horas_academicas }}</label><br>
    <label>Profesor: {{ $curso->profesor->nombre_apellido }}</label><br>
    <label>Alumnos:</label>
    <ul>
        @foreach($curso->alumnos as $alumno)
            <li>{{ $alumno->nombre_apellido }}</li><br>
        @endforeach
    </ul>
    @if($errors->any())
        <p class="error-message">{{$errors->first('mensaje')}}</p>
    @endif
    <br>
    <form action="{{ route('cursos.destroy', $curso->id) }}" method ="POST" >
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Curso')">
    </form>
</x-layout>
