<x-layout>
    <h2>Listado de Cursos</h2>
    <a class="new-button" href="{{ route('cursos.create') }}"> Nuevo Curso</a>
    <br/>
    <br/>
    <table>
        <tr>
            <th>Materia</th>
            <th>Nivel</th>
            <th>Horas Academicas</th>
            <th>Profesor</th>
            <th>Alumnos</th>
            <th>Acción</th>
        </tr>
        @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->materia }}</td>
                <td>{{ $curso->nivel }}</td>
                <td>{{ $curso->horas_academicas }}</td>
                <td>{{ $curso->profesor->nombre_apellido }}</td>
                <td>
                    @foreach($curso->alumnos as $alumno)
                        {{ $alumno->nombre_apellido }} <br>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
