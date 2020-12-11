@extends('libro.layout')

@section('titulo', $libro->nombre)

@section('contenido')
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1><strong>{{$libro->nombre}}</strong></h1>
        <p><b>Autor:</b> {{$libro->autor}}</p>
        <p><b>Editorial:</b> {{$libro->editorial}}</p>
        <p><b>Número de edición:</b> {{$libro->edicion}}</p>
        <p><b>Páginas:</b> {{$libro->paginas}}</p>
        <p><b>Fecha de publicacion:</b> {{$libro->publicacion}}</p>
        <p><b>Biblioteca:</b><a href="{{route('bibliotecas.show',$libro->biblioteca)}}">{{$libro->biblioteca->nombre}}</a> </p>
                </div>
            </div>
        </div>
    </main>
@endsection
