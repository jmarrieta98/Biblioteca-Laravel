<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>@yield('titulo')</title>
</head>
<body>
<x-app-layout>
<x-slot name="header">
    <nav>
        <a href="{{route("bibliotecas.index")}}">Inicio</a> -
        <a href="{{route("bibliotecas.create")}}">Añadir Biblioteca</a> -
        <a href="{{route("libros.index")}}">Ver todos los libros</a>
    </nav>
</x-slot>

@yield('contenido')
</x-app-layout>
<footer>
    <p>Página creada por José Manuel Arrieta Soto para el módulo de Desarrollo en entorno servidor</p>
</footer>
</body>
</html>
