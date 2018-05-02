<?php

class Ruta{
    var $origen;
    var $destino;
    var $ferry;
    var $precio;
    var $duraciontrayecto;

    function __construct($origen,$destino,$ferry,$precio,$duraciontrayecto){
        $this->origen=$origen;
        $this->destino=$destino;
        $this->ferry=$ferry;
        $this->precio=$precio;
        $this->duraciontrayecto=$duraciontrayecto;
    }

    function getOrigen(){
        return $this->origen;
    }

    function setOrigen($origen){
        $this->origen = $origen;
    }

    function getDestino(){
        return $this->destino;
    }

    function setDestino($destino){
        $this->destino = $destino;
    }

    function getFerry(){
        return $this->ferry;
    }

    function setFerry($ferry){
        $this->ferry = $ferry;
    }

    function getPrecio(){
        return $this->precio;
    }

    function setPrecio($precio){
        $this->precio = $precio;
    }

    function getDuraciontrayecto(){
        return $this->duraciontrayecto;
    }

    function setDuraciontrayecto($duraciontrayecto){
        $this->duraciontrayecto = $duraciontrayecto;
    }
}