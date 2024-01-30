<x-layout>
    <h2>Reporte Cursos</h2>
    <br>
    <a class="new-button" target="_blank" href="{{ route('alumnos.reportPDF') }}"> Reporte Alumno PDF</a>
    <br>
    <br>
    <table>
        <tr>
            <th>Alumno</th>
            <th>Edad</th>
            <th>Materias</th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>
                    @foreach($alumno->cursos as $curso)
                        {{ $curso->materia }}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
