<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::post('login','Auth\LoginController@login')->name('login');
// Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('/','PeliculaController@busquedaForm');  
Route::post('busqueda','PeliculaController@busqueda')->name('busqueda');


Route::get('pelicula','PeliculaController@pelicula')->name('pelicula');

