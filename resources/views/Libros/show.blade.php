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
        @forelse ($libros as $libro)
            <tr>
                <td>{{ $libro["titulo"] }}</td>
                <td>{{ $libro["autor"] }}</td>
                <td>
                    <a href="{{ route('Libros.index',$libro['id']) }}" class="btn btn-primary btn-sm">Volver</a>
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
