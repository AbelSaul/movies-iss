<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\PeliculaController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    // public function testArrayConexion(){
    // 	$pelicula = new PeliculaController();
    // 	$this->assertEquals( is_array($pelicula->conexion('Shrek')), true );

    // }

    public function testConexion(){
        $pelicula = new PeliculaController();
        $film = $pelicula->conexion('Shrek');
        $this->assertEquals( is_array($film), true);
    }

    public function testNumeroActores(){
        $pelicula = new PeliculaController();
        $film = $pelicula->conexion('Shrek');
        $this->assertEquals($pelicula->numeroActores($film),4);
    }
}
