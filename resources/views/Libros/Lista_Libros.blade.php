@extends('plantilla')

@section('cabecera', 'Listado de libros')

@section('titulo','Listado de Libros')

@section('contenido')
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
        </tr>

        @forelse ($libros as $libro)
            <tr>
                <td>{{ $libro["titulo"] }} ({{ $libro["autor"] }})</td>
                <td><a href="{{ route('Libros.show',$loop->index) }}">Mostrar Mas</a></td>
            </tr>
        @empty
            <tr>
                <td class="list-group-item">No se encontraron libros</td>
            </tr>
        @endforelse
    </table>
@endsection
