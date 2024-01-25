<x-layout>
    <h2>Nuevo Curso</h2>
    <form action="{{ route('cursos.store') }}" method ="POST">
        @csrf
        <label>Nombre Curso:</label>
        <input type="text" name="nombre" placeholder="Nombre Curso">
        <label>Nivel:</label>
        <input type="text" name="nivel" placeholder="Nivel">
        <label>Horas Academicas:</label>
        <input type="text" name="horas_academicas" placeholder="Horas Academicas">
        <label>Profesor:</label>
        <select id="profesor_id" name="profesor_id">
            @foreach($profesores as $profesor)
                <option value="{{$profesor->id}}"> {{ $profesor->nombre_apellido }}</option>
            @endforeach
        </select>
        <select id="alumno_ids" name="alumno_ids[]" multiple>
            @foreach($alumnos as $alumno)
                <option value="{{$alumno->id}}"> {{ $alumno->nombre_apellido }}</option>
            @endforeach
        </select>
        <input type="submit" value="Guardar">
    </form>
</x-layout>
