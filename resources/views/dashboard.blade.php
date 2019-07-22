@extends('layouts.app')
@section('content')
<div style="display:flex; justify-content:center;">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                </div>
            </div>

            <h1>Pelicula {{$film['Title']}} </h1>
            <div class="panel-body">
                <table class="table">
                    <tr> 
                        <td>
                             <img style='width:100px; heigth:100px;'src='{{$film['Poster']}}' />
                        </td> 

                        <td> 
                             <p> Titulo: {{$film['Title']}} </p>
                           
                        </td> 
                        <td> 
                             <p>Numero de actores: {{$numero_actores}} </p>
                        </td> 

                        <td> 
                             <p>Anio: {{$film['Year']}} </p>
                        </td> 
                    </tr>
                </table>
            </div>
            <div class="panel-footer">

            </div>
        </div>
</div>              
@endsection