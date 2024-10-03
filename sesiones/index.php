<?php

include 'login.php';

logIn('martin');
echo $_SESSION['user'];

echo '<br>';

//estaLogueado('martindd');

logOut();
//estaLogueado('martin');

//echo $_SESSION['user'];

//header("Location: listado.php");

?>