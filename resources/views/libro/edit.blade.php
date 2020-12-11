@extends('biblioteca.layout')

@section('titulo',$libro->nombre)

@section('contenido')
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1>Editar biblioteca</h1>
        <form action="{{route('libros.update',$libro)}}" method="post">

            @csrf

            @method('put')

            <label for="nombre">Nombre:</label><br>
            <input name="nombre" type="text" id="nombre" value="{{old('nombre',$libro->nombre)}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="autor">Autor:</label><br>
            <input name="autor" type="text" id="autor" value="{{old('autor',$libro->autor)}}">
            @error('autor')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="editorial">Editorial:</label><br>
            <input name="editorial" type="text" id="editorial" value="{{old('editorial',$libro->editorial)}}">
            @error('editorial')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="edicion">Edicion:</label><br>
            <input name="edicion" type="number" id="edicion" value="{{old('edicion',$libro->edicion)}}">
            @error('edicion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="paginas">Páginas:</label><br>
            <input name="paginas" type="number" id="paginas" value="{{old('paginas',$libro->paginas)}}">
            @error('paginas')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="publicacion">Publicación:</label><br>
            <input name="publicacion" type="date" id="publicacion" value="{{old('publicacion',$libro->publicacion)}}">
            @error('publicacion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>

            <label for="bibliotecas">Biblioteca:</label><br>
            <select name="bibliotecas" id="bibliotecas">
                <option value="{{$libro->biblioteca->id}}" selected>{{$libro->biblioteca->nombre}}</option>
                @foreach(\App\Models\biblioteca::all() as $biblioteca)
                    <option value="{{$biblioteca->id}}">{{$biblioteca->nombre}}</option>
                @endforeach
            </select>
            @error('bibliotecas')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br><br>

            <button type="submit">Editar</button>
        </form>
                </div>
            </div>
        </div>
    </main>
@endsection

