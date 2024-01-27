<x-layout>
    <h2>Editar Curso</h2>
    <form action="{{ route('cursos.update', $curso->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre Curso:</label>
        <input type="text" name="nombre" placeholder="Nombre Curso" value="{{ $curso->nombre }}">
        <label>Nivel:</label>
        <input type="text" name="nivel" placeholder="Nivel" value="{{ $curso->nivel }}">
        <label>Horas Academicas:</label>
        <input type="text" name="horas_academicas" placeholder="Horas Academicas" value="{{ $curso->horas_academicas }}">
        <select id="profesor_id" name="profesor_id">
            @foreach($profesores as $profesor)
                @if($profesor->id == $curso->profesor_id)
                    <option value="{{$profesor->id}}" selected> {{ $profesor->nombre_apellido }}</option>
                @else
                    <option value="{{$profesor->id}}"> {{ $profesor->nombre_apellido }}</option>
                @endif
            @endforeach
        </select>
        <select id="alumno_ids" name="alumno_ids[]" multiple>
            @foreach($alumnos as $alumno)
                @php $valor = 0; @endphp
                @foreach($alumno_curso as $alumno_curso_valor)
                    @if($alumno->id == $alumno_curso_valor->alumno_id)
                        @php $valor = 1; @endphp
                    @endif
                @endforeach
                @if($valor == 1)
                    <option value="{{$alumno->id}}" selected> {{ $alumno->nombre_apellido }}</option>
                @else
                    <option value="{{$alumno->id}}"> {{ $alumno->nombre_apellido }}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="Guardar">
    </form>
</x-layout>
