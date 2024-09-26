<?php

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {

        $name       = isset($_POST['full-name']) ? $_POST['full-name'] : null;
        $city       = isset($_POST['city-input']) ? $_POST['city-input'] : null;
        $id         = isset($_POST['id-input']) ? $_POST['id-input'] : null;
        //$persona    = [$name .";", $city . ";", $id . "\r"];

        //var_dump($persona);

        $fichero = 'users.txt';
        
        //TEST MANOLO
        $actual = file_get_contents($fichero);
        //$actual .= "\n$id;$name;$city";

        //file_put_contents($fichero, $actual);

        $arr = explode("\n", $actual);

        foreach ($arr as $user) {
            
            $asoc[explode(";", $user)[0]] = explode(";", $user)[0]; //así  obtengo el id.
    
        }

        if (!array_key_exists($id, $asoc)) {

            //echo 'El usuario con id ' . $a . ' ya existe en nuestra base de datos.';
            echo 'NO EXISTE'; 
            $actual .= "\n$id;$name;$city";
            file_put_contents($fichero, $actual);

        } else {

            //no existe por lo tanto pinto
            echo 'El usuario con id ' . $id . ' ya existe en nuestra base de datos.';
        }    

        //var_dump($asoc);

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