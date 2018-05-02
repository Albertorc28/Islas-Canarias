<?php

require_once("Tarifa.php");

class TarifaPasajero extends Tarifa{
    var $edad;
   
    function __construct($precio,$edad){
        parent:: __construct($precio);
        $this->edad=$edad;
    }

    function getEdad (){
        return $this->edad;
    }

    function setEdad ($edad){
        $this->edad = $edad;
    }
}
