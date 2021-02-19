<?php
    // todas las rutas deben establecese desde el index
    include("./Modelo/usuario.modelo.php");
class Usuario extends Controlador{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->mostrarcontrolador();
    }

    function registrar(){
        parent::cargarvista("html/adminagregarusuarios");
    }
    // recibe los datos dela vista de usuario
    function registrarcontrolador(){
        $nombre=$_POST['validationServer01'];
        $apellido=$_POST['validationServer02'];
        $email=$_POST['validationServer03'];
        $contrasena=$_POST['validationServer04'];
        $nombreUsuario=$_POST['validationServerUsername'];
        $tipoUsuario=$_POST['validationServer05'];
        // instancia del modelo
        $registro = new CusuarioModel();
        $consulta = $registro->registrar($nombre ,$apellido,$email,$contrasena,$nombreUsuario,$tipoUsuario);
        if ($consulta == "ok"){
            header("Location: ".URL."usuario/mostrarcontrolador");
        }
        else{
            echo "no se ha podido guardar";
        }
    }

    function mostrarcontrolador(){
        $registro = new CusuarioModel();
        $consulta = $registro->mostrar();
        parent::cargarvista("html/adminusuarios",$consulta);
    }
}
?>