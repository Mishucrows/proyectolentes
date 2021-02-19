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
        parent::cargarvista("html/adminagregarproductos");
    }
    function ingresarProdu(){
        //verificar nombre de variable aun no existe (como ella :'v)
        //$datos=array(
            $nombre = $_POST["validationServer01"];
            $marca = $_POST["validationServer02"];
            $tipo = $_POST["validationServer03"];
            $precio = $_POST["validationServer04"];
            $material = $_POST["validationServer05"];
            $sexo = $_POST["validationServer06"];
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
