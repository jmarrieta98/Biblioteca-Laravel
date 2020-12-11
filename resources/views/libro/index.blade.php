@extends('biblioteca.layout')

@section('titulo','Libros')

@section('contenido')
    <a href="{{route('libros.create')}}">Añadir libro</a>
    <ul>
    @foreach($libros as $libro)
        <li><a href="{{route('libros.show',$libro)}}">{{$libro->nombre}}</a> - <a href="{{route('bibliotecas.show',$libro->biblioteca)}}">{{$libro->biblioteca->nombre}}</a> - <a href="{{route('libros.edit',$libro)}}">Editar</a>
            <form action="{{route('libros.destroy',$libro)}}" method="post" style="display: inline">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form></li>
    @endforeach
    </ul>
@endsection
