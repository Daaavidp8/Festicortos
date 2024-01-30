@extends('plantilla')

@section('cabecera', 'Listado de libros')

@section('titulo','Listado de Libros')

@section('contenido')
    <table class="table table-striped mt-1">
        <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Editorial</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <form action="{{ route('Libros.store') }}" method="POST" class="mt-1">
            @csrf
            <tr>
                <td colspan="2"><input type="text" placeholder="Añade el titulo de un Libro" class="form-control" name="titulo"></td>

                <td><input type="text" placeholder="Añade su Editorial" class="form-control" name="editorial"></td>
                <td>
                    <select name="autor" class="form-select">
                        <option selected disabled> -- Selecciona un autor -- </option>
                        @forelse ($autores as $autor)
                            <option value="{{ $autor['id'] }}">{{ $autor['nombre']}}</option>
                        @empty
                            <option value="null">
                                No se encontraron Autores
                            </option>
                        @endforelse
                    </select>
                </td>
                <td><input type="text" placeholder="Añade su Precio" pattern="-?\d+(\.\d+)?" class="form-control" name="precio"></td>
                <td>
                    <button type="submit" class="btn btn-success">Añadir</button>
                </td>
            </tr>
        </form>
        @forelse ($libros as $libro)
            <tr class="mt-1">
                <td class="text-center">{{ $libro["id"] }}</td>
                <td>{{ $libro["titulo"] }}</td>
                <td>{{ $libro["editorial"] }}</td>
                <td>
                        <?php $autorEncontrado = false; ?>

                    @foreach($autores as $autor)
                        @if($autor['id'] === $libro['id_Autor'])
                            {{ $autor['nombre'] }}
                                <?php $autorEncontrado = true; ?>
                        @endif
                    @endforeach

                    @if(!$autorEncontrado)
                        Sin Autor Especificado
                    @endif
                </td>
                <td>{{ $libro["precio"] }}</td>
                <td class="d-flex">
                    <a href="{{ route('Libros.edit',$libro['id']) }}" class="btn btn-primary btn-sm me-2">Modificar</a>
                    <form action="{{ route('Libros.destroy',$libro['id']) }}" method="post">
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
    {{ $libros->links() }}

@endsection
