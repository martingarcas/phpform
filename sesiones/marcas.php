<?php

    include 'util.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas de coche</title>
</head>
<body>

    <div>
        <a href="http://localhost/phpform/sesiones/coches.php?marca=Mercedes">Mercedes</a>
    </div>

    <div>
        <a href="http://localhost/phpform/sesiones/coches.php?marca=Nissan">Nissan</a>
    </div>

    <div>
        <a href="http://localhost/phpform/sesiones/coches.php?marca=Mitsubishi">Mitsubishi</a>
    </div>
    
    <?php buttonLogOut() ?>
    <br>
    <?php buttonCarrito(); ?>

        <!--<a href="http://localhost/servidor/sesiones/coches.php?marca=Mitsubishi">Mitsubishi</a>-->
</body>
</html>