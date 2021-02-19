<?php

include ("./Modelo/login.model.php");

/**
 * 
 */
class Ingreso extends Controlador
{
	function __constructor(){
		parent:: __constructor();
	}
	
	function index ()
	{
		#//cargar vista
		echo "holaa";
		parent::cargarvista("html/Cliente-Registrarse");
	}

	function loginc(){
		//VERIFICAR si no funciona
		

		if (isset ($_POST["nombre_usuario"]) && isset($_POST["contraseña_cliente"])) {
			echo "Inicio de sesión correcto";
			$consulta= new IngresoModelo();
			$result= $consulta->obtenerdatosu($_POST["nombre_usuario"]);
			$datosbdd="";
			var_dump($result);
			if($datosbdd["nombreUsuario"]==$_POST["nombre_usuario"]&&($datosbdd["contrasena"]==$_POST["contraseña_cliente"]))
			{
				$tipousuario=$datosbdd["tipoUsuario"];
				if($tipousuario="Administrador"){
					echo "OK soy un administrador";
				} else{
					echo "OK soy un cliente";
				}
			} else {
				echo "La contraseña o usuario no coinciden";
			}
		} 
// genera la consultas
		
	}
}