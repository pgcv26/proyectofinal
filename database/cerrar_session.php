<?php

include('database.php');
session_start();
if (isset($_SESSION['usuario_sesion'])) {
        session_destroy();
        header("location: ../index.php");
}else {
    
}
?>