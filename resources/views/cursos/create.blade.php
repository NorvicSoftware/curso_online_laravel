<x-layout>
    <h2>Nuevo Curso</h2>
    <form action="{{ route('cursos.store') }}" method ="POST">
        @csrf
        <label>Materia:</label>
        <input type="text" name="materia" placeholder="Materia" value="{{ old('materia') }}">
        @error('materia')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Nivel:</label>
        <input type="text" name="nivel" placeholder="Nivel" value="{{ old('nivel') }}">
        @error('nivel')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Horas Academicas:</label>
        <input type="text" name="horas_academicas" placeholder="Horas Academicas">
        <label>Profesor:</label>
        <select id="profesor_id" name="profesor_id">
            @foreach($profesores as $profesor)
                @if(old('profesor_id') == $profesor->id)
                    <option value="{{$profesor->id}}" selected>{{$profesor->nombre_apellido }} </option>
                @else
                    <option value="{{$profesor->id}}">{{ $profesor->nombre_apellido }} </option>
                @endif
            @endforeach
        </select>
        @error('profesor_id')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <select id="alumno_ids" name="alumno_ids[]" multiple>
            @foreach($alumnos as $alumno)
                @if(old('alumno_ids') == $alumno->id)
                    <option value="{{$alumno->id}}" selected>{{$alumno->nombre_apellido }} </option>
                @else
                    <option value="{{$alumno->id}}">{{ $alumno->nombre_apellido }} </option>
                @endif
            @endforeach
        </select>
        @error('alumno_ids')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <input type="submit" value="Guardar">
    </form>
</x-layout>
