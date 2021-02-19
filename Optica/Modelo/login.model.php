<?php  
include ("conexionprueba.php");
class IngresoModelo {
	function obtenerdatosu($nombreUsuario){
		$conexionpruebaA=new Cconexion();
		$query ="select* from usuarios where nombreUsuario=$nombreUsuario";
		$resul= $conexionpruebaA ->conectar()->query($query);
		if ($resul)
		{
			return $resul;
		} else {
			return "error";
		}
	}
}


