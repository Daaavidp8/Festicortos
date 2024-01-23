@extends('plantilla')
@section('cabecera', 'Listado de libros')

@section('titulo','Listado de Libros')

@section('contenido')
    <table>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
        </tr>
            <tr>
                <td>{{ $libro["titulo"] }} ({{ $libro["autor"] }})</td>
                <td><a href="{{ route('Libros.index') }}">Volver</a></td>
            </tr>
    </table>
@endsection
