<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use App\Http\Controllers\PeliculaController;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    private $busqueda;
    private $pelicula;
    private $total;
     
    /**
     * @Given que tengo el nombre de la pelicula :nombre
     */
    public function iHaveTheNumberAndTheNumber($nombre) {
        $this->busqueda = new PeliculaController();
        $this->pelicula = $this->busqueda->conexion($nombre);
    }

    /**
    * @When busco 
    */
    public function iAddThemTogether() {
       $this->total = $this->busqueda->numeroActores($this->pelicula);
    }

    /** 
    * @Then deberia obtener :total 
    */
    public function iShouldGet($total) {
        if ($this->total != $total) {
            throw new Exception("Actual sum: ".$this->total);
        }
        return $this->total;
    }
}
