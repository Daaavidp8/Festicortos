@extends('plantilla')

@section('cabecera', 'Filtro por Autor')

@section('titulo','Filtro por Autor')

@section('contenido')
    <form action="{{ route('filtroMostrar') }}" method="post" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="autor" class="form-label">Selecciona un autor para filtrar:</label>
            <select name="autor" id="autor" class="form-select">
                <option selected disabled> -- Selecciona un autor -- </option>
                @forelse ($autores as $autor)
                    <option value="{{ $autor['id'] }}">{{ $autor['nombre']}}</option>
                @empty
                    <option value="null" disabled>
                        No se encontraron Autores
                    </option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Buscar Libros</button>
    </form>

    @if(isset($libros))
        <h1 class="mt-4">Libros de {{$autorbuscado}}</h1>
        @if(count($libros) > 0)
            <ul class="list-group">
                @foreach($libros as $libro)
                    <li class="list-group-item">{{ $libro->titulo }}</li>
                @endforeach
            </ul>
        @else
            <h2 class="mt-3">No se encontraron libros</h2>
        @endif
    @endif

@endsection

