@extends('biblioteca.layout')

@section('titulo','Añadir Libro')

@section('contenido')
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <h1>Añadir libro</h1>
        <form action="{{route('libros.store')}}" method="post">

            @csrf

            <label for="nombre">Nombre:</label><br>
            <input name="nombre" type="text" id="nombre" value="{{old('nombre')}}">
            @error('nombre')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="autor">Autor:</label><br>
            <input name="autor" type="text" id="autor" value="{{old('autor')}}">
            @error('autor')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="editorial">Editorial:</label><br>
            <input name="editorial" type="text" id="editorial" value="{{old('editorial')}}">
            @error('editorial')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="edicion">Edicion:</label><br>
            <input name="edicion" type="number" id="edicion" value="{{old('edicion')}}">
            @error('edicion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="paginas">Páginas:</label><br>
            <input name="paginas" type="number" id="paginas" value="{{old('paginas')}}">
            @error('paginas')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>
            <label for="publicacion">Publicación:</label><br>
            <input name="publicacion" type="date" id="publicacion" value="{{old('publicacion')}}">
            @error('publicacion')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
            <br>

            <label for="biblioteca_id">Biblioteca:</label><br>
            <select name="biblioteca_id" id="biblioteca_id">

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

            <button type="submit">Añadir</button>
        </form>
                </div>
            </div>
        </div>
    </main>
@endsection

