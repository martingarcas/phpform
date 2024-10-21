<?php

session_start();
echo $_SESSION['user'];
    
//header("Location: error.php?error=Usuario no válido.");