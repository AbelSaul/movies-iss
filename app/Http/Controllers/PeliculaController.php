<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DateTime;

class PeliculaController extends Controller
{


    public function busquedaForm(){
        return view('busqueda');
    }

    public function busqueda()
    {
        $datos = request();

        $film = $this->conexion($datos['nombre']);
        $numero_actores = $this->numeroActores($film);
       
        if ($film['Response'] !== 'False') {
           return view('dashboard',['film' => $film, 'numero_actores' => $numero_actores]);
        }else{
            return redirect('/')->with('denied', 'No se encontro la pelicula '.$datos['nombres']);
        }
        
    }

    public function conexion($nombre){

        $url = "http://www.omdbapi.com/?apikey=16771658&t=".$nombre;

        $options = array(
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
        );
        $handle = curl_init();
        curl_setopt_array($handle, ($options));
        $response = curl_exec($handle);
        $film=json_decode($response,true);

        return $film;
    }
    public function numeroActores($film){
        $array = explode(",", $film['Actors']);
        $numero_actores = count($array);
        return $numero_actores;
    }
     
}






