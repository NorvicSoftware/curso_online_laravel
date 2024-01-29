<x-layout>
    <h2>Editar alumno</h2>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ old('nombre_apellido', $alumno->nombre_apellido) }}">
        @error('nombre_apellido')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>edad:</label>
        <input type="text" name="edad" placeholder="Edad" value="{{ old('edad', $alumno->edad)  }}">
        @error('edad')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono', $alumno->telefono) }}">
        <label>Dirección</label>
        <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion', $alumno->direccion) }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>
