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
        parent::cargarvista("prueba/index");
    }
    function ingresarProdu(){
        //verificar nombre de variable aun no existe (como ella :'v)
        //$datos=array(
            $nombre = $_POST["nombreProducto"];
            $marca = $_POST["marcaProducto"];
            $tipo = $_POST["tipoProducto"];
            $precio = $_POST["precioProducto"];
            $material = $_POST["materialProducto"];
            $sexo = $_POST["sexoProducto"];
       // );

        //se realiza la consulta
        $consulta = new ProductoModelo();
        $result = $consulta->registrarProdu($nombre, $marca, $tipo, $precio, $material, $sexo);
        if ($consulta == "okey"){
            echo "Si se guardo";
        }
        else{
            echo $result;
        }
    }
    
    function mostrarcontrolador(){
        $consulta = new ProductoModelo();
        $result  = $consulta->mostrar();
        parent::cargarvista("html/adminproductos.php",$consulta);
    }

}
