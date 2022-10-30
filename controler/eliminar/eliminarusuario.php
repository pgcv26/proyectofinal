<?php
include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

   
    
    $identificacion = 12;
   
          
    
             // tabla direccion update
             $sql="DELETE tbldireccion  Where Usuario_identificacion='$identificacion' ";
             $stm = $con->prepare($sql);
             $stm->bindParam(':Usuario_identificacion', $identificacion);
             $stm->execute();

               // tabla email update
            $sql="DELETE tblemail Where Usuario_identificacion='$identificacion' ";
            $stm = $con->prepare($sql);
            $stm->bindParam(':Usuario_identificacion', $identificacion);
            $stm->execute();

               // tabla telefono update
               $sql="DELETE tbltelefono  Where Usuario_identificacion='$identificacion' ";
               $stm = $con->prepare($sql);
               $stm->bindParam(':Usuario_identificacion', $identificacion);
               $stm->execute();

                  // tabla usuario update
            $sql="DELETE tblusuario  Where identificacion='$identificacion'";
            $stm = $con->prepare($sql);
            $stm->bindParam(':identificacion',$identificacion);
            $stm->execute();






