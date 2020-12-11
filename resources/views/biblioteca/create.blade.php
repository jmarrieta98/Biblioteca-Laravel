@extends('biblioteca.layout')

@section('titulo','Crear Biblioteca')

@section('contenido')
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1>Crear biblioteca</h1>
        <form action="{{route('bibliotecas.store')}}" method="post">

            @csrf

            <label for="nombre">Nombre:</label><br>
            <input name="nombre" type="text" id="nombre" value="{{old('nombre')}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="direccion">Direccion:</label><br>
            <input name="direccion" type="text" id="direccion" value="{{old('direccion')}}">
            @error('direccion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="hora_apertura">Hora de apertura:</label><br>
            <input name="hora_apertura" type="time" id="hora_apertura" value="{{old('hora_apertura')}}">
            @error('hora_apertura')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="hora_cierre">Hora de cierre:</label><br>
            <input name="hora_cierre" type="time" id="hora_cierre" value="{{old('hora_cierre')}}">
            @error('hora_cierre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="telefono">Telefono: </label><br>
            <input name="telefono" type="tel" id="telefono" value="{{old('telefono')}}">
            @error('telefono')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="provincia">Provincia:</label><br>
            <input name="provincia" type="text" id="provincia" value="{{old('provincia')}}">
            @error('provincia')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <br>

            <button type="submit">Crear</button>
        </form>
                </div>
            </div>
        </div>
    </main>
@endsection
