<?php
include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

   
    
    $identificacion = $_POST ['identificacion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nombreusuario = $_POST['nombreusuario'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['roltipo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
 
            
    
         
            // tabla usuario update
            $sql="Update tblusuario Set UsuNombre='$nombre',UsuApellido='$apellido',
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
             $sql="Update tbldireccion Set DirDireccion='$direccion',id_ciudad='$ciudad' Where Usuario_identificacion='$identificacion' ";
             $stm = $con->prepare($sql);
             $stm->bindParam(':Usuario_identificacion', $identificacion);
             $stm->execute();

    
            
            