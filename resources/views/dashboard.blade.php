<x-app-layout>
    <x-slot name="header">
        <nav>
            <a href="{{route("bibliotecas.index")}}">Inicio</a> -
            <a href="{{route("bibliotecas.create")}}">Añadir Biblioteca</a> -
            <a href="{{route("libros.index")}}">Ver todos los libros</a>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Bienvenido</h1>
                <p>Bienvenido a la aplicación, en el menu de navegación podras entrar en las bibliotecas o libros</p>
            </div>
        </div>
    </div>
</x-app-layout>
