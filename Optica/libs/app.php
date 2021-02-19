<?php
    class App{
        // mandamos por el constructor la url del controlador y la vista 
        function __construct()
        {
            if (isset($_GET["url"])){
                $url =  $_GET["url"];
                $url = rtrim($url, "/");
                $url = explode("/",$url);

                $clase = $url[0];
                

                if(isset($url[1])){
                    $metodo = $url[1];
                }

                if (!empty($clase)){
                    $controlador = "controlador/$clase.php";
                    include($controlador);
                    $vista = new $clase;
                    if(!empty($metodo)){
                        $vista ->{$metodo}();
                    }
                }
            }else{
                include("controlador/inicio.php");
                $vista = new Inicio();
            }

        }
    }
?>