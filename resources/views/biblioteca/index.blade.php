@extends('biblioteca.layout')

@section('titulo', 'Inicio')

@section('contenido')
<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <h1>Listado de bibliotecas</h1>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>
        @foreach($bibliotecas as $biblioteca)
            <tr>
                <td><a href="{{route('bibliotecas.show',$biblioteca)}}">{{$biblioteca->nombre}}</a></td>
                <td><a href="{{route('bibliotecas.edit',$biblioteca)}}"><i class="fas fa-edit"></i></a></td>
                <td>
                    <form action="{{route('bibliotecas.destroy',$biblioteca)}}" method="post" style="display: inline">
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
</main>
@endsection
