<?php

    //VALIDAR DATOS
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {

        $name       = isset($_POST['full-name']) ? $_POST['full-name'] : null;
        $city       = isset($_POST['city-input']) ? $_POST['city-input'] : null;
        $id         = isset($_POST['id-input']) ? $_POST['id-input'] : null;
        //$persona    = [$name .";", $city . ";", $id . "\r"];

        $fichero    = 'users.txt';
        $actual     = file_get_contents($fichero);
        $arr        = explode("\n", $actual);

        foreach ($arr as $user) {

            $partes=explode(";", $user);
            $asoc[$partes[0]] = $partes; //meto toda la cadena
        }

        echo '-------------------------------------';

        if (!array_key_exists($id, $asoc)) {

            //echo 'El usuario con id ' . $a . ' ya existe en nuestra base de datos.';
            echo 'NO EXISTE';
            echo '-------------------------------------';
            $asoc[$id][0] = $id;
            $asoc[$id][1] = $name;
            $asoc[$id][2] = $city;

            $actual = "";

            foreach ($asoc as $linea) {
                
                $actual = $actual.$linea[0] . ";" . $linea[1] . ";" . $linea[2] . "\n";

            }

        } else {

            $asoc[$id][1] = $name;
            $asoc[$id][2] = $city;

            $actual = "";

            foreach ($asoc as $linea) {
                
                $actual = $actual.$linea[0] . ";" . $linea[1] . ";" . $linea[2] . "\n";
            }

            //no existe por lo tanto pinto
            //echo 'El usuario con id ' . $id . ' ya existe en nuestra base de datos.';
        }

        file_put_contents($fichero, $actual);

        /*foreach ($cursos as $curso) {
            echo $curso . "<br>";
        }*/
        // Escribir los contenidos en el fichero,
        // usando la bandera FILE_APPEND para añadir el contenido al final del fichero
        // y la bandera LOCK_EX para evitar que cualquiera escriba en el fichero al mismo tiempo
        /*file_put_contents($fichero, $persona, FILE_APPEND | LOCK_EX);

        $file = file_get_contents($fichero);
        echo '<pre>' . $file . '</pre>';*/
    }  
?>