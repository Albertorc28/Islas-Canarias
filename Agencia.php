<?php

require_once("Pasajero.php");
require_once("Ruta.php");
require_once("Oficina.php");
require_once("TarifaVehiculo.php");
require_once("TarifaPasajero.php");
require_once("Ferry.php");
require_once("Coche.php");
require_once("Camion.php");


class Agencia{
    var $nombre;
    var $pasajeros;
    var $rutas;
    var $oficinas;
    var $ferrys;
    var $tarifapasajeros;
    var $tarifavehiculos;
    
    function __construct ($nombre){
       $this->nombre = $nombre;
       $this->pasajeros = array();
       $this->rutas = array();
       $this->oficinas = array("10001","10002","10003","10004","10005","10006","10007");
       $this->ferrys = array();
       $this->tarifapasajeros = array(
            new TarifaPasajero(10,5),
            new TarifaPasajero(11,10),
            new TarifaPasajero(12,15),
            new TarifaPasajero(13,30),
            new TarifaPasajero(14,45),
            new TarifaPasajero(15,60),
            new TarifaPasajero(16,70),
            new TarifaPasajero(17,80)
        );

       $this->tarifavehiculos = array();
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function altaPasajero ($pasajero){
        $this->pasajeros[] = $pasajero;
    }

    function bajaPasajero($nif){
        $enc = false;
        for ($i = 0; $i < count ($this->pasajeros) && ($enc == false); $i++){
            if ($nif == $this->pasajeros[$i]->getNif()){
                    $this->pasajeros[$i] = null;
                    $enc = true;
            }
        }
    }

    function altaOficina ($oficina){
        $this->oficinas[] = $oficina;
    }

    function bajaOficina($cp){
        $enc = false;
        for ($i = 0; $i < count ($this->oficinas) && ($enc == false); $i++){
            if ($cp == $this->oficinas[$i]->getCp()){
                    $this->oficinas[$i] = null;
                    $enc = true;
            }
        }
    }

    function inicializarRuta($ruta){
        $this->rutas[$ruta->getOrigen()][$ruta->getDestino()]=$ruta;
    }

    function calcularPrecio($edad){
        $enc=false;
        for($i=0;$i<count($this->tarifapasajeros) && ($enc==false);$i++){
            if ($edad>$this->tarifapasajeros[$i]->getEdad()){     
                $final=$this->tarifapasajeros[$i]->getPrecio();
            }else{
                $enc=true;
            }
        }
    }

    function venderBillete($idestino,$pasajero){
        $suma=$this->rutas[$origen][$destino]->getPrecio();
        $extra=$this->calcularPrecio($pasajero->getEdad());
        $suma=$suma + $extra*$this->rutas[$origen][$destino]->getDuracion();
        
        if(($pasajero->getDiscapcitado()==true) || ($pasajero->getEdad()<18)){
            $suma=$suma/2;
        }
        return $suma;
    }




}
