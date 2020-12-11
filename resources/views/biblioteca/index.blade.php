@extends('biblioteca.layout')

@section('titulo', 'Inicio')

@section('contenido')
<main>
    <h1></h1>
    <table>
        <tbody>
        @foreach($bibliotecas as $biblioteca)
            <tr>
                <td><a href="{{route('bibliotecas.show',$biblioteca)}}">{{$biblioteca->nombre}}</a></td>
                <td><a href="{{route('bibliotecas.edit',$biblioteca)}}">Editar</a></td>
                <td>
                    <form action="{{route('bibliotecas.destroy',$biblioteca)}}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
@endsection
