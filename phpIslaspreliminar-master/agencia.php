<?php

class Agencia {
    var $oficinas;
    var $rutas; //matriz
    var $tarifapasajeros;
    var $tarifavehiculos;

    function __construct () {
        $this->oficinas = array ("10001", "10002","10003",
                                    "10001", "10002","10003", "10004");
    
        $this->rutas = array ();
        $this->tarifapasajeros = array (
            new TarifaPasajero (10,5),
            new TarifaPasajero (11, 10),
            new TarifaPasajero (12, 15),
            new TarifaPasajero (13,30),
            new TarifaPasajero (14,45),
            new TarifaPasajero (15, 60),
            new TarifaPasajero (16, 70),
            new TarifaPasajero (17, 80)
        );
        $this->tarifasvehiculos = array (

        );
    }

    function inicializarRuta ($ruta) {
        $this->rutas[$ruta->getOrigen()][$ruta->getDestino()] = $ruta;
    }

    function calcularPrecio ($edad) {
        $enc = false;
        for ($i=0; $i < count($this->tarifapasajeros) && ($enc == false); $i++) { 
            if ($edad > $this->tarifapasajeros[$i]->getEdad()) {
                $final = $this->tarifapasajeros[$i]->getPrecio();
            } else {
                $enc = true;
            }
        }
        //echo $final;
        return $final;
    }

    function venderBillete ($origen, $destino, $pasajero) {
        $suma = $this->rutas[$origen][$destino]->getPrecio();

        //Otra forma de hacerlo por si se ve mejor
        /*
        $edad = $pasajero->getEdad();
        $extra = $this->calcularPrecio( $edad );
        $duracion = $this->rutas[$origen][$destino]->getDuracion();
        $suma = $suma + $extra * $duracion;
        */

        $suma = $suma + $this->calcularPrecio( $pasajero->getEdad() ) *
                     $this->rutas[$origen][$destino]->getDuracion();

        //Falta ver si tiene coche
                     
        if (($pasajero->getDiscap() == true) || ($pasajero->getEdad() < 18)) {
            $suma = $suma / 2;
        }

        //falta disminuir capacidad ferry
        return $suma;
    }
}