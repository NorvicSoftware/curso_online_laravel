<x-layout>
    <h2>Editar alumno</h2>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ $alumno->nombre_apellido }}">
        <label>edad:</label>
        <input type="text" name="edad" placeholder="Edad" value="{{ $alumno->edad }}">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $alumno->telefono }}">
        <label>Dirección</label>
        <input type="text" name="direccion" placeholder="Dirección" value="{{ $alumno->direccion }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>
