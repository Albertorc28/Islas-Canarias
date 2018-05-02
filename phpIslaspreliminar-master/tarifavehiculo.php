<?php 

require_once ("tarifa.php");

class TarifaVehiculo extends Tarifa {
    var $peso;

    function __construct ($precio, $peso) {
        parent::__construct ($precio);
        $this->peso = $peso;
    }


    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }
}