<?php 

class Pasajero {
    var $nombre;
    var $nif;
    var $fechanac;
    var $discap;   

    function __construct ($nombre, $nif, $fechanac, $discap) {
        $this->nombre = $nombre;
        $this->nif = $nif;
        $this->fechanac = $fechanac;
        $this->discap = $discap;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of nif
     */ 
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set the value of nif
     *
     * @return  self
     */ 
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get the value of fechanac
     */ 
    public function getFechanac()
    {
        return $this->fechanac;
    }

    /**
     * Set the value of fechanac
     *
     * @return  self
     */ 
    public function setFechanac($fechanac)
    {
        $this->fechanac = $fechanac;

        return $this;
    }

    /**
     * Get the value of discap
     */ 
    public function getDiscap()
    {
        return $this->discap;
    }

    /**
     * Set the value of discap
     *
     * @return  self
     */ 
    public function setDiscap($discap)
    {
        $this->discap = $discap;

        return $this;
    }

    function getEdad () {
        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->fechanac);
        $diff = $date1->diff($date2); //diferencia entre fechas
        return $diff->y; 
    }
}