<?php 
class Controlador{

    function __construct()
    {
        $this-> vistaa= new Vista();
    }
    function cargarvista($ruta ,$vist= null){
        $this->vistaa->requerirvista($ruta,$vist);
    }
}