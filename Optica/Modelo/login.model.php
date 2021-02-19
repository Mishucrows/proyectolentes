<?php  
include ("conexionprueba.php");
class IngresoModelo {
	function obtenerdatosu($nombreUsuario){
		$conexionpruebaA = new Cconexion();
		$query ="SELECT * FROM usuario WHERE nombreUsuario = '$nombreUsuario'";
		$resul= $conexionpruebaA->conectar()->query($query);
		// $resul= Cconexion::conectarv2()->query($query);
		
		if ($resul)
		{
			return $resul->fetch_assoc();
		} else {
			return "error";
		}
	}
}


