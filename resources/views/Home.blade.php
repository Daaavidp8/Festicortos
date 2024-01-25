@extends('plantilla')

@section('cabecera','HOME')

@section('titulo','Home')

@section('contenido')

    <div class="d-flex justify-content-around mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Listado de Libros</h5>
                <p class="card-text">Listado con una inmensa variedad de libros</p>
                <a href="{{route('Libros.index')}}" class="btn btn-primary">Ver Libros</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Listado de Autores</h5>
                <p class="card-text">Listado con una inmensa variedad de Autores</p>
                <a href="{{route('Autores.index')}}" class="btn btn-primary">Ver Autores</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Listado de Cortos</h5>
                <p class="card-text">Listado con una inmensa variedad de cortos</p>
                <a href="{{route('Cortos.index')}}" class="btn btn-primary">Ver Cortos</a>
            </div>
        </div>


    </div>

@endsection
