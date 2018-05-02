<?php

require_once("Tarifa.php");

class TarifaVehiculo extends Tarifa{
    var $peso;

    function __construct($precio,$peso){
        parent:: __construct($precio);
        $this->peso=$peso;
    }

    function getPeso (){
        return $this->peso;
    }

    function setPeso ($peso){
        $this->peso = $peso;
    }
}
