<?php 
// todas las rutas deben establecese desde el index
include("./Modelo/productos.modelo.php");

class Productos extends Controlador
{
    function __constructor(){
        parent::__constructor();
    }
    function index(){
        //cargar vista
        echo ">:3";
    }

}
