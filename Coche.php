<?php

require_once("Vehiculo.php");

class Coche extends Vehiculo{
    var $clase;
    var $precio;

    function __construct($marca,$clase,$precio){
        parent:: __construct($marca);
        $this->clase=$clase;
        $this->precio=$precio;
    }

    function getClase(){
        return $this->clase;
    }

    function setClase($clase){
        $this->clase = $clase;
    }
  
    function getPrecio(){
        return $this->precio;
    }
    
    function setPrecio($precio){
        $this->precio = $precio;
    }
}
