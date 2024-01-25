@extends('plantilla')

@section('cabecera', 'Listado de Autores')

@section('titulo','Listado de Autores')

@section('contenido')
    <table class="table table-striped mt-1">
        <thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <form action="{{ route('Autores.store') }}" method="POST" class="mt-1">
            @csrf
            <td><input type="text" placeholder="Añade el nombre de un Autor" class="form-control" name="nombre"></td>
            <td><input type="text" pattern="\d{4}" class="form-control" name="nacimiento"></td>
            <td>
                <button type="submit" class="btn btn-success">Añadir</button>
            </td>
        </form>
        @forelse ($autores as $autor)
            <tr class="mt-1">
                <td>{{ $autor["nombre"] }}</td>
                <td>{{ $autor["nacimiento"] }}</td>
                <td>
                    <a href="{{ route('Libros.show',$autor['id']) }}" class="btn btn-primary btn-sm">Mostrar Más</a>
                </td>
            </tr>
        @empty
            <tr class>
                <td colspan="3" class="text-center">No se encontraron libros</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $autores->links() }}
@endsection
