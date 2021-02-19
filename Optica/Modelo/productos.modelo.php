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
    
    // función modificar
    function modificar( $id, $nombre, $marca, $tipo, $precio, $material, $sexo){
        // intanciamos la conexion
        $conexion = new Cconexion();
        if (isset($_GET["id"])) //adquirimos el parametro del id
        {
            $id = $_GET["id"];
            $query = "SELECT * FROM producto WHERE id=$id";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result); //Estamos ubicandonos en la tabla del id
                $nombre = $row['nombre'];
                $marca = $row['marca'];
                $tipo = $row['tipo'];
                $precio = $row['precio'];
                $material = $row['material'];
                $sexo = $row['sexo'];
            }
        }
        if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $nombre= $_POST['nombre']; //estamos modificando los datos
            $marca = $_POST['marca']; 
            $tipo = $_POST['tipo'];
            $precio = $_POST['precio'];
            $material = $_POST['material'];
            $sexo = $_POST['sexo'];
            
            $query = "UPDATE producto set nombre = '$nombre', marca = '$marca', tipo = '$tipo', precio = '$precio', material = '$material', sexo = '$sexo' WHERE id=$id";
            mysqli_query($con, $query);
            echo "Se actualizo correctamente";
        }

}
