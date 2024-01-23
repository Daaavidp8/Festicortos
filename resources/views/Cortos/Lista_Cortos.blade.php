@extends('plantilla')

@section('cabecera', 'Listado de libros')

@section('titulo','Listado de Libros')

@section('contenido')
    <div class="d-flex flex-wrap mt-5 g-5">
        @forelse ($cortos as $corto)
            <div class="card mb-3 col-md-4 border-0">
                <div class="card-body">
                    <h2 class="card-title">{{ $corto['titulo'] }}</h2>
                    <h4>{{ $corto['director'] }}</h4>
                    <p class="card-text">{{ $corto['sinapsis'] }}</p>
                    <a href="{{ route('Cortos.show',$corto['id']) }}" class="btn btn-primary">Mas detalles</a>
                </div>
            </div>
        @empty
            <div class="list-group-item">No se encontraron cortos</div>
        @endforelse
    </div>
@endsection
