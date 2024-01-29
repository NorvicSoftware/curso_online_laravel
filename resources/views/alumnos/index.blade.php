<x-layout>
    <h2>Listado de Alumnos</h2>
    <a class="new-button" href="{{ route('alumnos.create') }}"> Nuevo Alumno</a>
    <br/>
    <br/>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acción</th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>
                    <a href="{{ route('alumnos.show', $alumno->id) }}">Ver</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>



