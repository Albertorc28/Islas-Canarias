<?php 

class Ruta {
    var $origen;
    var $destino;
    var $ferry;
    var $precio;
    var $duracion;

    function __construct ($o, $d, $ferry, $precio, $duracion) {
        $this->origen = $o;
        $this->destino = $d;
        $this->ferry = $ferry;
        $this->precio = $precio;
        $this->duracion = $duracion;
    }

    

    /**
     * Get the value of origen
     */ 
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set the value of origen
     *
     * @return  self
     */ 
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get the value of destino
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     *
     * @return  self
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of ferry
     */ 
    public function getFerry()
    {
        return $this->ferry;
    }

    /**
     * Set the value of ferry
     *
     * @return  self
     */ 
    public function setFerry($ferry)
    {
        $this->ferry = $ferry;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of duracion
     */ 
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set the value of duracion
     *
     * @return  self
     */ 
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }
}