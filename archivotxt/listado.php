<?php
$uservalido = 'martin' == $_GET['user'];

if ($uservalido == true) {

    echo 'listado';

} else {
    
    header("Location: error.php?error=Usuario no válido.");
}