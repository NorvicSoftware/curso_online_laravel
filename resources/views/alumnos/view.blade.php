<x-layout>
    <h2>Ver Alumno</h2>
    <br>
    <label><strong>Nombres y Apellidos:</strong> {{ $alumno->nombre_apellido }}</label><br>
    <label><strong>Edad:</strong> {{ $alumno->edad }}</label><br>
    <label><strong>Teléfono:</strong> {{ $alumno->telefono }}</label><br>
    <label><strong>Dirección:</strong> {{ $alumno->direccion }}</label><br>
    @if($errors->any())
        <p class="error-message">{{$errors->first('mensaje')}}</p>
    @endif
    <br>
    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method ="POST" >
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Alumno')">
    </form>
</x-layout>
