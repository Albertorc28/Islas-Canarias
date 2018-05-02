<?php

class Ferry{
   var $id;
   var $capvehiculos;
   var $cappasajeros;
   
   function __construct($id,$capvehiculos,$cappasajeros){
       $this->id=$id;
       $this->capvehiculos=$capvehiculos;
       $this->cappasajeros=$cappasajeros;
    }

    function getId(){
      return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }
    
    function getCapvehiculos(){
        return $this->capvehiculos;
    }

    function setCapvehiculos($capvehiculos){
        $this->capvehiculos = $capvehiculos;
    }

    function getCappasajeros(){
      return $this->cappasajeros;
    }

    function setCappasajeros($cappasajeros){
      $this->cappasajeros = $cappasajeros;
    }
}
