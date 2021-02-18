<?php

include("conexionprueba.php");

$nombre=$_POST['validationServer01'];
$apellido=$_POST['validationServer02'];
$email=$_POST['validationServer03'];
$contrasena=$_POST['validationServer04'];
$nombreUsuario=$_POST['validationServerUsername'];
$tipoUsuario=$_POST['validationServer05'];

$query="INSERT INTO usuario(nombreUsuario, nombre, apellido, tipoUsuario, correoElectronico, contrasena) VALUES('$nombreUsuario', '$nombre', '$apellido','$tipoUsuario', '$email', '$contrasena')";
$resultado=$conexion->query($query);

if ($resultado){
    header("Location: adminusuarios.php");
}else{
    echo "No se ha podido guardar el registro";
}

?>