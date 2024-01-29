<x-layout>
    <h2>Nuevo Alumno</h2>
    <form action="{{ route('alumnos.store') }}" method ="POST">
        @csrf
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ old('nombre_apellido') }}">
        @error('nombre_apellido')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Edad:</label>
        <input type="text" name="edad" placeholder="Edad" value="{{ old('edad') }}">
        @error('edad')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
        <label>Dirección:</label>
        <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion') }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>

