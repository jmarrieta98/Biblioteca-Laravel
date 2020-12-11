@extends('biblioteca.layout')

@section('titulo','Libros')

@section('contenido')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <a href="{{route('libros.create')}}">Añadir libro</a>

    <table>
        <thead><tr>
            <td>Nombre</td>
            <td>Biblioteca</td>
            <td>Editar</td>
            <td>Borrar</td>
        </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>
                    <a href="{{route('libros.show',$libro)}}">{{$libro->nombre}}</a>
                </td>
                <td>
                    <a href="{{route('bibliotecas.show',$libro->biblioteca)}}">{{$libro->biblioteca->nombre}}</a>
                </td>
                <td>
                    <a href="{{route('libros.edit',$libro)}}"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{route('libros.destroy',$libro)}}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
@endsection
