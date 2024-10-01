<?php
$contador = 1;

if (isset($_COOKIE['contador'])) {
    
    $contador = $_COOKIE['contador'] + 1;

} else {

    
}

echo "Visita número: $contador";

setcookie("contador", $contador, time()+10);

var_dump($_COOKIE);
//sacar cookie que diga cuando me conecté por última vez, sacar fecha y cuanas veces te has conectado.