<?php 
class  Vista{
    function requerirvista($ruta, $valorescontrolador = null){
        require "Vista/$ruta.php";
    }
}