<?php

    function iniciaSesion() {

        session_start();
    }

    function cierraSesion() {

        session_destroy();
    }

    function leerSesion($user) {

        
    }

    /*function escribirSesion(user, martin) {

        
    }*/

//header("Location: listado.php");
//session_abort();
/*Funcion inicio sesion/ cierra sesion/
 login(arranca la session y mete la clave $sesion)/ log out(mata)
 otra función. estaLogueado => true : false
 */

 ?>