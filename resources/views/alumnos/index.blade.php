<x-layout>
    <h2>Listado de Alumnos</h2>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Dirección</th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_apellido }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->direccion }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>



