<?php



class Movil {

    var $marca;

    var $precio;



    



    function __construct ($marca, $precio) {

        $this->marca = $marca;

        $this->precio = $precio;

    }



    /**

     * Get the value of marca

     */ 

    public function getMarca()

    {

        return $this->marca;

    }



    /**

     * Set the value of marca

     *

     * @return  self

     */ 

    public function setMarca($marca)

    {

        $this->marca = $marca;



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

}