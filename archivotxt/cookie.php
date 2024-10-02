<?php
$contador = 1;
$fecha = date("d/m/Y | H:i:s");

if (isset($_COOKIE['contador'])) {
    
    $contador = $_COOKIE['contador'] + 1;

} else {

    
}

echo "Visita número: $contador<br>";
echo "Su última visita fué el " . $_COOKIE['fecha'];

setcookie("contador", $contador, time()+3600*24*31); //3600*24*31
setcookie("fecha", $fecha, time()+31536000);
// unset($_COOKIE["contador"]);
//var_dump($_COOKIE);
//sacar cookie que diga cuando me conecté por última vez, sacar fecha y cuanas veces te has conectado.

/*
xampp
htdocs
ejercicio--->includes
https://es.stackoverflow.com/questions/91530/como-manejar-rutas-de-archivos-php
https://es.stackoverflow.com/questions/595974/problema-con-rutas-relativas
 */