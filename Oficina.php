<?php

require_once("Tarifa.php");

class Oficina{
    var $cp;

    function __construct($cp){
        $this->cp=$cp;
    }
    
    function getCp (){
        return $this->cp;
    }

    function setCp ($cp){
        $this->cp = $cp;
    }

}