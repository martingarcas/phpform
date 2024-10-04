<?php

$usuario    = $_POST['usuario'];
$contraseña = $_POST['contrasena'];

include 'login.php';

if ($_POST['usuario'] == 'martin') {

    if ($_POST['contrasena'] == 'martin') {

        logIn($usuario);
        header('Location: marcas.html');

    } else {

        echo 'La contraseña no es válida.';
    }

} else {

    echo 'El usuario ' . $usuario . ' no está registrado.';
}

?>