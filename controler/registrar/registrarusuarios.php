<?php
    include_once "../../database/database.php";
    $conexion = new conexion();
   // ese objeto conexion lo llamamos con el metodo (getconexion ) con la variabl
    $con = $conexion->getconexion();

    print_r ($_POST);
    
            // condicion para validacion
        if (!empty($_POST["identificacion"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"])
         and !empty($_POST["nombreusuario"]) and !empty($_POST["contrasena"]) and !empty($_POST["roltipo"])
         and !empty($_POST["correo"])){
            
            // se asignas las variables llamadas desde el formulario 
            $identificacion = $_POST['identificacion'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $nombreusuario = $_POST['nombreusuario'];
            $contrasena = $_POST['contrasena'];
            $rol = $_POST['roltipo'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];

            // insertar usuario se crea el procedimiento desde la base de dato 
            
            $sql = "CALL registrousuarios (:identificacion, :nombre,:apellido ,:nombreusuario,:contrasena,:rol)";
        
            $stm = $con->prepare($sql);
            $stm->bindParam(':identificacion',$identificacion );
            $stm->bindParam(':nombre',$nombre);
            $stm->bindParam(':apellido',$apellido);
            $stm->bindParam(':nombreusuario',$nombreusuario);
            $stm->bindParam(':contrasena',$contrasena);
            $stm->bindParam(':rol',$rol);
            $stm->execute();

            
           // $sql = "CALL registrardireccion (:direccion, :identificacion, : ciudad)";
            //$stm = $con->prepare($sql);
            //$stm->bindParam(':direccion',$direccion);
            //$stm->bindParam(':identificacion',$identificacion);
	        //$stm->bindParam(':ciudad',$ciudad); 
            //$stm->execute();


            // insertar datos a tabla correo desde procedin¡miento almacenado 
            $sql = "CALL registrarcorreo (:correo, :identificacion)";
            $stm = $con->prepare($sql);
            $stm->bindParam(':correo',$correo);
            $stm->bindParam(':identificacion',$identificacion);
            $stm->execute();

            
             // insertar datos a tabla telefono desde procedin¡miento almacenado 
            $sql = "CALL registrartelefono (:telefono, :identificacion)";
            $stm = $con->prepare($sql);
            $stm->bindParam(':telefono',$telefono);
            $stm->bindParam(':identificacion',$identificacion);
            $stm->execute();

         
            $sql =$con->query(" INSERT INTO tbldireccion(DirDireccion,usuario_identificacion,id_ciudad)VALUES('$direccion','$identificacion','$ciudad')");

            if($resultado = $stm->rowCount()){
                $response['ok'] = true;
                $response['message'] = "usuario registrado satisfactoriamente.";
            } else {
                $response['ok'] = false;
                $response['message'] = "Error al registrar el usuario.";
            }
        }else{
            echo "campos vacios";
        }


        echo json_encode($response);
?>