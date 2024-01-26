@extends('plantilla')

@section('cabecera', 'Editar Autor')

@section('titulo','Editar Autor')

@section('contenido')
    <div class="card mt-3">
        <div class="card-header">
            Editar Autor
        </div>
        <div class="card-body">
            <!-- Formulario -->
            <form action="{{ route('Autores.update', $autor['id']) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" value="{{ $autor['nombre'] }}" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="nacimiento" class="form-label">Año de nacimiento:</label>
                    <input type="text" value="{{ $autor['nacimiento'] }}" pattern="\d{4}" class="form-control" name="nacimiento" id="nacimiento">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('Autores.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@endsection

