<?php
include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

   
    
    $identificacion = $_POST ['actualizaridentificacion'];
    $nombre = $_POST['actualizarnombre'];
    $nombreusuario = $_POST['actualizarnombreusuario'];
    $contrasena = $_POST['actualizarcontrasena'];
    $rol = $_POST['actualizarroltipo'];
    $correo = $_POST['actualizarcorreo'];
    $telefono = $_POST['actualizartelefono'];
    $ciudad = $_POST['actualizarciudad'];
 
            
    
         
            // tabla usuario update
            $sql="Update tblusuario Set UsuNombre='$nombre',
            UsuNombreUsuario='$nombreusuario',UsuContrasena='$contrasena', id_rol='$rol' Where identificacion='$identificacion'";
            $stm = $con->prepare($sql);
            $stm->bindParam(':identificacion',$identificacion);
            $stm->execute();
             // tabla email update
            $sql="Update tblemail Set emaCorreo='$correo' Where Usuario_identificacion='$identificacion' ";
            $stm = $con->prepare($sql);
            $stm->bindParam(':Usuario_identificacion', $identificacion);
            $stm->execute();
            // tabla telefono update
            $sql="Update tbltelefono Set Telnumero='$telefono' Where Usuario_identificacion='$identificacion' ";
            $stm = $con->prepare($sql);
            $stm->bindParam(':Usuario_identificacion', $identificacion);
            $stm->execute();
             // tabla direccion update
             $sql="Update tbldireccion Set id_ciudad='$ciudad' Where Usuario_identificacion='$identificacion' ";
             $stm = $con->prepare($sql);
             $stm->bindParam(':Usuario_identificacion', $identificacion);
             $stm->execute();

    
            
            