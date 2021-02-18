<?php 

// como se llama conexion , usuario,clave , base de datos a conectar 
//$conexion = mysqli_connect(nombreconexion,usuario,clave,datos);
$conexion = mysqli_connect('localhost','root','','Optica');
if (!$conexion){
    echo "error"+mysqli_connect_error();
}
