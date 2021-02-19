<?php
include("conexionprueba.php");

class ProductoModelo{
    function registrarProdu($nombre, $marca, $tipo, $precio, $material, $sexo){
        $nuevaconexion = new Cconexion();
        $query = "INSERT INTO producto(nombre, marca, tipo, precio, material, sexo) VALUES('$nombre', '$marca', '$tipo', '$precio', '$material', '$sexo')";
        $resul = $nuevaconexion->conectar()->query($query);
        var_dump ($resul);
        if($resul){
            return "okey";
        }else{
            return "error";
        }
    }
    function mostrar(){
        $conexion = new Cconexion();
        $query="SELECT * FROM producto";
        $resultado= $conexion->conectar()->query($query);
        return $resultado;
    }

}
