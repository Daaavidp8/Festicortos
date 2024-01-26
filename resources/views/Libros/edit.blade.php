@extends('plantilla')

@section('cabecera', 'Editar Libro')

@section('titulo','Editar Libro')

@section('contenido')
    <div class="card mt-3">
        <div class="card-header">
            Editar Libro
        </div>
        <div class="card-body">
            <!-- Formulario -->
            <form action="{{ route('Libros.update', $libro['id']) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" value="{{ $libro['titulo'] }}" class="form-control" name="titulo" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="nacimiento" class="form-label">Editorial:</label>
                    <input type="text" value="{{ $libro['editorial'] }}"  class="form-control" name="editorial" id="editorial">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="text" value="{{ $libro['precio'] }}" pattern="-?\d+(\.\d+)?" class="form-control" name="precio" id="precio">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('Libros.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
