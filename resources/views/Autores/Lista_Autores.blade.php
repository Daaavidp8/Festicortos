@extends('plantilla')

@section('cabecera', 'Listado de Autores')

@section('titulo','Listado de Autores')

@section('contenido')
    <table class="table table-striped mt-1">
        <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <form action="{{ route('Autores.store') }}" method="POST" class="mt-1">
            @csrf
            <tr>
                <td colspan="2"><input type="text" placeholder="Añade el nombre de un Autor" class="form-control" name="nombre"></td>

                <td><input type="text" placeholder="Añade su fecha de nacimiento" pattern="\d{4}" class="form-control" name="nacimiento"></td>

                <td>
                    <button type="submit" class="btn btn-success">Añadir</button>
                </td>
            </tr>
        </form>
        @forelse ($autores as $autor)
            <tr class="mt-1">
                <td class="text-center">{{ $autor["id"] }}</td>
                <td>{{ $autor["nombre"] }}</td>
                <td>{{ $autor["nacimiento"] }}</td>
                <td class="d-flex">
                    <a href="{{ route('Autores.edit',$autor['id']) }}" class="btn btn-primary btn-sm me-2">Modificar</a>
                    <form action="{{ route('Autores.destroy',$autor['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
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
