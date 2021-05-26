<?php
 header("Access-Control-Allow-Origin: *");
class Connect { 

function Conectarse(){

    if(!($conexion = pg_connect('host=localhost dbname=pruebavue user=alejo password='))){

               
         echo "Error conectando a la base de datos.";

                 exit();
    }else {
       // echo 'pelados todo bien';
        }

  



return $conexion;

}

}