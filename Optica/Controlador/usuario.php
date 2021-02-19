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
            echo "No se ha podido guardar";
        }
    }

    function registrarcliente(){
        parent::cargarvista("html/agregarcliente");
    }

    function registrarcontroladorCliente(){
        $nombre=$_POST['nombre-cliente'];
        $apellido=$_POST['apellido-cliente'];
        $email=$_POST['correo-cliente'];
        $contrasena=$_POST['contrasena-cliente'];
        $nombreUsuario=$_POST['nombre-usuario'];
        $tipoUsuario="Cliente";
        // instancia del modelo
        $registro = new CusuarioModel();
        $consulta = $registro->registrar($nombre ,$apellido,$email,$contrasena,$nombreUsuario,$tipoUsuario);
        if ($consulta == "ok"){
            header("Location: ".URL."usuario/mostrarcontrolador");
        }
        else{
            echo "No se ha podido guardar";
        }
    }

    function mostrarcontrolador(){
        $registro = new CusuarioModel();
        $consulta = $registro->mostrar();
        parent::cargarvista("html/adminusuarios",$consulta);
    }

    function eliminarControlador(){
        $id = $_REQUEST['idUsuario'];
        $registro = new CusuarioModel();

        $consulta = $registro->eliminar($id);
        if ($consulta == "ok"){
            header("Location: ".URL."usuario/mostrarcontrolador");
        }else{
            echo "No se ha podido eliminar el registro";
        }

    }
    function editar(){
        parent::cargarvista('html/admineditarusuarios');
    }

}
?>