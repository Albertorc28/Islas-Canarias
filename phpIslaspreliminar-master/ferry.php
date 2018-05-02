<?php

class Ferry {
    var $id;
    var $asientosLibresPasajero;
    var $plazasLibresVehiculos;

    function __construct ($id, $libresp, $libresv) {
        $this->id = $id;
        $this->asientosLibresPasajero = $libresp;
        $this->plazasLibresVehiculos = $libresv;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of asientosLibresPasajero
     */ 
    public function getAsientosLibresPasajero()
    {
        return $this->asientosLibresPasajero;
    }

    /**
     * Set the value of asientosLibresPasajero
     *
     * @return  self
     */ 
    public function setAsientosLibresPasajero($asientosLibresPasajero)
    {
        $this->asientosLibresPasajero = $asientosLibresPasajero;

        return $this;
    }

    /**
     * Get the value of plazasLibresVehiculos
     */ 
    public function getPlazasLibresVehiculos()
    {
        return $this->plazasLibresVehiculos;
    }

    /**
     * Set the value of plazasLibresVehiculos
     *
     * @return  self
     */ 
    public function setPlazasLibresVehiculos($plazasLibresVehiculos)
    {
        $this->plazasLibresVehiculos = $plazasLibresVehiculos;

        return $this;
    }
}