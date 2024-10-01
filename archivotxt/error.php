<?php

$error = "No hay error.";

if (isset($_GET['error'])) {

    $error = $_GET['error'];
}

echo $error;