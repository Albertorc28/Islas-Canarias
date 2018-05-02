<?php 

class Oficina {
    var $codpostal;

    function __construct ($cp) {
        $this->codpostal = $cp;
    }

    

    /**
     * Get the value of codpostal
     */ 
    public function getCodpostal()
    {
        return $this->codpostal;
    }

    /**
     * Set the value of codpostal
     *
     * @return  self
     */ 
    public function setCodpostal($codpostal)
    {
        $this->codpostal = $codpostal;

        return $this;
    }


    function venderBillete ($destino, $pasajero) {
        
    }

}