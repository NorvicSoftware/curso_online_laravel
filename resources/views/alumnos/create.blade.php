<x-layout>
    <h2>Nuevo Alumno</h2>
    <form action="{{ route('alumnos.store') }}" method ="POST">
        @csrf
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos">
        <label>Edad:</label>
        <input type="text" name="edad" placeholder="Edad">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono">
        <label>Dirección:</label>
        <input type="text" name="direccion" placeholder="Dirección">
        <input type="submit" value="Guardar">
    </form>
</x-layout>

