<?php

        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS,REQUEST ,post, get');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
        header("Access-Control-Allow-Credentials", "true");

require 'connect.php';
$conect = new Connect();
$conexion = $conect->Conectarse();

$datosRecibidos = json_decode(file_get_contents("php://input"));
$datosRecibidos = json_decode(file_get_contents("php://input"));

$datosRecibidos->nombre = str_replace(array('&quot;','"',"'",'\n'),'' ,$datosRecibidos->nombre);
$datosRecibidos->tipoid = str_replace(array('&quot;','"',"'",'\n'),'' ,$datosRecibidos->tipoid);
$datosRecibidos->numeroid = str_replace(array('&quot;','"',"'",'\n'),'' ,$datosRecibidos->numeroid);
$datosRecibidos->fecha = str_replace(array('&quot;','"',"'",'\n'),'' ,$datosRecibidos->fecha);


$query  = "INSERT INTO usuarios(nombre,tipoid,numeroid,fecha_nacimiento)VALUES('$datosRecibidos->nombre','$datosRecibidos->tipoid','$datosRecibidos->numeroid','$datosRecibidos->fecha');";



$result = pg_query($conexion,$query);

print $result;