@extends('biblioteca.layout')

@section('titulo',$biblioteca->nombre)

@section('contenido')
    <h1><strong>{{$biblioteca->nombre}}</strong></h1>
    <p><b>Dirección:</b> {{$biblioteca->direccion}}</p>
    <p><b>Hora de apertura:</b> {{$biblioteca->hora_apertura}}</p>
    <p><b>Hora de cierre:</b> {{$biblioteca->hora_cierre}}</p>
    <p><b>Teléfono:</b> {{$biblioteca->telefono}}</p>
    <p><b>Provincia:</b> {{$biblioteca->provincia}}</p>
    <h2>Listado de Libros</h2>
    <ul>
    @foreach($biblioteca->libros as $biblioteca)
    <li><a href="{{route('libros.show', $biblioteca)}}">{{$biblioteca->nombre}}</a></li>
    @endforeach
    </ul>
@endsection
