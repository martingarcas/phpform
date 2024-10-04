<?php

    $marca = $_GET['marca'];

    $coches = [

        'Mercedes' => [
            'Mercedes clase A', 'Mercedes clase B', 'Mercedes GTI'
        ],

        'Nissan' => [
            'Nissan Micra', 'Nissan Pulsar', 'Nissan e-POWER'
        ],

        'Mitsubishi' => [
            'Mitsubishi Lancer Evolution', 'Mitsubishi Montero', 'Mitsubishi Xpander'
        ],
    ];

    if (array_key_exists($marca, $coches)) {
        
        echo "<h1>$marca</h1>";

        echo "
            <div>";

            foreach ($coches[$marca] as $coche) {
                
                echo "
                    <h3>$coche</h3>
                    <input type='submit' value='Comprar'/>
                    ";
            }
            
            echo "</div>";

    } else {

        echo "Coches fuera de disponibilidad.";
    }

?>