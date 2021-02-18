<?php
    class App{
        // mandamos por el constructor la url del controlador y la vista 
        function __construct()
        {
            if (isset($_GET["url"])){
                $url =  $_GET["url"];
                $url = rtrim($url, "/");
                $url = explode("/",$url);
                if ( !empty($url[0])){
                    $controlador = "controlador/$url[0].php";
                    include($controlador);
                    $vista = new $url[0];
                    $vista ->{$url[1]}();
                }
            }

        }
    }
?>