<?php
    include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

    print_r ($_POST);
    
            // condicion para validacion
        
            
            // se asignas las variables llamadas desde el formulario 
            $categoria = $_POST['categoria'];

            $sql = $con->query("INSERT INTO tblcategoria (CatNombre,id_provedor)VALUES ('$categoria')");
?>