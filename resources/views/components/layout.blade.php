<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Curso de Laravel</title>
    </head>
    <body>
        <ul>
            <li><a href="{{ route('profesores.index') }}">Profesores</a></li>
            <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
            <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
        </ul>
        {{ $slot }}
    </body>
</html>
<style>
    body {
        margin: auto;
        padding: 50px;
    }
    table {
        border-collapse:collapse;
        width: 100%;
    }
    table, td, th {
        border: 1px solid black;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid #e7e7e7;
        background-color: #f3f3f3;
    }
    li {
        float: left;
    }
    li a {
        display: block;
        color: #666;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover:not(.active) {
        background-color: #ddd;
    }
    li a.active {
        color: white;
        background-color: #04AA6D;
    }
</style>
