@extends('layouts.app')
@section('content')
    <div style="display:flex; justify-content:center;">
        <div class="col-md-6 col-md-offset-6">
            @if(session()->has('denied'))
            <div class="alert alert-danger">
                {{ session()->get('denied') }}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Buscador de Peliculas</h1>
                </div>
                <div class="panel-body"> 
                    <form method="POST" action="{{route('busqueda')}}">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('nombre') ? 'has-error' :''}} ">
                            <label for="name">Nombre</label>
                            <input class="form-control"
                                name="nombre" 
                                value="{{old('nombre')}}"
                                placeholder="Ingresa tu nombre de la pelicula" id="nombre"> 
                          
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection  