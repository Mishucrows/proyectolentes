<?php
class Cconexion{
function conectar(){
    $conexion = new mysqli("localhost", "root", "", "bdoptica");
    return $conexion;
}
}
?>