<?php

class Pasajero{
    var $nombre;
    var $nif;
    var $fechanac;
    var $discapacitado;

    function __construct ($nombre,$nif,$fechanac,$discapacitado){
        $this->nombre = $nombre;
        $this->nif= $nif;
        $this->fechanac= $fechanac;
        $this->discapacitado=$discapacitado;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getNif (){
        return $this->nif;
    }

    function setNif ($nif){
        $this->nif = $nif;
    }

    function getFechanac (){
        return $this->fechanac;
    }

    function setFechanac ($fechanac){
        $this->fechanac = $fechanac;
    }

    function getDiscapacitado (){
        return $this->discapacitado;
    }

    function setDiscapacitado ($discapacitado){
        $this->discapacitado = $discapacitado;
    }

    function calcularEdad($fechanac){
        $date1 = new DateTime( date('Y-m-d') );  
        $date2 = new DateTime($fechanac);
        $diff = $date1->diff($date2);
        return $diff->y;
    }

}