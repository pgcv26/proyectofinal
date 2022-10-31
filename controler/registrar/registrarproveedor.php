<?php
    include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

    print_r ($_POST);
    

   $nombre = $_POST['nombre'];
   $pagina = $_POST['pagina'];
   $telefono = $_POST['telefono'];
   $ciudad = $_POST['ciudad'];
   



   $sql = "CALL registroprovedor(:nombre, :pagina,:telefono, :ciudad)";
   $stm = $con->prepare($sql);
   $stm->bindParam(':nombre',$nombre);
   $stm->bindParam(':pagina',$pagina);
   $stm->bindParam(':telefono',$telefono);
   $stm->bindParam(':ciudad',$ciudad);
   $stm->execute();

?>
      