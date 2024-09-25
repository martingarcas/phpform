<?php

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == 'POST') {

        $name       = isset($_POST['full-name']) ? $_POST['full-name'] : null;
        $city       = isset($_POST['city-input']) ? $_POST['city-input'] : null;
        $age        = isset($_POST['age-input']) ? $_POST['age-input'] : null;
        $persona    = [$name .";", $city . ";", $age . "\r"];

        //var_dump($persona);

        $file = fopen("contacts.csv","r");
        print_r(fgetcsv($file));
        fclose($file);

        $fichero = 'users.txt';
        // Escribir los contenidos en el fichero,
        // usando la bandera FILE_APPEND para añadir el contenido al final del fichero
        // y la bandera LOCK_EX para evitar que cualquiera escriba en el fichero al mismo tiempo
        file_put_contents($fichero, $persona, FILE_APPEND | LOCK_EX);

        $file = file_get_contents($fichero);
        echo '<pre>' . $file . '</pre>';

    }  

?>