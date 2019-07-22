<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PeliculaTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Buscador de Peliculas');
        });
    }

     /**
     * A Dusk busqueda pelicula.
     *
     * @return void
     */
    public function testBusquedaPelicula()
    {
        $this->browse(function ($browser) {
            $browser->visit('/') //Go to the homepage
                    ->value('#nombre', 'Shrek') 
                    ->click('button[type="submit"]') //Click the submit button on the page
                    ->assertPathIs('/busqueda') //Make sure you are in the home page
            //Make sure you see the phrase in the arguement
                    ->assertSee("Pelicula Shrew"); 
             
        });
    }
}
