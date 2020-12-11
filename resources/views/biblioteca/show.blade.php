@extends('biblioteca.layout')

@section('titulo',$biblioteca->nombre)

@section('contenido')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <a href="{{route('libros.create')}}">Añadir libro</a>
    <h1><strong>{{$biblioteca->nombre}}</strong></h1>
    <p><b>Dirección:</b> {{$biblioteca->direccion}}</p>
    <p><b>Hora de apertura:</b> {{$biblioteca->hora_apertura}}</p>
    <p><b>Hora de cierre:</b> {{$biblioteca->hora_cierre}}</p>
    <p><b>Teléfono:</b> {{$biblioteca->telefono}}</p>
    <p><b>Provincia:</b> {{$biblioteca->provincia}}</p>
    <h2>Listado de Libros</h2>
    <ul>
    @foreach($biblioteca->libros as $libro)
    <li><a href="{{route('libros.show', $libro)}}">{{$libro->nombre}}</a></li>
    @endforeach
    </ul>
            </div>
        </div>
    </div>
@endsection
