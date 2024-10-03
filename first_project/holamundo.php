<?php

    //$nombre = $_GET['nombre'];
    //$apellido = $_GET['apellido'];
    /*declaro array errores
    serie de if preguntadon por losp oisibles errores, si encuentro error añado elemento al arrayfinal
    pregunto por el tamaño del array errores, si es 0  genial , sino recorro el array de errores y los muestro.*/

    //  Array of accumulate errors
    $errors = [];

    //CHECK IF WITH ISSET
    if (!isset($_GET['nombre'])) {
        
        $errors[] = "<h1>Falta nombre</h1>";

    } else {

        $nombre = $_GET['nombre'];

    }

    if (!isset($_GET['apellido'])) {
        
        $errors[] = "<h1>Falta apellido</h1>";

    } else {

        $apellido = $_GET['apellido'];

    }

    if (count($errors) != 0) {
        
        header(true, http_response_code(400));

        foreach ($errors as $error) {
            
            echo $error;
        }

    } else {
        
        echo "<h1>Hola $nombre $apellido</h1>";
    }

    //CHECK IF WITH EMPTY
    /*if (empty($_GET['nombre'])) {
    
        $errors[] = "<h1>Falta nombre</h1>";

    } else {

        $nombre = $_GET['nombre'];

    }

    if (empty($_GET['apellido'])) {
        
        $errors[] = "<h1>Falta apellido</h1>";

    } else {

        $apellido = $_GET['apellido'];

    }

    if (count($errors) != 0) {
        
        header(true, http_response_code(400));

        foreach ($errors as $error) {
            
            echo $error;
        }

    } else {
        
        echo "<h1>Hola $nombre $apellido</h1>";
    }*/

?>

