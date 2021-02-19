<?php 
class Inicio extends Controlador{

    function __construct()
    {
        parent::__construct();
        parent::cargarvista("html/cliente");
    }
}