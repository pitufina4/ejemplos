<?php
require_once ("Personaex.php");

class Cliente extends Persona {
    var $pedidos;

    function __construct ($nombre,$edad,$pedidos){
        parent::__construct ($nombre, $edad);
        $this->pedidos = $pedidos;
    }

    function getPedidos (){
        return $this->pedidos;
    }

    function setPedidos($pedidos){
        $this->pedidos = $pedidos;
    }

    function mostrar () {
        parent::mostrar();
        for($i=0; $i < count($this->pedidos); $i++){
            $this->repostajes[$i]->mostrar();
        }
    }
}

?>