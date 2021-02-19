<?php 
class Inicio extends Controlador{

    function __construct()
    {
        parent::__construct();
    }
    /*
    * Metodo index permite cargar la vista principal por default
    */
    function index(){
        parent::cargarvista("html/cliente");
    }
}