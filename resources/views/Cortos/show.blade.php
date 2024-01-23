@extends('plantilla')
@section('cabecera', 'Listado de libros')

@section('titulo','Listado de Libros')

@section('contenido')
    <div class="card mb-3 col-md-4 border-0">
        <div class="card-body">
            <h2 class="card-title">{{ $corto['titulo'] }}</h2>
            <h4>{{ $corto['director'] }}</h4>
            <p class="card-text">{{ $corto['sinapsis'] }}</p>
            <a href="{{ route('Cortos.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection
