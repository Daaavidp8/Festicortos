@extends('plantilla')
@section('cabecera', 'Listado de libros')

@section('titulo','Listado de Libros')

@section('contenido')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($autores as $autor)
            <tr>
                <td>{{ $autor["nombre"] }}</td>
                <td>{{ $autor["nacimiento"] }}</td>
                <td>
                    <a href="{{ route('Autores.index',$autor['id']) }}" class="btn btn-primary btn-sm">Volver</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">No se encontraron libros</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
