<?php

    include 'session.php';

    function logIn($user) {

        iniciaSesion();
        $_SESSION['user'] = $user;
    }

    function logOut() {

        unset($_SESSION);
        cierraSesion();
    }

    function estaLogueado($user) {

        if ($_SESSION['user'] == $user) {
            
            echo 'El usuario ' . $user . ' está logueado.';

        } else {
            
            echo 'El usuario ' . $user . ' ha cerrado sesión.';
        }

        //return isset($_SESSION['user']);
    
    }

?>