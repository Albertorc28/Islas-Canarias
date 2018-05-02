<?php 

require_once ("tarifa.php");

class TarifaPasajero extends Tarifa {
    var $edad;

    function __construct ($precio, $edad) {
        parent::__construct ($precio);
        $this->edad = $edad;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
}