@extends('libro.layout')

@section('titulo', $libro->nombre)

@section('contenido')
    <main>
        <h1><strong>{{$libro->nombre}}</strong></h1>
        <p><b>Autor:</b> {{$libro->autor}}</p>
        <p><b>Editorial:</b> {{$libro->editorial}}</p>
        <p><b>Número de edición:</b> {{$libro->edicion}}</p>
        <p><b>Páginas:</b> {{$libro->paginas}}</p>
        <p><b>Fecha de publicacion:</b> {{$libro->publicacion}}</p>
        <p><b>Biblioteca:</b> {{$libro->biblioteca->nombre}}</p>
    </main>
@endsection
