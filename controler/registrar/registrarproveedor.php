<?php
    include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

    print_r ($_POST);
    
        
   $direccion=$_POST['direccion'];
   $nombre = $_POST['nombre'];
   $pagina = $_POST['pagina'];
   $ciudad = $_POST['ciudad'];
   $telefono = $_POST['telefono'];


   $sql = "CALL registroprovedor(:nombre, :pagina, :ciudad)";
   $stm = $con->prepare($sql);
   $stm->bindParam(':nombre',$nombre);
   $stm->bindParam(':pagina',$pagina);
   $stm->bindParam(':ciudad',$ciudad);
   $stm->execute();

   $sql = $con->query("INSERT INTO tbldireccion (DirDIreccion,id_proveedor)VALUES ('$direccion',$nombre)");
   $sql = $con->query("INSERT INTO tbltelefono (Telnumero,id_proveedor)VALUES ('$telefono',$nombre)");

?>
      