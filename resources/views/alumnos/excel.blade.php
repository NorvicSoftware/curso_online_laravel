<html lang="en">
    <body>
        <table>
            <tr>
                <th>Alumno</th>
                <th>Edad</th>
                <th>Materias</th>
            </tr>
            @foreach ($data['alumnos'] as $alumno)
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
    </body>
</html>
