<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\ServiceSuscriptions;

use Auth;
use DateTime;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest',['only' => 'showLoginForm']);
        //Solo pasaran a esta ruta los invitados los no autentificados
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login()
    {
        $datos = request();
        $datos['nombre'];

        if ($serviceSuscriptions->validateDateSuscription()) { 
            return redirect('/dashboard')->with('success', 'Bienvenido');
        }else{
            return redirect('/')->with('denied', 'Su suscripcion vencio');
        }

        return back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function username(){
        return 'name';

        //retun 'name' en este caso el campo name tiene que ser unique y cambiariamos todos los email por name
    }



}
